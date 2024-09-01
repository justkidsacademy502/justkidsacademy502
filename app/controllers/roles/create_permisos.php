<?php

include("../../config.php");

$nombre_url = $_POST['nombre_url'];
$url = $_POST['url'];

$sentencia = $pdo->prepare('INSERT INTO permisos
(nombre_url, url, fyh_creacion, estado)
VALUES ( :nombre_url,:url,:fyh_creacion,:estado)');

$sentencia->bindParam(':nombre_url',$nombre_url);
$sentencia->bindParam(':url',$url);
$sentencia->bindParam('fyh_creacion',$fechahora);
$sentencia->bindParam('estado',$estado_de_registro);

if($sentencia->execute()){
    session_start();
    $_SESSION['mensaje'] = "Se registro el Permiso";
    $_SESSION['icono'] = "success";
    header('location:'.APP_URL."/admin/roles/permisos.php");
}else{
    session_start();
    $_SESSION['mensaje'] = "No se registro el Permiso";
    $_SESSION['icono'] = "error";
    ?><script>window.history.back();</script><?php
}



?>