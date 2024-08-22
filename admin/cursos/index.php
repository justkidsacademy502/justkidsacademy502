<?php
include("../../app/config.php");
include("../../admin/layout/parte1.php");
include("../../app/controllers/grados/listado_de_grados.php");
?>

       <!-- TOPBAR -->

<div class="custom-main custom-sidebar-active">
    <div class="center">
       <h1>Listado de Cursos</h1> 
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Cursos Registrados</h3>
                    <div class="card-tools">
                       <a href="create.php" class="btn btn-primary"><i class="bi bi-plus"></i> Crear nuevo Curso</a>
                    </div>
                </div>
                <div class="card-body">
                <table id="example1" class="table table-striped table-bordered table-hover table-sm">
                   <thead>
                      <tr>
                         <th><center>Nro</center></th>
                         <th><center>Nivel</center></th>
                         <th><center>Turno</center></th>
                         <th><center>Bloque</center></th>
                         <th><center>Sección</center></th>
                         <th><center>Horario</center></th>
                         <th><center>Acciones</center></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $contador_grados = 0;
                    foreach ($grados as $grado) {
                      $id_grado = $grado['id_grado'];
                      $contador_grados = $contador_grados +1; ?>
                    <tr>
                       <td style="text-align: center;"><?=$contador_grados;?></td>
                       <td style="text-align: center;"><?=$grado['nivel'];?></td>
                       <td style="text-align: center;"><?=$grado['turno'];?></td>
                       <td style="text-align: center;"><?=$grado['bloque'];?></td>
                       <td style="text-align: center;"><?=$grado['paralelo'];?></td>
                       <td style="text-align: center;"><?=$grado['horario'];?></td>
                       <td style="text-align: center;">
                         <div class="btn-group" role="group" aria-label="Basic example">
                             <a href="show.php?id=<?=$id_grado;?>" type="button" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                             <a href="edit.php?id=<?=$id_grado;?>" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                             <!--<form action="<?=APP_URL;?>/app/controllers/grados/delete.php" onclick="preguntar<?=$id_grado;?>(event)" method="post" id="miFormulario<?=$id_grado;?>">
                              <input type="text" name="id_grado" value="<?=$id_grado;?>" hidden>
                             <button type="submit" class="btn btn-danger" style="border-radius: 0px 5px 5px 0px;"><i class="bi bi-trash3"></i></button>
                             </form>
                             <script>
                              function preguntar<?=$id_grado;?>(event){
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
                                    var form = $('#miFormulario<?=$id_grado;?>')
                                    form.submit();
                                  }
                                });
                              }
                               </script> -->
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