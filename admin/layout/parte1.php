<?php
session_start();

if(isset($_SESSION['sesion_email'])) {
   //echo "el usuario paso por el login";
   $email_sesion = $_SESSION['sesion_email'];
   $query_sesion = $pdo->prepare("SELECT * FROM usuarios WHERE email = '$email_sesion' AND estado = '1' ");
   $query_sesion->execute();
   
   $datos_sesion_usuarios = $query_sesion->fetchAll(PDO::FETCH_ASSOC);
   foreach ($datos_sesion_usuarios as $datos_sesion_usuario) {
    $nombre_sesion_usuario = $datos_sesion_usuario['email'];
   }
}else {
    //echo "El usuario no paso por el login";
    header('location:'.APP_URL."/login");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- ICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?=APP_URL;?>/public/plugins/fontawesome-free/css/all.min.css">
    <!-- Sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Boostrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="<?=APP_URL;?>../public/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?=APP_URL;?>../public/css/admincss.css">
    <!-- Data Tables -->
    <link rel="stylesheet" href="<?=APP_URL;?>/public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?=APP_URL;?>/public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?=APP_URL;?>/public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <title><?=APP_NAME;?></title>
</head>
<body>
    
   
       <!-- SIDEBAR -->
<div class="custom-sidebar custom-sidebar-active">
    <div class="custom-menu-btn">
        <i class="custom-icon bx bx-chevron-left"></i>
    </div>
    <div class="custom-sidebar-head">
        <div class="custom-user-img">
            <a href="<?=APP_URL;?>/admin/index.php">
            <img src="<?=APP_URL;?>/public/img/logo_home.png" alt="logo">
            </a>
        </div>
        <div class="custom-user-details">
            <p class="custom-title">User</p>
            <p class="custom-name"><?=$nombre_sesion_usuario;?></p>
        </div>
    </div>
    <div class="custom-nav">
        <div class="custom-menu">
            <p class="custom-title">Main</p>
            <ul>
                <li>
                    <a href="#">
                        <lord-icon target="a" loading="interaction" style="height:30px;width:30px;" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/40-cogs.json">
                            <img alt="" loading="eager" src="https://media.lordicon.com/icons/wired/flat/40-cogs.svg">
                        </lord-icon>
                        <span class="custom-text">Configuración</span>
                        <i class="custom-arrow bx bx-chevron-down"></i>
                    </a>
                    <ul class="custom-sub-menu">
                        <li>
                            <a href="<?=APP_URL;?>/admin/configuraciones">
                                <span class="custom-text" style="font-size: 10px;">Listado de Configuraciones</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <lord-icon target="a" colors="primary:#fae6d1,secondary:#66a1ee,tertiary:#3a3347,quaternary:#000000" style="height:30px;width:30px;" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/1007-organization.json">
                            <img alt="" loading="eager" src="https://media.lordicon.com/icons/wired/flat/1007-organization.svg">
                        </lord-icon>
                        <span class="custom-text">Roles</span>
                        <i class="custom-arrow bx bx-chevron-down"></i>
                    </a>
                    <ul class="custom-sub-menu">
                        <li>
                            <a href="<?=APP_URL;?>/admin/roles">
                                <span class="custom-text">Listado de Roles</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <lord-icon target="a" colors="primary:#66a1ee,secondary:#fae6d1" style="height:30px;width:30px;" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/314-three-avatars-icon-calm.json">
                            <img alt="" loading="eager" src="https://media.lordicon.com/icons/wired/flat/314-three-avatars-icon-calm.svg">
                        </lord-icon>
                        <span class="custom-text">Usuarios</span>
                        <i class="custom-arrow bx bx-chevron-down"></i>
                    </a>
                    <ul class="custom-sub-menu">
                        <li>
                            <a href="<?=APP_URL;?>/admin/usuarios">
                                <span class="custom-text">Listado de usuarios</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <lord-icon target="a" colors="primary:#000000,secondary:#fae6d1,tertiary:#66ee78,quaternary:#ffffff" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/310-avatar-icon-approved.json">
                            <img alt="" loading="eager" src="https://media.lordicon.com/icons/wired/flat/310-avatar-icon-approved.svg">
                        </lord-icon>
                        <span class="custom-text">Administrativos</span>
                        <i class="custom-arrow bx bx-chevron-down"></i>
                    </a>
                    <ul class="custom-sub-menu">
                        <li>
                            <a href="<?=APP_URL;?>/admin/administrativos">
                                <span class="custom-text">Personal Administrativos</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <lord-icon target="a" loading="interaction" style="height:30px;width:30px;" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/1524-bricks-toy.json">
                            <img alt="" loading="eager" src="https://media.lordicon.com/icons/wired/flat/1524-bricks-toy.svg">
                        </lord-icon>
                        <span class="custom-text">Niveles</span>
                        <i class="custom-arrow bx bx-chevron-down"></i>
                    </a>
                    <ul class="custom-sub-menu">
                        <li>
                            <a href="<?=APP_URL;?>/admin/niveles">
                                <span class="custom-text">Listado de niveles</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <lord-icon target="a" style="height:30px;width:30px;" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/978-project-management.json">
                            <img alt="" loading="lazy" src="https://media.lordicon.com/icons/wired/flat/978-project-management.svg">
                        </lord-icon>
                        <span class="custom-text">Grados</span>
                        <i class="custom-arrow bx bx-chevron-down"></i>
                    </a>
                    <ul class="custom-sub-menu">
                        <li>
                            <a href="<?=APP_URL;?>/admin/grados">
                                <span class="custom-text">Listado de grados</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <lord-icon target="a" style="height:30px;width:30px;" colors="secondary:#f2e2d9" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/734-id-business-card-1.json">
                            <img alt="" loading="lazy" src="https://media.lordicon.com/icons/wired/flat/734-id-business-card-1.svg">
                        </lord-icon>
                        <span class="custom-text">Coaches</span>
                        <i class="custom-arrow bx bx-chevron-down"></i>
                    </a>
                    <ul class="custom-sub-menu">
                        <li>
                            <a href="<?=APP_URL;?>/admin/docentes">
                                <span class="custom-text">Listado de coaches</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <lord-icon target="a" style="height:30px;width:30px;" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/529-boy-girl-children.json">
                            <img alt="" loading="lazy" src="https://media.lordicon.com/icons/wired/flat/529-boy-girl-children.svg">
                        </lord-icon>
                        <span class="custom-text">Estudiantes</span>
                        <i class="custom-arrow bx bx-chevron-down"></i>
                    </a>
                    <ul class="custom-sub-menu">
                        <li>
                            <a href="<?=APP_URL;?>/admin/inscripciones">
                                <span class="custom-text">Inscripción</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?=APP_URL;?>/admin/estudiantes">
                                <span class="custom-text">Listado de estudiantes</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="custom-menu">
        <p class="custom-title">Account</p>
        <ul>
            <li>
                <a href="<?=APP_URL;?>../login/logout.php">
                    <lord-icon target="a" loading="interaction" style="height:30px;width:30px;" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/1725-exit-sign.json">
                        <img alt="" loading="eager" src="https://media.lordicon.com/icons/wired/flat/1725-exit-sign.svg">
                    </lord-icon>
                    <span class="custom-text">Log Out</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- </SIDEBAR> -->
