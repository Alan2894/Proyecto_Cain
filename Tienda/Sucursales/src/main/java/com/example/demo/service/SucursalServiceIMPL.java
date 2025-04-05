/*Universidad Politecnica De Francisco I. Madero

 Ingenieria En Sistemas Computacionales
 Alumnos: Diego Iván Chávez Candelaria
 		  Luis Alberto Garcia Alvarez
 Grupo: 8SCG2
 Objetivo: mostrar una lista de sucursales utilizando los diferentes paquetes vistos en clase.
 Fecha: 04/03/2025
  */

package com.example.demo.service;

import java.util.LinkedList;
import java.util.List;
import org.springframework.stereotype.Service;
import com.example.demo.model.Sucursales;

@Service
public class SucursalServiceIMPL implements ISucursalService {
	
	private List<Sucursales> Lista = null;
	
	public SucursalServiceIMPL() {
		Lista = new LinkedList<Sucursales>();
		Sucursales sucursal1 = new Sucursales();
		sucursal1.setIdGerente(1);
		sucursal1.setIdSucursalFk(1);
		sucursal1.setNombreSucursal("Macroplaza");
		sucursal1.setDireccion("Calle Primavera #45, Colonia Jardines, Ciudad de México, CP 04500");
		sucursal1.setTelefono("55-1234-5678");	
		sucursal1.setEmail("macroplaza2025@gmail.com");
		sucursal1.setEstatus("Abierto");
		sucursal1.setHorario("Lunes a Viernes: 8:30 AM - 6:30 PM<br>"
				+ "Sábados: 9:00 AM - 4:00 PM<br>"
				+ "Domingos: 10:00 AM - 2:00 PM");
		sucursal1.setCuenta("034681");
		sucursal1.setUsuario("adminmacroplaza");
		sucursal1.setContrasena("M4cropl4z4");
		
		Sucursales sucursal2 = new Sucursales();
		sucursal2.setIdGerente(2);
		sucursal2.setIdSucursalFk(2);
		sucursal2.setNombreSucursal("Paseo del Río");
		sucursal2.setDireccion("Avenida Revolución #789, Colonia Centro, Guadalajara, CP 44100");
		sucursal2.setTelefono("81-8765-4321");	
		sucursal2.setEmail("paseodelrio2025@gmail.com");
		sucursal2.setEstatus("Cerrado");
		sucursal2.setHorario("    Lunes a Viernes: 9:00 AM - 7:00 PM<br>"
				+ "Sábados: 10:00 AM - 5:00 PM<br>"
				+ "    Domingos: Cerrado");
		sucursal2.setCuenta("016487");
		sucursal2.setUsuario("PaseoRio1");
		sucursal2.setContrasena("P@se0D3lR1o");
		
		Sucursales sucursal3 = new Sucursales();
		sucursal3.setIdGerente(3);
		sucursal3.setIdSucursalFk(3);
		sucursal3.setNombreSucursal("Zona Rosa");
		sucursal3.setDireccion("Boulevard Los Ángeles #123, Colonia Las Palmas, Monterrey, CP 64700");
		sucursal3.setTelefono("33-5555-1234");	
		sucursal3.setEmail("zonarosa2025@gmail.com");
		sucursal3.setEstatus("Abierto");
		sucursal3.setHorario("Lunes a Viernes: 10:00 AM - 8:00 PM<br>"
				+ "Sábados: 9:30 AM - 6:00 PM<br>"
				+ "    Domingos: Cerrado");
		sucursal3.setCuenta("037915");
		sucursal3.setUsuario("ZonaR4");
		sucursal3.setContrasena("Z0n4R054");
		
		Lista.add(sucursal1);
		Lista.add(sucursal2);
		Lista.add(sucursal3);

	}

	@Override
	public List<Sucursales> ListarSucursales() {
		return Lista;
	}
	
}
