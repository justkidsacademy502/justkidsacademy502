<?php

$sql_instituciones = "SELECT * FROM configuracion_instituciones WHERE id_config_institucion = '$id_config_institucion' AND estado = '1' ";
$query_instituciones = $pdo->prepare($sql_instituciones);
$query_instituciones->execute();
$instituciones = $query_instituciones->fetchAll(PDO::FETCH_ASSOC);

foreach ($instituciones as $institucione){
    $nombre_institucion = $institucione['nombre_institucion'];
    $telefono = $institucione['telefono'];
    $correo = $institucione['correo'];
    $logo = $institucione['logo'];
}

?>