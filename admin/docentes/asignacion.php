<?php
include("../../app/config.php");
include("../../app/controllers/docentes/listado_de_docentes.php");
include("../../app/controllers/niveles/listado_de_niveles.php");
include("../../app/controllers/grados/listado_de_grados.php");
include("../../app/controllers/materias/listado_de_materias.php");
include("../../app/controllers/docentes/listado_de_asignaciones.php");
include("../layout/parte1.php");
?>

<!-- TOPBAR -->

<div class="custom-main custom-sidebar-active">
    <div class="center">
        <h1>Asignaciones de cursos</h1>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Coaches Asignados</h3>
                    <div class="card-tools">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_asignacion">
                            <i class="bi bi-plus"></i> Asignar Curso
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-striped table-bordered table-hover table-sm">
                        <thead>
                            <tr>
                                <th>
                                    <center>Nro</center>
                                </th>
                                <th>
                                    <center>Nombres del Coach</center>
                                </th>
                                <th>
                                    <center>DPI</center>
                                </th>
                                <th>
                                    <center>Email</center>
                                </th>
                                <th>
                                    <center>Telefono</center>
                                </th>
                                <th>
                                    <center>Estado</center>
                                </th>
                                <th>
                                    <center>Cursos Asignados</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $contador_docentes = 0;
                            foreach ($docentes as $docente) {
                                $id_docente = $docente['id_docente'];
                                $contador_docentes = $contador_docentes + 1; ?>
                                <tr>
                                    <td style="text-align: center;"><?= $contador_docentes; ?></td>
                                    <td><?= $docente['nombres'] . " " . $docente['apellidos']; ?></td>
                                    <td><?= $docente['dpi']; ?></td>
                                    <td><?= $docente['email']; ?></td>
                                    <td><?= $docente['celular']; ?></td>
                                    <td style="text-align: center;">
                                        <?php
                                        if ($docente['estado'] == "1") { ?>
                                            <button class="btn btn-success btn-sm" style="border-radius: 20px;">ACTIVO</button>
                                        <?php
                                        } else { ?>
                                            <button class="btn btn-danger btn-sm" style="border-radius: 20px;">INACTIVO</button>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <center>
                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_bloques<?= $id_docente; ?>">
                                                <i class="bi bi-postcard"> </i> Ver Asignaciones
                                            </button>
                                        </center>
                                        <!-- Modal -->
                                        <div class="modal fade" id="modal_bloques<?= $id_docente; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="background-color:#007bff;color:white;">
                                                        <h5 class="modal-title" id="exampleModalLabel">Cursos Asignados</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Docente: <b><?= $docente['nombres'] . ' ' . $docente['apellidos']; ?></b></p>
                                                        <hr>
                                                        <table class="table table-bordered table-striped tabled-sm table-hover">
                                                            <tr>
                                                                <th>
                                                                    <center>Nro</center>
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
                                                                    <center>Sección</center>
                                                                </th>
                                                                <th>
                                                                    <center>Bloque</center>
                                                                </th>
                                                                <th>
                                                                    <center>Acciones</center>
                                                                </th>
                                                            </tr>
                                                            <?php
                                                            $contador = 0;
                                                            foreach ($asignaciones as $asignacione) {
                                                                $id_asignacion = $asignacione['id_asignacion'];
                                                                if ($asignacione['docente_id'] == $id_docente) {
                                                                    $contador = $contador + 1; ?>
                                                                    <tr>
                                                                        <td>
                                                                            <center><?= $contador; ?></center>
                                                                        </td>
                                                                        <td>
                                                                            <center><?= $asignacione['nivel']; ?></center>
                                                                        </td>
                                                                        <td>
                                                                            <center><?= $asignacione['turno']; ?></center>
                                                                        </td>
                                                                        <td>
                                                                            <center><?= $asignacione['bloque']; ?></center>
                                                                        </td>
                                                                        <td>
                                                                            <center><?= $asignacione['horario']; ?></center>
                                                                        </td>
                                                                        <td>
                                                                            <center><?= $asignacione['paralelo']; ?></center>
                                                                        </td>
                                                                        <td>
                                                                            <center><?= $asignacione['bloque']; ?></center>
                                                                        </td>
                                                                        <td>
                                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                                                <a type="button" data-toggle="modal" data-target="#modal_edicion<?= $id_asignacion; ?>" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade" id="modal_edicion<?= $id_asignacion; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                    <div class="modal-dialog modal-lg">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header" style="background-color:#28a745;color:white;">
                                                                                                <h5 class="modal-title" id="exampleModalLabel">Asignación de Cursos</h5>
                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <form action="<?= APP_URL; ?>/app/controllers/docentes/update_asignaciones.php" method="post">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12">
                                                                                                            <div class="form-group">
                                                                                                                <input type="text" name="id_asignacion" value="<?=$id_asignacion;?>" hidden>
                                                                                                                <label for="" class="form-group">Nivel</label>
                                                                                                                <select name="id_nivel" id="" class="form-control">
                                                                                                                    <?php
                                                                                                                    foreach ($niveles as $nivele) {
                                                                                                                        $id_nivel = $nivele['id_nivel']; ?>
                                                                                                                        <option value="<?= $id_nivel; ?>" <?=$nivele['id_nivel']==$asignacione['nivel_id'] ? 'selected' : ''?>><?= $nivele['nivel'] . " " . $nivele['turno']; ?></option>
                                                                                                                    <?php
                                                                                                                    }
                                                                                                                    ?>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-md-12">
                                                                                                            <div class="form-group">
                                                                                                                <label for="" class="form-group">Curso</label>
                                                                                                                <select name="id_grado" id="" class="form-control">
                                                                                                                    <?php
                                                                                                                    foreach ($grados as $grado) {
                                                                                                                        $id_grado = $grado['id_grado']; ?>
                                                                                                                        <option value="<?= $id_grado; ?>" <?=$grado['id_grado']==$asignacione['grado_id'] ? 'selected' : ''?>><?= $grado['bloque'] . " - " . $grado['paralelo'] . " - " . $grado['horario']; ?></option>
                                                                                                                    <?php
                                                                                                                    }
                                                                                                                    ?>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-md-12">
                                                                                                            <div class="form-group">
                                                                                                                <label for="" class="form-group">Bloques</label>
                                                                                                                <select name="id_materia" id="" class="form-control">
                                                                                                                    <?php
                                                                                                                    foreach ($materias as $materia) {
                                                                                                                        $id_materia = $materia['id_materia']; ?>
                                                                                                                        <option value="<?= $id_materia; ?>" <?=$materia['id_materia']==$asignacione['materia_id'] ? 'selected' : ''?>><?= $materia['nombre_materia']; ?></option>
                                                                                                                    <?php
                                                                                                                    }
                                                                                                                    ?>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                                                <button type="submit" class="btn btn-success">Actualizar</button>
                                                                                            </div>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>



                                                                                <form action="<?= APP_URL; ?>/app/controllers/docentes/delete_asignacion.php" onclick="preguntar<?= $id_asignacion; ?>(event)" method="post" id="miFormulario<?= $id_asignacion; ?>">
                                                                                    <input type="text" name="id_asignacion" value="<?= $id_asignacion; ?>" hidden>
                                                                                    <button type="submit" class="btn btn-danger" style="border-radius: 0px 5px 5px 0px;"><i class="bi bi-trash3"></i></button>
                                                                                </form>
                                                                                <script>
                                                                                    function preguntar<?= $id_asignacion; ?>(event) {
                                                                                        event.preventDefault();
                                                                                        swal.fire({
                                                                                            title: 'Eliminar registro',
                                                                                            text: '¿Desea eliminar este registro?',
                                                                                            icon: 'question',
                                                                                            showDenyButton: true,
                                                                                            confirmButtonText: 'Eliminar',
                                                                                            confirmButtonColor: '#F44336',
                                                                                            denyButtonColor: '#938484',
                                                                                            denyButtonText: 'Cancelar',
                                                                                        }).then((result) => {
                                                                                            if (result.isConfirmed) {
                                                                                                var form = $('#miFormulario<?= $id_asignacion; ?>')
                                                                                                form.submit();
                                                                                            }
                                                                                        });
                                                                                    }
                                                                                </script>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                            <?php
                                                                }
                                                            }
                                                            ?>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
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

<!-- Modal -->
<div class="modal fade" id="modal_asignacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#007bff;color:white;">
                <h5 class="modal-title" id="exampleModalLabel">Asignación de Cursos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= APP_URL; ?>/app/controllers/docentes/create_asignaciones.php" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="form-group">Coach</label>
                                <select name="id_docente" id="" class="form-control">
                                    <?php
                                    foreach ($docentes as $docente) {
                                        $id_docente = $docente['id_docente']; ?>
                                        <option value="<?= $id_docente; ?>"><?= $docente['nombres'] . " " . $docente['apellidos']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="form-group">Nivel</label>
                                <select name="id_nivel" id="" class="form-control">
                                    <?php
                                    foreach ($niveles as $nivele) {
                                        $id_nivel = $nivele['id_nivel']; ?>
                                        <option value="<?= $id_nivel; ?>"><?= $nivele['nivel'] . " " . $nivele['turno']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="form-group">Curso</label>
                                <select name="id_grado" id="" class="form-control">
                                    <?php
                                    foreach ($grados as $grado) {
                                        $id_grado = $grado['id_grado']; ?>
                                        <option value="<?= $id_grado; ?>"><?= $grado['bloque'] . " - " . $grado['paralelo'] . " - " . $grado['horario']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="form-group">Bloques</label>
                                <select name="id_materia" id="" class="form-control">
                                    <?php
                                    foreach ($materias as $materia) {
                                        $id_materia = $materia['id_materia']; ?>
                                        <option value="<?= $id_materia; ?>"><?= $materia['nombre_materia']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
            </form>
        </div>
    </div>
</div>