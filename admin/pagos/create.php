<?php

$id_estudiante = $_GET['id'];

include("../../app/config.php");
include("../../app/controllers/estudiantes/datos_del_estudiante.php");
include("../layout/parte1.php");
include("../../app/controllers/pagos/datos_pagos_estudiantes.php");
?>

       <!-- TOPBAR -->

<div class="custom-main custom-sidebar-active">
    <div class="row">
       <h1>Pago de Mensualidad</h1> 
    </div>
    <div class="row">
        <p style="font-size: 25px;"><b>Estudiante:</b> <?=$nombres." ".$apellidos;?></p>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Pagos Registrados</h3>
                    <div style="text-align: right;">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Registrar Pago
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-sm table-hover">
                        <tr>
                            <th style="text-align: center;background-color:#337dff;color:white">Nro</th>
                            <th style="text-align: center;background-color:#337dff;color:white">Fecha de pago</th>
                            <th style="text-align: center;background-color:#337dff;color:white">Proximo Pago</th>
                            <th style="text-align: center;background-color:#337dff;color:white">Nro. Transacción</th>
                            <th style="text-align: center;background-color:#337dff;color:white">Mes Cancelado</th>
                            <th style="text-align: center;background-color:#337dff;color:white">Descuento</th>
                            <th style="text-align: center;background-color:#337dff;color:white">Monto Deposito</th>
                            <th style="text-align: center;background-color:#337dff;color:white">Acciones</th>
                        </tr>
                        <?php
                        $contador_pagos = 0;
                        foreach ($pagos as $pago) {
                           $estudiante_id = $pago['estudiante_id'];
                           $id_pago = $pago['id_pago'];
                           $contador_pagos = $contador_pagos +1; ?>
                        <tr>
                            <td style="text-align: center;"><?=$contador_pagos;?></td>
                            <td style="text-align: center;"><?=$pago['fecha_pagado'];?></td>
                            <td style="text-align: center;"><?=$pago['proximo_pago'];?></td>
                            <td style="text-align: center;"><?=$pago['no_transaccion'];?></td>
                            <td style="text-align: center;"><?=$pago['mes_pagado'];?></td>
                            <td style="text-align: center;"><?=$pago['descuento_pago'];?></td>
                            <td style="text-align: center;"><?=$pago['monto_pagado'];?></td>
                            <td ">
                         <div class="btn-group" role="group" aria-label="Basic example">
                             <a type="button" data-toggle="modal" data-target="#Modal_editar<?=$id_pago;?>" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                             <!-- Modal -->
                             <div class="modal fade" id="Modal_editar<?=$id_pago;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#2eb90a;color:white;">
        <h5 class="modal-title" id="exampleModalLabel">Editar Pago</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?=APP_URL;?>/app/controllers/pagos/update.php" method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" name="estudiante_id" value="<?=$id_estudiante;?>" hidden>
                        <input type="text" name="id_pago" value="<?=$id_pago;?>" hidden>
                        <label for="">Estudiante</label>
                        <input type="text" class="form-control" value="<?=$nombres." ".$apellidos?>" disabled>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Fecha de Pago</label>
                        <input type="date" name="fecha_pagado" class="form-control" value="<?=$pago['fecha_pagado'];?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Proximo Pago</label>
                        <input type="date" name="proximo_pago" class="form-control" value="<?=$pago['proximo_pago'];?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Nro. Transacción</label>
                        <input type="text" name="no_transaccion" class="form-control" value="<?=$pago['no_transaccion'];?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Mes Cancelado</label>
                        <select name="mes_pagado" id="" class="form-control">
                            <option value="ENERO" <?=$pago['mes_pagado']=="ENERO" ? 'selected' : ''?>>ENERO</option>
                            <option value="FEBRERO" <?=$pago['mes_pagado']=="FEBRERO" ? 'selected' : ''?>>FEBRERO</option>
                            <option value="MARZO" <?=$pago['mes_pagado']=="MARZO" ? 'selected' : ''?>>MARZO</option>
                            <option value="ABRIL" <?=$pago['mes_pagado']=="ABRIL" ? 'selected' : ''?>>ABRIL</option>
                            <option value="MAYO" <?=$pago['mes_pagado']=="MAYO" ? 'selected' : ''?>>MAYO</option>
                            <option value="JUNIO" <?=$pago['mes_pagado']=="JUNIO" ? 'selected' : ''?>>JUNIO</option>
                            <option value="JULIO" <?=$pago['mes_pagado']=="JULIO" ? 'selected' : ''?>>JULIO</option>
                            <option value="AGOSTO" <?=$pago['mes_pagado']=="AGOSTO" ? 'selected' : ''?>>AGOSTO</option>
                            <option value="SEPTIEMBRE" <?=$pago['mes_pagado']=="SEPTIEMBRE" ? 'selected' : ''?>>SEPTIEMBRE</option>
                            <option value="OCTUBRE" <?=$pago['mes_pagado']=="OCTUBRE" ? 'selected' : ''?>>OCTUBRE</option>
                            <option value="NOVIEMBRE" <?=$pago['mes_pagado']=="NOVIEMBRE" ? 'selected' : ''?>>NOVIEMBRE</option>
                            <option value="DICIEMBRE" <?=$pago['mes_pagado']=="DICIEMBRE" ? 'selected' : ''?>>DICIEMBRE</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Valor Mensualidad</label>
                        <input type="text" name="mensualidad_precio" class="form-control" value="<?=$pago['mensualidad_precio'];?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Descuento</label>
                        <input type="text" name="descuento_pago" class="form-control" value="<?=$pago['descuento_pago'];?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Monto Deposito</label>
                        <input type="text" name="monto_pagado" class="form-control" value="<?=$pago['monto_pagado'];?>">
                    </div>
                </div> 
            </div>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success">Actualizar Pago</button>
                </div>
        </form>
    </div>
  </div>
</div>

                             <form action="<?=APP_URL;?>/app/controllers/pagos/delete.php" onclick="preguntar<?=$id_pago;?>(event)" method="post" id="miFormulario<?=$id_pago;?>">
                              <input type="text" name="id_pago" value="<?=$id_pago;?>" hidden>
                             <button type="submit" class="btn btn-danger" style="border-radius: 0px 5px 5px 0px;"><i class="bi bi-trash3"></i></button>
                             </form>
                             <script>
                              function preguntar<?=$id_pago;?>(event){
                                event.preventDefault();
                                swal.fire({
                                  title: 'Eliminar registro',
                                  text: '¿Desea eliminar este registro?',
                                  icon: 'question',
                                  showDenyButton: true,
                                  confirmButtonText: 'Eliminar',
                                  confirmButtonColor: '#F44336',
                                  denyButtonColor: '#938484',
                                  denyButtonText: 'Cancelar',
                                }).then((result) =>  {
                                  if (result.isConfirmed) {
                                    var form = $('#miFormulario<?=$id_pago;?>')
                                    form.submit();
                                  }
                                });
                              }
                               </script>
                                <a href="constancia_pago.php?id=<?=$id_pago;?>&&id_estudiante=<?=$estudiante_id;?>" type="button" class="btn btn-info"><i class="bi bi-printer"></i></a>

                         </div>
                       </td>
                        </tr>
                        <?php
                      }   
                      ?> 
                    </table>
                </div>
            </div>
        </div>  
    </div>
</div>

<?php
include('../../layout/mensajes.php');
include("../layout/parte2.php");
?>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#337dff;color:white;">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Pago</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?=APP_URL;?>/app/controllers/pagos/create.php" method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" name="estudiante_id" value="<?=$id_estudiante;?>" hidden>
                        <label for="">Estudiante</label>
                        <input type="text" class="form-control" value="<?=$nombres." ".$apellidos?>" disabled>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Fecha de Pago</label>
                        <input type="date" name="fecha_pagado" class="form-control" value="<?$fecha_actual;?>" require>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Proximo Pago</label>
                        <input type="date" name="proximo_pago" class="form-control" value="" require>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Nro. Transacción</label>
                        <input type="text" name="no_transaccion" class="form-control" value="" require>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Mes Cancelado</label>
                        <select name="mes_pagado" id="" class="form-control">
                            <option value="ENERO">ENERO</option>
                            <option value="FEBRERO">FEBRERO</option>
                            <option value="MARZO">MARZO</option>
                            <option value="ABRIL">ABRIL</option>
                            <option value="MAYO">MAYO</option>
                            <option value="JUNIO">JUNIO</option>
                            <option value="JULIO">JULIO</option>
                            <option value="AGOSTO">AGOSTO</option>
                            <option value="SEPTIEMBRE">SEPTIEMBRE</option>
                            <option value="OCTUBRE">OCTUBRE</option>
                            <option value="NOVIEMBRE">NOVIEMBRE</option>
                            <option value="DICIEMBRE">DICIEMBRE</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Valor Mensualidad</label>
                        <input type="text" name="mensualidad_precio" class="form-control" value="Q0.00" require>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Descuento</label>
                        <input type="text" name="descuento_pago" class="form-control" value="Q0.00-">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Monto Deposito</label>
                        <input type="text" name="monto_pagado" class="form-control" value="Q0.00" require>
                    </div>
                </div>
            </div>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Registrar Pago</button>
                </div>
        </form>
    </div>
  </div>
</div>