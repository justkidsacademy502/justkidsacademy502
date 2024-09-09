<?php

include("../../app/config.php");
include("../layout/parte1.php");

?>


<header>
    <link rel="stylesheet" href="<?= APP_URL; ?>/public/css/home_estudiante.css">
</header>

<style>
    /* Estilos para el contenedor de información */
    .info-box {
        transition: transform 0.3s ease;
        /* Transición suave para el efecto */
        text-align: center;
        /* Centra el texto dentro del info-box */
        overflow: hidden;
        /* Evita que el contenido se desborde del contenedor */
        cursor: pointer;
    }

    .info-box:hover {
        transform: scale(1.05);
        /* Agrandar el contenedor en un 5% */
    }

    .info-box a {
        text-decoration: none;
        /* Quitar la decoración del enlace */
        color: inherit;
        /* Heredar el color del texto */
    }

    /* Asegurarse de que el texto se ajuste y no se desborde */
    .info-box-text {
        display: block;
        /* Asegúrate de que el texto sea un bloque para el ajuste */
        white-space: normal;
        /* Permite el salto de línea dentro del texto */
        overflow: hidden;
        /* Oculta el texto desbordado */
        text-overflow: ellipsis;
        /* Agrega puntos suspensivos si el texto es demasiado largo */
        text-align: center;
        /* Asegúrate de que el texto esté centrado dentro del contenedor */
        width: 100%;
        /* Asegura que el texto ocupe todo el ancho del contenedor */
    }

    /* Ajustes para pantallas pequeñas */
    @media (max-width: 767px) {
        .card-header {
            display: flex;
            /* Usa flexbox para centrar el contenido */
            justify-content: center;
            /* Centra el título horizontalmente */
            text-align: center;
            /* Asegúrate de que el texto esté centrado */
        }

        .info-box a {
            /* Estilo del enlace */
            text-decoration: none;
            /* Quitar la decoración del enlace */
            color: inherit;
            /* Heredar el color del texto */
            display: flex;
            /* Utiliza flexbox para el contenido del enlace */
            flex-direction: column;
            /* Coloca el contenido del enlace en una columna */
            align-items: center;
            /* Centra el contenido del enlace horizontalmente */
            justify-content: center;
            /* Centra el contenido del enlace verticalmente */
            width: 100%;
            /* Asegura que el enlace ocupe todo el ancho del contenedor */

        }

        .info-box {
            /* Asegúrate de que el info-box se adapte a pantallas pequeñas */
            margin: 0 auto;
            /* Centra el info-box */
            max-width: 100%;
            /* Asegúrate de que no se desborde del contenedor */
            padding: 10px;
            /* Añade un poco de padding para dispositivos pequeños */
            display: flex;
            /* Utiliza flexbox para centrar el contenido */
            flex-direction: column;
            /* Coloca el contenido en una columna */
            align-items: center;
            /* Centra el contenido horizontalmente */
            justify-content: center;
            /* Centra el contenido verticalmente */
            padding: 10px;
            /* Añade un poco de espacio interno */
        }

        .info-box-text {
            font-size: 14px;
            /* Ajusta el tamaño del texto si es necesario */
            padding: 0 10px;
            /* Añade algo de padding para evitar que el texto llegue al borde */
        }
    }

    /* Estilos para el iframe */
    .iframe-container {
        margin-top: 50px;
        width: 100%;
        height: 100%;
        border: 1px solid #ddd;
        position: relative;
    }

    .iframe-wrapper {
        position: relative;
        padding-bottom: 56.25%;
        /* Aspect ratio 16:9 */
        height: 0;
    }

    .iframe-wrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }
</style>

<!-- TOPBAR -->
<div class="custom-main custom-sidebar-active">


    <a style="display: flex; justify-content: center;z-index:1; align-items: center; position: absolute; top: 10px; right: 10px;background-color: white;border-radius:10px;padding:5px;box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);height:35px;width:35px;" data-widget="fullscreen" href="#" role="button" style="color: black;font-size:19px">
        <lord-icon target="a" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/71-full-screen.json">
            <img alt="" loading="lazy" src="https://media.lordicon.com/icons/wired/flat/71-full-screen.svg">
        </lord-icon>
    </a>


   <center>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="../../public/img/letras/Class_Topics.png" width="390px" height="390px" alt="user-avatar" class=" img-fluid">
                </div>
            </div>
        </div>
    </center>




    
    <div class="container mt-5" style="margin-top: -30px;">
        <div class="accordion-container">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: center;">
                    <h2 class="card-title">Class Topics</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Primera columna con items -->
                        <div class="col-md-6">
                            <div class="column" id="items-container">
                                <!-- Items duplicados -->
                                <div class="col-md-12 item mb-4" data-url="https://view.genially.com/66c32478430e6116803f6ff2">
                                    <div class="info-box">
                                        <a href="#" style="display: flex; justify-content: center;">
                                            <span class="info-box-icon">
                                                <lord-icon target="div" style="height: 60px; width: 60px;" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/486-school.json">
                                                    <img alt="" loading="lazy" src="https://media.lordicon.com/icons/wired/flat/486-school.svg">
                                                </lord-icon>
                                            </span>
                                            <div class="info-box-content">
                                                <span class="info-box-text"><b>Welcome to Just Kids Academy</b></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-12 item mb-4" data-url="https://view.genially.com/66b48edd4b2317742c0ea8c0">
                                    <div class="info-box">
                                        <a href="#" data-url="https://view.genially.com/66b48edd4b2317742c0ea8c0" style="display: flex; justify-content: center;">
                                            <span class="info-box-icon">
                                                <lord-icon target="div" style="height: 60px; width: 60px;" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/771-artist-painting-color-palette.json">
                                                    <img alt="" loading="lazy" src="https://media.lordicon.com/icons/wired/flat/771-artist-painting-color-palette.svg">
                                                </lord-icon>
                                            </span>
                                            <div class="info-box-content">
                                                <span class="info-box-text"><b>Colors</b></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-12 item mb-4">
                                    <div class="info-box">
                                        <a href="" style="display: flex; justify-content: center;">
                                            <span class="info-box-icon">
                                                <lord-icon target="div" style="height: 60px; width: 60px;" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/1835-feeding-chicken.json">
                                                    <img alt="" loading="lazy" src="https://media.lordicon.com/icons/wired/flat/1835-feeding-chicken.svg">
                                                </lord-icon>
                                            </span>
                                            <div class="info-box-content">
                                                <span class="info-box-text"><b>Farm Animals</b></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-12 item mb-4">
                                    <div class="info-box">
                                        <a href="" style="display: flex; justify-content: center;">
                                            <span class="info-box-icon">
                                                <lord-icon target="div" style="height: 60px; width: 60px;" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/1420-square.json">
                                                    <img alt="" loading="lazy" src="https://media.lordicon.com/icons/wired/flat/1420-square.svg">
                                                </lord-icon>
                                            </span>
                                            <div class="info-box-content">
                                                <span class="info-box-text"><b>Shapes</b></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-12 item mb-4">
                                    <div class="info-box">
                                        <a href="" style="display: flex; justify-content: center;">
                                            <span class="info-box-icon">
                                                <lord-icon target="div" style="height: 60px; width: 60px;" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/486-school.json">
                                                    <img alt="" loading="lazy" src="https://media.lordicon.com/icons/wired/flat/486-school.svg">
                                                </lord-icon>
                                            </span>
                                            <div class="info-box-content">
                                                <span class="info-box-text"><b>Numbers and Colors</b></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- Fin de los items -->
                            </div>
                        </div>

                        <!-- Segunda columna con items duplicados -->
                        <div class="col-md-6">
                            <div class="column" id="items-container">
                                <!-- Items duplicados -->
                                <div class="iframe-container">
                                    <div class="iframe-wrapper">
                                        <iframe id="presentation" title="Presentación" frameborder="0" src="" allowscriptaccess="always" allowfullscreen="true" scrolling="yes" allownetworking="all"></iframe>
                                    </div>
                                </div>
                            </div>

                            <!-- Fin de los items -->
                        </div>
                    </div>
                </div>

                <!-- Paginación -->
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center" id="pagination"></ul>
                </nav>
            </div>
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
    document.addEventListener("DOMContentLoaded", function() {
        // Carga el script de Lord-icon de manera asíncrona
        var script = document.createElement('script');
        script.src = "https://cdn.lordicon.com/xyz.js"; // Usa la URL específica del CDN para tu icono
        document.body.appendChild(script);
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const itemsContainer = document.getElementById('items-container');
        const items = Array.from(itemsContainer.getElementsByClassName('item'));
        const itemsPerPage = 4;
        const numPages = Math.ceil(items.length / itemsPerPage);
        const pagination = document.getElementById('pagination');

        function showPage(page) {
            items.forEach((item, index) => {
                item.style.display = (Math.floor(index / itemsPerPage) === page) ? 'block' : 'none';
            });
        }

        function createPagination() {
            for (let i = 0; i < numPages; i++) {
                const pageItem = document.createElement('li');
                pageItem.classList.add('page-item');
                if (i === 0) pageItem.classList.add('active');

                const pageLink = document.createElement('a');
                pageLink.classList.add('page-link');
                pageLink.href = '#';
                pageLink.textContent = i + 1;

                pageLink.addEventListener('click', function(e) {
                    e.preventDefault();
                    showPage(i);
                    pagination.querySelectorAll('.page-item').forEach((item, index) => {
                        item.classList.toggle('active', index === i);
                    });
                });

                pageItem.appendChild(pageLink);
                pagination.appendChild(pageItem);
            }
        }

        createPagination();
        showPage(0); // Mostrar la primera página inicialmente
    });
</script>

<script>
    $(function() {
        $("#example1").DataTable({
            "pageLength": 6,
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>

<script>
    document.querySelectorAll('.item').forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault(); // Evita el comportamiento predeterminado del enlace
            const url = link.getAttribute('data-url');
            if (url) {
                document.getElementById('presentation').src = url;
            }
        });
    });
</script>