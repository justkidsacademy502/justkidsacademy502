<?php
include('../app/config.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE email = '$email' AND estado = '1' ";
$query = $pdo->prepare($sql);
$query->execute();

$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
//print_r($usuarios);

$contador = 0;

foreach ($usuarios as $usuario) {
   $password_tabla = $usuario['password'];
   $contador = $contador +1;
}

if( ($contador>0) && (password_verify($password,$password_tabla) )) {
    //echo "correcto";
    session_start();
    $_SESSION['sesion_email'] = $email;
    header('location:'.APP_URL."/admin");
}else {
    //echo "no entro a la pagina web";
    session_start();
    $_SESSION['mensaje'] = "Los datos son incorrectos";
    header('location:'.APP_URL."/login");
}


