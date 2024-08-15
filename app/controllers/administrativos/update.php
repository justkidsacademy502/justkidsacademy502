<?php

include("../../config.php");

$id_administrativo = $_POST['id_administrativo'];
$id_usuario = $_POST['id_usuario'];
$id_persona = $_POST['id_persona'];

$rol_id = $_POST['rol_id'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$dpi = $_POST['dpi'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$celular = $_POST['celular'];
$email = $_POST['email'];


$pdo->beginTransaction();

//-----------------------ACTUALIZAR A LA TABLA USUARIOS
$password = password_hash($dpi, PASSWORD_DEFAULT);

$sentencia = $pdo->prepare('UPDATE usuarios
SET     rol_id=:rol_id,
        email=:email,
        password=:password,
        fyh_actualizacion=:fyh_actualizacion
WHERE   id_usuario=:id_usuario');

$sentencia->bindParam(':rol_id',$rol_id);
$sentencia->bindParam(':email',$email);
$sentencia->bindParam(':password',$password);
$sentencia->bindParam('fyh_actualizacion',$fechahora);
$sentencia->bindParam('id_usuario',$id_usuario);
$sentencia->execute();



//--------------------- ACTUALIZAR A LA TABLA PERSONAS
$sentencia = $pdo->prepare('UPDATE personas
SET     nombres=:nombres,
        apellidos=:apellidos,
        dpi=:dpi,
        fecha_nacimiento=:fecha_nacimiento,
        celular=:celular,
        fyh_actualizacion=:fyh_actualizacion
WHERE   id_persona=:id_persona');


$sentencia->bindParam(':nombres',$nombres);
$sentencia->bindParam(':apellidos',$apellidos);
$sentencia->bindParam(':dpi',$dpi);
$sentencia->bindParam(':fecha_nacimiento',$fecha_nacimiento);
$sentencia->bindParam(':celular',$celular);
$sentencia->bindParam('fyh_actualizacion',$fechahora);
$sentencia->bindParam('id_persona',$id_persona);
$sentencia->execute();



//--------------------- ACTUALIZAR A LA TABLA ADMINISTRATIVOS
$sentencia = $pdo->prepare('UPDATE administrativos
SET      fyh_actualizacion=:fyh_actualizacion
WHERE    id_administrativo=:id_administrativo');

$sentencia->bindParam(':fyh_actualizacion',$fechahora);
$sentencia->bindParam('id_administrativo',$id_administrativo);



if($sentencia->execute()){
    $pdo->commit();
    session_start();
    $_SESSION['mensaje'] = "Administrativo Actualizado";
    $_SESSION['icono'] = "success";
    header('location:'.APP_URL."/admin/administrativos");
}else{
    $pdo->rollBack();
    session_start();
    $_SESSION['mensaje'] = "No se Actualizo el Administrativo";
    $_SESSION['icono'] = "error";
    ?><script>window.history.back();</script><?php
}



?>