<?php

$id_materia = $_GET['id'];

include("../../app/config.php");
include("../../admin/layout/parte1.php");
include("../../app/controllers/materias/datos_materias.php");
?>

       <!-- TOPBAR -->

<div class="custom-main custom-sidebar-active">
    <div class="row">
       <h1>Bloque: <?=$nombre_materia;?></h1> 
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
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Bloque</label>
                                <p><?=$nombre_materia;?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Fecha de creación</label>
                                <p><?=$fyh_creacion;?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
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
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="<?=APP_URL;?>/admin/bloques" class="btn btn-secondary">Volver</a>
                            </div>
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