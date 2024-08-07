<?php
include("../app/config.php");
session_start();

if(isset($_SESSION['sesion_email'])) {
   //echo "el usuario paso por el login";
   $email_sesion = $_SESSION['sesion_email'];
   $query_sesion = $pdo->prepare("SELECT * FROM usuarios WHERE email = '$email_sesion' AND estado = '1' ");
   $query_sesion->execute();
   
   $datos_sesion_usuarios = $query_sesion->fetchAll(PDO::FETCH_ASSOC);
   foreach ($datos_sesion_usuarios as $datos_sesion_usuario) {
    $nombre_sesion_usuario = $datos_sesion_usuario['nombres'];
   }
}else {
    //echo "El usuario no paso por el login";
    header('location:'.APP_URL."/login");
}
include("../layout/parte1.php");
?>

<!-- TOPBAR -->
<div class="main active">

    <div class="grid-container">
            <a href="" class="box b1"></a>
            <a href="" class="box b2"></a>
            <a href="" class="box b3"></a>
            <div class="wrapper box4 b4">
                <i id="left" class='bx bx-chevron-left'></i>        
                <ul class="carousel">
                    <a href="#" class="card">
                        <div class="img"><img src="imagen.png" alt="" draggable="false"></div>
                        <h2>Class Topics</h2>
                    </a>
                    <a href="#" class="card">
                        <div class="img"><img src="imagen.png" alt="" draggable="false"></div>
                        <h2>Videos</h2>
                    </a>
                    <a href="#" class="card">
                        <div class="img"><img src="imagen.png" alt="" draggable="false"></div>
                        <h2>Just kids</h2>
                    </a>
                    <a href="#" class="card">
                        <div class="img"><img src="imagen.png" alt="" draggable="false"></div>
                        <h2>Books</h2>
                    </a>
                    <a href="#" class="card">
                        <div class="img"><img src="imagen.png" alt="" draggable="false"></div>
                        <h2>Listening</h2>
                    </a>
                </ul>
                <i id="right" class='bx bx-chevron-right'></i>
            </div>     
    </div>

</div>
<!-- </TOPBAR> -->

<?php
include ('../layout/mensajes.php');
include("../layout/parte2.php");
?>