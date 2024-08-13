<?php

include('../../../../app/config.php');

$nombre_institucion = $_POST['nombre_institucion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

if($_FILES['file']['name'] != null) {
    //echo "existe una imagen";
    $nombre_del_archivo = date('Y-m-d-H-i-s').$_FILES['file']['name'];
    $location = "../../../../public/img/configuracion/".$nombre_del_archivo;
    move_uploaded_file($_FILES['file']['tmp_name'],$location);
    $logo = $nombre_del_archivo;
} else {
    //echo "No existe una imagen";
    $logo = "";
}

$sentencia = $pdo->prepare('INSERT INTO configuracion_instituciones
       (nombre_institucion,logo,telefono,correo, fyh_creacion, estado)
VALUES ( :nombre_institucion,:logo,:telefono,:correo,:fyh_creacion,:estado)');

$sentencia->bindParam(':nombre_institucion',$nombre_institucion);
$sentencia->bindParam(':logo',$logo);
$sentencia->bindParam(':telefono',$telefono);
$sentencia->bindParam(':correo',$correo);
$sentencia->bindParam('fyh_creacion',$fechahora);
$sentencia->bindParam('estado',$estado_de_registro);

if($sentencia->execute()){
    //echo 'success';
    session_start();
    $_SESSION['mensaje'] = "Datos registrados";
    $_SESSION['icono'] = "success";
    header('location:'.APP_URL."/admin/configuraciones/institucion");
}else{
    //echo 'error al registrar a la base de datos';
    session_start();
    $_SESSION['mensaje'] = "Datos no registrados";
    $_SESSION['icono'] = "error";
    ?><script>window.history.back();</script><?php
}

?>