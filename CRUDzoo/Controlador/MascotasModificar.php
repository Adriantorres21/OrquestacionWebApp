<?php 
    
    if($_POST){
        require('../Modelo/Mascota.php');
        require('../BD/Conexion.php');

        $conexion = new Conexion();
        $mascota = new Mascota();

        $res = $mascota->modificar($conexion, $_POST['id'], $_POST['nombre'], $_POST['anios'], $_POST['raza'], $_POST['sexo'], $_POST['dueno']);
        echo json_encode($res);
    }else{
        echo json_encode('Fallo');
        return;
    }
?>