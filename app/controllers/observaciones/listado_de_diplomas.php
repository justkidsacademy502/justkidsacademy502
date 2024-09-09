<?php

$sql_diplomas = "SELECT * FROM diplomas WHERE estado = '1' ";
$query_diplomas = $pdo->prepare($sql_diplomas);
$query_diplomas->execute();
$diplomas = $query_diplomas->fetchAll(PDO::FETCH_ASSOC);


?>