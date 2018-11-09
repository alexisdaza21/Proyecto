<?php 
require "Modelos/vehiculos.php";
class vehiculosController{
	public static function main($action){
        $_this= new vehiculosController();
		switch ($action) {
			case "create":
			$_this->create();
			break;

				case "delete":
				$_this->leer();
				
				break;

				case "update":
				$_this->update();
				break;

				case "view":
				$_this->delete();
				break;

				case "admin":
				$_this->admin();
				break;

				default:
				throw new Exception("Accion no definida");
				break;
				
				
				
			}
	}


//listar
private function admin(){
	//consultar listado de la bd
	$veh= new vehiculos();
	$vehiculos = $veh->listar();

	require "Vistas/servicios/listar.php";
}

//crear
private function create(){
	if(isset($_POST["vehiculos"])){
		$p = $_POST["vehiculos"]["placa"];
		$ma =$_POST["vehiculos"]["marca"];
		$ser = $_POST["vehiculos"]["servicio"];
		$re = $_POST["vehiculos"]["registro"];

		$vehiculos = new vehiculos();
		$guardar = $vehiculos->save($p,$ma,$ser,$re);

		if($guardar){
			header("locatio:index.php?c=vehiculos&a=admin");
		}else{
			echo "Ocurrio un error al guardar"
		}
	}else
	require "Vistas/Servicios/create.php";
}

//eliminar
private function delete(){
	$vehiculos = new vehiculos();
	$vehiculos->delete($_GET["id"]);
	header("location:index.php?c=vehiculos&a=admin");
}
//modificar
private function update{
	$vehiculos = new vehiculos();
	$vehiculos->findByPk($_GET["id"]);
	if(isset($_POST["vehiculos"])){
		$vehiculos->placa = $_POST["vehiculos"]["placa"];
		$vehiculos->marca = $_POST["vehiculos"]["marca"];
		$vehiculos->servicio	= $_POST["vehiculos"]["servicio"];
		$vehiculos->registro= $_POST["vehiculos"]["registro"];

		$vehiculos->update();
		header("location:index.php?c=vehiculos&a=admin");
	}else{
		require "Vistas/Servicios/update.php";
	}
}


}

 ?>