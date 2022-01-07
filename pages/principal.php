<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        session_start();
        $tActual = time();
        if(isset($_SESSION['timeout']) && $tActual- $_SESSION['timeout']>30 ){
            header("location: index.php");
            session_destroy();
        }
        elseif(!isset($_SESSION['rut'])){
            header("location: index.php");
            session_destroy();
        }
        else{
            
        }
    ?>
</head>
<body>
    <p>hola</p>
</body>
</html>