<?php

include("../../../app/config.php");

$gestion_id = $_POST['gestion_id'];
$id_nivel = $_POST['id_nivel'];
$nivel = $_POST['nivel'];
$turno = $_POST['turno'];

$sentencia = $pdo->prepare('UPDATE niveles
SET     gestion_id=:gestion_id,
        nivel=:nivel,
        turno=:turno,
        fyh_actualizacion=:fyh_actualizacion
WHERE   id_nivel=:id_nivel');

$sentencia->bindParam(':gestion_id',$gestion_id);
$sentencia->bindParam(':nivel',$nivel);
$sentencia->bindParam(':turno',$turno);
$sentencia->bindParam('fyh_actualizacion',$fechahora);
$sentencia->bindParam('id_nivel',$id_nivel);

if($sentencia->execute()){
    session_start();
    $_SESSION['mensaje'] = "Se actualizo el Nivel";
    $_SESSION['icono'] = "success";
    header('location:'.APP_URL."/admin/niveles");
}else{
    session_start();
    $_SESSION['mensaje'] = "No se actualizo el Nivel";
    $_SESSION['icono'] = "error";
    ?><script>window.history.back();</script><?php
}





?>