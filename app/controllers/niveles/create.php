<?php

include("../../../app/config.php");

$gestion_id = $_POST['gestion_id'];
$nivel = $_POST['nivel'];
$turno = $_POST['turno'];
$horario = $_POST['horario'];

$sentencia = $pdo->prepare('INSERT INTO niveles
(gestion_id,nivel,turno,horario, fyh_creacion, estado)
VALUES ( :gestion_id,:nivel,:turno,:horario,:fyh_creacion,:estado)');

$sentencia->bindParam(':gestion_id',$gestion_id);
$sentencia->bindParam(':nivel',$nivel);
$sentencia->bindParam(':turno',$turno);
$sentencia->bindParam(':horario',$horario);
$sentencia->bindParam('fyh_creacion',$fechahora);
$sentencia->bindParam('estado',$estado_de_registro);

if($sentencia->execute()){
    session_start();
    $_SESSION['mensaje'] = "Se registro el Nivel";
    $_SESSION['icono'] = "success";
    header('location:'.APP_URL."/admin/niveles");
}else{
    session_start();
    $_SESSION['mensaje'] = "No se registro el Nivel";
    $_SESSION['icono'] = "error";
    ?><script>window.history.back();</script><?php
}





?>