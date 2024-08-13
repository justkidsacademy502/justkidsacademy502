<?php
include("../../app/config.php");
include("../layout/parte1.php");
?>

       <!-- TOPBAR -->

<div class="custom-main custom-sidebar-active">
    <div class="center">
       <h1>Configuraciones del sistema</h1> 
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 col-sm-6 col-12">
         <div class="info-box">
             <span class="info-box-icon bg-primary">
                <lord-icon target="div" colors="primary:white" trigger="hover" src="https://media.lordicon.com/icons/system/regular/73-world-globe-wikis.json">
                   <img alt="" loading="eager" src="https://media.lordicon.com/icons/system/regular/73-world-globe-wikis.svg">
                </lord-icon>
             </span>
             <div class="info-box-content">
                 <span class="info-box-text" style="font-weight: 400;">Datos de la academia</span>
                 <a href="institucion" class="btn btn-primary btn-sm">Configurar</a>
             </div>
         </div>
       </div>
       <div class="col-md-4 col-sm-6 col-12">
         <div class="info-box">
             <span class="info-box-icon bg-info">
                <lord-icon target="div"  colors="primary:white" trigger="hover" src="https://media.lordicon.com/icons/system/regular/23-calendar.json">
                    <img alt="" colors="primary:white" loading="lazy" src="https://media.lordicon.com/icons/system/regular/23-calendar.svg">
                </lord-icon>
             </span>
             <div class="info-box-content">
                 <span class="info-box-text" style="font-weight: 400;">Gestión educativa</span>
                 <a href="gestiones" class="btn btn-info btn-sm">Configurar</a>
             </div>
         </div>
       </div>
    </div>
</div>

<?php
include('../../layout/mensajes.php');
include("../layout/parte2.php");
?>