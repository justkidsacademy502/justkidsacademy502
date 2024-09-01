<?php
include("../../app/config.php");
include("../../app/controllers/roles/listado_de_roles.php");
include("../../app/controllers/roles/listado_de_permisos.php");
include("../../app/controllers/roles/listado_de_roles_permisos.php");
include("../layout/parte1.php");
?>

<!-- TOPBAR -->

<div class="custom-main custom-sidebar-active">
  <div class="center">
    <h1>Listado de Roles</h1>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
      <div class="card card-outline card-primary">
        <div class="card-header">
          <h3 class="card-title">Roles Registrados</h3>
          <div class="card-tools">
            <a href="create.php" class="btn btn-primary"><i class="bi bi-plus"></i> Crear nuevo rol</a>
          </div>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-striped table-bordered table-hover table-sm">
            <thead>
              <tr>
                <th>
                  <center>Nro</center>
                </th>
                <th>
                  <center>Nombre del Rol</center>
                </th>
                <th>
                  <center>Acciones</center>
                </th>
              </tr>
            </thead>
            <tbody>
              <?php
              $contador_rol = 0;
              foreach ($roles as $role) {
                $id_rol = $role['id_rol'];
                $contador_rol = $contador_rol + 1; ?>
                <tr>
                  <td style="text-align: center;"><?= $contador_rol; ?></td>
                  <td><?= $role['nombre_rol']; ?></td>
                  <td style="text-align: center;">
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal_asignacion<?= $id_rol; ?>">
                        <i class="bi bi-person-gear"></i>
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="modal_asignacion<?= $id_rol; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header bg-warning">
                              <h5 class="modal-title" id="exampleModalLabel">Asignación de Roles</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <div class="col-md-3">
                                  <div class="form-group mb-2">
                                    <input type="text" name="rol_id" id="rol_id<?= $id_rol; ?>" value="<?= $id_rol; ?>" hidden>
                                    <label>Rol: <?= $role['nombre_rol']; ?></label>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group mx-sm-3 mb-2">
                                    <select name="permiso_id" id="permiso_id<?= $id_rol; ?>" class="form-control">
                                      <?php
                                      foreach ($permisos as $permiso) {
                                        $id_permiso = $permiso['id_permiso']; ?>
                                        <option value="<?= $id_permiso ?>"><?= $permiso['nombre_url']; ?></option>
                                      <?php
                                      }
                                      ?>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <button type="submit" class="btn btn-warning mb-2" id="btn_reg<?= $id_rol; ?>">Asignar</button>
                                  <script>
                                    $('#btn_reg<?= $id_rol; ?>').click(function() {
                                      var a = $('#rol_id<?= $id_rol; ?>').val();
                                      var b = $('#permiso_id<?= $id_rol; ?>').val();

                                      var url = "../../app/controllers/roles/create_roles_permisos.php";
                                      $.get(url, {
                                        rol_id: a,
                                        permiso_id: b,
                                      }, function(datos) {
                                        $('#respuesta<?= $id_rol; ?>').html(datos);
                                        $('#tabla<?= $id_rol; ?>').css('display', 'none');

                                        Swal.fire({
                                          position: "center",
                                          icon: "success",
                                          title: "Se Registro el permiso",
                                          showConfirmButton: false,
                                          timer: 3500
                                        });
                                      });

                                    });
                                  </script>
                                </div>
                              </div>
                              <hr>
                              <div id="respuesta<?= $id_rol; ?>"></div>
                              <div class="row" id="tabla<?= $id_rol; ?>">
                                <table class="table table-bordered table-sm table-striped table-hover"
                                  <tr>
                                  <th style="text-align: center;">Nro</th>
                                  <th style="text-align: center;">Rol</th>
                                  <th style="text-align: center;">Permiso</th>
                                  <th style="text-align: center;">Acción</th>
                </tr>
        </div>
        <?php
                $contador = 0;
                foreach ($roles_permisos as $roles_permiso) {
                  if ($id_rol == $roles_permiso['rol_id']) {
                    $id_rol_permiso = $roles_permiso['id_rol_permiso'];
                    $contador = $contador + 1; ?>
            <tr>
              <td>
                <center><?= $contador; ?></center>
              </td>
              <td>
                <center><?= $roles_permiso['nombre_rol']; ?></center>
              </td>
              <td><?= $roles_permiso['nombre_url']; ?></td>
              <td>
                <form action="<?= APP_URL; ?>/app/controllers/roles/delete_rol_permiso.php" onclick="preguntar<?= $id_rol_permiso; ?>(event)" method="post" id="miFormulario<?= $id_rol_permiso; ?>">
                  <input type="text" name="id_rol_permiso" value="<?= $id_rol_permiso; ?>" hidden>
                  <button type="submit" class="btn btn-danger"><i class="bi bi-trash3"></i></button>
                </form>
                <script>
                  function preguntar<?= $id_rol_permiso; ?>(event) {
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
                    }).then((result) => {
                      if (result.isConfirmed) {
                        var form = $('#miFormulario<?= $id_rol_permiso; ?>')
                        form.submit();
                      }
                    });
                  }
                </script>
              </td>
            </tr>
        <?php
                  }
                }
        ?>
        </table>
      </div>
    </div>
  </div>
</div>
</div> <a href="show.php?id=<?= $id_rol; ?>" type="button" class="btn btn-primary"><i class="bi bi-eye"></i></a>
<a href="edit.php?id=<?= $id_rol; ?>" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
<form action="<?= APP_URL; ?>/app/controllers/roles/delete.php" onclick="preguntar<?= $id_rol; ?>(event)" method="post" id="miFormulario<?= $id_rol; ?>">
  <input type="text" name="id_rol" value="<?= $id_rol; ?>" hidden>
  <button type="submit" class="btn btn-danger" style="border-radius: 0px 5px 5px 0px;"><i class="bi bi-trash3"></i></button>
</form>
<script>
  function preguntar<?= $id_rol; ?>(event) {
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
    }).then((result) => {
      if (result.isConfirmed) {
        var form = $('#miFormulario<?= $id_rol; ?>')
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
  $(function() {
    $("#example1").DataTable({
      "pageLength": 5,
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
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