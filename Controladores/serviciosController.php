<?php
require "Modelos/servicios.php";
class serviciosController{

		public static function main($action){

	        $_this = new serviciosController();
			switch ($action) {
				case "create":
					$_this->create();
					break;
				case "delete":
				    $_this->delete();
				    break;	
				case "update":
					$_this->update();
					break;	
				case "view":
					$_this->view();
					break;
				case "admin":
					$_this->admin();
					break;		
				default:
				    throw new Exception("Accion no definida");	
			}
		}

			//listar
			private function admin(){
			//CONSULTAR LISTADO DE LA BD
			$ser = new servicios();
			$servicios = $ser->listar();
			
			require "Vistas/servicios/listar.php";
			}

			//crear
			private function create(){
			if(isset($_POST["servicios"])){
				//GUARDAR EN BD
				$p = $_POST["servicios"]["producto"];
				$pr = $_POST["servicios"]["precio"];
				$sol = $_POST["servicios"]["solicitud"];
				$alq = $_POST["servicios"]["alquiler"];

				$servicio = new servicios();
				$guardo = $servicio->save($p, $pr,$sol, $alq);

				if ($guardo) {
					header("location:index.php?c=servicios&a=admin");
				}else{
					echo "Ocurrio un error al guardar";
				}

			}else
				require "Vistas/servicios/create.php";
			}


		}

	
?>