<?php

$sql_observaciones = "SELECT * FROM observaciones WHERE estado = '1' ";
$query_observaciones = $pdo->prepare($sql_observaciones);
$query_observaciones->execute();
$observaciones = $query_observaciones->fetchAll(PDO::FETCH_ASSOC);


?>