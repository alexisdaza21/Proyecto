<?php 

	class homecontroller{

		public static function main($action){
			//VERIFICACION de sesion
			if (!isset($_SESSION["u"]) && $_GET["a"]!="login") {
				header("location:index.php?c=home&a=login");
			}

	        $_this = new homeController();
			switch ($action) {
				case "home":
					$_this->home();
					break;
				case "login":
				    $_this->login();
				    break;	
				case "logout":
					$_this->logout();
					break;	
				default:
				    throw new Exception("Accion no definida");	
				
			}
		}
		private function home(){
			require "Vistas/sesion/se.php";
		}
		private function login(){

			if (isset($_POST["Login"])) {
				$documento = $_POST["Login"]["Documento"];
				$contrasena = $_POST["Login"]["pas"];
				$usuario = new Usuarios();
				$usuario->findByDocument($documento);
				if ($usuario->contrasena == $contrasena) {
					$_SESSION["u"]= $usuario;
					$_SESSION["Perfil"]="Administrador";

					header("location:index.php?c=home&a=home");
				}else{
					header("location:index.php?$c=home&a=login&error=true");
				}
			}
			require "Vistas/home/login.php";
		}
		private function logout(){
			session_destroy();
			header("location:index.php?$c=home&a=login");
		}
	}


 ?>