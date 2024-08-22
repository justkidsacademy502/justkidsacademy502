<?php
include("../../app/config.php");
include("../../admin/layout/parte1.php");
include("../../app/controllers/niveles/listado_de_niveles.php");
?>

       <!-- TOPBAR -->

<div class="custom-main custom-sidebar-active">
    <div class="row">
       <h1>Registro de Cursos</h1> 
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
                                <label for="">Bloques</label>
                                <select name="bloque" id="" class="form-control">
                                    <option value="STARTERS - BLOCK 1">STARTERS - BLOCK 1</option>
                                    <option value="STARTERS - BLOCK 2">STARTERS - BLOCK 2</option>
                                    <option value="EXPLORERS - BLOCK 1">EXPLORERS - BLOCK 1</option>
                                    <option value="EXPLORERS - BLOCK 2">EXPLORERS - BLOCK 2</option>
                                    <option value="MASTERS - BLOCK 1">MASTERS - BLOCK 1</option>
                                    <option value="MASTERS - BLOCK 2">MASTERS - BLOCK 2</option>
                                    <option value="MASTERS - BLOCK 3">MASTERS - BLOCK 3</option>
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
                                <a href="<?=APP_URL;?>/admin/cursos" class="btn btn-secondary">Cancelar</a>
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