<?php
	include('Controlador/MascotasListar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Mascotas</title>
</head>
<style>
    .seleccionada{
        background-color:gray;
        color: white;
    }
    .formulario{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    input{
        margin-bottom:0.5rem;
    }
    #form{
        margin: auto;
        padding: 1rem 0 1rem;
        background:#bee1e6;
        width:60%;
    }
    h1{
        margin: auto;
        padding:1rem;
        width:80%;
        text-align: center;
        background:#8ecae6;
    }
</style>
<body>
    <h1>Registro mascota</h1><br>
    <div>
        <div class="formulario" id="form">
            <form action="Controlador/MascotasAgregar.php" method="POST">
                <input id="id" type="hidden" name="id">
                <label for="">Nombre: <input id="nombre" type="text" name="nombre"></label>
                <label class="fin" for="">Edad en años: <input id="edad" type="text" name="edad"></label><br>
                <label for="">Raza: <input id="raza" type="text" name="raza"></label>
                <label class="fin" for="">Sexo: <input id="sexo" type="text" name="sexo"></label><br>
                <label for="">Dueño: <input id="dueno" type="text" name="dueno"></label><br><br>
                <input type="submit" name="agregar" value="Agregar">
                <input type="button" name="modificar" value="Modificar" onclick="modificaM();" >
                <input type="button" name="eliminar" value="Eliminar" onclick="eliminarE();">
                <input type="button" name="eliminar" value="Cancelar" onclick="cancel();">
            </form>
        </div>
        <br><br>
        <div class="formulario">
            <table class="table" style="width:60%">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre mascota</th>
                        <th>Edad en años</th>
                        <th>Raza</th>
                        <th>Sexo</th>
                        <th>Nombre del dueño</th>
                    </tr>
                </thead>
                
                <!--Contenido de la tabla -->
                <?php
                    while($reglon = $tabla->fetch_assoc()){
                        echo '<tr id="fila'.$reglon['id'].'" class="original" onclick=seleccionarFila(this) >
                                <td> '.$reglon['id'].' </td>
                                <td> '.$reglon['nombre'].' </td>
                                <td> '.$reglon['anios'].' </td>
                                <td> '.$reglon['raza'].' </td>
                                <td> '.$reglon['sexo'].' </td>
                                <td> '.$reglon['dueno'].' </td>
                              </tr>';
                    };
                ?>
            </table>
        </div>
    </div>
</body>
    <script src="JS/Seleccionar.js"></script>
    <script src="JS/jquery.js"></script>
    <script src="JS/Cancelar.js"></script>
</html>