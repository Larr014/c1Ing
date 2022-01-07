<?php
    require_once('conexion.php');
    if(isset($_POST['validador'])){
        //Recuperacion de atributos del formulario
        $iRut = $_POST['iRut'];
        $iPass = $_POST['iPass'];
    
    try{  

        $stmt = $conn->prepare("SELECT * FROM cliente WHERE rut=:rut");
        $stmt->bindParam(":rut",$iRut);
        $stmt->execute();
    
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $resultados =$stmt->fetchAll();
        //var_dump($resultados);
        //Tomar el tipo de dato de $resultados y codificarlo en formato json
        if($resultados[0]['rut']==$iPass){
            echo "1"; //1 significa que todo coincide
            session_start();//Indicar que vamos a usar sesiones
            $_SESSION['rut']=$iRut;
            $_SESSION['timeout'] = time();
        }else{
            echo "2"; //2 significa que algo no coincide
        }
        
    } catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
    $conn = null;
}
?>