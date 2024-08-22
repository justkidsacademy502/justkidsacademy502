<?php
include("../../app/config.php");
include("../../app/controllers/estudiantes/listado_de_estudiantes.php");
include("../layout/parte1.php");
?>

       <!-- TOPBAR -->

<div class="custom-main custom-sidebar-active">
    <div class="center">
       <h1>Listado de estudiantes</h1> 
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Estudiantes Registrados</h3>
                    <div class="card-tools">
                       <a href="../inscripciones/create.php" class="btn btn-primary"><i class="bi bi-plus"></i> Crear nuevo Estudiante</a>
                    </div>
                </div>
                <div class="card-body">
                <table id="example1" class="table table-striped table-bordered table-hover table-sm">
                   <thead>
                      <tr>
                         <th><center>Nro</center></th>
                         <th><center>Nombres y Apellidos</center></th>
                         <th><center>Email</center></th>
                         <th><center>Telefono</center></th>
                         <th><center>Nivel</center></th>
                         <th><center>Turno</center></th>
                         <th><center>Curso</center></th>
                         <th><center>Estado</center></th>
                         <th><center>Acciones</center></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $contador_estudiantes = 0;
                    foreach ($estudiantes as $estudiante) {
                      $id_estudiante = $estudiante['id_estudiante'];
                      $contador_estudiantes = $contador_estudiantes +1; ?>
                    <tr>
                       <td style="text-align: center;"><?=$contador_estudiantes;?></td>
                       <td><?=$estudiante['nombres']." ".$estudiante['apellidos'];?></td>
                       <td><?=$estudiante['email'];?></td>
                       <td><?=$estudiante['celular_ppff'];?></td>
                       <td><?=$estudiante['nivel'];?></td>
                       <td><?=$estudiante['turno'];?></td>
                       <td><?=$estudiante['bloque']." - ".$estudiante['paralelo'];?></td>
                       <td style="text-align: center;">
                        <?php
                        if($estudiante['estado'] == "1") { ?>
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
                             <a href="show.php?id=<?=$id_estudiante;?>" type="button" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                             <a href="edit.php?id=<?=$id_estudiante;?>" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                             <form action="<?=APP_URL;?>/app/controllers/usuarios/delete.php" onclick="preguntar<?=$id_estudiante;?>(event)" method="post" id="miFormulario<?=$id_estudiante;?>">
                              <input type="text" name="id_usuario" value="<?=$id_estudiante;?>" hidden>
                             <button type="submit" class="btn btn-danger" style="border-radius: 0px 5px 5px 0px;"><i class="bi bi-trash3"></i></button>
                             </form>
                             <script>
                              function preguntar<?=$id_estudiante;?>(event){
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
                                    var form = $('#miFormulario<?=$id_estudiante;?>')
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