<?php
include("../../app/config.php");
include("../../admin/layout/parte1.php");
?>

<!-- TOPBAR -->

<div class="custom-main custom-sidebar-active">
    <div class="row">
        <h1>Registro de un permiso</h1>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Llene los datos</h3>
                </div>
                <div class="card-body">
                    <form action="<?=APP_URL;?>/app/controllers/roles/create_permisos.php" method="post">
                    <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Nombre de la URL</label>
                                    <input type="text" name="nombre_url" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">URL</label>
                                    <input type="text" name="url" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Registrar</button>
                                    <a href="<?= APP_URL; ?>/admin/roles/permisos.php" class="btn btn-secondary">Cancelar</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('../../layout/mensajes.php');
include("../layout/parte2.php");
?>