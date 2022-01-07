<?php
    require_once('../conexion.php');
    if(isset($_POST['validador'])){
        //Recuperacion de atributos del formulario
        $iCodigo = $_POST['iCodigo'];
        
    
    try{  

        $stmt = $conn->prepare("SELECT * FROM producto WHERE codigo=:codigo");
        $stmt->bindParam(":codigo",$iCodigo);
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