<?php

include('../../../../app/config.php ');

$gestion = $_POST['gestion'];
$estado = $_POST['estado'];
if($estado=="ACTIVO"){
    $estado = 1;
}else {
    $estado = 0;
}

$sentencia = $pdo->prepare('INSERT INTO gestiones
(gestion, fyh_creacion, estado)
VALUES ( :gestion,:fyh_creacion,:estado)');

$sentencia->bindParam(':gestion',$gestion);
$sentencia->bindParam('fyh_creacion',$fechahora);
$sentencia->bindParam('estado',$estado);

if($sentencia->execute()){
    session_start();
    $_SESSION['mensaje'] = "Gestión registrada";
    $_SESSION['icono'] = "success";
    header('location:'.APP_URL."/admin/configuraciones/gestiones");
}else{
    session_start();
    $_SESSION['mensaje'] = "Gestión no registrada";
    $_SESSION['icono'] = "error";
    ?><script>window.history.back();</script><?php
}


?>