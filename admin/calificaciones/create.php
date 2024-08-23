<?php

$id_grado = $_GET['id_grado'];
$id_docente = $_GET['id_docente'];
$id_materia = $_GET['id_materia'];

include("../../app/config.php");
include("../../app/controllers/estudiantes/listado_de_estudiantes.php");
include("../../app/controllers/materias/listado_de_materias.php");
include("../../app/controllers/calificaciones/listado_de_calificaciones.php");
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
        <h2>Estudiantes del curso: <?= $bloque; ?> Sección <?= $paralelo; ?></h2>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Estudiantes Registrados</h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-striped table-bordered table-hover table-sm">
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
                                    <center>Turno</center>
                                </th>
                                <th>
                                    <center>Curso</center>
                                </th>
                                <th>
                                    <center>Horario</center>
                                </th>
                                <th>
                                    <center>Bloque 1</center>
                                </th>
                                <th>
                                    <center>Bloque 2</center>
                                </th>
                                <th>
                                    <center>Bloque 3</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $contador_estudiantes = 0;
                            $nota1= "";
                            $nota2= "";
                            $nota3= "";
                            foreach ($estudiantes as $estudiante) {

                                if ($id_grado == $estudiante['grado_id']) {
                                    $id_estudiante = $estudiante['id_estudiante'];
                                    $contador_estudiantes = $contador_estudiantes + 1; ?>
                                    <tr>
                                        <td style="text-align: center;">
                                            <input type="text" id="estudiante_<?=$contador_estudiantes;?>"
                                            value="<?=$id_estudiante;?>" hidden>
                                            <?= $contador_estudiantes; ?>
                                        </td>
                                        <td><?= $estudiante['nombres'] . " " . $estudiante['apellidos']; ?></td>
                                        <td><?= $estudiante['nivel']; ?></td>
                                        <td><?= $estudiante['turno']; ?></td>
                                        <td><?= $estudiante['bloque'] . " - " . $estudiante['paralelo']; ?></td>
                                        <td><?= $estudiante['horario']; ?></td>
                                        <?php
                                        foreach ($calificaciones as $calificacione) {
                                            if( ($calificacione['docente_id']==$id_docente)
                                            &&  ($calificacione['estudiante_id']==$id_estudiante)
                                            &&  ($calificacione['materia_id']==$id_materia)
                                            ){
                                                $nota1 = $calificacione['nota1'];
                                                $nota2 = $calificacione['nota2'];
                                                $nota3 = $calificacione['nota3'];
                                            }
                                        }
                                        ?>
                                        <td>
                                            <input style="text-align: center;" value="<?=$nota1;?>" id="nota1_<?=$contador_estudiantes;?>" type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input style="text-align: center;" value="<?=$nota2;?>" id="nota2_<?=$contador_estudiantes;?>" type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input style="text-align: center;" value="<?=$nota3;?>" id="nota3_<?=$contador_estudiantes;?>" type="text" class="form-control">
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
                    <button class="btn btn-primary" id="btn_guardar">Guardar Notas</button>
                    <script>
                        $('#btn_guardar').click(function () {
                            var n = '<?=$contador_estudiantes;?>';
                            var i = 1;
                            var id_docente = '<?=$id_docente;?>';
                            var id_materia = '<?=$id_materia;?>';


                            for(i = 1; i<=n ;i++){

                                var a = '#nota1_'+i;
                                var nota1 = $(a).val();

                                var b = '#nota2_'+i;
                                var nota2 = $(b).val();

                                var c = '#nota3_'+i;
                                var nota3 = $(c).val();

                                var d = '#estudiante_'+i;
                                var id_estudiante = $(d).val();

                                //alert("id_docente:"+id_docente+"-id_estudiante:"+id_estudiante+" -id_materia:"+id_materia);
                                var url = "../../app/controllers/calificaciones/create.php";
                                $.get(url,{id_docente:id_docente,id_estudiante:id_estudiante,id_materia:id_materia,nota1:nota1,nota2:nota2,nota3:nota3},function (datos)  {
                                    $('#respuesta').html(datos);
                                }); 
                            }
                            Swal.fire({
                                position: "center",
                                icon: "success",
                                title: "Se actualizó las notas",
                                showConfirmButton: false,
                                timer: 3500
                            });
                        });
                    </script>
                    <div id="respuesta"></div>
                </div>
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
            "buttons": ["excel", "pdf", "print", "colvis"]
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