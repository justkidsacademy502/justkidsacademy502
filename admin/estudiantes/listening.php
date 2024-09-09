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

    /* Estilos adicionales para el reproductor de audio */
    .audio-player {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        width: 250px;
        /* Ajusta el tamaño del reproductor si es necesario */
        padding: 20px;
        margin: 20px auto;
    }

    .card-title {
        font-size: 26px;
        /* Tamaño del título */
        color: #333;
        /* Color del texto del título */
    }

    .controls {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .btn-control {
        border: none;
        border-radius: 12px;
        font-size: 24px;
        /* Tamaño del texto de los iconos */
        padding: 12px 16px;
        color: white;
        transition: background-color 0.3s, transform 0.2s;
        cursor: pointer;
        width: 70px;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 8px;
        background-color: #d1e0d1;
    }

    .play {
        background-color: #fce971;
        /* Verde pastel */
    }

    .pause {
        background-color: #71cefc;
        /* Azul pastel */
    }

    .btn-control:hover {
        background-color: #fc71b2;
        /* Verde pastel más claro */
        transform: scale(1.1);
        /* Efecto de escala en hover */
    }

    .progress {
        background: #e3f2fd;
        /* Color pastel azul muy claro */
        border-radius: 8px;
        height: 12px;
        /* Ajusta la altura de la barra de progreso */
        position: relative;
        width: 100%;
        cursor: pointer;
        margin-top: 15px;
    }

    .progress-bar {
        background: #80d3f2;
        /* Color pastel azul */
        height: 100%;
        width: 0;
        /* Cambia el ancho con JavaScript */
        border-radius: 8px;
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
                    <img src="../../public/img/letras/listening.png" width="290px" height="290px" alt="user-avatar" class=" img-fluid">
                </div>
            </div>
        </div>
    </center>

    <div class="container mt-5">
        <div class="row">
            <div class="audio-player card p-4 text-center">
                <h2 class="card-title mb-4">Farm Animals</h2>
                <audio id="audio" src="../../public/audio/ejemplo.mp3"></audio>
                <div class="controls mb-3 d-flex justify-content-center">
                    <button class="btn btn-control play" id="play" aria-label="Play">
                        <lord-icon target="button" colors="primary:white" style="height:40px;width:40px;" trigger="hover" src="https://media.lordicon.com/icons/system/regular/26-play.json">
                            <img alt="" loading="lazy" src="https://media.lordicon.com/icons/system/regular/26-play.svg">
                        </lord-icon>
                    </button>
                    <button class="btn btn-control pause" id="pause" aria-label="Pause">
                        <lord-icon target="button" colors="primary:white" style="height:40px;width:40px;" trigger="hover" src="https://media.lordicon.com/icons/system/regular/77-pause.json">
                            <img alt="" loading="lazy" src="https://media.lordicon.com/icons/system/regular/77-pause.svg">
                        </lord-icon>
                    </button>
                </div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
            </div>

            <div class="audio-player card p-4 text-center">
                <h2 class="card-title mb-4">Titulo</h2>
                <audio id="audio" src="path/to/your-audio-file.mp3"></audio>
                <div class="controls mb-3 d-flex justify-content-center">
                    <button class="btn btn-control play" id="play" aria-label="Play">
                        <lord-icon target="button" colors="primary:white" style="height:40px;width:40px;" trigger="hover" src="https://media.lordicon.com/icons/system/regular/26-play.json">
                            <img alt="" loading="lazy" src="https://media.lordicon.com/icons/system/regular/26-play.svg">
                        </lord-icon>
                    </button>
                    <button class="btn btn-control pause" id="pause" aria-label="Pause">
                        <lord-icon target="button" colors="primary:white" style="height:40px;width:40px;" trigger="hover" src="https://media.lordicon.com/icons/system/regular/77-pause.json">
                            <img alt="" loading="lazy" src="https://media.lordicon.com/icons/system/regular/77-pause.svg">
                        </lord-icon>
                    </button>
                </div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
            </div>

            <div class="audio-player card p-4 text-center">
                <h2 class="card-title mb-4">Titulo</h2>
                <audio id="audio" src="path/to/your-audio-file.mp3"></audio>
                <div class="controls mb-3 d-flex justify-content-center">
                    <button class="btn btn-control play" id="play" aria-label="Play">
                        <lord-icon target="button" colors="primary:white" style="height:40px;width:40px;" trigger="hover" src="https://media.lordicon.com/icons/system/regular/26-play.json">
                            <img alt="" loading="lazy" src="https://media.lordicon.com/icons/system/regular/26-play.svg">
                        </lord-icon>
                    </button>
                    <button class="btn btn-control pause" id="pause" aria-label="Pause">
                        <lord-icon target="button" colors="primary:white" style="height:40px;width:40px;" trigger="hover" src="https://media.lordicon.com/icons/system/regular/77-pause.json">
                            <img alt="" loading="lazy" src="https://media.lordicon.com/icons/system/regular/77-pause.svg">
                        </lord-icon>
                    </button>
                </div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
            </div>

            <div class="audio-player card p-4 text-center">
                <h2 class="card-title mb-4">Titulo</h2>
                <audio id="audio" src="path/to/your-audio-file.mp3"></audio>
                <div class="controls mb-3 d-flex justify-content-center">
                    <button class="btn btn-control play" id="play" aria-label="Play">
                        <lord-icon target="button" colors="primary:white" style="height:40px;width:40px;" trigger="hover" src="https://media.lordicon.com/icons/system/regular/26-play.json">
                            <img alt="" loading="lazy" src="https://media.lordicon.com/icons/system/regular/26-play.svg">
                        </lord-icon>
                    </button>
                    <button class="btn btn-control pause" id="pause" aria-label="Pause">
                        <lord-icon target="button" colors="primary:white" style="height:40px;width:40px;" trigger="hover" src="https://media.lordicon.com/icons/system/regular/77-pause.json">
                            <img alt="" loading="lazy" src="https://media.lordicon.com/icons/system/regular/77-pause.svg">
                        </lord-icon>
                    </button>
                </div>
                <div class="progress">
                    <div class="progress-bar"></div>
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

<script>
    const audio = document.getElementById('audio');
    const playButton = document.getElementById('play');
    const pauseButton = document.getElementById('pause');
    const progressBar = document.querySelector('.progress-bar');
    const progress = document.querySelector('.progress');

    // Play audio
    playButton.addEventListener('click', () => {
        audio.play();
    });

    // Pause audio
    pauseButton.addEventListener('click', () => {
        audio.pause();
    });

    // Update progress bar
    audio.addEventListener('timeupdate', () => {
        const percentage = (audio.currentTime / audio.duration) * 100;
        progressBar.style.width = percentage + '%';
    });

    // Seek audio
    progress.addEventListener('click', (e) => {
        const rect = progress.getBoundingClientRect();
        const offsetX = e.clientX - rect.left;
        const percentage = (offsetX / progress.offsetWidth);
        audio.currentTime = percentage * audio.duration;
    });
</script>