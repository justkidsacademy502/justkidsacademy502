<?php

$sql_calificaciones = "SELECT * FROM calificaciones WHERE estado = '1' ";
$query_calificaciones = $pdo->prepare($sql_calificaciones);
$query_calificaciones->execute();
$calificaciones = $query_calificaciones->fetchAll(PDO::FETCH_ASSOC);


?>