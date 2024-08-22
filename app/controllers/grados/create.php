<?php

include("../../config.php");

$nivel_id = $_POST['nivel_id'];
$bloque = $_POST['bloque'];
$paralelo = $_POST['paralelo'];
$horario = $_POST['horario'];

$sentencia = $pdo->prepare('INSERT INTO grados
(nivel_id,bloque,paralelo,horario, fyh_creacion, estado)
VALUES ( :nivel_id,:bloque,:paralelo,:horario,:fyh_creacion,:estado)');

$sentencia->bindParam(':nivel_id',$nivel_id);
$sentencia->bindParam(':bloque',$bloque);
$sentencia->bindParam(':paralelo',$paralelo);
$sentencia->bindParam(':horario',$horario);
$sentencia->bindParam('fyh_creacion',$fechahora);
$sentencia->bindParam('estado',$estado_de_registro);

if($sentencia->execute()){
    session_start();
    $_SESSION['mensaje'] = "Se registro el Curso";
    $_SESSION['icono'] = "success";
    header('location:'.APP_URL."/admin/cursos");
}else{
    session_start();
    $_SESSION['mensaje'] = "No se registro el Curso";
    $_SESSION['icono'] = "error";
    ?><script>window.history.back();</script><?php
}



?>