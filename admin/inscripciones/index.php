<?php
include("../../app/config.php");
include("../layout/parte1.php");
?>

       <!-- TOPBAR -->

<div class="custom-main custom-sidebar-active">
    <div class="center">
       <h1>Inscripciones: <?=$ano_actual;?></h1> 
    </div>
    <br>
    <div class="row">
    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
            <span class="info-box-icon bg-primary   ">
                <lord-icon target="div" colors="primary:white" trigger="hover" src="https://media.lordicon.com/icons/system/regular/8-account.json">
                    <img alt="" loading="eager" src="https://media.lordicon.com/icons/system/regular/8-account.svg">
                </lord-icon>
            </span>
            <div class="info-box-content">
                <span class="info-box-text">Inscripciones</span>
                <a href="create.php" class="btn btn-primary btn-sm">Nuevo Estudiante</a>
            </div>

        </div>
    </div>  
    </div>
</div>

<?php
include('../../layout/mensajes.php');
include("../layout/parte2.php");
?>
