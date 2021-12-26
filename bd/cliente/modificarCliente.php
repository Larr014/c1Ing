<?php
    require_once('../conexion.php');
   
    if(isset($_POST['validador'])){
        //Recuperacion de atributos del formulario
        $id = $_POST['iId'];
        $nombre = $_POST['iNombre'];
        $apellido = $_POST['iApellido'];
        
        try{
            $stmt = $conn->prepare("UPDTE cliente SET nombre=:nombre, apellido=:apellido WHERE idCliente = :idCliente");
            $stmt->bindParam(":nombre",$nombre);
            $stmt->bindParam(":apellido",$apellido);
            $stmt->bindParam(":idCliente",$id);
            $stmt->execute();
            
            echo "1"; //1 es insercion exitosa
        }catch(PDOException $e){
            echo "Conexion fallida: ". $e->getMessage();
        }


    }
?>