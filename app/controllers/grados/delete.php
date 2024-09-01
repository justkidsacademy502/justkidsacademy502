<?php

include('../../../app/config.php');
$id_grado = $_POST['id_grado'];


$sentencia = $pdo->prepare("DELETE FROM grados WHERE id_grado=:id_grado");
$sentencia->bindParam('id_grado', $id_grado);

try {
        if ($sentencia->execute()) {
                session_start();
                $_SESSION['mensaje'] = "Se elimino el Grado";
                $_SESSION['icono'] = "success";
                header('location:' . APP_URL . "/admin/cursos");
        } else {
                session_start();
                $_SESSION['mensaje'] = "No se elimino el Grado";
                $_SESSION['icono'] = "error";
                header('location:' . APP_URL . "/admin/cursos");
        }
} catch (Exception $exception) {
        session_start();
        $_SESSION['mensaje'] = "Datos comprometidos en la base de datos";
        $_SESSION['icono'] = "error";
        header('location:' . APP_URL . "/admin/cursos");
}
