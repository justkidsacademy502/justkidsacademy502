<?php
include("../../app/config.php");
include("../../app/controllers/roles/listado_de_roles.php");
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
                  <table class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                         <th><center>Nro</center></th>
                         <th><center>Nombre del Rol</center></th>
                         <th><center>Acciones</center></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $contador_rol = 0;
                    foreach ($roles as $role) {
                      $id_rol = $role['id_rol'];
                      $contador_rol = $contador_rol +1; ?>
                    <tr>
                       <td style="text-align: center;"><?=$contador_rol;?></td>
                       <td><?=$role['nombre_rol'];?></td>
                       <td style="text-align: center;">
                         <div class="btn-group" role="group" aria-label="Basic example">
                             <button type="button" class="btn btn-primary"><i class="bi bi-eye"></i></button>
                             <button type="button" class="btn btn-success"><i class="bi bi-pencil"></i></button>
                             <button type="button" class="btn btn-danger"><i class="bi bi-trash3"></i></button>
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
