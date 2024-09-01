<?php

include("../../config.php");

// Verificar si 'asistencia' está en $_POST
if (!isset($_POST['asistencia']) || empty($_POST['asistencia'])) {
    session_start();
    $_SESSION['mensaje'] = "No se recibieron datos de asistencia.";
    $_SESSION['icono'] = "error";
    ?><script>window.history.back();</script><?php
    exit();
}

// Obtener datos del formulario
$docente_id = $_POST['docente_id'];
$fecha_asistencia = $_POST['fecha_asistencia'];
$grado_id = $_POST['grado_id'];

// Preparar la sentencia SQL una vez
$sentencia = $pdo->prepare('
    INSERT INTO asistencias (docente_id, estudiante_id, grado_id, fecha_asistencia, presente, fyh_creacion, estado)
    VALUES (:docente_id, :estudiante_id, :grado_id, :fecha_asistencia, :presente, :fyh_creacion, :estado)
');

// Recorrer las asistencias enviadas
foreach ($_POST['asistencia'] as $estudiante_id => $presente) {
    // Asignar parámetros a la sentencia preparada
    $sentencia->bindParam(':docente_id', $docente_id);
    $sentencia->bindParam(':estudiante_id', $estudiante_id);
    $sentencia->bindParam(':grado_id', $grado_id);
    $sentencia->bindParam(':fecha_asistencia', $fecha_asistencia);
    $sentencia->bindParam(':presente', $presente);
    $sentencia->bindParam('fyh_creacion', $fechahora);
    $sentencia->bindParam('estado', $estado_de_registro);

    // Ejecutar la sentencia
    if (!$sentencia->execute()) {
        // Manejar el error si alguna inserción falla
        session_start();
        $_SESSION['mensaje'] = "No se registraron todas las asistencias";
        $_SESSION['icono'] = "error";
        ?><script>window.history.back();</script><?php
        exit(); // Salir para evitar que se continúe ejecutando el código
    }
}

// Si todas las inserciones son exitosas
session_start();
$_SESSION['mensaje'] = "Se registraron todas las asistencias";
$_SESSION['icono'] = "success";
?><script>window.history.back();</script><?php

?>