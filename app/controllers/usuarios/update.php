<?php
include('../../../app/config.php');

$id_usuario = $_POST['id_usuario'];
$rol_id = $_POST['rol_id'];
$email = $_POST['email'];

$password = $_POST['password'];
$password_repeat = $_POST['password_repeat'];


if($password == "") {
        $sentencia = $pdo->prepare("UPDATE usuarios
        SET rol_id=:rol_id,
            email=:email,
            fyh_actualizacion=:fyh_actualizacion
        WHERE id_usuario=:id_usuario");
    
    $sentencia->bindParam(':rol_id',$rol_id);
    $sentencia->bindParam(':email',$email);
    $sentencia->bindParam('fyh_actualizacion',$fechahora);
    $sentencia->bindParam('id_usuario',$id_usuario);
    
    try {
        if($sentencia->execute()){
            session_start();
            $_SESSION['mensaje'] = "Usuario Actualizado";
            $_SESSION['icono'] = "success";
            header('location:'.APP_URL."/admin/usuarios");
            }else{
                session_start();
                $_SESSION['mensaje'] = "No se actualizo el Usuario";
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
    if ($password == $password_repeat){
        //echo "las contraseñas son iguales";
        $password = password_hash($password, PASSWORD_DEFAULT);
    
        $sentencia = $pdo->prepare("UPDATE usuarios
        SET rol_id=:rol_id,
            email=:email,
            password=:password,
            fyh_actualizacion=:fyh_actualizacion
        WHERE id_usuario=:id_usuario");
    
    $sentencia->bindParam(':rol_id',$rol_id);
    $sentencia->bindParam(':email',$email);
    $sentencia->bindParam(':password',$password);
    $sentencia->bindParam('fyh_actualizacion',$fechahora);
    $sentencia->bindParam('id_usuario',$id_usuario);
    
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
}

?>