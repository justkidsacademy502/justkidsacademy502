<?php

$id_grado = $_GET['id'];

include("../../app/config.php");
include("../../admin/layout/parte1.php");
include("../../app/controllers/grados/datos_grados.php");
include("../../app/controllers/niveles/listado_de_niveles.php");
?>

       <!-- TOPBAR -->

<div class="custom-main custom-sidebar-active">
    <div class="row">
       <h1>Modificar: <?=$curso." - ".$paralelo?></h1> 
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Llene los datos</h3>
                </div>
                <div class="card-body">
                <form action="<?=APP_URL;?>/app/controllers/grados/update.php" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nivel</label>
                                <input type="text" name="id_grado" value="<?=$id_grado;?>" hidden>
                                <select name="nivel_id" id="" class="form-control">
                                    <?php
                                    foreach ($niveles as $nivele) {
                                        ?>
                                        <option value="<?=$nivele['id_nivel'];?>"<?=$nivel_id==$nivele['id_nivel'] ? 'selected' : ''?>><?=$nivele['nivel']." - ".$nivele['turno'];?></option>
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
                                    <option value="STARTERS - Block 1"<?=$curso=='STARTERS - Block 1' ? 'selected' : ''?>>STARTERS - Block 1</option>
                                    <option value="STARTERS - Block 2"<?=$curso=='STARTERS - Block 2' ? 'selected' : ''?>>STARTERS - Block 2</option>
                                    <option value="EXPLORERS - Block 1"<?=$curso=='EXPLORERS - Block 1' ? 'selected' : ''?>>EXPLORERS - Block 1</option>
                                    <option value="EXPLORERS - Block 2"<?=$curso=='EXPLORERS - Block 2' ? 'selected' : ''?>>EXPLORERS - Block 2</option>
                                    <option value="MASTERS - Block 1"<?=$curso=='MASTERS - Block 1' ? 'selected' : ''?>>MASTERS - Block 1</option>
                                    <option value="MASTERS - Block 2"<?=$curso=='MASTERS - Block 2' ? 'selected' : ''?>>MASTERS - Block 2</option>
                                    <option value="MASTERS - Block 3"<?=$curso=='MASTERS - Block 3' ? 'selected' : ''?>>MASTERS - Block 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Sección</label>
                                <select name="paralelo" id="" class="form-control">
                                    <option value="A"<?=$paralelo=='A' ? 'selected' : ''?>>A</option>
                                    <option value="B"<?=$paralelo=='B' ? 'selected' : ''?>>B</option>
                                    <option value="C"<?=$paralelo=='C' ? 'selected' : ''?>>C</option>
                                    <option value="D"<?=$paralelo=='D' ? 'selected' : ''?>>D</option>
                                    <option value="E"<?=$paralelo=='E' ? 'selected' : ''?>>E</option>
                                    <option value="F"<?=$paralelo=='F' ? 'selected' : ''?>>F</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Horarios</label>
                                <input type="text" name="horario" value="<?=$horario;?>" class="form-control" require>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Actualizar</button>
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