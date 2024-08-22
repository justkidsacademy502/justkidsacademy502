<?php

$id_estudiante = $_GET['id'];

include("../../app/config.php");
include("../../admin/layout/parte1.php");
include(".././../app/controllers/estudiantes/datos_del_estudiante.php");
?>

       <!-- TOPBAR -->

<div class="custom-main custom-sidebar-active">
    <div class="row">
       <h1>Datos del estudiante: <?=$nombres." ".$apellidos;?></h1> 
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Datos del estudiante</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Nombre del Rol</label>
                                <div class="form-inline">
                                <p><?=$nombre_rol;?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Nombres</label>
                                <p><?=$nombres;?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Apellidos</label>
                                <p><?=$apellidos;?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Fecha de nacimiento</label>
                                <p><?=$fecha_nacimiento;?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Email</label>
                                <p><?=$email;?></p>
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
                </div>
            </div>
        </div>  
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Datos academicos</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nivel</label>
                                <p><?=$nivel." - ".$turno;?></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Curso</label>
                                <p><?=$bloque." - ".$paralelo;?></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Horario</label>
                                <p><?=$horario;?></p>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>  
    </div>  

    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Datos del padre de familia</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Nombres y Apellidos</label>
                                <p><?=$nombres_apellidos_ppff;?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">DPI</label>
                                <p><?=$dpi_ppf;?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Telefono</label>
                                <p><?=$celular_ppff;?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Relación con el estudiante</label>
                                <p><?=$relacion_ppff;?></p>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>  
    </div>  
    
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <a href="<?=APP_URL;?>/admin/estudiantes" class="btn btn-secondary btn-lg">Volver</a>
            </div>
        </div>
    </div>
</div>

<?php
include('../../layout/mensajes.php');
include("../layout/parte2.php");
?>
