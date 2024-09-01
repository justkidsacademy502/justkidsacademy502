<?php

include('../../../app/config.php');
$id_administrativo = $_POST['id_administrativo'];


$sentencia = $pdo->prepare("DELETE FROM administrativos WHERE id_administrativo=:id_administrativo");
$sentencia->bindParam('id_administrativo', $id_administrativo);
try {
        if ($sentencia->execute()) {
                session_start();
                $_SESSION['mensaje'] = "Se elimino el personal administrativo";
                $_SESSION['icono'] = "success";
                header('location:' . APP_URL . "/admin/administrativos");
        } else {
                session_start();
                $_SESSION['mensaje'] = "No se elimino el personal administrativo";
                $_SESSION['icono'] = "error";
                header('location:' . APP_URL . "/admin/administrativos");
        }
} catch (Exception $exception) {
        session_start();
        $_SESSION['mensaje'] = "Datos comprometidos en la base de datos";
        $_SESSION['icono'] = "error";
        header('location:' . APP_URL . "/admin/administrativos");
}
