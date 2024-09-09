<?php

include("../../app/config.php");
include("../layout/parte1.php");
?>

<header>
    <link rel="stylesheet" href="../../public/css/videos_page.css">
</header>


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
                    <img src="../../public/img/letras/videos.png" width="290px" height="290px" alt="user-avatar" class=" img-fluid">
                </div>
            </div>
        </div>
    </center>


    <!--    Colors    -->
    <div class="container mt-5">
        <div class="header">
            <h1>Colors</h1>
            <lord-icon target="div" loading="interaction" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/771-artist-painting-color-palette.json">
                <img alt="" loading="eager" src="https://media.lordicon.com/icons/wired/flat/771-artist-painting-color-palette.svg">
            </lord-icon>
        </div>
        <div class="row">

            <!--    Video 1    -->
            <div class="col-md-3 hover-enlarge">
                <div class="card" data-video="video1">
                    <div class="card-image-container">
                        <img src="../../public/videos/Vocabulario-basico/colors1.jpg" alt="Video Thumbnail" class="video-thumbnail">
                    </div>
                    <p class="card-title">Colors</p>
                    <p class="card-des">Colores en ingles</p>
                    <div class="card-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 384 512" stroke-width="0" fill="currentColor" stroke="currentColor">
                            <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"></path>
                        </svg>
                        <span class="card-btn-text">Watch Video</span>
                    </div>
                </div>
            </div>
            <!-- Video Overlays #1 -->
            <div class="video-overlay" id="video-overlay-video1">
                <div class="video-container">
                    <span class="close-btn" data-video="video1">&times;</span>
                    <h2 class="video-title">Card Title 1</h2>
                    <video id="video-player-video1" controls>
                        <source src="../../public/videos/Vocabulario-basico/colors1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <!--    Video 1    -->




            <!--    Video 2    -->
            <div class="col-md-3 hover-enlarge">
                <div class="card" data-video="video2">
                    <div class="card-image-container">
                        <img src="../../public/videos/Vocabulario-basico/colors2.jpg" alt="Video Thumbnail" class="video-thumbnail">
                    </div>
                    <p class="card-title">Colors</p>
                    <p class="card-des">Colores en ingles</p>
                    <div class="card-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 384 512" stroke-width="0" fill="currentColor" stroke="currentColor">
                            <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"></path>
                        </svg>
                        <span class="card-btn-text">Watch Video</span>
                    </div>
                </div>
            </div>
            <!-- Video Overlays #2 -->
            <div class="video-overlay" id="video-overlay-video2">
                <div class="video-container">
                    <span class="close-btn" data-video="video2">&times;</span>
                    <h2 class="video-title">Colors</h2>
                    <video id="video-player-video2" controls>
                        <source src="../../public/videos/Vocabulario-basico/colors2.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <!--    Video 2    -->




            <!--    Video 3    -->
            <div class="col-md-3 hover-enlarge">
                <div class="card" data-video="video3">
                    <div class="card-image-container">
                        <img src="../../public/videos/Vocabulario-basico/colors3.jpg" alt="Video Thumbnail" class="video-thumbnail">
                    </div>
                    <p class="card-title">Colors</p>
                    <p class="card-des">Colores en ingles</p>
                    <div class="card-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 384 512" stroke-width="0" fill="currentColor" stroke="currentColor">
                            <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"></path>
                        </svg>
                        <span class="card-btn-text">Watch Video</span>
                    </div>
                </div>
            </div>
            <!-- Video Overlays #3 -->
            <div class="video-overlay" id="video-overlay-video3">
                <div class="video-container">
                    <span class="close-btn" data-video="video3">&times;</span>
                    <h2 class="video-title">Colors</h2>
                    <video id="video-player-video3" controls>
                        <source src="../../public/videos/Vocabulario-basico/colors3.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <!--    Video 3    -->




            <!--    Video 4    -->
            <div class="col-md-3 hover-enlarge">
                <div class="card" data-video="video4">
                    <div class="card-image-container">
                        <img src="../../public/videos/Vocabulario-basico/colors4.jpg" alt="Video Thumbnail" class="video-thumbnail">
                    </div>
                    <p class="card-title">Colors</p>
                    <p class="card-des">Colores en ingles</p>
                    <div class="card-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 384 512" stroke-width="0" fill="currentColor" stroke="currentColor">
                            <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"></path>
                        </svg>
                        <span class="card-btn-text">Watch Video</span>
                    </div>
                </div>
            </div>
            <!-- Video Overlays #4 -->
            <div class="video-overlay" id="video-overlay-video4">
                <div class="video-container">
                    <span class="close-btn" data-video="video4">&times;</span>
                    <h2 class="video-title">Colors</h2>
                    <video id="video-player-video4" controls>
                        <source src="../../public/videos/Vocabulario-basico/colors4.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <!--    Video 4    -->

        </div>
    </div>
    <!--    Colors    -->





    <!--    Numbers    -->
    <div class="container mt-5">
        <div class="header">
            <h1>Numbers</h1>
            <lord-icon target="div" loading="interaction" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/2435-number-1.json">
                <img alt="" loading="eager" src="https://media.lordicon.com/icons/wired/flat/2435-number-1.svg">
            </lord-icon>
        </div>
        <div class="row">

            <!--    Video 1    -->
            <div class="col-md-3 hover-enlarge">
                <div class="card" data-video="video5">
                    <div class="card-image-container">
                        <img src="../../public/videos/Vocabulario-basico/numbers1.jpg" alt="Video Thumbnail" class="video-thumbnail">
                    </div>
                    <p class="card-title">Numbers</p>
                    <p class="card-des">Números en ingles</p>
                    <div class="card-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 384 512" stroke-width="0" fill="currentColor" stroke="currentColor">
                            <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"></path>
                        </svg>
                        <span class="card-btn-text">Watch Video</span>
                    </div>
                </div>
            </div>
            <!-- Video Overlays #5 -->
            <div class="video-overlay" id="video-overlay-video5">
                <div class="video-container">
                    <span class="close-btn" data-video="video5">&times;</span>
                    <h2 class="video-title">Card Title 1</h2>
                    <video id="video-player-video5" controls>
                        <source src="../../public/videos/Vocabulario-basico/numbers1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <!--    Video 1    -->




            <!--    Video 2    -->
            <div class="col-md-3 hover-enlarge">
                <div class="card" data-video="video6">
                    <div class="card-image-container">
                        <img src="../../public/videos/Vocabulario-basico/numbers2.jpg" alt="Video Thumbnail" class="video-thumbnail">
                    </div>
                    <p class="card-title">Numbers</p>
                    <p class="card-des">Numeros en ingles</p>
                    <div class="card-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 384 512" stroke-width="0" fill="currentColor" stroke="currentColor">
                            <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"></path>
                        </svg>
                        <span class="card-btn-text">Watch Video</span>
                    </div>
                </div>
            </div>
            <!-- Video Overlays #2 -->
            <div class="video-overlay" id="video-overlay-video6">
                <div class="video-container">
                    <span class="close-btn" data-video="video6">&times;</span>
                    <h2 class="video-title">Numbers</h2>
                    <video id="video-player-video6" controls>
                        <source src="../../public/videos/Vocabulario-basico/numbers2.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <!--    Video 2    -->




            <!--    Video 3    -->
            <div class="col-md-3 hover-enlarge">
                <div class="card" data-video="video7">
                    <div class="card-image-container">
                        <img src="../../public/videos/Vocabulario-basico/numbers3.jpg" alt="Video Thumbnail" class="video-thumbnail">
                    </div>
                    <p class="card-title">Numbers</p>
                    <p class="card-des">Numeros en ingles</p>
                    <div class="card-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 384 512" stroke-width="0" fill="currentColor" stroke="currentColor">
                            <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"></path>
                        </svg>
                        <span class="card-btn-text">Watch Video</span>
                    </div>
                </div>
            </div>
            <!-- Video Overlays #3 -->
            <div class="video-overlay" id="video-overlay-video7">
                <div class="video-container">
                    <span class="close-btn" data-video="video7">&times;</span>
                    <h2 class="video-title">Numbers</h2>
                    <video id="video-player-video7" controls>
                        <source src="../../public/videos/Vocabulario-basico/numbers3.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <!--    Video 3    -->




            <!--    Video 4    -->
            <div class="col-md-3 hover-enlarge">
                <div class="card" data-video="video8">
                    <div class="card-image-container">
                        <img src="../../public/videos/Vocabulario-basico/numbers4.jpg" alt="Video Thumbnail" class="video-thumbnail">
                    </div>
                    <p class="card-title">Numbers</p>
                    <p class="card-des">Numeros en ingles</p>
                    <div class="card-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 384 512" stroke-width="0" fill="currentColor" stroke="currentColor">
                            <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"></path>
                        </svg>
                        <span class="card-btn-text">Watch Video</span>
                    </div>
                </div>
            </div>
            <!-- Video Overlays #4 -->
            <div class="video-overlay" id="video-overlay-video8">
                <div class="video-container">
                    <span class="close-btn" data-video="video8">&times;</span>
                    <h2 class="video-title">Numbers</h2>
                    <video id="video-player-video8" controls>
                        <source src="../../public/videos/Vocabulario-basico/numbers4.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <!--    Video 4    -->

        </div>
    </div>
    <!--    Numbers    -->




    <!--    Farm Animals    -->
    <div class="container mt-5">
        <div class="header">
            <h1>Farm Animals</h1>
            <lord-icon target="div" loading="interaction" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/1835-feeding-chicken.json">
                <img alt="" loading="eager" src="https://media.lordicon.com/icons/wired/flat/1835-feeding-chicken.svg">
            </lord-icon>
        </div>
        <div class="row">

            <!--    Video 1    -->
            <div class="col-md-3 hover-enlarge">
                <div class="card" data-video="video9">
                    <div class="card-image-container">
                        <img src="../../public/videos/Vocabulario-basico/farm-animals1.jpg" alt="Video Thumbnail" class="video-thumbnail">
                    </div>
                    <p class="card-title">Farm Animals</p>
                    <p class="card-des">Animales de granja en ingles</p>
                    <div class="card-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 384 512" stroke-width="0" fill="currentColor" stroke="currentColor">
                            <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"></path>
                        </svg>
                        <span class="card-btn-text">Watch Video</span>
                    </div>
                </div>
            </div>
            <!-- Video Overlays #1 -->
            <div class="video-overlay" id="video-overlay-video9">
                <div class="video-container">
                    <span class="close-btn" data-video="video9">&times;</span>
                    <h2 class="video-title">Card Title 1</h2>
                    <video id="video-player-video9" controls>
                        <source src="../../public/videos/Vocabulario-basico/farm-animals1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <!--    Video 1    -->




            <!--    Video 2    -->
            <div class="col-md-3 hover-enlarge">
                <div class="card" data-video="video10">
                    <div class="card-image-container">
                        <img src="../../public/videos/Vocabulario-basico/farm-animals2.jpg" alt="Video Thumbnail" class="video-thumbnail">
                    </div>
                    <p class="card-title">Farm Animals</p>
                    <p class="card-des">Animales de granja en ingles</p>
                    <div class="card-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 384 512" stroke-width="0" fill="currentColor" stroke="currentColor">
                            <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"></path>
                        </svg>
                        <span class="card-btn-text">Watch Video</span>
                    </div>
                </div>
            </div>
            <!-- Video Overlays #2 -->
            <div class="video-overlay" id="video-overlay-video10">
                <div class="video-container">
                    <span class="close-btn" data-video="video10">&times;</span>
                    <h2 class="video-title">Card Title 1</h2>
                    <video id="video-player-video10" controls>
                        <source src="../../public/videos/Vocabulario-basico/farm-animals2.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <!--    Video 2    -->




            <!--    Video 3    -->
            <div class="col-md-3 hover-enlarge">
                <div class="card" data-video="video11">
                    <div class="card-image-container">
                        <img src="../../public/videos/Vocabulario-basico/farm-animals3.jpg" alt="Video Thumbnail" class="video-thumbnail">
                    </div>
                    <p class="card-title">Farm Animals</p>
                    <p class="card-des">Animales de granja en ingles</p>
                    <div class="card-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 384 512" stroke-width="0" fill="currentColor" stroke="currentColor">
                            <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"></path>
                        </svg>
                        <span class="card-btn-text">Watch Video</span>
                    </div>
                </div>
            </div>
            <!-- Video Overlays #3 -->
            <div class="video-overlay" id="video-overlay-video11">
                <div class="video-container">
                    <span class="close-btn" data-video="video11">&times;</span>
                    <h2 class="video-title">Card Title 1</h2>
                    <video id="video-player-video11" controls>
                        <source src="../../public/videos/Vocabulario-basico/farm-animals3.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <!--    Video 3    -->




            <!--    Video 4    -->
            <div class="col-md-3 hover-enlarge">
                <div class="card" data-video="video12">
                    <div class="card-image-container">
                        <img src="../../public/videos/Vocabulario-basico/farm-animals4.jpg" alt="Video Thumbnail" class="video-thumbnail">
                    </div>
                    <p class="card-title">Farm Animals</p>
                    <p class="card-des">Animales de granja en ingles</p>
                    <div class="card-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 384 512" stroke-width="0" fill="currentColor" stroke="currentColor">
                            <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"></path>
                        </svg>
                        <span class="card-btn-text">Watch Video</span>
                    </div>
                </div>
            </div>
            <!-- Video Overlays #4 -->
            <div class="video-overlay" id="video-overlay-video12">
                <div class="video-container">
                    <span class="close-btn" data-video="video12">&times;</span>
                    <h2 class="video-title">Card Title 1</h2>
                    <video id="video-player-video12" controls>
                        <source src="../../public/videos/Vocabulario-basico/farm-animals4.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <!--    Video 4    -->

        </div>
    </div>
    <!--    Farm Animals    -->




</div>
<br><br>

<?php
include('../../layout/mensajes.php');
include("../layout/parte2.php");
?>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Abrir el visor
        document.querySelectorAll('.card').forEach(card => {
            card.addEventListener('click', () => {
                const videoId = card.getAttribute('data-video');
                const videoOverlay = document.getElementById(`video-overlay-${videoId}`);
                const videoTitle = videoOverlay.querySelector('.video-title');
                videoTitle.textContent = card.querySelector('.card-title').textContent;
                videoOverlay.style.display = 'flex'; // Muestra el overlay
            });
        });

        // Cerrar el visor
        document.querySelectorAll('.close-btn').forEach(button => {
            button.addEventListener('click', () => {
                const videoId = button.getAttribute('data-video');
                const videoOverlay = document.getElementById(`video-overlay-${videoId}`);
                const videoPlayer = document.getElementById(`video-player-${videoId}`);
                videoOverlay.style.display = 'none'; // Oculta el overlay
                if (videoPlayer) {
                    videoPlayer.pause(); // Pausa el video
                    videoPlayer.currentTime = 0; // Reinicia el tiempo del video
                }
            });
        });

        // Cierra el visor cuando se haga clic fuera del video
        document.querySelectorAll('.video-overlay').forEach(overlay => {
            overlay.addEventListener('click', (e) => {
                if (e.target === overlay) {
                    const videoId = overlay.id.replace('video-overlay-', '');
                    const videoPlayer = document.getElementById(`video-player-${videoId}`);
                    overlay.style.display = 'none'; // Oculta el overlay
                    if (videoPlayer) {
                        videoPlayer.pause(); // Pausa el video
                        videoPlayer.currentTime = 0; // Reinicia el tiempo del video
                    }
                }
            });
        });
    });
</script>