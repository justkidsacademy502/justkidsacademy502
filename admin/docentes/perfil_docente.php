<?php
include("../../app/config.php");
include("../../app/controllers/docentes/listado_de_asignaciones.php");
include("../../app/controllers/docentes/datos_del_docente.php");
include("../layout/parte1.php");
?>

       <!-- TOPBAR -->

<div class="custom-main custom-sidebar-active">
    <div class="center">
       <h1>Asistencias</h1> 
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Asignaciones Registradas</h3>
                </div>
                <div class="card-body">
                <table class="table table-striped table-bordered table-hover table-sm">
                   <thead>
                      <tr>
                         <th><center>Nro</center></th>
                         <th><center>Nivel</center></th>
                         <th><center>Turno</center></th>
                         <th><center>Curso</center></th>
                         <th><center>Sección</center></th>
                         <th><center>Horario</center></th>    
                         <th><center>Bloque</center></th>
                         <th><center>Acciones</center></th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                        $contador_docentes = 0;
                        foreach ($docentes as $docente) {
                          $id_docente = $docente['id_docente'];
                            if($email_sesion == $docente['email']){
                                $contador_docentes = $contador_docentes + 1;?>
                                <tr>
                                    <td><center><?=$contador;?></center></td>
                                    <td><center><?=$asignacione['nivel'];?></center></td>
                                    <td><center><?=$asignacione['turno'];?></center></td>
                                    <td><center><?=$asignacione['bloque'];?></center></td>
                                    <td><center><?=$asignacione['paralelo'];?></center></td>
                                    <td><center><?=$asignacione['nombre_materia'];?></center></td>
                                    <td><center><?=$asignacione['horario'];?></center></td>
                                    <td><center><a href="create.php?id_grado=<?=$id_grado;?>&&id_docente=<?=$asignacione['docente_id'];?>&&id_materia=<?=$asignacione['materia_id'];?>" class="btn btn-primary btn-sm"><i class="bi bi-calendar-check"></i> Asistencias</a></center></td>
                                </tr>
                                <?php
                            }
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