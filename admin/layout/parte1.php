<?php
session_start();

if (isset($_SESSION['sesion_email'])) {
    //echo "el usuario paso por el login";
    $email_sesion = $_SESSION['sesion_email'];
    $query_sesion = $pdo->prepare("SELECT * FROM usuarios as usu
                                  INNER JOIN roles as rol ON rol.id_rol = usu.rol_id
                                  INNER JOIN personas as per ON per.usuario_id = usu.id_usuario
                                  WHERE usu.email = '$email_sesion' AND usu.estado = '1' ");
    $query_sesion->execute();

    $datos_sesion_usuarios = $query_sesion->fetchAll(PDO::FETCH_ASSOC);
    foreach ($datos_sesion_usuarios as $datos_sesion_usuario) {
        $nombre_sesion_usuario = $datos_sesion_usuario['email'];
        $rol_sesion_usuario = $datos_sesion_usuario['nombre_rol'];
        $id_rol_sesion_usuario = $datos_sesion_usuario['id_rol'];
        $nombres_sesion_usuario = $datos_sesion_usuario['nombres'];
        $apellidos_sesion_usuario = $datos_sesion_usuario['apellidos'];
        $dpi_sesion_usuario = $datos_sesion_usuario['dpi'];
        $id_persona_sesion_usuario = $datos_sesion_usuario['id_persona'];
    }



    $sql_estudiantes = "SELECT * FROM usuarios as usu 
                        INNER JOIN roles as rol ON rol.id_rol = usu.rol_id 
                        INNER JOIN personas as per ON per.usuario_id = usu.id_usuario
                        INNER JOIN estudiantes as est ON est.persona_id = per.id_persona
                        INNER JOIN niveles as niv ON niv.id_nivel = est.nivel_id
                        INNER JOIN grados as gra ON gra.id_grado = est.grado_id
                        INNER JOIN ppffs as ppf ON ppf.estudiante_id = est.id_estudiante
                        WHERE est.estado = '1' ";
    $query_estudiantes = $pdo->prepare($sql_estudiantes);
    $query_estudiantes->execute();
    $estudiantes = $query_estudiantes->fetchAll(PDO::FETCH_ASSOC);


    foreach ($estudiantes as $estudiante) {
        $id_estudiante = $estudiante['id_estudiante'];
    }



    $url = $_SERVER["PHP_SELF"];
    $conta = strlen($url);
    $rest = substr($url, 13, $conta);



    $sql_roles_permisos = "SELECT * FROM roles_permisos as rolper
                        INNER JOIN permisos as per ON per.id_permiso = rolper.permiso_id
                        INNER JOIN roles as rol ON rol.id_rol = rolper.rol_id
                        WHERE rolper.estado = '1' ";
    $query_roles_permisos = $pdo->prepare($sql_roles_permisos);
    $query_roles_permisos->execute();
    $roles_permisos = $query_roles_permisos->fetchAll(PDO::FETCH_ASSOC);
    $contadorpermiso = 0;
    foreach ($roles_permisos as $roles_permiso) {
        if ($id_rol_sesion_usuario == $roles_permiso['rol_id']) {
            //Echo $roles_permiso['url'];
            if ($rest == $roles_permiso['url']) {
                //echo "Permiso Autorizado";
                $contadorpermiso = $contadorpermiso + 1;
            } else {
                //echo "no autorizado";
            }
        }
    }
    if ($contadorpermiso > 0) {
        //echo "ruta autorizada";
    } else {
        //echo "usuario no autorizado";
        header('location:' . APP_URL . "/admin/no_autorizado.php");
    }
} else {
    //echo "El usuario no paso por el login";
    header('location:' . APP_URL . "/login");
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
    <link rel="stylesheet" href="<?= APP_URL; ?>/public/plugins/fontawesome-free/css/all.min.css">
    <!-- Sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Fullcalendar -->
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>

    <!-- FullCalendar -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth'
            });
            calendar.render();
        });
    </script>

    <!-- jQuery -->
    <script src="<?= APP_URL; ?>/public/plugins/jquery/jquery.min.js"></script>
    <!-- Boostrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="<?= APP_URL; ?>../public/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?= APP_URL; ?>/public/css/sidebar_page.css">
    <link rel="stylesheet" href="<?= APP_URL; ?>/public/css/home_estudiante.css">
    <link rel="stylesheet" href="<?= APP_URL; ?>/public/css/myscore_estilos.css">

    <!-- Data Tables -->
    <link rel="stylesheet" href="<?= APP_URL; ?>/public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= APP_URL; ?>/public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= APP_URL; ?>/public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <title><?= APP_NAME; ?></title>
</head>

<body>


    <!-- SIDEBAR -->
    <div class="custom-sidebar custom-active">
        <div class="custom-menu-btn">
            <i class="custom-icon bx bx-chevron-left"></i>
        </div>
        <div class="custom-sidebar-head">
            <div class="custom-user-img">
                <a href="<?= APP_URL; ?>/admin/index.php">
                    <img src="<?= APP_URL; ?>/public/img/logo_home.png" alt="logo">
                </a>
            </div>
            <div class="custom-user-details">
                <p class="custom-title">User</p>
                <p class="custom-name"><?= $nombre_sesion_usuario; ?></p>
            </div>
        </div>
        <div class="custom-nav">
            <div class="custom-menu">
                <p class="custom-title">Main</p>
                <ul>


                    <?php
                    if (($rol_sesion_usuario == "COACH") || ($rol_sesion_usuario == "DIRECTOR ACADEMICO") || ($rol_sesion_usuario == "ESTUDIANTE")) { ?>
                        <li>
                            <a href="<?= APP_URL; ?>/admin/index.php">
                                <lord-icon target="a" style="height:30px;width:30px;" colors="Secondary:#c7166f" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/63-home.json">
                                    <img alt="" loading="lazy" src="https://media.lordicon.com/icons/wired/flat/63-home.svg">
                                </lord-icon>
                                <span class="custom-text">Home</span>
                            </a>
                        </li>
                    <?php
                    }
                    ?>


                    <?php
                    if (($rol_sesion_usuario == "COACH")) {
                    ?>
                        <li>
                            <a href="<?= APP_URL; ?>/admin/docentes/perfil_docente.php">
                                <lord-icon target="a" style="height:30px;width:30px;" colors="primary:#f2e2d9;" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/44-avatar-user-in-circle.json">
                                    <img alt="" loading="lazy" src="https://media.lordicon.com/icons/wired/flat/44-avatar-user-in-circle.svg">
                                </lord-icon>
                                <span class="custom-text">Mi Perfil</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= APP_URL; ?>/admin/observaciones/index.php">
                                <lord-icon target="a" style="height:30px;width:30px;" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/1368-best-seller.json">
                                    <img alt="" loading="lazy" src="https://media.lordicon.com/icons/wired/flat/1368-best-seller.svg">
                                </lord-icon>
                                <span class="custom-text">observaciones</span>
                            </a>
                        </li>
                    <?php
                    }
                    ?>



                    <?php
                    if ($rol_sesion_usuario == "ESTUDIANTE") {
                        foreach ($estudiantes as $estudiante) {
                            if ($email_sesion == $estudiante['email']) {
                                $id_estudiante = $estudiante['id_estudiante'];
                            }
                        } ?>
                        <li>
                            <a href="<?= APP_URL; ?>/admin/estudiantes/myscore.php?id=<?= $id_estudiante; ?>">
                                <lord-icon target="a" style="height:30px;width:30px;" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/433-cup-prize.json">
                                    <img alt="" loading="lazy" src="https://media.lordicon.com/icons/wired/flat/433-cup-prize.svg">
                                </lord-icon>
                                <span class="custom-text">My Score</span>
                            </a>
                        </li>

                        <li>
                            <a href="<?= APP_URL; ?>/admin/estudiantes/levels.php?id=<?= $id_estudiante; ?>">
                                <lord-icon target="a" style="height:30px;width:30px;" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/406-study-graduation.json">
                                    <img alt="" loading="lazy" src="https://media.lordicon.com/icons/wired/flat/406-study-graduation.svg">
                                </lord-icon>
                                <span class="custom-text">Levels</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <lord-icon target="a" style="height:30px;width:30px;" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/2365-tapping-credit-card.json">
                                    <img alt="" loading="lazy" src="https://media.lordicon.com/icons/wired/flat/2365-tapping-credit-card.svg">
                                </lord-icon>
                                <span class="custom-text">Pay</span>
                                <i class="custom-arrow bx bx-chevron-down"></i>
                            </a>
                            <ul class="custom-sub-menu">
                                <li>
                                    <a href="<?= APP_URL; ?>/admin/estudiantes/constancias_pago.php?id=<?= $id_estudiante; ?>">
                                        <span class="custom-text">Constancias de pagos</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://walink.co/3e9f5f" target="_blank">
                                        <span class="custom-text">Pay</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="<?= APP_URL; ?>/admin/estudiantes/questions.php">
                                <lord-icon target="a" style="height:30px;width:30px;" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/424-question-bubble.json">
                                    <img alt="" loading="lazy" src="https://media.lordicon.com/icons/wired/flat/424-question-bubble.svg">
                                </lord-icon>
                                <span class="custom-text">Questions</span>
                            </a>
                        </li>

                    <?php
                    }
                    ?>

                    <?php
                    if (($rol_sesion_usuario == "ADMINISTRADOR")) { ?>

                        <style>
                            .custom-menu ul li a {
                                padding: 4px 3px;

                            }
                        </style>
                        <li>
                            <a href="#">
                                <lord-icon target="a" loading="interaction" style="height:30px;width:30px;" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/40-cogs.json">
                                    <img alt="" loading="lazy" src="https://media.lordicon.com/icons/wired/flat/40-cogs.svg">
                                </lord-icon>
                                <span class="custom-text">Configuración</span>
                                <i class="custom-arrow bx bx-chevron-down"></i>
                            </a>
                            <ul class="custom-sub-menu">
                                <li>
                                    <a href="<?= APP_URL; ?>/admin/configuraciones">
                                        <span class="custom-text" style="font-size: 10px;">Listado de Configuraciones</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    <?php
                    }
                    ?>


                    <?php
                    if (($rol_sesion_usuario == "ADMINISTRADOR")) { ?>
                        <li>
                            <a href="#">
                                <lord-icon target="a" colors="primary:#fae6d1,secondary:#66a1ee,tertiary:#3a3347,quaternary:#000000" style="height:30px;width:30px;" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/1007-organization.json">
                                    <img alt="" loading="lazy" src="https://media.lordicon.com/icons/wired/flat/1007-organization.svg">
                                </lord-icon>
                                <span class="custom-text">Roles</span>
                                <i class="custom-arrow bx bx-chevron-down"></i>
                            </a>
                            <ul class="custom-sub-menu">
                                <li>
                                    <a href="<?= APP_URL; ?>/admin/roles">
                                        <span class="custom-text">Listado de Roles</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= APP_URL; ?>/admin/roles/permisos.php">
                                        <span class="custom-text">Permisos</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php
                    }
                    ?>



                    <?php
                    if (($rol_sesion_usuario == "ADMINISTRADOR")) { ?>
                        <li>
                            <a href="#">
                                <lord-icon target="a" colors="primary:#66a1ee,secondary:#fae6d1" style="height:30px;width:30px;" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/314-three-avatars-icon-calm.json">
                                    <img alt="" loading="lazy" src="https://media.lordicon.com/icons/wired/flat/314-three-avatars-icon-calm.svg">
                                </lord-icon>
                                <span class="custom-text">Usuarios</span>
                                <i class="custom-arrow bx bx-chevron-down"></i>
                            </a>
                            <ul class="custom-sub-menu">
                                <li>
                                    <a href="<?= APP_URL; ?>/admin/usuarios">
                                        <span class="custom-text">Listado de usuarios</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php
                    }
                    ?>


                    <?php
                    if (($rol_sesion_usuario == "ADMINISTRADOR") || ($rol_sesion_usuario == "DIRECTOR ACADEMICO")) { ?>
                        <li>
                            <a href="#">
                                <lord-icon target="a" colors="primary:#000000,secondary:#fae6d1,tertiary:#66ee78,quaternary:#ffffff" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/310-avatar-icon-approved.json">
                                    <img alt="" loading="lazy" src="https://media.lordicon.com/icons/wired/flat/310-avatar-icon-approved.svg">
                                </lord-icon>
                                <span class="custom-text">Administrativos</span>
                                <i class="custom-arrow bx bx-chevron-down"></i>
                            </a>
                            <ul class="custom-sub-menu">
                                <li>
                                    <a href="<?= APP_URL; ?>/admin/administrativos">
                                        <span class="custom-text">Personal Administrativos</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php
                    }
                    ?>



                    <?php
                    if (($rol_sesion_usuario == "ADMINISTRADOR") || ($rol_sesion_usuario == "DIRECTOR ACADEMICO")) { ?>
                        <li>
                            <a href="#">
                                <lord-icon target="a" loading="interaction" style="height:30px;width:30px;" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/1524-bricks-toy.json">
                                    <img alt="" loading="lazy" src="https://media.lordicon.com/icons/wired/flat/1524-bricks-toy.svg">
                                </lord-icon>
                                <span class="custom-text">Niveles y Cursos</span>
                                <i class="custom-arrow bx bx-chevron-down"></i>
                            </a>
                            <ul class="custom-sub-menu">
                                <li>
                                    <a href="<?= APP_URL; ?>/admin/niveles">
                                        <span class="custom-text">Listado de niveles</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= APP_URL; ?>/admin/cursos">
                                        <span class="custom-text">Listado de cursos</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php
                    }
                    ?>





                    <?php
                    if (($rol_sesion_usuario == "ADMINISTRADOR") || ($rol_sesion_usuario == "DIRECTOR ACADEMICO")) { ?>
                        <li>
                            <a href="#">
                                <lord-icon target="a" style="height:30px;width:30px;" colors="secondary:#c71f16,quaternary:yellow,quinary:#e4e4e4" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/112-book.json">
                                    <img alt="" loading="lazy" src="https://media.lordicon.com/icons/wired/flat/112-book.svg">
                                </lord-icon>
                                <span class="custom-text">Bloques</span>
                                <i class="custom-arrow bx bx-chevron-down"></i>
                            </a>
                            <ul class="custom-sub-menu">
                                <li>
                                    <a href="<?= APP_URL; ?>/admin/bloques">
                                        <span class="custom-text">Listado de bloques</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php
                    }
                    ?>



                    <?php
                    if (($rol_sesion_usuario == "ADMINISTRADOR") || ($rol_sesion_usuario == "DIRECTOR ACADEMICO")) { ?>
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
                                    <a href="<?= APP_URL; ?>/admin/docentes">
                                        <span class="custom-text">Listado de coaches</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="custom-sub-menu">
                                <li>
                                    <a href="<?= APP_URL; ?>/admin/docentes/asignacion.php">
                                        <span class="custom-text">Asignación Cursos</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php
                    }
                    ?>



                    <?php
                    if (($rol_sesion_usuario == "ADMINISTRADOR") || ($rol_sesion_usuario == "DIRECTOR ACADEMICO") || ($rol_sesion_usuario == "COACH")) { ?>
                        <li>
                            <a href="<?= APP_URL; ?>/admin/calificaciones">
                                <lord-icon target="a" style="height:30px;width:30px;" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/967-questionnaire.json">
                                    <img alt="" loading="lazy" src="https://media.lordicon.com/icons/wired/flat/967-questionnaire.svg">
                                </lord-icon>
                                <span class="custom-text">Calificaciones</span>
                            </a>
                        </li>
                    <?php
                    }
                    ?>


                    <?php
                    if (($rol_sesion_usuario == "ADMINISTRADOR") || ($rol_sesion_usuario == "DIRECTOR ACADEMICO") || ($rol_sesion_usuario == "COACH")) { ?>
                        <li>
                            <a href="<?= APP_URL; ?>/admin/asistencias">
                                <lord-icon target="a" style="height:30px;width:30px;" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/973-appointment-schedule.json">
                                    <img alt="" loading="lazy" src="https://media.lordicon.com/icons/wired/flat/973-appointment-schedule.svg">
                                </lord-icon>
                                <span class="custom-text">Asistencias</span>
                            </a>
                        </li>
                    <?php
                    }
                    ?>



                    <?php
                    if (($rol_sesion_usuario == "ADMINISTRADOR") || ($rol_sesion_usuario == "DIRECTOR ACADEMICO")) { ?>
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
                                    <a href="<?= APP_URL; ?>/admin/inscripciones">
                                        <span class="custom-text">Inscripción</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= APP_URL; ?>/admin/estudiantes">
                                        <span class="custom-text">Listado de estudiantes</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php
                    }
                    ?>






                    <?php
                    if (($rol_sesion_usuario == "ADMINISTRADOR") || ($rol_sesion_usuario == "DIRECTOR ACADEMICO")) { ?>
                        <li>
                            <a href="#">
                                <lord-icon target="a" style="height:30px;width:30px;" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/2752-banknote.json">
                                    <img alt="" loading="lazy" src="https://media.lordicon.com/icons/wired/flat/2752-banknote.svg">
                                </lord-icon>
                                <span class="custom-text">Pagos</span>
                                <i class="custom-arrow bx bx-chevron-down"></i>
                            </a>
                            <ul class="custom-sub-menu">
                                <li>
                                    <a href="<?= APP_URL; ?>/admin/pagos">
                                        <span class="custom-text">Realizar Pagos</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="custom-menu">
            <p class="custom-title">Account</p>
            <ul>
                <li>
                    <a href="<?= APP_URL; ?>../login/logout.php">
                        <lord-icon target="a" loading="interaction" style="height:30px;width:30px;" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/1725-exit-sign.json">
                            <img alt="" loading="lazy" src="https://media.lordicon.com/icons/wired/flat/1725-exit-sign.svg">
                        </lord-icon>
                        <span class="custom-text">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- </SIDEBAR> -->