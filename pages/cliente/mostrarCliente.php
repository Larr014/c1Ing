<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>idCliente</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Accion</th>
        </tr>
        <?php
            require_once('../../bd/conexion.php');
            require_once('../../bd/cliente/getClientes.php');
            foreach($resultados as $fila){
                echo "<tr><td>".$fila['idCliente']."</td>";
                echo "<td>".$fila['nombre']."</td>";
                echo "<td>".$fila['apellido']."</td>";
                echo "<td><a href='modificarCliente.php?id=".$fila['idCliente']."'>Modificar</a><a href='eliminarCliente.php?id=".$fila['idCliente']."'>Eliminar</a></td></tr>";

            }
        ?>
        
    </table>
</body>
</html>