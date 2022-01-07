<?php
    require_once('../conexion.php');
    if(isset($_POST['validador'])){
        //Recuperacion de atributos del formulario
        $iRut = $_POST['iRut'];
        
    
    try{  

        $stmt = $conn->prepare("SELECT * FROM cliente WHERE rut=:rut");
        $stmt->bindParam(":rut",$iRut);
        $stmt->execute();
    
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $resultados =$stmt->fetchAll();
        //var_dump($resultados);
        //Tomar el tipo de dato de $resultados y codificarlo en formato json
        echo json_encode($resultados);
    } catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
    $conn = null;
}
?>