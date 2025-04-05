/*Universidad Politecnica De Francisco I. Madero
 Ingenieria En Sistemas Computacionales
 Alumnos: Diego Iván Chávez Candelaria
 		  Luis Alberto Garcia Alvarez
 Grupo: 8SCG2
 Objetivo: mostrar una lista de sucursales utilizando los diferentes paquetes vistos en clase.
 Fecha: 04/03/2025
  */


package com.example.demo.controller;
import java.util.List;

//librerias
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import com.example.demo.model.Sucursales;
import com.example.demo.service.ISucursalService;

//Etiquetas
//@RestController 
@Controller
public class HomeController {
	
	@Autowired
	private ISucursalService isucursalService;
	
	@GetMapping("/listasucursales")
	public String mostrarTabla(Model model){
        List<Sucursales> listaSucursales = isucursalService.ListarSucursales();
        model.addAttribute("sucursales", listaSucursales);
        return "sucursal";
    }
}