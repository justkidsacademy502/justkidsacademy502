<?php

include('../../../app/config.php');
$id_materia = $_POST['id_materia'];


$sentencia = $pdo->prepare("DELETE FROM materias WHERE id_materia=:id_materia");
$sentencia->bindParam('id_materia', $id_materia);


try{
    if ($sentencia->execute()) {
        session_start();
        $_SESSION['mensaje'] = "Se elimino el Bloque";
        $_SESSION['icono'] = "success";
        header('location:'.APP_URL."/admin/bloques");
}else {
        session_start();
        $_SESSION['mensaje'] = "No se elimino el Bloque";
        $_SESSION['icono'] = "error";
        header('location:'.APP_URL."/admin/bloques");
}    
}catch(Exception $exception){
        session_start();
        $_SESSION['mensaje'] = "Datos comprometidos en la base de datos";
        $_SESSION['icono'] = "error";
        header('location:'.APP_URL."/admin/bloques");
}




?>