<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <!-- Sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- JAVASCRIPT -->
    <script src="<?=APP_URL;?>/public/js/script-carusel.js" defer></script>
    <!-- Boostrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="<?=APP_URL;?>../public/css/admin-style.css">
    <link rel="stylesheet" href="<?=APP_URL;?>../public/css/carusel-style.css">

    <title><?=APP_NAME;?></title>
</head>
<body>
    
   
       <!-- SIDEBAR -->
<div class="custom-sidebar custom-sidebar-active">
    <div class="custom-menu-btn">
        <i class="custom-icon bx bx-chevron-left"></i>
    </div>
    <div class="custom-sidebar-head">
        <div class="custom-user-img">
            <img src="../../public/img/logo_home.png" alt="logo">
        </div>
        <div class="custom-user-details">
            <p class="custom-title">Student</p>
            <p class="custom-name"><?=$nombre_sesion_usuario;?></p>
        </div>
    </div>
    <div class="custom-nav">
        <div class="custom-menu">
            <p class="custom-title">Main</p>
            <ul>
                <li class="custom-menu-active">
                    <a href="#">
                        <i class="custom-icon bx bx-home-alt-2"></i>
                        <span class="custom-text">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="custom-icon bx bxs-group"></i>
                        <span class="custom-text">My Score</span>
                        <i class="custom-arrow bx bx-chevron-down"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="custom-icon bx bx-calendar-check"></i>
                        <span class="custom-text">Permissions</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="custom-icon bx bx-credit-card"></i>
                        <span class="custom-text">Pay</span>
                        <i class="custom-arrow bx bx-chevron-down"></i>
                    </a>
                    <ul class="custom-sub-menu">
                        <li>
                            <a href="#">
                                <span class="custom-text">Pagar</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="custom-text">Constancias</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="custom-icon bx bx-message-detail"></i>
                        <span class="custom-text">Questions</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="custom-menu">
            <p class="custom-title">Settings</p>
            <ul>
                <li>
                    <a href="#">
                        <i class="custom-icon bx bx-lock-open-alt"></i>
                        <span class="custom-text">Change Password</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="custom-menu">
        <p class="custom-title">Account</p>
        <ul>
            <li>
                <a href="<?=APP_URL;?>../login/logout.php">
                    <i class="custom-icon bx bx-log-out"></i>
                    <span class="custom-text">Log Out</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- </SIDEBAR> -->
