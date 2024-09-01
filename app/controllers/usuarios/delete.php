<?php

include('../../../app/config.php');
$id_usuario = $_POST['id_usuario'];


$sentencia = $pdo->prepare("DELETE FROM usuarios WHERE id_usuario=:id_usuario");
$sentencia->bindParam('id_usuario', $id_usuario);

try {
        if ($sentencia->execute()) {
                session_start();
                $_SESSION['mensaje'] = "Se elimino el Usuario";
                $_SESSION['icono'] = "success";
                header('location:' . APP_URL . "/admin/usuarios");
        } else {
                session_start();
                $_SESSION['mensaje'] = "No se elimino el Usuario";
                $_SESSION['icono'] = "error";
                header('location:' . APP_URL . "/admin/usuarios");
        }
} catch (exception $exception) {
        session_start();
        $_SESSION['mensaje'] = "Datos comprometidos en la base de datos";
        $_SESSION['icono'] = "error";
        header('location:' . APP_URL . "/admin/usuarios");
}
