<?php
include('../../../app/config.php');

$rol_id = $_POST['rol_id'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_repeat = $_POST['password_repeat'];

if ($password == $password_repeat){
    //echo "las contraseñas son iguales";
    $password = password_hash($password, PASSWORD_DEFAULT);

    $sentencia = $pdo->prepare('INSERT INTO usuarios
(rol_id,email,password, fyh_creacion, estado)
VALUES ( :rol_id,:email,:password,:fyh_creacion,:estado)');

$sentencia->bindParam(':rol_id',$rol_id);
$sentencia->bindParam(':email',$email);
$sentencia->bindParam(':password',$password);
$sentencia->bindParam('fyh_creacion',$fechahora);
$sentencia->bindParam('estado',$estado_de_registro);

try {
    if($sentencia->execute()){
        session_start();
        $_SESSION['mensaje'] = "Usuario registrado";
        $_SESSION['icono'] = "success";
        header('location:'.APP_URL."/admin/usuarios");
        }else{
            session_start();
            $_SESSION['mensaje'] = "No se registro el Usuario";
            $_SESSION['icono'] = "error";
            ?><script>window.history.back();</script><?php
        }
}catch (Exception $exception){
    session_start();
    $_SESSION['mensaje'] = "Email existente";
    $_SESSION['icono'] = "error";
    ?><script>window.history.back();</script><?php
}

    

}else {
    session_start();
    $_SESSION['mensaje'] = "Las contraseñas no son iguales";
    $_SESSION['icono'] = "error";
    ?><script>window.history.back();</script><?php
}

/*
if($sentencia->execute()){
echo 'success';
//header('Location:' .$URL.'/');
}else{
echo 'error al registrar a la base de datos';
}

*/

?>