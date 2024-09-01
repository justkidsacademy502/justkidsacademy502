<?php

include('../../../app/config.php');
$id_rol_permiso = $_POST['id_rol_permiso'];


$sentencia = $pdo->prepare("DELETE FROM roles_permisos WHERE id_rol_permiso=:id_rol_permiso");
$sentencia->bindParam('id_rol_permiso', $id_rol_permiso);

if ($sentencia->execute()) {
        session_start();
        $_SESSION['mensaje'] = "Se elimino el Permiso";
        $_SESSION['icono'] = "success";
        header('location:'.APP_URL."/admin/roles");
}else {
        session_start();
        $_SESSION['mensaje'] = "No se elimino el Permiso";
        $_SESSION['icono'] = "error";
        header('location:'.APP_URL."/admin/roles");
}



?>