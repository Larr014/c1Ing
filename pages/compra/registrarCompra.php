<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src='../../dist/js/jquery-3.6.0.js'></script>
    <script src='../../dist/js/compra/buscarCliente.js'></script>
    <script src='../../dist/js/compra/buscarProducto.js'></script>

</head>
<body>
    <form>
        <input type='text' placeholder="Ingresa rut a buscar" id='iRut'>
        <button type='button' id='btnBuscarCliente'>Buscar</button><br>
        <input type='text' id='iNombre'>
        <input type='text' id='iId'><br>

        <input type='text' placeholder="Ingresa codigo a buscar" id='iCodigo'>
        <button type='button' id='btnBuscarProducto'>Buscar</button><br>
        <input type='text' id='iNombreProducto'>
        <input type='text' id='iIdProducto'>
        <hr>
        <input type='text' placeholder="Ingresa nombre a buscar" id='iNProducto'>
        <button type='button' id='btnBNProducto'>Buscar</button><br>
        <div id='dOpciones'></div>
    </form>
</body>
</html>