<?php
include("../../../app/config.php");
include("../../../admin/layout/parte1.php");
include("../../../app/controllers/configuraciones/institucion/listado_de_instituciones.php");
?>

       <!-- TOPBAR -->

<div class="custom-main custom-sidebar-active">
    <div class="center">
       <h1>Listado de Instituciones</h1> 
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Instituciones Registrados</h3>
                    <div class="card-tools">
                       <a href="create.php" class="btn btn-primary"><i class="bi bi-plus"></i> Crear nueva institución</a>
                    </div>
                </div>
                <div class="card-body">
                <table id="example1" class="table table-striped table-bordered table-hover table-sm">
                   <thead>
                      <tr>
                         <th><center>Nro</center></th>
                         <th><center>Nombres de la institución</center></th>
                         <th><center>Logo</center></th>
                         <th><center>Telefono</center></th>
                         <th><center>Correo</center></th>
                         <th><center>Fecha de creación</center></th>
                         <th><center>Estado</center></th>
                         <th><center>Acciones</center></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $contador_instituciones = 0;
                    foreach ($instituciones as $institucione) {
                      $id_config_institucion = $institucione['id_config_institucion'];
                      $contador_instituciones = $contador_instituciones +1; ?>
                    <tr>
                       <td style="text-align: center;"><?=$contador_instituciones;?></td>
                       <td><?=$institucione['nombre_institucion'];?></td>
                       <td>
                        <img src="<?=APP_URL."/public/img/configuracion/".$institucione['logo'];?>" width="100px" alt="">
                       </td>
                       <td><?=$institucione['telefono'];?></td>
                       <td><?=$institucione['correo'];?></td>
                       <td><?=$institucione['fyh_creacion'];?></td>
                       <td style="text-align: center;">
                        <?php
                        if($institucione['estado'] == "1") { ?>
                             <button class="btn btn-success btn-sm" style="border-radius: 20px;" >ACTIVO</button>
                        <?php
                        }else { ?>
                             <button class="btn btn-danger btn-sm" style="border-radius: 20px;">INACTIVO</button>
                        <?php
                        }
                        ?>
                       </td>
                       <td style="text-align: center;">
                         <div class="btn-group" role="group" aria-label="Basic example">
                             <a href="show.php?id=<?=$id_config_institucion;?>" type="button" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                             <a href="edit.php?id=<?=$id_config_institucion;?>" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                             <form action="<?=APP_URL;?>/app/controllers/configuraciones/institucion/delete.php" onclick="preguntar<?=$id_config_institucion;?>(event)" method="post" id="miFormulario<?=$id_config_institucion;?>">
                              <input type="text" name="id_config_institucion" value="<?=$id_config_institucion;?>" hidden>
                             <button type="submit" class="btn btn-danger" style="border-radius: 0px 5px 5px 0px;"><i class="bi bi-trash3"></i></button>
                             </form>
                             <script>
                              function preguntar<?=$id_config_institucion;?>(event){
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
                                    var form = $('#miFormulario<?=$id_config_institucion;?>')
                                    form.submit();
                                  }
                                });
                              }
                             </script>
                         </div>
                       </td>
                    </tr>
                      <?php
                      }   
                      ?>    
                    </tbody>
                </table>
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
  $(function () {
    $("#example1").DataTable({
      "pageLength":5,
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>