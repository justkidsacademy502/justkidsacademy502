<?php

include("../../config.php");

$id_permiso = $_POST['id_permiso'];
$nombre_url = $_POST['nombre_url'];
$url = $_POST['url'];

$sentencia = $pdo->prepare('UPDATE permisos
SET   nombre_url=:nombre_url, 
      url=:url, 
      fyh_actualizacion=:fyh_actualizacion
WHERE id_permiso=:id_permiso');

$sentencia->bindParam(':nombre_url',$nombre_url);
$sentencia->bindParam(':url',$url);
$sentencia->bindParam('fyh_actualizacion',$fechahora);
$sentencia->bindParam('id_permiso',$id_permiso);

if($sentencia->execute()){
    session_start();
    $_SESSION['mensaje'] = "Se actualizo el Permiso";
    $_SESSION['icono'] = "success";
    header('location:'.APP_URL."/admin/roles/permisos.php");
}else{
    session_start();
    $_SESSION['mensaje'] = "No se actualizo el Permiso";
    $_SESSION['icono'] = "error";
    ?><script>window.history.back();</script><?php
}



?>