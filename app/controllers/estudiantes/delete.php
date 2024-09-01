<?php

include('../../../app/config.php');
$id_estudiante = $_POST['id_estudiante'];


$sentencia = $pdo->prepare("DELETE FROM estudiantes WHERE id_estudiante=:id_estudiante");
$sentencia->bindParam('id_estudiante', $id_estudiante);
try {
        if ($sentencia->execute()) {
                session_start();
                $_SESSION['mensaje'] = "Se elimino el Estudiante";
                $_SESSION['icono'] = "success";
                header('location:' . APP_URL . "/admin/estudiantes");
        } else {
                session_start();
                $_SESSION['mensaje'] = "No se elimino el Estudiante";
                $_SESSION['icono'] = "error";
                header('location:' . APP_URL . "/admin/estudiantes");
        }
} catch (Exception $exception) {
        session_start();
        $_SESSION['mensaje'] = "Datos comprometidos en la base de datos";
        $_SESSION['icono'] = "error";
        header('location:' . APP_URL . "/admin/estudiantes");
}
