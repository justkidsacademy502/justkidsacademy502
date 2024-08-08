<?php
include("../../app/config.php");
include("../../admin/layout/parte1.php");
include("../../app/controllers/roles/listado_de_roles.php");
?>

       <!-- TOPBAR -->

<div class="custom-main custom-sidebar-active">
    <div class="row">
       <h1>Creación de un nuevo Usuario</h1> 
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Llene los datos</h3>
                </div>
                <div class="card-body">
                <form action="<?=APP_URL;?>/app/controllers/usuarios/create.php" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nombre del Rol</label>
                                <div class="form-inline">
                                <select name="rol_id" id="" class="form-control">
                                <?php
                                foreach ($roles as $role) { ?>
                                    <option value="<?=$role['id_rol'];?>"><?=$role['nombre_rol'];?></option>
                                <?php
                                }
                                ?>
                                </select>
                                <a href="<?=APP_URL;?>/admin/roles/create.php" style="margin-left: 5px;" class="btn btn-primary"><i class="bi bi-file-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nombres del usuario</label>
                                <input type="text" name="nombres" class="form-control" require>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control" require>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" require>
                            </div>
                         </div>
                         <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Confirmar Password</label>
                                <input type="password" name="password_repeat" class="form-control" require>
                            </div>
                         </div>
                        </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                                <a href="<?=APP_URL;?>/admin/usuarios" class="btn btn-secondary">Cancelar</a>
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
