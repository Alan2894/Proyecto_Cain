package com.tienda.service;

import java.util.Optional;
import org.springframework.stereotype.Service;
import com.tienda.model.Cliente;
import com.tienda.repository.RTienda;

@Service
public class TiendaService{
	
	private RTienda datosCliente;
	public TiendaService(RTienda datosCliente) {
		this.datosCliente = datosCliente;
	}
	//obtener lista de cclientes
	public Iterable<Cliente> getAllClientes(){
		return datosCliente.findAll();
	}
	// Obtener un cliente por ID
    public Optional<Cliente> getClienteById(int id) {
        return datosCliente.findById(id);
    }

    // Guardar o actualizar un cliente
    public Cliente saveCliente(Cliente cliente) {
        return datosCliente.save(cliente);
    }

    // Eliminar un cliente por ID
    public void deleteCliente(int id) {
        Optional<Cliente> cliente = datosCliente.findById(id);
        if (cliente.isPresent()) {
            datosCliente.deleteById(id);  // Elimina el cliente
        } else {
            throw new RuntimeException("Cliente no encontrado");
        }
    }

    public Optional<Cliente> getClienteByEmail(String email) {
        return datosCliente.findByEmail(email);
    }
}
