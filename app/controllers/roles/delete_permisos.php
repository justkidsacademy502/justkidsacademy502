<?php

include('../../../app/config.php');
$id_permiso = $_POST['id_permiso'];


$sentencia = $pdo->prepare("DELETE FROM permisos WHERE id_permiso=:id_permiso");
$sentencia->bindParam('id_permiso', $id_permiso);

try {

        if ($sentencia->execute()) {
                session_start();
                $_SESSION['mensaje'] = "Se elimino el Permiso";
                $_SESSION['icono'] = "success";
                header('location:' . APP_URL . "/admin/roles/permisos.php");
        } else {
                session_start();
                $_SESSION['mensaje'] = "No se elimino el Permiso";
                $_SESSION['icono'] = "error";
                header('location:' . APP_URL . "/admin/roles/permisos.php");
        }
} catch (Exception $exception) {
        session_start();
        $_SESSION['mensaje'] = "Datos comprometidos en la base de datos";
        $_SESSION['icono'] = "error";
        header('location:' . APP_URL . "/admin/roles/permisos.php");
}
