<?php


$id_estudiante = $_GET['id'];

include("../../app/config.php");
include("../layout/parte1.php");
include("../../app/controllers/estudiantes/datos_del_estudiante.php");
include("../../app/controllers/docentes/listado_de_asignaciones.php");
include("../../app/controllers/observaciones/listado_de_observaciones.php");

?>

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
                    <img src="../../public/img/levels.png" width="250px" height="250px" alt="user-avatar" class=" img-fluid">
                </div>
            </div>
        </div>
    </center>
    <br>


    <div class="container mt-4">
        <div class="row">
            <!-- Primer fila de tablas en tarjetas -->
            <div class="col-md-6 card-container">
                <div class="card">
                    <div class="card-header text-center">
                        Observaciones
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless table-hover table-responsive" id="example1">
                            <thead class="bg-indigo">
                                <tr>
                                    <th>Nro</th>
                                    <th>Nivel</th>
                                    <th>Bloque</th>
                                    <th>Observación</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $contador_observaciones = 0;
                                foreach ($observaciones as $observacione) {
                                    if ($id_estudiante == $observacione['estudiante_id']) {
                                        $id_observacion = $observacione['id_observacion'];
                                        $nivel = $observacione['nivel'];
                                        $bloque = $observacione['bloque'];
                                        $archivo = $observacione['archivo'];
                                        $contador_observaciones = $contador_observaciones + 1; ?>
                                        <tr>
                                            <td><?= $contador_observaciones; ?></td>
                                            <td><?= $nivel; ?></td>
                                            <td><?= $bloque; ?></td>
                                            <td class="text-center">
                                                <a href="../../public/pdf/<?= $observacione['archivo']; ?>" target="_blank" type="button" class="btn bg-indigo">
                                                    ver
                                                </a>
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
            </div>



            
             <!-- Segunda fila de tablas en tarjetas -->
            <div class="col-md-6 card-container">
                <div class="card">
                    <div class="card-header text-center">
                        Diplomas
                    </div>
                    <div class="card-body">
                                
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
            "searching":false,
            "lengthChange": false,
            "autoWidth": false,
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>