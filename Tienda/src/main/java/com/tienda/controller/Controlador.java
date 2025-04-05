package com.tienda.controller;

import java.util.HashMap;
import java.util.Map;
import java.util.Optional;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;
import com.tienda.model.Cliente;
import com.tienda.service.TiendaService;
import jakarta.servlet.http.HttpServletRequest;

@RestController
@RequestMapping("/api")  // Aquí definimos la ruta base "/api"
public class Controlador {
    
	private final TiendaService tiendaService;

    public Controlador(TiendaService tiendaService) {
        this.tiendaService = tiendaService;
    }

    // obtener todos los clientes
    @GetMapping("/clientes")
    public Iterable<Cliente> getAllClientes() {
        return tiendaService.getAllClientes();
    }

    // obtener un ccliente por ID
    @GetMapping("/clientes/{id}")
    public Optional<Cliente> getClienteById(@PathVariable int id) {
        return tiendaService.getClienteById(id);
    }

    // agregar o actualizar un cliente
    @PostMapping("/clientes")
    public Cliente saveCliente(@RequestBody Cliente cliente) {
        return tiendaService.saveCliente(cliente);
    }

    // eliminar un cliente por ID
    @DeleteMapping("/clientes/{id}")
    public ResponseEntity<Map<String, Object>> deleteCliente(@PathVariable int id) {
        try {
            tiendaService.deleteCliente(id);  // Llama al servicio para eliminar el cliente

            Map<String, Object> response = new HashMap<>();
            response.put("success", true);
            response.put("message", "Cliente eliminado correctamente");
            return ResponseEntity.ok(response);  // Devuelve OK si la eliminación fue exitosa
        } catch (Exception e) {
            Map<String, Object> response = new HashMap<>();
            response.put("success", false);
            response.put("message", "No se encontró el cliente con ID " + id);
            return ResponseEntity.status(HttpStatus.NOT_FOUND).body(response);  // Devuelve 404 si el cliente no existe
        }
    }

    @PostMapping("/login")
    public ResponseEntity<Map<String, Object>> login(@RequestBody Cliente cliente) {
        Optional<Cliente> clienteOpt = tiendaService.getClienteByEmail(cliente.getEmail());

        Map<String, Object> response = new HashMap<>();
        if (clienteOpt.isPresent() && clienteOpt.get().getContrasena().equals(cliente.getContrasena())) {
            Cliente clienteAutenticado = clienteOpt.get();

            response.put("success", true);
            response.put("message", "Login exitoso");
            response.put("usuario", Map.of(
                "id_cliente", clienteAutenticado.getId_cliente(),
                "nombre", clienteAutenticado.getNombre(),
                "email", clienteAutenticado.getEmail()            
            ));

            return ResponseEntity.ok(response);
        } else {
            response.put("success", false);
            response.put("message", "Credenciales incorrectas");
            return ResponseEntity.status(HttpStatus.UNAUTHORIZED).body(response);
        }
    }
    @PostMapping("/logout")
    public ResponseEntity<String> logout(HttpServletRequest request) {
        // Invalida la sesión si existe
        request.getSession().invalidate();
        return ResponseEntity.ok("Sesión cerrada en backend");
    }
}