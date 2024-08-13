<?php
include("../app/config.php");
include("../admin/layout/parte1.php");
include("../app/controllers/roles/listado_de_roles.php");
include("../app/controllers/usuarios/listado_de_usuarios.php");
include("../app/controllers/niveles/listado_de_niveles.php");
?>


<!-- TOPBAR -->
<div class="custom-main custom-sidebar-active">
      <br>
    <div>
        <div class="row">
            <h1><?=APP_NAME;?></h1>
        </div>
        <br>
        <div class="row">
        <div class="col-lg-3 col-6">

         <div class="small-box bg-teal">
             <div class="inner">
                <?php
                $contador_roles =0;
                foreach ($roles as $role) {
                    $contador_roles = $contador_roles + 1;
                }
                ?>
                 <h3><?=$contador_roles;?></h3>
                 <p>Roles registrados</p>
             </div>
             <div class="icon">
                 <i class="fas"><i class="custom-icon bi bi-diagram-3-fill"></i></i>
             </div>
             <a href="<?=APP_URL?>/admin/roles" class="small-box-footer">
             Más información <i class="fas fa-arrow-circle-right"></i>
             </a>
         </div>
        </div>

        <div class="col-lg-3 col-6">

         <div class="small-box bg-lightblue">
             <div class="inner">
                <?php
                $contador_usuarios =0;
                foreach ($usuarios as $usuario) {
                    $contador_usuarios = $contador_usuarios + 1;
                }
                ?>
                 <h3><?=$contador_usuarios;?></h3>
                 <p>Usuarios registrados</p>
             </div>
             <div class="icon">
                 <i class="fas"><i class="custom-icon bi bi-people-fill"></i></i>
             </div>
             <a href="<?=APP_URL?>/admin/usuarios" class="small-box-footer">
             Más información <i class="fas fa-arrow-circle-right"></i>
             </a>
         </div>
        </div>

        <div class="col-lg-3 col-6">

         <div class="small-box bg-purple">
             <div class="inner">
                <?php
                $contador_niveles =0;
                foreach ($niveles as $nivele) {
                    $contador_niveles = $contador_niveles + 1;
                }
                ?>
                 <h3><?=$contador_niveles;?></h3>
                 <p>Niveles registrados</p>
             </div>
             <div class="icon">
                 <i class="fas"><i class="bi bi-bar-chart-fill"></i></i>
             </div>
             <a href="<?=APP_URL?>/admin/niveles" class="small-box-footer">
             Más información <i class="fas fa-arrow-circle-right"></i>
             </a>
         </div>
        </div>

        </div>
    </div>
</div>
<!-- </TOPBAR> -->


<?php
include ('../layout/mensajes.php');
include("../admin/layout/parte2.php");
?>
