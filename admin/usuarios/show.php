<?php

$id_usuario = $_GET['id'];

include("../../app/config.php");
include("../../admin/layout/parte1.php");
include("../../app/controllers/usuarios/datos_del_usuario.php");
?>

       <!-- TOPBAR -->

<div class="custom-main custom-sidebar-active">
    <div class="row">
       <h1>Usuario: <?=$email;?></h1> 
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Datos registrados</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nombre del Rol</label>
                                <p><?=$nombre_rol;?></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Email</label>
                                <p><?=$email;?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Fecha y hora de creación</label>
                                <p><?=$fyh_creacion;?></p>
                            </div>
                         </div>
                         <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Estado</label>
                                <p><?php
                                if ($estado == '1') {
                                    echo "ACTIVO";
                                }else {
                                    echo "INACTIVO";
                                }
                                ?></p>
                            </div>
                         </div>
                        </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="<?=APP_URL;?>/admin/usuarios" class="btn btn-secondary">Volver</a>
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
