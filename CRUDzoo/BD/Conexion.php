<?php
	Class Conexion{
		private $server = "mysql";
		private $usuario = "adriantorres";
		private $contra = "secret";
		private $bd = "mascotas";

		// private $server = "localhost";
		// private $usuario = "root";
		// private $contra = "";
		// private $bd = "mascotas";


		public function conectar(){
			$conexion = new mysqli($this->server, $this->usuario, $this->contra, $this->bd);
			return $conexion;
		}
	}
?>