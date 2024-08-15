<?php

$id_docente = $_GET['id'];

include("../../app/config.php");
include("../../admin/layout/parte1.php");
include("../../app/controllers/docentes/datos_del_docente.php");
include("../../app/controllers/roles/listado_de_roles.php");
?>

       <!-- TOPBAR -->

<div class="custom-main custom-sidebar-active">
    <div class="row">
       <h1>Modificar Coach: <?=$nombres." ".$apellidos;?></h1> 
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Llene los datos</h3>
                </div>
                <div class="card-body">
                <form action="<?=APP_URL;?>/app/controllers/docentes/update.php" method="post">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Nombre del Rol</label>
                                <input type="text" value="<?=$id_usuario;?>" name="id_usuario" hidden>
                                <input type="text" value="<?=$id_persona;?>" name="id_persona" hidden>
                                <input type="text" value="<?=$id_docente;?>" name="id_docente" hidden>
                                <a href="<?=APP_URL;?>/admin/roles/create.php" style="margin-left: 5px;" class="btn btn-success btn-sm"><i class="bi bi-file-plus"></i></a>
                                <div class="form-inline">
                                   <select name="rol_id" id="" class="form-control">
                                   <?php
                                   foreach ($roles as $role) { ?>
                                       <option value="<?=$role['id_rol'];?>" <?=$role['nombre_rol']=="COACH" ? 'selected' : ''?>><?=$role['nombre_rol'];?></option>
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
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Fecha de Contratación</label>
                                <input type="date" name="fecha_contratacion" value="<?=$fecha_contratacion;?>" class="form-control" require>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Actualizar</button>
                                <a href="<?=APP_URL;?>/admin/docentes" class="btn btn-secondary">Cancelar</a>
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
