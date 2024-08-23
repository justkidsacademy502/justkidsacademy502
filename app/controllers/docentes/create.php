<?php

include("../../config.php");

$rol_id = $_POST['rol_id'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$dpi = $_POST['dpi'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$fecha_contratacion = $_POST['fecha_contratacion'];


$pdo->beginTransaction();

//-----------------------INSERTAR A LA TABLA USUARIOS
$password = password_hash($email, PASSWORD_DEFAULT);

$sentencia = $pdo->prepare('INSERT INTO usuarios
        (rol_id, email, password, fyh_creacion, estado)
VALUES  (:rol_id,:email,:password,:fyh_creacion,:estado)');

$sentencia->bindParam(':rol_id',$rol_id);
$sentencia->bindParam(':email',$email);
$sentencia->bindParam(':password',$password);
$sentencia->bindParam('fyh_creacion',$fechahora);
$sentencia->bindParam('estado',$estado_de_registro);
$sentencia->execute();
$id_usuario = $pdo->lastInsertId();



//--------------------- INSERTAR A LA TABLA PERSONAS
$sentencia = $pdo->prepare('INSERT INTO personas
        (usuario_id,nombres,apellidos,dpi,fecha_nacimiento,celular,fyh_creacion, estado)
VALUES  (:usuario_id,:nombres,:apellidos,:dpi,:fecha_nacimiento,:celular,:fyh_creacion,:estado)');

$sentencia->bindParam(':usuario_id',$id_usuario);
$sentencia->bindParam(':nombres',$nombres);
$sentencia->bindParam(':apellidos',$apellidos);
$sentencia->bindParam(':dpi',$dpi);
$sentencia->bindParam(':fecha_nacimiento',$fecha_nacimiento);
$sentencia->bindParam(':celular',$celular);
$sentencia->bindParam('fyh_creacion',$fechahora);
$sentencia->bindParam('estado',$estado_de_registro);
$sentencia->execute();
$id_persona = $pdo->lastInsertId();



//--------------------- INSERTAR A LA TABLA DOCENTES
$sentencia = $pdo->prepare('INSERT INTO docentes
        (persona_id, fecha_contratacion, fyh_creacion, estado)
VALUES  (:persona_id,:fecha_contratacion,:fyh_creacion,:estado)');

$sentencia->bindParam(':persona_id',$id_persona);
$sentencia->bindParam(':fecha_contratacion',$fecha_contratacion);
$sentencia->bindParam('fyh_creacion',$fechahora);
$sentencia->bindParam('estado',$estado_de_registro);

if($sentencia->execute()){
    $pdo->commit();
    session_start();
    $_SESSION['mensaje'] = "Coach registrado";
    $_SESSION['icono'] = "success";
    header('location:'.APP_URL."/admin/docentes");
}else{
    $pdo->rollBack();
    session_start();
    $_SESSION['mensaje'] = "No se registro el Coach";
    $_SESSION['icono'] = "error";
    ?><script>window.history.back();</script><?php
}



?>