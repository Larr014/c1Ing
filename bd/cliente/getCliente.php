<?php
    //require_once('../conexion.php');
    try{  
        $stmt = $conn->prepare("SELECT * FROM cliente WHERE idCliente=:idCliente");
        $stmt->bindParam(":idCliente",$idCliente);
        $stmt->execute();
    
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $resultados =$stmt->fetchAll();
        //var_dump($resultados);
        
    } catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
    $conn = null;

?>