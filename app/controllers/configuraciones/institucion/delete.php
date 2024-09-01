<?php

include('../../../../app/config.php');
$id_gestion = $_POST['id_gestion'];


$sentencia = $pdo->prepare("DELETE FROM gestiones WHERE id_gestion=:id_gestion");
$sentencia->bindParam('id_gestion', $id_gestion);

try{
        if ($sentencia->execute()) {
                session_start();
                $_SESSION['mensaje'] = "Se eliminó la gestión";
                $_SESSION['icono'] = "success";
                header('location:'.APP_URL."/admin/configuraciones/institucion");
        }else {
                session_start();
                $_SESSION['mensaje'] = "No se elimino la gestión";
                $_SESSION['icono'] = "error";
                ?><script>window.history.back();</script><?php
        }
}catch (Exception $exception){
        session_start();
        $_SESSION['mensaje'] = "Datos comprometidos en la base de datos";
        $_SESSION['icono'] = "error";
        ?><script>window.history.back();</script><?php
}



?>