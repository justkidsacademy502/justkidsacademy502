<?php

$sql_calificaciones = "SELECT * FROM calificaciones as cal 
                       INNER JOIN grados as gra ON gra.id_grado = cal.grado_id WHERE cal.estado = '1' ";
$query_calificaciones = $pdo->prepare($sql_calificaciones);
$query_calificaciones->execute();
$calificaciones = $query_calificaciones->fetchAll(PDO::FETCH_ASSOC);


?>