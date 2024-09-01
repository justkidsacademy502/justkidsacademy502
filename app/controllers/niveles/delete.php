<?php

include('../../../app/config.php');
$id_nivel = $_POST['id_nivel'];


$sentencia = $pdo->prepare("DELETE FROM niveles WHERE id_nivel=:id_nivel");
$sentencia->bindParam('id_nivel', $id_nivel);

try {
        if ($sentencia->execute()) {
                session_start();
                $_SESSION['mensaje'] = "Se elimino el Nivel";
                $_SESSION['icono'] = "success";
                header('location:' . APP_URL . "/admin/niveles");
        } else {
                session_start();
                $_SESSION['mensaje'] = "No se elimino el Nivel";
                $_SESSION['icono'] = "error";
                header('location:' . APP_URL . "/admin/niveles");
        }
} catch (Exception $exception) {
        session_start();
        $_SESSION['mensaje'] = "Datos comprometidos en la base de datos";
        $_SESSION['icono'] = "error";
        header('location:' . APP_URL . "/admin/niveles");
}
