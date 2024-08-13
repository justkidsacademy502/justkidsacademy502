<?php

include('../../../../app/config.php ');

$id_gestion = $_POST['id_gestion'];
$gestion = $_POST['gestion'];
$estado = $_POST['estado'];
if($estado=="ACTIVO"){
    $estado = 1;
}else {
    $estado = 0;
}

$sentencia = $pdo->prepare('UPDATE gestiones
SET    gestion=:gestion,
       fyh_actualizacion=:fyh_actualizacion,
       estado=:estado
WHERE  id_gestion=:id_gestion');

$sentencia->bindParam(':gestion',$gestion);
$sentencia->bindParam('fyh_actualizacion',$fechahora);
$sentencia->bindParam('estado',$estado);
$sentencia->bindParam('id_gestion',$id_gestion);

if($sentencia->execute()){
    session_start();
    $_SESSION['mensaje'] = "Gestión Actualizada";
    $_SESSION['icono'] = "success";
    header('location:'.APP_URL."/admin/configuraciones/gestiones");
}else{
    session_start();
    $_SESSION['mensaje'] = "Gestión no Actualizada";
    $_SESSION['icono'] = "error";
    ?><script>window.history.back();</script><?php
}


?>