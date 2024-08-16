<?php

include("../../config.php");


$rol_id = $_POST['rol_id'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$dpi = $_POST['dpi'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$nivel_id = $_POST['nivel_id'];
$grado_id = $_POST['grado_id'];
$nombres_apellidos_ppff = $_POST['nombres_apellidos_ppff'];
$dpi_ppf = $_POST['dpi_ppf'];
$celular_ppff = $_POST['celular_ppff'];
$relacion_ppff = $_POST['relacion_ppff'];


$pdo->beginTransaction();

//-----------------------INSERTAR A LA TABLA USUARIOS
$password = password_hash($dpi, PASSWORD_DEFAULT);

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



//--------------------- INSERTAR A LA TABLA ESTUDIANTES
$sentencia = $pdo->prepare('INSERT INTO estudiantes
        (persona_id, nivel_id, grado_id, fyh_creacion, estado)
VALUES  (:persona_id,:nivel_id,:grado_id,:fyh_creacion,:estado)');

$sentencia->bindParam(':persona_id',$id_persona);
$sentencia->bindParam(':nivel_id',$nivel_id);
$sentencia->bindParam(':grado_id',$grado_id);
$sentencia->bindParam('fyh_creacion',$fechahora);
$sentencia->bindParam('estado',$estado_de_registro);
$sentencia->execute();
$id_estudiante = $pdo->lastInsertId();



//--------------------- INSERTAR A LA TABLA PPFFS
$sentencia = $pdo->prepare('INSERT INTO ppffs
        (estudiante_id, nombres_apellidos_ppff, dpi_ppf, celular_ppff, relacion_ppff, fyh_creacion, estado)
VALUES  (:estudiante_id,:nombres_apellidos_ppff,:dpi_ppf,:celular_ppff,:relacion_ppff,:fyh_creacion,:estado)');

$sentencia->bindParam(':estudiante_id',$id_estudiante);
$sentencia->bindParam(':nombres_apellidos_ppff',$nombres_apellidos_ppff);
$sentencia->bindParam(':dpi_ppf',$dpi_ppf);
$sentencia->bindParam(':celular_ppff',$celular_ppff);
$sentencia->bindParam(':relacion_ppff',$relacion_ppff);
$sentencia->bindParam('fyh_creacion',$fechahora);
$sentencia->bindParam('estado',$estado_de_registro);


if($sentencia->execute()){
    $pdo->commit();
    session_start();
    $_SESSION['mensaje'] = "Estudiante registrado";
    $_SESSION['icono'] = "success";
    header('location:'.APP_URL."/admin/estudiantes");
}else{
    $pdo->rollBack();
    session_start();
    $_SESSION['mensaje'] = "No se registro el estudiante";
    $_SESSION['icono'] = "error";
    ?><script>window.history.back();</script><?php
}



?>