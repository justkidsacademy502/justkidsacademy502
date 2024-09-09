    <!-- ICono-->
    <link rel="icon" href="../public/img/icon.ico">

    <?php
    include("../app/config.php");
    include("../admin/layout/parte1.php");
    include("../app/controllers/roles/listado_de_roles.php");
    include("../app/controllers/usuarios/listado_de_usuarios.php");
    include("../app/controllers/niveles/listado_de_niveles.php");
    include("../app/controllers/grados/listado_de_grados.php");
    include("../app/controllers/materias/listado_de_materias.php");
    include("../app/controllers/administrativos/listado_de_administrativos.php");
    include("../app/controllers/docentes/listado_de_docentes.php");
    include("../app/controllers/estudiantes/listado_de_estudiantes.php");
    include("../app/controllers/calificaciones/listado_de_calificaciones.php")
    ?>

    <header>
    <link rel="stylesheet" href="<?= APP_URL; ?>/public/css/home_estudiante.css">
    </header>

    <style>
        .hover-enlarge {
            transition: transform 0.2s ease;
            /* Suaviza la transición */
        }

        .hover-enlarge:hover {
            transform: scale(1.02);
            /* Agranda el contenedor en un 2% */
        }
    </style>

    <!-- TOPBAR -->
    <div class="custom-main custom-sidebar-active">

        <a style="display: flex; justify-content: center; align-items: center; position: absolute; top: 10px; right: 10px;background-color: white;border-radius:10px;padding:5px;box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);height:35px;width:35px;z-index:9999;" data-widget="fullscreen" href="#" role="button" style="color: black;font-size:19px">
            <lord-icon target="a" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/71-full-screen.json">
                <img alt="" loading="lazy" src="https://media.lordicon.com/icons/wired/flat/71-full-screen.svg">
            </lord-icon>
        </a>

        <!-- VISTA ESTUDIANTE  -->
        <?php
        if ($rol_sesion_usuario == "ESTUDIANTE") {
            foreach ($estudiantes as $estudiante) {
                if ($email_sesion == $estudiante['email']) {
                    $nivel = $estudiante['nivel'];
                    $turno = $estudiante['turno'];
                    $bloque = $estudiante['bloque'];
                    $paralelo = $estudiante['paralelo'];
                    $id_estudiante = $estudiante['id_estudiante'];
                }
            } ?>


            <div class="top-image-bxx">
                <img src="../public/img/letras/logo_letra.png" alt="Logo" class="top-image">
            </div>

            <div class="wrapper">
                <i id="left" class='bx bx-chevron-left'></i>
                <ul class="carousel">
                    <!-- Contenido original aquí -->
                    <a href="#" class="cards">
                        <img src="../public/img/pages/class-topics-page.png" alt="" width="400px" height="430px">
                    </a>
                    <a href="<?= APP_URL; ?>/admin/estudiantes/class_topics.php" class="cards hover-enlarge">
                        <img src="../public/img/pages/class-topics-page.png" alt="" width="400px" height="430px">
                    </a>
                    <a href="<?= APP_URL; ?>/admin/estudiantes/videos.php" class="cards">
                        <img src="../public/img/pages/books-page.png" alt="" width="400px" height="430px">
                    </a>
                    <a href="<?= APP_URL; ?>/admin/estudiantes/books.php" class="cards">
                        <img src="../public/img/pages/books-page.png" alt="" width="400px" height="430px">
                    </a>
                    <a href="<?= APP_URL; ?>/admin/estudiantes/listening.php" class="cards">
                        <img src="../public/img/pages/listen-page.png" alt="" width="400px" height="430px">
                    </a>
                </ul>
                <i id="right" class='bx bx-chevron-right'></i>
            </div>





        <?php
        }
        ?>

        <!-- VISTA ESTUDIANTE  -->



        <!-- VISTA COACH  -->
        <?php
        if ($rol_sesion_usuario == "COACH") {
            foreach ($docentes as $docente) {
                if ($email_sesion == $docente['email']) {
                    $nombre_rol = $docente['nombre_rol'];
                    $id_docente = $docente['id_docente'];
                }
            } ?>


            <div class="top-image-bxx hover-enlarge">
                <img src="../public/img/letras/logo_letra.png" alt="Logo" class="top-image">
            </div>
            <br><br><br><br><br>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-12 hover-enlarge">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary">
                            <lord-icon target="div" colors="primary:white" trigger="hover" src="https://media.lordicon.com/icons/system/regular/19-book.json">
                                <img alt="" loading="lazy" src="https://media.lordicon.com/icons/system/regular/19-book.svg">
                            </lord-icon>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text" style="font-weight: 400;">Class Topics</span>
                            <a href="<?= APP_URL; ?>/admin/estudiantes/class_topics.php" class="btn bg-primary btn-sm">Ver</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 hover-enlarge">
                    <div class="info-box">
                        <span class="info-box-icon bg-teal">
                            <lord-icon target="div" colors="primary:white" trigger="hover" src="https://media.lordicon.com/icons/system/regular/31-check.json">
                                <img alt="" loading="lazy" src="https://media.lordicon.com/icons/system/regular/31-check.svg">
                            </lord-icon>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text" style="font-weight: 400;">Asistencias</span>
                            <a href="<?= APP_URL; ?>/admin/asistencias" class="btn bg-teal btn-sm">Registrar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 hover-enlarge">
                    <div class="info-box">
                        <span class="info-box-icon bg-danger">
                            <lord-icon target="div" colors="primary:white" trigger="hover" src="https://media.lordicon.com/icons/system/regular/17-assignment.json">
                                <img alt="" loading="lazy" src="https://media.lordicon.com/icons/system/regular/17-assignment.svg">
                            </lord-icon>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text" style="font-weight: 400;">Calificaciones</span>
                            <a href="<?= APP_URL; ?>/admin/calificaciones" class="btn bg-danger btn-sm">Registrar</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        <!-- VISTA COACH  -->




        <!-- VISTA ADMINISTRADOR  -->
        <?php
        if ($rol_sesion_usuario == "ADMINISTRADOR") { ?>
            <div class="top-image-bxx">
                <img src="../public/img/letras/logo_letra.png" alt="Logo" class="top-image">
            </div>
            <br><br><br><br><br>
            <div class="row">
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-teal">
                        <div class="inner">
                            <?php
                            $contador_roles = 0;
                            foreach ($roles as $role) {
                                $contador_roles = $contador_roles + 1;
                            }
                            ?>
                            <h3><?= $contador_roles; ?></h3>
                            <p>Roles registrados</p>
                        </div>
                        <div class="icon">
                            <i class="fas"><i class="custom-icon bi bi-diagram-3-fill"></i></i>
                        </div>
                        <a href="<?= APP_URL ?>/admin/roles" class="small-box-footer">
                            Más información
                            <lord-icon target="div" colors="primary:white" style="height:18px;width:18px;padding-top:3px;" trigger="hover" src="https://media.lordicon.com/icons/system/solid/161-trending-flat.json">
                                <img alt="" loading="eager" src="https://media.lordicon.com/icons/system/solid/161-trending-flat.svg">
                            </lord-icon></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-lightblue">
                        <div class="inner">
                            <?php
                            $contador_usuarios = 0;
                            foreach ($usuarios as $usuario) {
                                $contador_usuarios = $contador_usuarios + 1;
                            }
                            ?>
                            <h3><?= $contador_usuarios; ?></h3>
                            <p>Usuarios registrados</p>
                        </div>
                        <div class="icon">
                            <i class="fas"><i class="custom-icon bi bi-people-fill"></i></i>
                        </div>
                        <a href="<?= APP_URL ?>/admin/usuarios" class="small-box-footer">
                            Más información
                            <lord-icon target="div" colors="primary:white" style="height:18px;width:18px;padding-top:3px;" trigger="hover" src="https://media.lordicon.com/icons/system/solid/161-trending-flat.json">
                                <img alt="" loading="eager" src="https://media.lordicon.com/icons/system/solid/161-trending-flat.svg">
                            </lord-icon></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-pink">
                        <div class="inner">
                            <?php
                            $contador_administrativos = 0;
                            foreach ($administrativos as $administrativo) {
                                $contador_administrativos = $contador_administrativos + 1;
                            }
                            ?>
                            <h3><?= $contador_administrativos; ?></h3>
                            <p>administrativos registrados</p>
                        </div>
                        <div class="icon">
                            <i class="fas"><i class="bi bi-person-fill-check"></i></i>
                        </div>
                        <a href="<?= APP_URL ?>/admin/administrativos" class="small-box-footer">
                            Más información
                            <lord-icon target="div" colors="primary:white" style="height:18px;width:18px;padding-top:3px;" trigger="hover" src="https://media.lordicon.com/icons/system/solid/161-trending-flat.json">
                                <img alt="" loading="eager" colors="primary:white" src="https://media.lordicon.com/icons/system/solid/161-trending-flat.svg">
                            </lord-icon>
                            </i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-indigo">
                        <div class="inner">
                            <?php
                            $contador_docentes = 0;
                            foreach ($docentes as $docente) {
                                $contador_docentes = $contador_docentes + 1;
                            }
                            ?>
                            <h3><?= $contador_docentes; ?></h3>
                            <p>Coaches registrados</p>
                        </div>
                        <div class="icon">
                            <i class="fas"><i class="bi bi-person-vcard-fill"></i></i>
                        </div>
                        <a href="<?= APP_URL ?>/admin/docentes" class="small-box-footer">
                            Más información
                            <lord-icon target="div" colors="primary:white" style="height:18px;width:18px;padding-top:3px;" trigger="hover" src="https://media.lordicon.com/icons/system/solid/161-trending-flat.json">
                                <img alt="" loading="eager" colors="primary:white" src="https://media.lordicon.com/icons/system/solid/161-trending-flat.svg">
                            </lord-icon>
                            </i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-gray">
                        <div class="inner">
                            <?php
                            $contador_estudiantes = 0;
                            foreach ($estudiantes as $estudiante) {
                                $contador_estudiantes = $contador_estudiantes + 1;
                            }
                            ?>
                            <h3><?= $contador_estudiantes; ?></h3>
                            <p>Estudiantes registrados</p>
                        </div>
                        <div class="icon">
                            <i class="fas"><i class="bi bi-mortarboard-fill"></i></i></i>
                        </div>
                        <a href="<?= APP_URL ?>/admin/estudiantes" class="small-box-footer">
                            Más información
                            <lord-icon target="div" colors="primary:white" style="height:18px;width:18px;padding-top:3px;" trigger="hover" src="https://media.lordicon.com/icons/system/solid/161-trending-flat.json">
                                <img alt="" loading="eager" colors="primary:white" src="https://media.lordicon.com/icons/system/solid/161-trending-flat.svg">
                            </lord-icon>
                            </i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-purple">
                        <div class="inner">
                            <?php
                            $contador_niveles = 0;
                            foreach ($niveles as $nivele) {
                                $contador_niveles = $contador_niveles + 1;
                            }
                            ?>
                            <h3><?= $contador_niveles; ?></h3>
                            <p>Niveles registrados</p>
                        </div>
                        <div class="icon">
                            <i class="fas"><i class="bi bi-bar-chart-fill"></i></i>
                        </div>
                        <a href="<?= APP_URL ?>/admin/niveles" class="small-box-footer">
                            Más información
                            <lord-icon target="div" colors="primary:white" style="height:18px;width:18px;padding-top:3px;" trigger="hover" src="https://media.lordicon.com/icons/system/solid/161-trending-flat.json">
                                <img alt="" loading="eager" src="https://media.lordicon.com/icons/system/solid/161-trending-flat.svg">
                            </lord-icon></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-red">
                        <div class="inner">
                            <?php
                            $contador_grados = 0;
                            foreach ($grados as $grado) {
                                $contador_grados = $contador_grados + 1;
                            }
                            ?>
                            <h3><?= $contador_grados; ?></h3>
                            <p>Cursos registrados</p>
                        </div>
                        <div class="icon">
                            <i class="fas"><i class="bi bi-layers-fill"></i></i>
                        </div>
                        <a href="<?= APP_URL ?>/admin/cursos" class="small-box-footer">
                            Más información
                            <lord-icon target="div" colors="primary:white" style="height:18px;width:18px;padding-top:3px;" trigger="hover" src="https://media.lordicon.com/icons/system/solid/161-trending-flat.json">
                                <img alt="" loading="eager" colors="primary:white" src="https://media.lordicon.com/icons/system/solid/161-trending-flat.svg">
                            </lord-icon>
                            </i>
                        </a>
                    </div>
                </div>


                <div class="col-lg-3 col-6">

                    <div class="small-box bg-primary">
                        <div class="inner">
                            <?php
                            $contador_materias = 0;
                            foreach ($materias as $materia) {
                                $contador_materias = $contador_materias + 1;
                            }
                            ?>
                            <h3 style="color: white;"><?= $contador_materias; ?></h3>
                            <p style="color: white;">Bloques registrados</p>
                        </div>
                        <div class="icon">
                            <i class="fas"><i class="bi bi-book-half"></i></i>
                        </div>
                        <a href="<?= APP_URL ?>/admin/bloques" class="small-box-footer">
                            Más información
                            <lord-icon target="div" colors="primary:white" style="height:18px;width:18px;padding-top:3px;" trigger="hover" src="https://media.lordicon.com/icons/system/solid/161-trending-flat.json">
                                <img alt="" loading="eager" src="https://media.lordicon.com/icons/system/solid/161-trending-flat.svg">
                            </lord-icon></i>
                        </a>
                    </div>
                </div>

            </div>
        <?php
        }
        ?>


    </div>
    </div>
    <!-- </TOPBAR> -->


    <script src="<?= APP_URL; ?>/public/js/student_homes.js"></script>
    <?php
    include('../layout/mensajes.php');
    include("../admin/layout/parte2.php");
    ?>