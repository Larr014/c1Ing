<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src='../../dist/js/jquery-3.6.0.js'></script>
    <?php
        //validar si el id no existe, retornar a la pagina de la tabla
        if(isset($_GET['id'])){
            $idCliente = $_GET['id'];
            require_once("../../bd/conexion.php");
            require_once("../../bd/cliente/getCliente.php");
        }
        else{
            header('Location: mostrarCliente.php');
        }

        
        //var_dump($resultados);
    ?>
    <script src='../../dist/js/cliente/modificarCliente.js'></script>
</head>
<body>
    <form>
    <label>id</label>
        <input type='text' id='iId' value='<?php echo $resultados[0]['idCliente'] ?>' readonly>
        
        <label>Nombre</label>
        <input type='text' id='iNombre' value='<?php echo $resultados[0]['nombre'] ?>'>
        <label>Apellido</label>
        <input type='text' id='iApellido' value='<?php echo $resultados[0]['apellido'] ?>'>
        <button id='btnModificarCliente' >Modificar</button>
    </form>
</body>
</html>