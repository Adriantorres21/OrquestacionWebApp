<?php
	Class Mascota{
		public function agregar($conexion, $nombre, $anios, $raza, $sexo, $dueno){
            $basedatos = $conexion->conectar();
            $sql = "INSERT INTO `mascotas`(`id`,`nombre`, `anios`, `raza`, `sexo`, `dueno`) 
            VALUES (null, '$nombre', $anios, '$raza', '$sexo', '$dueno')";
            $mysql = $basedatos->query($sql);

            return $mysql;
        } 

        public function modificar($conexion, $id, $nombre, $anios, $raza, $sexo, $dueno){
             $basedatos = $conexion->conectar();
            $sql = "UPDATE `mascotas` SET `nombre`='$nombre',
                                           `anios`= $anios,
                                           `raza`= '$raza',
                                           `sexo`= '$sexo',
                                           `dueno`= '$dueno' WHERE `id`= $id";
            $mysql = $basedatos->query($sql);

            return $mysql;
        }

        public function eliminar($conexion, $id){
             $basedatos = $conexion->conectar();
            $sql = "DELETE FROM `mascotas` WHERE `id`= $id";
            $mysql = $basedatos->query($sql);

            return $mysql;
        }

        public function listar($conexion){
             $basedatos = $conexion->conectar();
            $sql = "SELECT * FROM `mascotas`";
            $mysql = $basedatos->query($sql);

            return $mysql;
        }
	}
?>