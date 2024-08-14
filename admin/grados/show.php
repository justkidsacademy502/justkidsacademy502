<?php

$id_grado = $_GET['id'];

include("../../app/config.php");
include("../../admin/layout/parte1.php");
include("../../app/controllers/grados/datos_grados.php");
?>

       <!-- TOPBAR -->

<div class="custom-main custom-sidebar-active">
    <div class="row">
       <h1>Grado: <?=$curso." - ".$paralelo?></h1> 
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Llene los datos</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nivel</label>
                                <p><?=$nivel?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Fecha de Creación</label>
                                <p><?=$fyh_creacion?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Curso</label>
                                <p><?=$curso?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Sección</label>
                                <p><?=$paralelo?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Horario</label>
                                <p><?=$horario?></p>                         
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Turno</label>
                                <p><?=$turno?></p>                         
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
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
                                <a href="<?=APP_URL;?>/admin/grados" class="btn btn-secondary">Volver</a>
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