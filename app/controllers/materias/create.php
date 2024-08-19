<?php

include("../../config.php");

$nombre_materia = $_POST['nombre_materia'];

$sentencia = $pdo->prepare('INSERT INTO materias
(nombre_materia, fyh_creacion, estado)
VALUES ( :nombre_materia,:fyh_creacion,:estado)');

$sentencia->bindParam(':nombre_materia',$nombre_materia);
$sentencia->bindParam('fyh_creacion',$fechahora);
$sentencia->bindParam('estado',$estado_de_registro);

if($sentencia->execute()){
    session_start();
    $_SESSION['mensaje'] = "Se registro el Bloque";
    $_SESSION['icono'] = "success";
    header('location:'.APP_URL."/admin/bloques");
}else{
    session_start();
    $_SESSION['mensaje'] = "No se registro el Bloque";
    $_SESSION['icono'] = "error";
    ?><script>window.history.back();</script><?php
}



?>