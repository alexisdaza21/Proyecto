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

<<<<<<< HEAD
			//eliminar
			private function delete(){
			$servicio = new servicios();
                        $servicio->delete($_GET["id"]);
                        header ("location:index.php?c=servicios&a=admin");
			}

			//modifcar
			private function update(){
	            $servicio = new servicios();
	            $servicio->findByPk($_GET["id"]);
	            if (isset($_POST["servicios"])) {
	                $servicio->producto = $_POST["servicios"]["producto"];
	                $servicio->precio = $_POST["servicios"]["precio"];
	                $servicio->solicitud = $_POST["servicios"]["solicitud"];
	                $servicio->alquiler = $_POST["servicios"]["alquiler"];
	                
	                $servicio->update();
	                header ("location:index.php?c=servicios&a=admin");
	            } else {
	                require 'Vistas/servicios/update.php';
	            }
			
			}
=======
>>>>>>> 9c2057ad5af31f2d5b56ae901786246094a7210e

		}

	
?>