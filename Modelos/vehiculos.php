<?php
require_once("Conexion.php");

	class vehiculos extends Conexion{

		public $id_cliente;
		public $placa;
		public $marca;
		public $servicio;
		public $registro;

		public function __construct(){
			parent::__construct();
			
		}

		//listar
		public function listar(){
			$conexion =$this->getConexion();
			$stm = $conexion->prepare("SELECT * FROM vehiculos");
			$stm->setFetchMode(PDO::FETCH_CLASS,'vehiculos');
			$vehiculo = array();
			$stm->execute();

			while ($obj = $stm->fetch()) {
				$vehiculo[]=$obj;
			}
			return $vehiculo;
		}

		//crear
		public function save($p, $ma, $ser, $re){
			$this->placa = $p;
			$this->marca = $ma;
			$this->servicio = $ser;
			$this->registro = $re;

			$conexion =$this->getConexion();
			$stm = $conexion->prepare("INSERT INTO vehiculos VALUES(:id_cliente,:placa, :marca, :servicio, :registro)");
			return $stm->execute((array)$this);
		}

		//eliminar
		   public function delete($id){ 
			$conexion =$this->getConexion();
			$stm = $conexion->prepare("DELETE FROM vehiculos WHERE id_cliente = :id_cliente");
			$stm->bindParam(":id_cliente", $id);
                        
            $stm->execute();
			}

		//Consulta a modificar
			 public function findByPk($id) {
            $conexion =$this->getConexion();
			$stm = $conexion->prepare("SELECT * FROM vehiculos  WHERE id_cliente= :id");
			$stm->setFetchMode(PDO::FETCH_INTO, $this);
            $stm->bindParam(":id",$id);
			$stm->execute();
            $stm->fetch();
            }

         //Modificar
             public function update(){ 
			$conexion =$this->getConexion();
			$stm = $conexion->prepare("UPDATE vehiculos set  placa=:pla, marca=:mar, servicio=:ser, registro=:reg WHERE id_cliente = :id");
			$stm->bindParam(":pla", $this->placa);
			$stm->bindParam(":mar", $this->marca);
			$stm->bindParam(":ser", $this->servicio);
			$stm->bindParam(":reg", $this->registro);
			$stm->bindParam(":id", $this->id_cliente);
                        
            $stm->execute();
			}


	}

?>