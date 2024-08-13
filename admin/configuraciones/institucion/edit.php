<?php
$id_config_institucion = $_GET['id'];
include("../../../app/config.php");
include("../../../admin/layout/parte1.php");
include("../../../app/controllers/configuraciones/institucion/datos_institucion.php");
?>
       <!-- TOPBAR -->

<div class="custom-main custom-sidebar-active">
    <div class="row">
       <h1>Modificar institución: <?=$nombre_institucion;?></h1> 
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Llene los datos</h3>
                </div>
                <div class="card-body">
                <form action="<?=APP_URL;?>/app/controllers/configuraciones/institucion/update.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="id_config_institucion" value="<?=$id_config_institucion;?>" hidden>
                                        <input type="text" name="logo" value="<?=$logo;?>" hidden>
                                        <label for="">Nombre de la Institución</label>
                                        <input type="text" name="nombre_institucion" value="<?=$nombre_institucion;?>" class="form-control" require>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label for="">Correo de la Institución</label>
                                        <input type="email" name="correo" value="<?=$correo;?>" class="form-control" require>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Telefono</label>
                                        <input type="number" name="telefono" value="<?=$telefono;?>" class="form-control" require>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12">
                                   <div class="form-group">
                                        <label for="">Logo de la institución</label>
                                        <input type="file" name="file" id="file" class="form-control">
                                        <br>
                                        <center>
                                        <img src="<?=APP_URL."/public/img/configuracion/".$logo;?>" width="100px" alt="">
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Actualizar</button>
                                <a href="<?=APP_URL;?>/admin/configuraciones/institucion" class="btn btn-secondary">Cancelar</a>
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

<script>
    function archivo(evt) {
        var files = evt.target.files;
        for (var i = 0, f; f = files[i]; i++) {
            if (!f.type.match('image.*')) {
                continue;
            }
            var reader = new FileReader();
            reader.onload = (function (theFile) {
                return function (e) {
                    document.getElementById("list").innerHTML = ['<img class="thumb thumbnail" src="',e.target.result, '" width="300px" title="', escape(theFile.name), '"/>'].join('');
                };
            })(f);
            reader.readAsDataURL(f);
        }
    }
    document.getElementById('file').addEventListener('change', archivo, false);
</script>
