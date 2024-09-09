<?php

include("../../app/config.php");
include("../layout/parte1.php");

?>

<style>
    .hover-enlarge {
        transition: transform 0.2s ease;
        /* Suaviza la transición */
    }

    .hover-enlarge:hover {
        transform: scale(1.02);
        /* Agranda el contenedor en un 2% */
    }

    .custom-container {
    border-radius: 20px;
    }
</style>


<!-- TOPBAR -->
<div class="custom-main custom-sidebar-active">


    <a style="display: flex; justify-content: center; align-items: center; position: absolute; top: 10px; right: 10px;background-color: white;border-radius:10px;padding:5px;box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);height:35px;width:35px;" data-widget="fullscreen" href="#" role="button" style="color: black;font-size:19px">
        <lord-icon target="a" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/71-full-screen.json">
            <img alt="" loading="lazy" src="https://media.lordicon.com/icons/wired/flat/71-full-screen.svg">
        </lord-icon>
    </a>


    <center>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="../../public/img/letras/Questions.png" width="290px" height="290px" alt="user-avatar" class=" img-fluid">
                </div>
            </div>
        </div>
    </center>

    <div class="container mt-5">
        <div class="accordion-container">
            <div class="card custom-container">
                <div class="card-header" style="display: flex;justify-content:center;">
                    <h2 class="card-title">Preguntas Frecuentes</h2>
                </div>

                <div class="card-body">

                    <div id="accordion">
                        <div class="card card-teal hover-enlarge rounded">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    <a class="d-block w-100 text-center" data-toggle="collapse" href="#collapseOne">
                                        <b> ¿Cuáles son las diferentes maneras de realizar mi pago?</b>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    En línea a través de nuestro número oficial <b>+502 5513-6495</b> : <br>
                                    Depósito, visitando una agencia bancaria. <br>
                                    Transferencia bancaria por medio de tu banca en línea.
                                </div>
                            </div>
                        </div>
                        <div class="card card-teal hover-enlarge">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    <a class="d-block w-100  text-center" data-toggle="collapse" href="#collapseTwo">
                                        <b>¿Cómo obtengo un descuento por referir a un familiar o amigo?</b>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    En este caso puedes contactarte directamente con nuestro equipo de servicio al cliente o por medio de nuestro número <br>
                                    oficial <b>+502 5513-6495</b> , debes de comentarles que quieres referir a un familiar o amigo y brindar su número de teléfono y su nombre
                                    completo para que se puedan contactar con la persona. <br><br>
                                    Importante: al momento que la persona se inscriba debe de mencionar que tú la referiste y automáticamente se aplicará un descuento a esa persona
                                    y a ti en tú próxima mensualidad también es importante que menciones tú descuento cuando canceles tu mensualidad.
                                </div>
                            </div>
                        </div>
                        <div class="card card-teal hover-enlarge">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    <a class="d-block w-100  text-center" data-toggle="collapse" href="#collapseThree">
                                        <b>¿Cuáles son los horarios de atención de servicio al cliente?</b>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Servicio al cliente online <b>+502 5513-6495</b> <br><br>

                                    Horario: <br>
                                    Lunes a viernes: 7:00 am a 9:45 pm <br>
                                    Sábado: 8:00 am a 4:45 pm <br>
                                    Domingo: 8:00 am a 4:45 pm <br>
                                </div>
                            </div>
                        </div>
                        <div class="card card-teal hover-enlarge">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    <a class="d-block w-100  text-center" data-toggle="collapse" href="#collapsefour">
                                        <b>¿Puedo cambiar mi correo electrónico para ingresar a mi plataforma?</b>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapsefour" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Por supuesto, puedes cambiar tu correo electrónico cuando gustes, solamente debes notificarlo a nuestro equipo de <br>
                                    servicio al cliente por medio de nuestro número oficial <b>+502 5513-6495</b> , para que ellos se encarguen de <br> cambiar tu correo electrónico
                                    en nuestro sistema y se te compartirán tus nuevas credenciales, mencionando <br> que siempre podrás cambiar tu contraseña cuando gustes.
                                </div>
                            </div>
                        </div>
                        <div class="card card-teal hover-enlarge">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    <a class="d-block w-100  text-center" data-toggle="collapse" href="#collapsefive">
                                        <b>¿Si cambio mi número de teléfono debo notificarlo?</b>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapsefive" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Sí, debes notificarlo a nuestro equipo de servicio al cliente por medio de nuestro <br>
                                    número oficial <b>+503 6955-0186</b> , esto con el fin de mantener comunicación contigo para cualquier duda <br>
                                    o consulta o gestión pendiente contigo.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
<br><br>

<?php
include('../../layout/mensajes.php');
include("../layout/parte2.php");
?>