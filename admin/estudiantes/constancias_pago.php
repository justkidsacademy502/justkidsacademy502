<?php

$id_estudiante = $_GET['id'];

include("../../app/config.php");
include("../../app/controllers/estudiantes/datos_del_estudiante.php");
include("../layout/parte1.php");
include("../../app/controllers/pagos/datos_pagos_estudiantes.php");
?>

<style>
    .custom-container {
        border-radius: 20px;
    }
</style>


<!-- TOPBAR -->

<div class="custom-main custom-sidebar-active">

    <center>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="../../public/img/Constancias.png" width="390px" height="390px" alt="user-avatar" class=" img-fluid">
                </div>
            </div>
        </div>
    </center>

    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-purple custom-container">
                <div class="card-body">
                    <div class="table-responsive mx-auto">
                        <table class="table table-borderless table-hover">
                            <tr class="bg-purple">
                                <th style="text-align: center;" hidden>Nro</th>
                                <th style="text-align: center;">Nro. Transacción</th>
                                <th style="text-align: center;">Fecha de pago</th>
                                <th style="text-align: center;">Proximo Pago</th>
                                <th style="text-align: center;">Mes Cancelado</th>
                                <th style="text-align: center;">Descuento</th>
                                <th style="text-align: center;">Monto Deposito</th>
                                <th style="text-align: center;">Ver Constancia</th>
                            </tr>
                            <?php
                            $contador_pagos = 0;
                            foreach ($pagos as $pago) {
                                $estudiante_id = $pago['estudiante_id'];
                                $id_pago = $pago['id_pago'];
                                $contador_pagos = $contador_pagos + 1; ?>
                                <tr>
                                    <td style="text-align: center;" hidden><?= $contador_pagos; ?></td>
                                    <td style="text-align: center;"><?= $pago['no_transaccion']; ?></td>
                                    <td style="text-align: center;"><?= $pago['fecha_pagado']; ?></td>
                                    <td style="text-align: center;"><?= $pago['proximo_pago']; ?></td>
                                    <td style="text-align: center;"><?= $pago['mes_pagado']; ?></td>
                                    <td style="text-align: center;"><?= $pago['descuento_pago']; ?></td>
                                    <td style="text-align: center;"><?= $pago['monto_pagado']; ?></td>
                                    <td class="text-center" ">
                         <div class=" btn-group" role="group" aria-label="Basic example">
                                        <a href="<?= APP_URL; ?>/admin/pagos/constancia_pago.php?id=<?= $id_pago; ?>&&id_estudiante=<?= $estudiante_id; ?>" target="_blank" type="button" class="btn bg-pink">
                                            <lord-icon target="a" style="width: 25px;height:25px;" colors="primary:white" trigger="hover" src="https://media.lordicon.com/icons/system/regular/14-article.json">
                                                <img alt="" loading="lazy" src="https://media.lordicon.com/icons/system/regular/14-article.svg">
                                            </lord-icon>
                                        </a>
                    </div>
                    </td>
                    </tr>
                <?php
                            }
                ?>
                </table>
                </div>
            </div>
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