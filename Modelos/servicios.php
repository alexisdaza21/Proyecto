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


	}

?>
