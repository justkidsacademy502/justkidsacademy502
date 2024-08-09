<?php

include('../../../app/config.php');
$id_rol = $_POST['id_rol'];


$sql_usuarios = "SELECT * FROM usuarios  WHERE estado = '1' AND rol_id = '$id_rol' ";
$query_usuarios = $pdo->prepare($sql_usuarios);
$query_usuarios->execute();
$usuarios = $query_usuarios->fetchAll(PDO::FETCH_ASSOC);
$contador = 0;
foreach ($usuarios as $usuario) {
        $contador = $contador + 1;
}
if($contador>0) {
        //echo "existe este rol, no se elimina";
        session_start();
        $_SESSION['mensaje'] = "Rol existente en otra tabla - No se elimina";
        $_SESSION['icono'] = "error";
        header('location:'.APP_URL."/admin/roles");
}else {
        //echo "no existe este rol, se elimina";
        $sentencia = $pdo->prepare("DELETE FROM roles WHERE id_rol=:id_rol");
$sentencia->bindParam('id_rol', $id_rol);


        if ($sentencia->execute()) {
                     session_start();
                     $_SESSION['mensaje'] = "Se elimino el Rol";
                     $_SESSION['icono'] = "success";
                     header('location:'.APP_URL."/admin/roles");
        }else {
                     session_start();
                     $_SESSION['mensaje'] = "No se elimino el Rol";
                     $_SESSION['icono'] = "error";
                     header('location:'.APP_URL."/admin/roles");
        }
}
?>