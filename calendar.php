<?php
// header('Content-type: application/json');
$pdo=new PDO("mysql:dbname=ecowash;host=localhost","root","");
$accion=(isset($_GET['accion']))?$_GET['accion']:'leer';
            $sentenciaSQL=$pdo->prepare("SELECT * FROM citas");
            $sentenciaSQL->execute();
            $resultado=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($resultado);
    
?>