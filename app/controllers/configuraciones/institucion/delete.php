<?php

include('../../../../app/config.php');
$id_config_institucion = $_POST['id_config_institucion'];


$sentencia = $pdo->prepare("DELETE FROM configuracion_instituciones WHERE id_config_institucion=:id_config_institucion");
$sentencia->bindParam('id_config_institucion', $id_config_institucion);

if ($sentencia->execute()) {
        session_start();
        $_SESSION['mensaje'] = "Se eliminó la institucion";
        $_SESSION['icono'] = "success";
        header('location:'.APP_URL."/admin/configuraciones/institucion");
}else {
        session_start();
        $_SESSION['mensaje'] = "No se elimino la institucion";
        $_SESSION['icono'] = "error";
        ?><script>window.history.back();</script><?php
}



?>