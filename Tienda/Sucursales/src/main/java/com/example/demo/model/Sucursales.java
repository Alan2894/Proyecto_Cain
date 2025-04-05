/*Universidad Politecnica De Francisco I. Madero

 Ingenieria En Sistemas Computacionales
 Alumnos: Diego Iván Chávez Candelaria
 		  Luis Alberto Garcia Alvarez
 Grupo: 8SCG2
 Objetivo: mostrar una lista de sucursales utilizando los diferentes paquetes vistos en clase.
 Fecha: 04/03/2025
  */

package com.example.demo.model;

public class Sucursales {
	private Integer idGerente;
	private Integer idSucursalFk;
	private String nombreSucursal;
	private String direccion;
	private String telefono;
	private String email;
	private String estatus;
	private String horario;
	private String cuenta;
	private String usuario;
	private String contrasena;
	
	public Sucursales(Integer idGerente, Integer idSucursalFk, String nombreSucursal, String direccion, String telefono,
			String email, String estatus, String horario, String cuenta, String usuario, String contrasena) {
		super();
		this.idGerente = idGerente;
		this.idSucursalFk = idSucursalFk;
		this.nombreSucursal = nombreSucursal;
		this.direccion = direccion;
		this.telefono = telefono;
		this.email = email;
		this.estatus = estatus;
		this.horario = horario;
		this.cuenta = cuenta;
		this.usuario = usuario;
		this.contrasena = contrasena;
	}

	public Sucursales() {
		super();
	}

	public Integer getIdGerente() {
		return idGerente;
	}

	public void setIdGerente(Integer idGerente) {
		this.idGerente = idGerente;
	}

	public Integer getIdSucursalFk() {
		return idSucursalFk;
	}

	public void setIdSucursalFk(Integer idSucursalFk) {
		this.idSucursalFk = idSucursalFk;
	}

	public String getNombreSucursal() {
		return nombreSucursal;
	}

	public void setNombreSucursal(String nombreSucursal) {
		this.nombreSucursal = nombreSucursal;
	}

	public String getDireccion() {
		return direccion;
	}

	public void setDireccion(String direccion) {
		this.direccion = direccion;
	}

	public String getTelefono() {
		return telefono;
	}

	public void setTelefono(String telefono) {
		this.telefono = telefono;
	}

	public String getEmail() {
		return email;
	}

	public void setEmail(String email) {
		this.email = email;
	}

	public String getEstatus() {
		return estatus;
	}

	public void setEstatus(String estatus) {
		this.estatus = estatus;
	}

	public String getHorario() {
		return horario;
	}

	public void setHorario(String horario) {
		this.horario = horario;
	}

	public String getCuenta() {
		return cuenta;
	}

	public void setCuenta(String cuenta) {
		this.cuenta = cuenta;
	}

	public String getUsuario() {
		return usuario;
	}

	public void setUsuario(String usuario) {
		this.usuario = usuario;
	}

	public String getContrasena() {
		return contrasena;
	}

	public void setContrasena(String contrasena) {
		this.contrasena = contrasena;
	}
}