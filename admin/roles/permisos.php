<?php
include("../../app/config.php");
include("../../app/controllers/roles/listado_de_permisos.php");
include("../layout/parte1.php");
?>

       <!-- TOPBAR -->

<div class="custom-main custom-sidebar-active">
    <div class="center">
       <h1>Listado de Permisos</h1> 
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Permiso Registrados</h3>
                    <div class="card-tools">
                       <a href="create_permisos.php" class="btn btn-primary"><i class="bi bi-plus"></i> Crear nuevo permiso</a>
                    </div>
                </div>
                <div class="card-body">
                  <table id="example1" class="table table-striped table-bordered table-hover table-sm">
                    <thead>
                      <tr>
                         <th><center>Nro</center></th>
                         <th><center>Nombre de la URL</center></th>
                         <th><center>URL</center></th>
                         <th><center>Acciones</center></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $contador_permisos = 0;
                    foreach ($permisos as $permiso) {
                      $id_permiso = $permiso['id_permiso'];
                      $contador_permisos = $contador_permisos +1; ?>
                    <tr>
                       <td style="text-align: center;"><?=$contador_permisos;?></td>
                       <td><?=$permiso['nombre_url'];?></td>
                       <td><?=$permiso['url'];?></td>
                       <td style="text-align: center;">
                         <div class="btn-group" role="group" aria-label="Basic example">
                             <a href="edit_permisos.php?id=<?=$id_permiso;?>" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                             <form action="<?=APP_URL;?>/app/controllers/roles/delete_permisos.php" onclick="preguntar<?=$id_permiso;?>(event)" method="post" id="miFormulario<?=$id_permiso;?>">
                              <input type="text" name="id_permiso" value="<?=$id_permiso;?>" hidden>
                             <button type="submit" class="btn btn-danger" style="border-radius: 0px 5px 5px 0px;"><i class="bi bi-trash3"></i></button>
                             </form>
                             <script>
                              function preguntar<?=$id_permiso;?>(event){
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
                                    var form = $('#miFormulario<?=$id_permiso;?>')
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
include('../../layout/mensajes.php');
include("../layout/parte2.php");
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