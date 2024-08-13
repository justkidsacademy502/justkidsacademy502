<?php

$id_gestion =$_GET['id'];

include("../../../app/config.php");
include("../../../admin/layout/parte1.php");
include("../../../app/controllers/configuraciones/gestion/datos_gestion.php")
?>
       <!-- TOPBAR -->

<div class="custom-main custom-sidebar-active">
    <div class="row">
       <h1>Modificar Gestión: <?=$gestion;?></h1> 
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Llene los datos</h3>
                </div>
                <div class="card-body">
                <form action="<?=APP_URL;?>/app/controllers/configuraciones/gestion/update.php" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="id_gestion" value="<?=$id_gestion?>" hidden>
                                <label for="">Gestión Educativa</label>
                                <input type="text" value="<?=$gestion;?>" name="gestion" class="form-control" require>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Estado</label>
                                <select name="estado" id="" class="form-control">
                                    <?php
                                    if($estado == "1") { ?>
                                       <option value="ACTIVO">ACTIVO</option>
                                      <option value="INACTIVO">INACTIVO</option>
                                      <?php
                                    }else { ?>
                                       <option value="ACTIVO">ACTIVO</option>
                                       <option value="INACTIVO" selected="selected">INACTIVO</option>
                                       <?php
                                    }?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Actualizar</button>
                                <a href="<?=APP_URL;?>/admin/configuraciones/gestiones" class="btn btn-secondary">Cancelar</a>
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
include('../../../layout/mensajes.php');
include("../../layout/parte2.php");
?>