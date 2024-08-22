<?php

include("../../config.php");

$id_asignacion = $_POST['id_asignacion'];
$id_nivel = $_POST['id_nivel'];
$id_grado = $_POST['id_grado'];
$id_materia = $_POST['id_materia'];

$sentencia = $pdo->prepare('UPDATE asignaciones
SET     nivel_id=:nivel_id,
        grado_id=:grado_id,
        materia_id=:materia_id,
        fyh_actualizacion=:fyh_actualizacion
WHERE   id_asignacion=:id_asignacion');

$sentencia->bindParam(':nivel_id',$id_nivel);
$sentencia->bindParam(':grado_id',$id_grado);
$sentencia->bindParam(':materia_id',$id_materia);
$sentencia->bindParam('fyh_actualizacion',$fechahora);
$sentencia->bindParam('id_asignacion',$id_asignacion);

if($sentencia->execute()){
    session_start();
    $_SESSION['mensaje'] = "Se actualizo la Asignación";
    $_SESSION['icono'] = "success";
    header('location:'.APP_URL."/admin/docentes/asignacion.php");
}else{
    session_start();
    $_SESSION['mensaje'] = "No se actualizo la Asignación";
    $_SESSION['icono'] = "error";
    ?><script>window.history.back();</script><?php
}



?>