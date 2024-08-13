<?php
include("../../app/config.php");
include("../../admin/layout/parte1.php");
include("../../app/controllers/configuraciones/gestion/listado_de_gestiones.php");
?>

       <!-- TOPBAR -->

<div class="custom-main custom-sidebar-active">
    <div class="row">
       <h1>Registro de niveles</h1> 
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Llene los datos</h3>
                </div>
                <div class="card-body">
                <form action="<?=APP_URL;?>/app/controllers/niveles/create.php" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Gestión Educativa</label>
                                <select name="gestion_id" id="" class="form-control">
                                    <?php
                                    foreach ($gestiones as $gestione) {
                                        if($gestione['estado']=="1") { ?>
                                             <option value="<?=$gestione['id_gestion'];?>"><?=$gestione['gestion'];?></option>
                                             <?php
                                        }?>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Niveles</label>
                                <select name="nivel" id="" class="form-control">
                                    <option value="STARTERS">STARTERS</option>
                                    <option value="EXPLORERS">EXPLORERS</option>
                                    <option value="MASTERS">MASTERS</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Turnos</label>
                                <select name="turno" id="" class="form-control">
                                    <option value="MATUTINO">MATUTINO</option>
                                    <option value="VESPERTINO">VESPERTINO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Horarios</label>
                                <input type="text" name="horario" class="form-control" require>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                                <a href="<?=APP_URL;?>/admin/niveles" class="btn btn-secondary">Cancelar</a>
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