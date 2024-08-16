<?php

$id_estudiante = $_GET['id'];

include("../../app/config.php");
include("../../admin/layout/parte1.php");
include("../../app/controllers/roles/listado_de_roles.php");
include("../../app/controllers/niveles/listado_de_niveles.php");
include("../../app/controllers/grados/listado_de_grados.php");
include(".././../app/controllers/estudiantes/datos_del_estudiante.php");
?>

       <!-- TOPBAR -->

<div class="custom-main custom-sidebar-active">
    <div class="row">
       <h1>Modificar estudiante: <?=$nombres." ".$apellidos;?></h1> 
    </div>
    <br>
    <form action="<?=APP_URL;?>/app/controllers/estudiantes/update.php" method="post">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Llene los datos del estudiante</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="text" value="<?=$id_usuario;?>" name="id_usuario" hidden>
                                <input type="text" value="<?=$id_persona;?>" name="id_persona" hidden>
                                <input type="text" value="<?=$id_estudiante;?>" name="id_estudiante" hidden>
                                <input type="text" value="<?=$id_ppff;?>" name="id_ppff" hidden>
                                <label for="">Nombre del Rol</label>
                                <a href="<?=APP_URL;?>/admin/roles/create.php" style="margin-left: 5px;" class="btn btn-success btn-sm"><i class="bi bi-file-plus"></i></a>
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
                                <input type="text" name="nombres" value="<?=$nombres;?>" class="form-control" require>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Apellidos</label>
                                <input type="text" name="apellidos" value="<?=$apellidos;?>" class="form-control" require>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">DPI</label>
                                <input type="number" name="dpi" value="<?=$dpi;?>" class="form-control" require>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Fecha de nacimiento</label>
                                <input type="date" name="fecha_nacimiento" value="<?=$fecha_nacimiento;?>" class="form-control" require>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Telefono</label>
                                <input type="number" name="celular" value="<?=$celular;?>" class="form-control" require>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" value="<?=$email;?>" class="form-control" require>
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
                    <h3 class="card-title">Llene los datos academicos</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="">Nivel</label>
                              
                                   <select name="nivel_id" id="" class="form-control" style="padding-right: 50%;">
                                   <?php
                                   foreach ($niveles as $nivele) { ?>
                                       <option value="<?=$nivele['id_nivel'];?>" <?=$nivele['id_nivel']==$nivel_id ? 'selected' : ''?>><?=$nivele['nivel']." - ".$nivele['turno'];?></option>
                                   <?php
                                   }
                                   ?>
                                   </select>
                             
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="">Grado</label>
                                <select name="grado_id" id="" class="form-control">
                                   <?php
                                   foreach ($grados as $grado) { ?>
                                       <option value="<?=$grado['id_grado'];?>" <?=$grado['id_grado']==$grado_id ? 'selected' : ''?>><?=$grado['curso']." - ".$grado['paralelo'];?></option>
                                   <?php
                                   }
                                   ?>
                                   </select>
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
                                <input type="text" name="nombres_apellidos_ppff" value="<?=$nombres_apellidos_ppff;?>" class="form-control" require>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">DPI</label>
                                <input type="text" name="dpi_ppf" value="<?=$dpi_ppf;?>" class="form-control" require>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Telefono</label>
                                <input type="number" name="celular_ppff" value="<?=$celular_ppff;?>" class="form-control" require>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Relación con el estudiante</label>
                                <input type="text" name="relacion_ppff" value="<?=$relacion_ppff;?>" class="form-control" require>
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
                <button type="submit" class="btn btn-success btn-lg">Actualizar</button>
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
