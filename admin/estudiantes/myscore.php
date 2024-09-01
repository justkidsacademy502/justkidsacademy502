<?php


$id_estudiante = $_GET['id'];

include("../../app/config.php");
include("../layout/parte1.php");
include("../../app/controllers/estudiantes/datos_del_estudiante.php");
include("../../app/controllers/docentes/listado_de_asignaciones.php");
include("../../app/controllers/docentes/listado_de_docentes.php");
include("../../app/controllers/asistencias/listado_de_asistencias.php");
include("../../app/controllers/calificaciones/listado_de_calificaciones.php");

?>

<style>
    .custom-container {
        border-radius: 20px;
    }
</style>

<!-- TOPBAR -->
<div class="custom-main custom-sidebar-active">


    <a style="display: flex; justify-content: center; align-items: center; position: absolute; top: 10px; right: 10px;background-color: white;border-radius:10px;padding:5px;box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);height:35px;width:35px;" data-widget="fullscreen" href="#" role="button" style="color: black;font-size:19px">
        <lord-icon target="a" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/71-full-screen.json">
            <img alt="" loading="lazy" src="https://media.lordicon.com/icons/wired/flat/71-full-screen.svg">
        </lord-icon>
    </a>


    <center>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="../../public/img/My_score.png" width="250px" height="250px" alt="user-avatar" class=" img-fluid">
                </div>
            </div>
        </div>
    </center>
    <br>
    <div class="container-fluid">
        <div class="row" style="display: flex;justify-content:center;">
            <div class="card bg-light d-flex flex-fill col-md-6 custom-container">
                <div class="card-body pt-0">
                    <br>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <img id="profilePic" src="../../public/img/img6.png" alt="Profile Picture">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12 text-center">
                            <select id="profilePicSelector" class="custom-select text-center">
                                <option value="../../public/img/img5.png" data-img="../../public/img/img5.png">Milaneso</option>
                                <option value="../../public/img/img4.png" data-img="../../public/img/img4.png">Milaneso</option>
                                <option value="../../public/img/img7.png" data-img="../../public/img/img7.png">Milaneso</option>
                                <option value="../../public/img/milaneso.png" data-img="../../public/img/milaneso.png">Milaneso</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2 class="lead"><?= $nombres . " " . $apellidos; ?></h2>
                        </div>
                    </div>
                    <div class="bd-example">
                        <table class="table table-borderless table-hover text-center table-responsive" style="margin-left: 0px;">
                            <thead>
                                <tr>
                                    <th scope="col" class="bg-teal" style="color: white;">Nivel</th>
                                    <th scope="col" class="bg-teal" style="color: white;">Turno</th>
                                    <th scope="col" class="bg-teal" style="color: white;">Bloque</th>
                                    <th scope="col" class="bg-teal" style="color: white;">Seccion</th>
                                    <th scope="col" class="bg-teal" style="color: white;">Horario</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $nivel; ?></td>
                                    <td><?= $turno; ?></td>
                                    <td><?= $bloque; ?></td>
                                    <td><?= $paralelo; ?></td>
                                    <td><?= $horario; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <center>
                        <a href="#" class="btn btn-app" data-toggle="modal" data-target="#exampleModal">
                            <lord-icon target="a" style="width:20px;height:20px;" trigger="hover" src="https://media.lordicon.com/icons/system/regular/23-calendar.json">
                                <img alt="" loading="lazy" src="https://media.lordicon.com/icons/system/regular/23-calendar.svg">
                            </lord-icon><br>
                            Asistencias
                        </a>
                        <a href="#" class="btn btn-app" data-toggle="modal" data-target="#modal_calificaciones">
                            <lord-icon target="a" style="width:20px;height:20px;" trigger="hover" src="https://media.lordicon.com/icons/system/regular/114-edit-pencil-rename.json">
                                <img alt="" loading="lazy" src="https://media.lordicon.com/icons/system/regular/114-edit-pencil-rename.svg">
                            </lord-icon><br>
                            Notas
                        </a>
                        <!-- Modal Asistencias -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content custom-container">
                                    <div class="modal-header bg-indigo">
                                        <h5 class="modal-title text-center" id="exampleModalLabel">Historial de Asistencias de: <b><?= $nombres . " " . $apellidos; ?></b></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="table-responsive">
                                            <table id="example1" class="table table-borderless table-hover text-center">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="bg-indigo" style="color: white;" hidden>Nro</th>
                                                        <th scope="col" class="bg-indigo" style="color: white;">Fecha</th>
                                                        <th scope="col" class="bg-indigo" style="color: white;">Nivel</th>
                                                        <th scope="col" class="bg-indigo" style="color: white;">Horario</th>
                                                        <th scope="col" class="bg-indigo" style="color: white;">Asistencia</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $contador_asistencias = 0;
                                                    foreach ($asistencias as $asistencia) {
                                                        if ($id_estudiante == $asistencia['estudiante_id']) {
                                                            $id_asistencia = $asistencia['id_asistencia'];
                                                            $presente = $asistencia['presente'];
                                                            $fecha_asistencia = $asistencia['fecha_asistencia'];
                                                            $contador_asistencias = $contador_asistencias + 1; ?>
                                                            <tr>
                                                                <td hidden><?= $contador_asistencias; ?></td>
                                                                <td><?= $fecha_asistencia; ?></td>
                                                                <td><?= $nivel; ?></td>
                                                                <td><?= $horario; ?></td>
                                                                <td style="text-align: center;">
                                                                    <?php
                                                                    if ($asistencia['presente'] == "NO ASISTIÓ") { ?>
                                                                        <button class="btn bg-danger btn-sm" style="border-radius: 20px;"><?= $presente; ?></button>
                                                                    <?php
                                                                    } else if ($asistencia['presente'] == "PERMISO") { ?>
                                                                        <button class="btn btn-warning btn-sm" style="border-radius: 20px;color:white;"><?= $presente; ?></button>
                                                                    <?php
                                                                    } else { ?>
                                                                        <button class="btn bg-teal btn-sm" style="border-radius: 20px;"><?= $presente; ?></button>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </td>
                                                        <?php
                                                        }
                                                    }
                                                        ?>
                                                            </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Volver</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </center>
                    <br>
                    <!-- Modal Calificaciones -->
                    <div class="modal fade" id="modal_calificaciones" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content custom-container">
                                <div class="modal-header bg-danger">
                                    <h5 class="modal-title text-center" id="exampleModalLabel">Calificaciones de: <b><?= $nombres . " " . $apellidos; ?></b></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <div class="table-responsive">
                                        <table id="example1" class="table table-borderless table-hover text-center">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="bg-danger" style="color: white;">Nro</th>
                                                    <th scope="col" class="bg-danger" style="color: white;">Nivel</th>
                                                    <th scope="col" class="bg-danger" style="color: white;">Bloque 1</th>
                                                    <th scope="col" class="bg-danger" style="color: white;">Bloque 2</th>
                                                    <th scope="col" class="bg-danger" style="color: white;">Bloque 3</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $contador_calificaciones = 0;
                                                foreach ($calificaciones as $calificacione) {
                                                    if ($id_estudiante == $calificacione['estudiante_id']) {
                                                        $nota1 = $calificacione['nota1'];
                                                        $nota1 = $calificacione['nota1'];
                                                        $nota2 = $calificacione['nota2'];
                                                        $nota3 = $calificacione['nota3'];
                                                        $contador_calificaciones = $contador_calificaciones + 1; ?>
                                                        <tr>
                                                            <td><?= $contador_calificaciones; ?></td>
                                                            <td><?=$nivel;?></td>
                                                            <td><?= $nota1; ?></td>
                                                            <td><?= $nota2; ?></td>
                                                            <td><?= $nota3; ?></td>
                                                    <?php
                                                    }
                                                }
                                                    ?>
                                                        </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Volver</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>








<?php
include("../layout/parte2.php");
?>

<script>
    $(function() {
        $("#example1").DataTable({
            "pageLength": 6,
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>