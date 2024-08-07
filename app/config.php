<?php

define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','justkidshome');

define('APP_NAME','Just Kids Home');
define('APP_URL','http://localhost/justkidshome');
define('KEY_API_MAPS','');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try{
    $pdo = new PDO($servidor,USUARIO,PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "Conexion exitosa";
}catch (PDOException $e){
    echo "Error no se pudo conectar a la Bd";
}

date_default_timezone_set("America/Guatemala");
$fechahora = date ('Y-m-d H:i:n');

$fecha_actual = date('Y-m-d');
$dia_actual = date('d');
$mes_actual = date('m');
$ano_actual = date('Y');

$estado_de_registro = '1';

?>