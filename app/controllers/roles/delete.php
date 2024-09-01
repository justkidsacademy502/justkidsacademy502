<?php

include('../../../app/config.php');
$id_rol = $_POST['id_rol'];


$sentencia = $pdo->prepare("DELETE FROM roles WHERE id_rol=:id_rol");
$sentencia->bindParam('id_rol', $id_rol);
try {
        if ($sentencia->execute()) {
                session_start();
                $_SESSION['mensaje'] = "Se elimino el Rol";
                $_SESSION['icono'] = "success";
                header('location:' . APP_URL . "/admin/roles");
        } else {
                session_start();
                $_SESSION['mensaje'] = "No se elimino el Rol";
                $_SESSION['icono'] = "error";
                header('location:' . APP_URL . "/admin/roles");
        }
} catch (Exception $exception) {
        session_start();
        $_SESSION['mensaje'] = "Datos comprometidos en la base de datos";
        $_SESSION['icono'] = "error";
        header('location:' . APP_URL . "/admin/roles");
}
