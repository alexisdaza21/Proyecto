<?php
require_once("Conexion.php");

	class servicios extends Conexion{

		public $id_servicio;
		public $producto;
		public $precio;
		public $solicitud;
		public $alquiler;

		public function __construct(){
			parent::__construct();
			
		}

		//listar
		public function listar(){
			$conexion =$this->getConexion();
			$stm = $conexion->prepare("SELECT * FROM servicios");
			$stm->setFetchMode(PDO::FETCH_CLASS,'servicios');
<<<<<<< HEAD
=======

>>>>>>> 9c2057ad5af31f2d5b56ae901786246094a7210e
			$servicio = array();
			$stm->execute();

			while ($obj = $stm->fetch()) {
				$servicio[]=$obj;
			}
			return $servicio;
		}

		//crear
		public function save($p, $pr, $sol, $alq){
			$this->producto = $p;
			$this->precio = $pr;
			$this->solicitud = $sol;
			$this->alquiler = $alq;

			$conexion =$this->getConexion();
			$stm = $conexion->prepare("INSERT INTO servicios VALUES(:id_servicio,:producto, :precio, :solicitud, :alquiler)");
			return $stm->execute((array)$this);
		}

<<<<<<< HEAD
		//eliminar
		   public function delete($id){ 
			$conexion =$this->getConexion();
			$stm = $conexion->prepare("DELETE FROM servicios WHERE id_servicio = :id_servicios");
			$stm->bindParam(":id_servicios", $id);
                        
            $stm->execute();
			}

		//Consulta a modificar
			 public function findByPk($id) {
            $conexion =$this->getConexion();
			$stm = $conexion->prepare("SELECT * FROM servicios WHERE id_servicio= :id");
			$stm->setFetchMode(PDO::FETCH_INTO, $this);
            $stm->bindParam(":id",$id);
			$stm->execute();
            $stm->fetch();
            }

         //Modificar
             public function update(){ 
			$conexion =$this->getConexion();
			$stm = $conexion->prepare("UPDATE servicios set  producto=:pro, precio=:pre, solicitud=:so, alquiler=:al WHERE id_servicio = :id");
			$stm->bindParam(":pro", $this->producto);
			$stm->bindParam(":pre", $this->precio);
			$stm->bindParam(":so", $this->solicitud);
			$stm->bindParam(":al", $this->alquiler);
			$stm->bindParam(":id", $this->id_servicio);
                        
            $stm->execute();
			}

=======
>>>>>>> 9c2057ad5af31f2d5b56ae901786246094a7210e

	}

?>
