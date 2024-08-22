<?php

include("../../config.php");

$id_usuario = $_POST['id_usuario'];
$id_persona = $_POST['id_persona'];
$id_estudiante = $_POST['id_estudiante'];
$id_ppff = $_POST['id_ppff'];


$rol_id = $_POST['rol_id'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$email = $_POST['email'];
$nivel_id = $_POST['nivel_id'];
$grado_id = $_POST['grado_id'];
$nombres_apellidos_ppff = $_POST['nombres_apellidos_ppff'];
$dpi_ppf = $_POST['dpi_ppf'];
$celular_ppff = $_POST['celular_ppff'];
$relacion_ppff = $_POST['relacion_ppff'];


$pdo->beginTransaction();

//-----------------------ACTUALIZAR LA TABLA USUARIOS
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



//--------------------- ACTUALIZAR LA TABLA PERSONAS
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


//--------------------- ACTUALIZAR LA TABLA ESTUDIANTES
$sentencia = $pdo->prepare('UPDATE estudiantes
SET     nivel_id=:nivel_id,
        grado_id=:grado_id,
        fyh_actualizacion=:fyh_actualizacion
WHERE   id_estudiante=:id_estudiante');

$sentencia->bindParam(':id_estudiante',$id_estudiante);
$sentencia->bindParam(':nivel_id',$nivel_id);
$sentencia->bindParam(':grado_id',$grado_id);
$sentencia->bindParam('fyh_actualizacion',$fechahora);
$sentencia->execute();



//--------------------- ACTUALIZAR LA TABLA PPFFS
$sentencia = $pdo->prepare('UPDATE ppffs
SET     nombres_apellidos_ppff=:nombres_apellidos_ppff,
        dpi_ppf=:dpi_ppf,
        celular_ppff=:celular_ppff,
        relacion_ppff=:relacion_ppff,
        fyh_actualizacion=:fyh_actualizacion
WHERE   id_ppff=:id_ppff');

$sentencia->bindParam(':id_ppff',$id_ppff);
$sentencia->bindParam(':nombres_apellidos_ppff',$nombres_apellidos_ppff);
$sentencia->bindParam(':dpi_ppf',$dpi_ppf);
$sentencia->bindParam(':celular_ppff',$celular_ppff);
$sentencia->bindParam(':relacion_ppff',$relacion_ppff);
$sentencia->bindParam('fyh_actualizacion',$fechahora);


if($sentencia->execute()){
    $pdo->commit();
    session_start();
    $_SESSION['mensaje'] = "Estudiante actualizado";
    $_SESSION['icono'] = "success";
    header('location:'.APP_URL."/admin/estudiantes");
}else{
    $pdo->rollBack();
    session_start();
    $_SESSION['mensaje'] = "No se actualizado el estudiante";
    $_SESSION['icono'] = "error";
    ?><script>window.history.back();</script><?php
}



?>