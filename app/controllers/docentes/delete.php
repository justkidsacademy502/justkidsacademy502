<?php

include('../../../app/config.php');
$id_docente = $_POST['id_docente'];


$sentencia = $pdo->prepare("DELETE FROM docentes WHERE id_docente=:id_docente");
$sentencia->bindParam('id_docente', $id_docente);
try {
        if ($sentencia->execute()) {
                session_start();
                $_SESSION['mensaje'] = "Se elimino el Docente";
                $_SESSION['icono'] = "success";
                header('location:' . APP_URL . "/admin/docentes");
        } else {
                session_start();
                $_SESSION['mensaje'] = "No se elimino el Docente";
                $_SESSION['icono'] = "error";
                header('location:' . APP_URL . "/admin/docentes");
        }
} catch (Exception $exception) {
        session_start();
        $_SESSION['mensaje'] = "Datos comprometidos en la base de datos";
        $_SESSION['icono'] = "error";
        header('location:' . APP_URL . "/admin/docentes");
}
