<?php

include('../../config.php');
$id_pago = $_POST['id_pago'];


$sentencia = $pdo->prepare("DELETE FROM pagos WHERE id_pago=:id_pago");
$sentencia->bindParam('id_pago', $id_pago);

if ($sentencia->execute()) {
        session_start();
        $_SESSION['mensaje'] = "Se eliminó el pago";
        $_SESSION['icono'] = "success";
        ?><script>window.history.back();</script><?php
}else {
        session_start();
        $_SESSION['mensaje'] = "No se elimino el pago";
        $_SESSION['icono'] = "error";
        ?><script>window.history.back();</script><?php
}



?>