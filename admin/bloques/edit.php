<?php

$id_materia = $_GET['id'];

include("../../app/config.php");
include("../../admin/layout/parte1.php");
include("../../app/controllers/materias/listado_de_materias.php");
include("../../app/controllers/materias/datos_materias.php");
?>

       <!-- TOPBAR -->

<div class="custom-main custom-sidebar-active">
    <div class="row">
       <h1>Modificar Bloque: <?=$nombre_materia;?></h1> 
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Llene los datos</h3>
                </div>
                <div class="card-body">
                <form action="<?=APP_URL;?>/app/controllers/materias/update.php" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="id_materia" value="<?=$id_materia;?>" hidden>
                                <label for="">Bloque</label>
                                <input type="text" value="<?=$nombre_materia;?>" name="nombre_materia" class="form-control" require>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Actualizar</button>
                                <a href="<?=APP_URL;?>/admin/bloques" class="btn btn-secondary">Cancelar</a>
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