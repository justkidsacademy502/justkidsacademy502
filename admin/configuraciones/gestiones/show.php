<?php

$id_gestion =$_GET['id'];

include("../../../app/config.php");
include("../../../admin/layout/parte1.php");
include("../../../app/controllers/configuraciones/gestion/datos_gestion.php")
?>

       <!-- TOPBAR -->

<div class="custom-main custom-sidebar-active">
    <div class="row">
       <h1>Gestión: <?=$gestion;?></h1> 
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Datos Registrados</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Gestión Educativa</label>
                                <p><?=$gestion;?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Fecha y Hora de creación</label>
                                <p><?=$fyh_creacion;?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Estado</label>
                                <p>
                                    <?php
                                    if($estado == "1") echo "ACTIVO";
                                    else echo "INACTIVO";
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="<?=APP_URL;?>/admin/configuraciones/gestiones" class="btn btn-secondary">Volver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>

<?php
include('../../../layout/mensajes.php');
include("../../layout/parte2.php");
?>