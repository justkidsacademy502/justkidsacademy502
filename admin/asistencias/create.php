<?php

$id_grado = $_GET['id_grado'];
$id_docente = $_GET['id_docente'];
$id_materia = $_GET['id_materia'];

include("../../app/config.php");
include("../../app/controllers/estudiantes/listado_de_estudiantes.php");
include("../../app/controllers/grados/listado_de_grados.php");
include("../../app/controllers/asistencias/listado_de_asistencias.php");
include("../layout/parte1.php");

foreach ($estudiantes as $estudiante) {

    if ($id_grado == $estudiante['id_grado']) {
        $bloque = $estudiante['bloque'];
        $paralelo = $estudiante['paralelo'];
    }
}
?>

<!-- TOPBAR -->

<div class="custom-main custom-sidebar-active">
    <div class="center">
        <h2>Asistencia del curso: <?= $bloque; ?> Sección <?= $paralelo; ?></h2>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Estudiantes Registrados</h3>
                </div>
                <form action="<?=APP_URL;?>/app/controllers/asistencias/create.php" method="post"">
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover table-sm">
                        <div class="row">
                        <input type="text" name="docente_id" value="<?=$id_docente;?>" hidden>
                        <input type="text" name="grado_id" value="<?=$id_grado;?>" hidden>
                            <div class="col-md-4">
                            <h3><b>Fecha:</b></h3>
                            <input type="date" class="form-control" name="fecha_asistencia" value="<?=$fecha_actual;?>">
                            </div>
                        </div>
                        <br>
                        <thead>
                            <tr>
                                <th>
                                    <center>Nro</center>
                                </th>
                                <th>
                                    <center>Nombres y Apellidos</center>
                                </th>
                                <th>
                                    <center>Asistencia</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $contador_estudiantes = 0;
                            foreach ($estudiantes as $estudiante) {

                                if ($id_grado == $estudiante['grado_id']) {
                                    $id_estudiante = $estudiante['id_estudiante'];
                                    $contador_estudiantes = $contador_estudiantes + 1; ?>
                                    <tr>
                                        <td style="text-align: center;">
                                            <input type="text" id="estudiante_<?= $contador_estudiantes; ?>"
                                                value="<?= $id_estudiante; ?>" hidden>
                                            <?= $contador_estudiantes; ?>
                                        </td>
                                        <td style="text-align: center;"><?= $estudiante['nombres'] . " " . $estudiante['apellidos']; ?></td>
                                        <td>
                                            <select name="asistencia[<?= $estudiante['id_estudiante']; ?>]" id="" class="form-control">
                                                <option value="ASISTIÓ">ASISTIÓ</option>
                                                <option value="NO ASISTIÓ">NO ASISTIÓ</option>
                                                <option value="PERMISO">PERMISO</option>
                                            </select>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            $contador_estudiantes = $contador_estudiantes;
                            ?>
                        </tbody>
                    </table>
                    <hr>
                    <button type="submit" class="btn btn-primary">Guardar Asistencia</button>
                    <a href="<?=APP_URL;?>/admin/asistencias/index.php" class="btn btn-secondary">Cancelar</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include('../../layout/mensajes.php');
include("../layout/parte2.php");
?>

<script>
    $(function() {
        $("#example1").DataTable({
            "pageLength": 5,
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>