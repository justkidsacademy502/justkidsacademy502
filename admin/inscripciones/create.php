<?php
include("../../app/config.php");
include("../../admin/layout/parte1.php");
include("../../app/controllers/roles/listado_de_roles.php");
include("../../app/controllers/niveles/listado_de_niveles.php");
include("../../app/controllers/grados/listado_de_grados.php");
?>

       <!-- TOPBAR -->

<div class="custom-main custom-sidebar-active">
    <div class="row">
       <h1>Creación de un nuevo Estudiante</h1> 
    </div>
    <br>
    <form action="<?=APP_URL;?>/app/controllers/inscripciones/create.php" method="post">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Llene los datos del estudiante</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Nombre del Rol</label>
                                <a href="<?=APP_URL;?>/admin/roles/create.php" style="margin-left: 5px;" class="btn btn-primary btn-sm"><i class="bi bi-file-plus"></i></a>
                                <div class="form-inline">
                                   <select name="rol_id" id="" class="form-control">
                                   <?php
                                   foreach ($roles as $role) { ?>
                                       <option value="<?=$role['id_rol'];?>" <?=$role['nombre_rol']=="ESTUDIANTE" ? 'selected' : ''?>><?=$role['nombre_rol'];?></option>
                                   <?php
                                   }
                                   ?>
                                   </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Nombres</label>
                                <input type="text" name="nombres" class="form-control" require>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Apellidos</label>
                                <input type="text" name="apellidos" class="form-control" require>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Fecha de nacimiento</label>
                                <input type="date" name="fecha_nacimiento" class="form-control" require>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control" require>
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
            <div class="card card-outline card-warning">
                <div class="card-header">
                    <h3 class="card-title">Llene los datos academicos</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nivel</label>
                              
                                   <select name="nivel_id" id="" class="form-control" style="padding-right: 50%;">
                                   <?php
                                   foreach ($niveles as $nivele) { ?>
                                       <option value="<?=$nivele['id_nivel'];?>"><?=$nivele['nivel']." - ".$nivele['turno'];?></option>
                                   <?php
                                   }
                                   ?>
                                   </select>
                             
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Curso</label>
                                <select name="grado_id" id="" class="form-control">
                                   <?php
                                   foreach ($grados as $grado) { ?>
                                       <option value="<?=$grado['id_grado'];?>"><?=$grado['bloque']." - ".$grado['paralelo'];?></option>
                                   <?php
                                   }
                                   ?>
                                   </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Horario</label>
                                <input type="text" name="horario" class="form-control" require>
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
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Llene los datos del padre de familia</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Nombres y Apellidos</label>
                                <input type="text" name="nombres_apellidos_ppff" class="form-control" require>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">DPI</label>
                                <input type="text" name="dpi_ppf" class="form-control" require>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Telefono</label>
                                <input type="number" name="celular_ppff" class="form-control" require>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Relación con el estudiante</label>
                                <input type="text" name="relacion_ppff" class="form-control" require>
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
                <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
                <a href="<?=APP_URL;?>/admin/estudiantes" class="btn btn-secondary btn-lg">Cancelar</a>
            </div>
        </div>
    </div>
    </form>
</div>

<?php
include('../../layout/mensajes.php');
include("../layout/parte2.php");
?>
