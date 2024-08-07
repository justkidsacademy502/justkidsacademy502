<?php 
include ('../app/config.php');
?>
<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=APP_NAME;?></title>
        <!-- CSS -->
        <link rel="stylesheet" href="<?=APP_URL;?>/public/css/login-style.css">
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <!-- Sweetalert2 -->
         <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                        
    </head>
    <body>
      
        <section class="container forms">
          <img src="../public/img/imagen-prueba.jpeg" class="imagen" alt="Justkidsanimals">
          
            <div class="form login">
                <div class="form-content">
                    <header>
                      <img src="../public/img/logo_home.png" alt="logo_justkids" width="100px" height="100px">
                    </header>

                    <form action="controller_login.php" method="post">
                        <div class="field input-field">
                            <input type="text" name="email" placeholder="Username" class="input" >
                        </div>

                        <div class="field input-field">
                            <input type="password" name="password" placeholder="Password" class="password"> 
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="field button-field">
                            <input name="btningresar" id="btn" type="submit" value="Login"   >
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <?php
        session_start();
        if(isset($_SESSION['mensaje'])){
            $mensaje = $_SESSION['mensaje'];
            ?>
            <script>
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "<?=$mensaje;?>",
                    showConfirmButton: false,
                    timer: 3500
                    });
            </script>
        <?php
        session_destroy();
        }
        ?>

        <!-- JavaScript -->
        <script src="<?=APP_URL;?>/public/js/script-login.js"></script>
    </body>
</html>