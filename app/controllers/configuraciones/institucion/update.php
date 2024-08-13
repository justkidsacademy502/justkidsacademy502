<?php

include('../../../../app/config.php');

$logo = $_POST['logo'];
$nombre_institucion = $_POST['nombre_institucion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$id_config_institucion = $_POST['id_config_institucion'];


if($_FILES['file']['name'] != null) {
    //echo "existe una imagen";
    $nombre_del_archivo = date('Y-m-d-H-i-s').$_FILES['file']['name'];
    $location = "../../../../public/img/configuracion/".$nombre_del_archivo;
    move_uploaded_file($_FILES['file']['tmp_name'],$location);
    $logo = $nombre_del_archivo;
} else {
    //echo "No existe una imagen";
    if($logo == ""){
        $logo = "";
    }else {
        $logo = $_POST['logo'];
    }
}

$sentencia = $pdo->prepare('UPDATE configuracion_instituciones
SET   nombre_institucion=:nombre_institucion,
      logo=:logo,
      telefono=:telefono,
      correo=:correo,
      fyh_actualizacion=:fyh_actualizacion
WHERE id_config_institucion=:id_config_institucion');

$sentencia->bindParam(':nombre_institucion',$nombre_institucion);
$sentencia->bindParam(':logo',$logo);
$sentencia->bindParam(':telefono',$telefono);
$sentencia->bindParam(':correo',$correo);
$sentencia->bindParam('fyh_actualizacion',$fechahora);
$sentencia->bindParam('id_config_institucion',$id_config_institucion);

if($sentencia->execute()){
    //echo 'success';
    session_start();
    $_SESSION['mensaje'] = "Datos actualizados";
    $_SESSION['icono'] = "success";
    header('location:'.APP_URL."/admin/configuraciones/institucion");
}else{
    //echo 'error al registrar a la base de datos';
    session_start();
    $_SESSION['mensaje'] = "Datos no actualizados";
    $_SESSION['icono'] = "error";
    ?><script>window.history.back();</script><?php
}

?>