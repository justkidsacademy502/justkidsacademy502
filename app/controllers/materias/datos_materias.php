<?php

$sql_materias = "SELECT * FROM materias WHERE id_materia = '$id_materia' ";
$query_materias = $pdo->prepare($sql_materias);
$query_materias->execute();
$materias = $query_materias->fetchAll(PDO::FETCH_ASSOC);

foreach ($materias as $materia){
    $nombre_materia = $materia['nombre_materia'];
    $fyh_creacion = $materia['fyh_creacion'];
    $estado = $materia['estado'];
}

?>