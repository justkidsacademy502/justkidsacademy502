<?php
include("../../app/config.php");
include("../../admin/layout/parte1.php");
include("../../app/controllers/niveles/listado_de_niveles.php");
?>

       <!-- TOPBAR -->

<div class="custom-main custom-sidebar-active">
    <div class="row">
       <h1>Registro de Grados</h1> 
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Llene los datos</h3>
                </div>
                <div class="card-body">
                <form action="<?=APP_URL;?>/app/controllers/grados/create.php" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nivel</label>
                                <select name="nivel_id" id="" class="form-control">
                                    <?php
                                    foreach ($niveles as $nivele) {
                                        ?>
                                        <option value="<?=$nivele['id_nivel'];?>"><?=$nivele['nivel']." - ".$nivele['turno'];?></option>
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
                                <label for="">Curso</label>
                                <select name="curso" id="" class="form-control">
                                    <option value="STARTERS - Block 1">STARTERS - Block 1</option>
                                    <option value="STARTERS - Block 2">STARTERS - Block 2</option>
                                    <option value="EXPLORERS - Block 1">EXPLORERS - Block 1</option>
                                    <option value="EXPLORERS - Block 2">EXPLORERS - Block 2</option>
                                    <option value="MASTERS - Block 1">MASTERS - Block 1</option>
                                    <option value="MASTERS - Block 2">MASTERS - Block 2</option>
                                    <option value="MASTERS - Block 3">MASTERS - Block 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Sección</label>
                                <select name="paralelo" id="" class="form-control">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="F">F</option>
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
                                <a href="<?=APP_URL;?>/admin/grados" class="btn btn-secondary">Cancelar</a>
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