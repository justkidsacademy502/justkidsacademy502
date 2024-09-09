<?php

$id_grado = $_GET['id_grado'];
$id_docente = $_GET['id_docente'];
$id_materia = $_GET['id_materia'];

include("../../app/config.php");
include("../../app/controllers/estudiantes/listado_de_estudiantes.php");
include("../../app/controllers/niveles/listado_de_niveles.php");
include("../layout/parte1.php");

foreach ($estudiantes as $estudiante) {

    if ($id_grado == $estudiante['id_grado']) {
        $nivel = $estudiante['nivel'];
        $bloque = $estudiante['bloque'];
        $paralelo = $estudiante['paralelo'];
    }
}
?>

<!-- TOPBAR -->

<div class="custom-main custom-sidebar-active">
    <div class="center">
        <h2>Diplomas del curso: <?= $bloque; ?> Sección <?= $paralelo; ?></h2>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-orange">
                <div class="card-header">
                    <h3 class="card-title">Estudiantes Registrados</h3>
                </div>
                <form action="<?= APP_URL; ?>/app/controllers/observaciones/create_diploma.php" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <input type="hidden" id="grado_id" name="grado_id" value="<?= $id_grado; ?>">
                        <br>
                        <table class="table table-striped table-bordered table-hover table-sm">
                            <thead>
                                <tr>
                                    <th>
                                        <center>Nro</center>
                                    </th>
                                    <th>
                                        <center>Nombres y Apellidos</center>
                                    </th>
                                    <th>
                                        <center>Nivel</center>
                                    </th>
                                    <th>
                                        <center>Diploma</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $contador_estudiantes = 0;
                                foreach ($estudiantes as $estudiante) {
                                    if ($id_grado == $estudiante['grado_id']) {
                                        $id_estudiante = $estudiante['id_estudiante'];
                                        $contador_estudiantes++;
                                ?>
                                        <tr>
                                            <td style="text-align: center;">
                                                <?= $contador_estudiantes; ?>
                                                <input type="hidden" name="estudiantes[]" value="<?= $id_estudiante; ?>">
                                            </td>
                                            <td style="text-align: center;"><?= htmlspecialchars($estudiante['nombres'] . " " . $estudiante['apellidos']); ?></td>
                                            <td>
                                                <select name="nivel[]" class="form-control">
                                                    <option value="STARTERS">STARTERS</option>
                                                    <option value="EXPLORERS">EXPLORERS</option>
                                                    <option value="MASTERS">MASTERS</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="file" name="files[]" accept="application/pdf" class="form-control">
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                        <hr>
                        <button type="submit" class="btn bg-orange">Subir Diploma</button>
                        <a href="<?= APP_URL; ?>/admin/observaciones/index.php" class="btn btn-secondary">Cancelar</a>
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