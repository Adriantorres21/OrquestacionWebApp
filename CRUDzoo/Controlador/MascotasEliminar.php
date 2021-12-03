<?php 
    
    if($_POST){
        require('../Modelo/Mascota.php');
        require('../BD/Conexion.php');

        $conexion = new Conexion();
        $mascota = new Mascota();

        $res = $mascota->eliminar($conexion, $_POST['id']);
        echo json_encode($res);
    }else{
        echo json_encode('Fallo');
        return;
    }
?>