<?php 
	
	
	//session_start(); sesion php

	$action = "login";
	$controller = "home";

	if (isset($_GET["a"])) 
		$action = $_GET["a"];
	

	if (isset($_GET["c"])) 
		$controller = $_GET["c"];
	
		switch ($controller) {
			case "alquileres":
				require "Controladores/alquileresController.php";
				alquileresController::main($action);
				break;
			case "habitaciones":
				require "Controladores/habitacionesController.php";
				habitacionesController::main($action);
				break;
			case 'productos':
				require "Controladores/productosController.php";
				productosController::main($action);
				break;
			case 'servicios':
				
				break;
			case 'usuarios':
				# code...
				break;
			case 'vehiculos':
				# code...
				break;
			default;
				require "Controladores/homeController.php";
				homecontroller::main($action);
		}

 ?>
 