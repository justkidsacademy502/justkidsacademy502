<?php

include('../../config.php');
$id_asignacion = $_POST['id_asignacion'];


$sentencia = $pdo->prepare("DELETE FROM asignaciones WHERE id_asignacion=:id_asignacion");
$sentencia->bindParam('id_asignacion', $id_asignacion);

if ($sentencia->execute()) {
        session_start();
        $_SESSION['mensaje'] = "Se eliminó la asignación";
        $_SESSION['icono'] = "success";
        ?><script>window.history.back();</script><?php
}else {
        session_start();
        $_SESSION['mensaje'] = "No se elimino la asignación";
        $_SESSION['icono'] = "error";
        ?><script>window.history.back();</script><?php
}



?>