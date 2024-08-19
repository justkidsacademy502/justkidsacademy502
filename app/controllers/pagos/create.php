<?php

include("../../config.php");

$estudiante_id = $_POST['estudiante_id'];
$mes_pagado = $_POST['mes_pagado'];
$fecha_pagado = $_POST['fecha_pagado'];
$descuento_pago = $_POST['descuento_pago'];
$monto_pagado = $_POST['monto_pagado'];
$proximo_pago = $_POST['proximo_pago'];
$no_transaccion = $_POST['no_transaccion'];
$mensualidad_precio = $_POST['mensualidad_precio'];

$sentencia = $pdo->prepare('INSERT INTO pagos
        (estudiante_id,mes_pagado,fecha_pagado,descuento_pago,monto_pagado,proximo_pago,no_transaccion,mensualidad_precio,fyh_creacion, estado)
VALUES  (:estudiante_id,:mes_pagado,:fecha_pagado,:descuento_pago,:monto_pagado,:proximo_pago,:no_transaccion,:mensualidad_precio,:fyh_creacion,:estado)');

$sentencia->bindParam(':estudiante_id',$estudiante_id);
$sentencia->bindParam(':mes_pagado',$mes_pagado);
$sentencia->bindParam(':fecha_pagado',$fecha_pagado);
$sentencia->bindParam(':descuento_pago',$descuento_pago);
$sentencia->bindParam(':monto_pagado',$monto_pagado);
$sentencia->bindParam(':proximo_pago',$proximo_pago);
$sentencia->bindParam(':no_transaccion',$no_transaccion);
$sentencia->bindParam(':mensualidad_precio',$mensualidad_precio);
$sentencia->bindParam('fyh_creacion',$fechahora);
$sentencia->bindParam('estado',$estado_de_registro);

if($sentencia->execute()){
    session_start();
    $_SESSION['mensaje'] = "Se registro el Pago";
    $_SESSION['icono'] = "success";
    ?><script>window.history.back();</script><?php
}else{
    session_start();
    $_SESSION['mensaje'] = "No se registro el Pago";
    $_SESSION['icono'] = "error";
    ?><script>window.history.back();</script><?php
}





?>