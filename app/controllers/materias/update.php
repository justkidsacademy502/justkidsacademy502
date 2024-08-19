<?php

include('../../config.php');

$id_materia = $_POST['id_materia'];
$nombre_materia = $_POST['nombre_materia'];

$sentencia = $pdo->prepare('UPDATE materias
SET    nombre_materia=:nombre_materia,
       fyh_actualizacion=:fyh_actualizacion
WHERE  id_materia=:id_materia');

$sentencia->bindParam(':nombre_materia',$nombre_materia);
$sentencia->bindParam('fyh_actualizacion',$fechahora);
$sentencia->bindParam('id_materia',$id_materia);

if($sentencia->execute()){
    session_start();
    $_SESSION['mensaje'] = "Bloque Actualizado";
    $_SESSION['icono'] = "success";
    header('location:'.APP_URL."/admin/bloques");
}else{
    session_start();
    $_SESSION['mensaje'] = "Bloque no Actualizado";
    $_SESSION['icono'] = "error";
    ?><script>window.history.back();</script><?php
}


?>