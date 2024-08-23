<?php

include("../../config.php");

$id_usuario = $_POST['id_usuario'];
$id_persona = $_POST['id_persona'];
$id_docente = $_POST['id_docente'];

$rol_id = $_POST['rol_id'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$dpi = $_POST['dpi'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$fecha_contratacion = $_POST['fecha_contratacion'];


$pdo->beginTransaction();

//-----------------------ACTUALIZAR A LA TABLA USUARIOS
$password = password_hash($email, PASSWORD_DEFAULT);

$sentencia = $pdo->prepare('UPDATE usuarios
SET     rol_id=:rol_id,
        email=:email,
        password=:password,
        fyh_actualizacion=:fyh_actualizacion
WHERE    id_usuario=:id_usuario');

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

$sentencia->bindParam(':id_persona',$id_persona);
$sentencia->bindParam(':nombres',$nombres);
$sentencia->bindParam(':apellidos',$apellidos);
$sentencia->bindParam(':dpi',$dpi);
$sentencia->bindParam(':fecha_nacimiento',$fecha_nacimiento);
$sentencia->bindParam(':celular',$celular);
$sentencia->bindParam('fyh_actualizacion',$fechahora);
$sentencia->execute();



//--------------------- ACTUALIZAR A LA TABLA DOCENTES
$sentencia = $pdo->prepare('UPDATE docentes
SET     fecha_contratacion=:fecha_contratacion,
        fyh_actualizacion=:fyh_actualizacion
WHERE   id_docente=:id_docente');

$sentencia->bindParam(':id_docente',$id_docente);
$sentencia->bindParam(':fecha_contratacion',$fecha_contratacion);
$sentencia->bindParam('fyh_actualizacion',$fechahora);

if($sentencia->execute()){
    $pdo->commit();
    session_start();
    $_SESSION['mensaje'] = "Coach actualizado";
    $_SESSION['icono'] = "success";
    header('location:'.APP_URL."/admin/docentes");
}else{
    $pdo->rollBack();
    session_start();
    $_SESSION['mensaje'] = "No se actualizado el Coach";
    $_SESSION['icono'] = "error";
    ?><script>window.history.back();</script><?php
}



?>