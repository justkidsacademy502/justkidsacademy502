<?php
include("../../app/config.php");
include("../layout/parte1.php");
?>

<head>
    <link rel="stylesheet" href="../../public/css/book.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/turn.js/4.1.0/turn.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/turn.js/4.1.0/turn.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>


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
                    <img src="../../public/img/letras/books.png" width="290px" height="290px" alt="user-avatar" class=" img-fluid">
                </div>
            </div>
        </div>
    </center>










    <!-- Carrusel 1: Scaredy Monster -->
    <div class="header">
        <h1>Monsters</h1>
        <lord-icon target="div" loading="interaction" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/1872-small-cute-monster.json">
            <img alt="" loading="eager" src="https://media.lordicon.com/icons/wired/flat/1872-small-cute-monster.svg">
        </lord-icon>
    </div>
    <div class="carousel" id="carousel-1">
        <button class="carrusel-arrow carrusel-prev" id="button-prev-1">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                <path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path>
            </svg>
        </button>
        <div class="carrusel-container">
            <ul class="carrusel-list" id="carrusel-list-1">
                <li class="carrusel-item">
                    <div class="book-cover" onclick="openBook('book1')">
                        <img src="../../public/img/books/Adventure/scaredy-monster-and-the-big-storm/cover.jpg" alt="Portada del libro 1">
                    </div>
                </li>
                <li class="carrusel-item">
                    <div class="book-cover" onclick="openBook('book2')">
                        <img src="../../public/img/books/Adventure/scaredy-monster-goes-to-the-doctor/cover.jpg" alt="Portada del libro 2">
                    </div>
                </li>
                <li class="carrusel-item">
                    <div class="book-cover" onclick="openBook('book3')">
                        <img src="../../public/img/books/Adventure/scaredy-monster-rides-a-plane/cover.jpg" alt="Portada del libro 3">
                    </div>
                </li>
                <li class="carrusel-item">
                    <div class="book-cover" onclick="openBook('book4')">
                        <img src="../../public/img/books/Adventure/scaredy-monster-and-the-bad-dream/cover.jpg" alt="Portada del libro 4">
                    </div>
                </li>
                <li class="carrusel-item">
                    <div class="book-cover" onclick="openBook('book5')">
                        <img src="../../public/img/books/Adventure/scaredy-monster-and-the-babysitter/cover.jpg" alt="Portada del libro 5">
                    </div>
                </li>
                <li class="carrusel-item">
                    <div class="book-cover" onclick="openBook('book6')">
                        <img src="../../public/img/books/Adventure/scaredy-monster-gets-lost/cover.jpg" alt="Portada del libro 6">
                    </div>
                </li>
                <li class="carrusel-item">
                    <div class="book-cover" onclick="openBook('book7')">
                        <img src="../../public/img/books/Adventure/scaredy-monster-and-the-slumber-party/cover.jpg" alt="Portada del libro 7">
                    </div>
                </li>
                <li class="carrusel-item">
                    <div class="book-cover" onclick="openBook('book8')">
                        <img src="../../public/img/books/Adventure/scaredy-monster-loses-a-tooth/cover.jpg" alt="Portada del libro 8">
                    </div>
                </li>
                <li class="carrusel-item">
                    <div class="book-cover" onclick="openBook('book9')">
                        <img src="../../public/img/books/Adventure/scaredy-monster-meets-naughty-monster/cover.jpg" alt="Portada del libro 9">
                    </div>
                </li>
                <li class="carrusel-item">
                    <div class="book-cover" onclick="openBook('book10')">
                        <img src="../../public/img/books/Adventure/scaredy-monster-learns-to-swim/cover.jpg" alt="Portada del libro 10">
                    </div>
                </li>
                <li class="carrusel-item">
                    <div class="book-cover" onclick="openBook('book11')">
                        <img src="../../public/img/books/Adventure/scaredy-monster-and-the-mysterious-neighbor/cover.jpg" alt="Portada del libro 11">
                    </div>
                </li>
                <li class="carrusel-item">
                    <div class="book-cover" onclick="openBook('book12')">
                        <img src="../../public/img/books/Adventure/scaredy-monster-rides-a-bike/cover.jpg" alt="Portada del libro 12">
                    </div>
                </li>
                <!-- Agrega más elementos aquí si lo deseas -->
            </ul>
        </div>
        <button class="carrusel-arrow carrusel-next" id="button-next-1">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path>
            </svg>
        </button>
    </div>

    <!--   LIBRO 1  -->
    <div class="book-details" id="book1">
        <div class="overlay" onclick="closeBook()"></div>
        <div class="book-content">
            <div id="flipbook1">
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/0.jpg" alt="Página 0"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/1.jpg" alt="Página 1"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/2.jpg" alt="Página 2"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/3.jpg" alt="Página 3"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/4.jpg" alt="Página 4"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/5.jpg" alt="Página 5"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/6.jpg" alt="Página 6"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/7.jpg" alt="Página 7"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/8.jpg" alt="Página 8"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/9.jpg" alt="Página 9"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/10.jpg" alt="Página 10"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/11.jpg" alt="Página 11"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/12.jpg" alt="Página 12"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/13.jpg" alt="Página 13"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/14.jpg" alt="Página 14"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/15.jpg" alt="Página 15"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/16.jpg" alt="Página 16"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/17.jpg" alt="Página 17"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/18.jpg" alt="Página 18"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/19.jpg" alt="Página 19"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/20.jpg" alt="Página 20"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/21.jpg" alt="Página 21"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/22.jpg" alt="Página 22"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/23.jpg" alt="Página 23"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/24.jpg" alt="Página 24"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/25.jpg" alt="Página 25"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/26.jpg" alt="Página 26"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/27.jpg" alt="Página 27"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/28.jpg" alt="Página 28"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/29.jpg" alt="Página 29"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/30.jpg" alt="Página 30"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-big-storm/31.jpg" alt="Página 31"></div>
            </div>
            <div class="close-btn" onclick="closeBook('book1')">✕</div>
        </div>
    </div>
    <!--   LIBRO 1  -->
    <!--   LIBRO 2  -->
    <div class="book-details" id="book2">
        <div class="overlay" onclick="closeBook()"></div>
        <div class="book-content">
            <div id="flipbook2">
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/1.jpg" alt="Página 1"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/2.jpg" alt="Página 2"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/3.jpg" alt="Página 3"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/4.jpg" alt="Página 4"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/5.jpg" alt="Página 5"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/6.jpg" alt="Página 6"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/7.jpg" alt="Página 7"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/8.jpg" alt="Página 8"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/9.jpg" alt="Página 9"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/10.jpg" alt="Página 10"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/11.jpg" alt="Página 11"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/12.jpg" alt="Página 12"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/13.jpg" alt="Página 13"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/14.jpg" alt="Página 14"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/15.jpg" alt="Página 15"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/16.jpg" alt="Página 16"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/17.jpg" alt="Página 17"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/18.jpg" alt="Página 18"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/19.jpg" alt="Página 19"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/20.jpg" alt="Página 20"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/21.jpg" alt="Página 21"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/22.jpg" alt="Página 22"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/23.jpg" alt="Página 23"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/24.jpg" alt="Página 24"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/25.jpg" alt="Página 25"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/26.jpg" alt="Página 26"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/27.jpg" alt="Página 27"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/28.jpg" alt="Página 28"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/29.jpg" alt="Página 29"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/30.jpg" alt="Página 30"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/31.jpg" alt="Página 31"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-goes-to-the-doctor/32.jpg" alt="Página 32"></div>
            </div>
            <div class="close-btn" onclick="closeBook('book2')">✕</div>
        </div>
    </div>
    <!--   LIBRO 2  -->
    <!--   LIBRO 3  -->
    <div class="book-details" id="book3">
        <div class="overlay" onclick="closeBook()"></div>
        <div class="book-content">
            <div id="flipbook3">
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/1.jpg" alt="Página 1"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/2.jpg" alt="Página 2"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/3.jpg" alt="Página 3"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/4.jpg" alt="Página 4"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/5.jpg" alt="Página 5"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/6.jpg" alt="Página 6"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/7.jpg" alt="Página 7"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/8.jpg" alt="Página 8"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/9.jpg" alt="Página 9"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/10.jpg" alt="Página 10"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/11.jpg" alt="Página 11"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/12.jpg" alt="Página 12"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/13.jpg" alt="Página 13"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/14.jpg" alt="Página 14"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/15.jpg" alt="Página 15"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/16.jpg" alt="Página 16"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/17.jpg" alt="Página 17"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/18.jpg" alt="Página 18"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/19.jpg" alt="Página 19"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/20.jpg" alt="Página 20"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/21.jpg" alt="Página 21"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/22.jpg" alt="Página 22"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/23.jpg" alt="Página 23"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/24.jpg" alt="Página 24"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/25.jpg" alt="Página 25"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/26.jpg" alt="Página 26"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/27.jpg" alt="Página 27"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/28.jpg" alt="Página 28"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/29.jpg" alt="Página 29"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/30.jpg" alt="Página 30"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/31.jpg" alt="Página 31"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/32.jpg" alt="Página 32"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/33.jpg" alt="Página 33"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-plane/34.jpg" alt="Página 34"></div>
            </div>
            <div class="close-btn" onclick="closeBook('book3')">✕</div>
        </div>
    </div>
    <!--   LIBRO 3  -->
    <!--   LIBRO 4  -->
    <div class="book-details" id="book4">
        <div class="overlay" onclick="closeBook()"></div>
        <div class="book-content">
            <div id="flipbook4">
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/1.jpg" alt="Página 1"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/2.jpg" alt="Página 2"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/3.jpg" alt="Página 3"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/4.jpg" alt="Página 4"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/5.jpg" alt="Página 5"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/6.jpg" alt="Página 6"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/7.jpg" alt="Página 7"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/8.jpg" alt="Página 8"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/9.jpg" alt="Página 9"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/10.jpg" alt="Página 10"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/11.jpg" alt="Página 11"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/12.jpg" alt="Página 12"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/13.jpg" alt="Página 13"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/14.jpg" alt="Página 14"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/15.jpg" alt="Página 15"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/16.jpg" alt="Página 16"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/17.jpg" alt="Página 17"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/18.jpg" alt="Página 18"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/19.jpg" alt="Página 19"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/20.jpg" alt="Página 20"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/21.jpg" alt="Página 21"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/22.jpg" alt="Página 22"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/23.jpg" alt="Página 23"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/24.jpg" alt="Página 24"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/25.jpg" alt="Página 25"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/26.jpg" alt="Página 26"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/27.jpg" alt="Página 27"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/28.jpg" alt="Página 28"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/29.jpg" alt="Página 29"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/30.jpg" alt="Página 30"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/31.jpg" alt="Página 31"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-bad-dream/32.jpg" alt="Página 32"></div>
            </div>
            <div class="close-btn" onclick="closeBook('book4')">✕</div>
        </div>
    </div>
    <!--   LIBRO 4  -->
    <!--   LIBRO 5  -->
    <div class="book-details" id="book5">
        <div class="overlay" onclick="closeBook()"></div>
        <div class="book-content">
            <div id="flipbook5">
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/1.jpg" alt="Página 1"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/2.jpg" alt="Página 2"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/3.jpg" alt="Página 3"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/4.jpg" alt="Página 4"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/5.jpg" alt="Página 5"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/6.jpg" alt="Página 6"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/7.jpg" alt="Página 7"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/8.jpg" alt="Página 8"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/9.jpg" alt="Página 9"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/10.jpg" alt="Página 10"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/11.jpg" alt="Página 11"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/12.jpg" alt="Página 12"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/13.jpg" alt="Página 13"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/14.jpg" alt="Página 14"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/15.jpg" alt="Página 15"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/16.jpg" alt="Página 16"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/17.jpg" alt="Página 17"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/18.jpg" alt="Página 18"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/19.jpg" alt="Página 19"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/20.jpg" alt="Página 20"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/21.jpg" alt="Página 21"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/22.jpg" alt="Página 22"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/23.jpg" alt="Página 23"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/24.jpg" alt="Página 24"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/25.jpg" alt="Página 25"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/26.jpg" alt="Página 26"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/27.jpg" alt="Página 27"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/28.jpg" alt="Página 28"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/29.jpg" alt="Página 29"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/30.jpg" alt="Página 30"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/31.jpg" alt="Página 31"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-babysitter/32.jpg" alt="Página 32"></div>
            </div>
            <div class="close-btn" onclick="closeBook('book5')">✕</div>
        </div>
    </div>
    <!--   LIBRO 5  -->
    <!--   LIBRO 6  -->
    <div class="book-details" id="book6">
        <div class="overlay" onclick="closeBook()"></div>
        <div class="book-content">
            <div id="flipbook6">
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/1.jpg" alt="Página 1"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/2.jpg" alt="Página 2"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/3.jpg" alt="Página 3"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/4.jpg" alt="Página 4"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/5.jpg" alt="Página 5"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/6.jpg" alt="Página 6"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/7.jpg" alt="Página 7"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/8.jpg" alt="Página 8"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/9.jpg" alt="Página 9"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/10.jpg" alt="Página 10"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/11.jpg" alt="Página 11"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/12.jpg" alt="Página 12"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/13.jpg" alt="Página 13"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/14.jpg" alt="Página 14"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/15.jpg" alt="Página 15"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/16.jpg" alt="Página 16"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/17.jpg" alt="Página 17"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/18.jpg" alt="Página 18"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/19.jpg" alt="Página 19"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/20.jpg" alt="Página 20"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/21.jpg" alt="Página 21"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/22.jpg" alt="Página 22"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/23.jpg" alt="Página 23"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/24.jpg" alt="Página 24"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/25.jpg" alt="Página 25"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/26.jpg" alt="Página 26"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/27.jpg" alt="Página 27"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/28.jpg" alt="Página 28"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/29.jpg" alt="Página 29"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/30.jpg" alt="Página 30"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/31.jpg" alt="Página 31"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-gets-lost/32.jpg" alt="Página 32"></div>
            </div>
            <div class="close-btn" onclick="closeBook('book6')">✕</div>
        </div>
    </div>
    <!--   LIBRO 6  -->
    <!--   LIBRO 7  -->
    <div class="book-details" id="book7">
        <div class="overlay" onclick="closeBook()"></div>
        <div class="book-content">
            <div id="flipbook7">
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/1.jpg" alt="Página 1"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/2.jpg" alt="Página 2"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/3.jpg" alt="Página 3"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/4.jpg" alt="Página 4"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/5.jpg" alt="Página 5"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/6.jpg" alt="Página 6"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/7.jpg" alt="Página 7"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/8.jpg" alt="Página 8"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/9.jpg" alt="Página 9"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/10.jpg" alt="Página 10"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/11.jpg" alt="Página 11"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/12.jpg" alt="Página 12"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/13.jpg" alt="Página 13"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/14.jpg" alt="Página 14"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/15.jpg" alt="Página 15"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/16.jpg" alt="Página 16"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/17.jpg" alt="Página 17"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/18.jpg" alt="Página 18"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/19.jpg" alt="Página 19"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/20.jpg" alt="Página 20"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/21.jpg" alt="Página 21"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/22.jpg" alt="Página 22"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/23.jpg" alt="Página 23"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/24.jpg" alt="Página 24"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/25.jpg" alt="Página 25"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/26.jpg" alt="Página 26"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/27.jpg" alt="Página 27"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/28.jpg" alt="Página 28"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/29.jpg" alt="Página 29"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/30.jpg" alt="Página 30"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/31.jpg" alt="Página 31"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-slumber-party/32.jpg" alt="Página 32"></div>
            </div>
            <div class="close-btn" onclick="closeBook('book7')">✕</div>
        </div>
    </div>
    <!--   LIBRO 7  -->
    <!--   LIBRO 8  -->
    <div class="book-details" id="book8">
        <div class="overlay" onclick="closeBook()"></div>
        <div class="book-content">
            <div id="flipbook8">
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/1.jpg" alt="Página 1"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/2.jpg" alt="Página 2"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/3.jpg" alt="Página 3"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/4.jpg" alt="Página 4"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/5.jpg" alt="Página 5"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/6.jpg" alt="Página 6"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/7.jpg" alt="Página 7"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/8.jpg" alt="Página 8"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/9.jpg" alt="Página 9"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/10.jpg" alt="Página 10"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/11.jpg" alt="Página 11"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/12.jpg" alt="Página 12"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/13.jpg" alt="Página 13"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/14.jpg" alt="Página 14"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/15.jpg" alt="Página 15"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/16.jpg" alt="Página 16"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/17.jpg" alt="Página 17"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/18.jpg" alt="Página 18"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/19.jpg" alt="Página 19"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/20.jpg" alt="Página 20"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/21.jpg" alt="Página 21"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/22.jpg" alt="Página 22"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/23.jpg" alt="Página 23"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/24.jpg" alt="Página 24"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/25.jpg" alt="Página 25"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/26.jpg" alt="Página 26"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/27.jpg" alt="Página 27"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/28.jpg" alt="Página 28"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/29.jpg" alt="Página 29"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/30.jpg" alt="Página 30"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/31.jpg" alt="Página 31"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-loses-a-tooth/32.jpg" alt="Página 32"></div>
            </div>
            <div class="close-btn" onclick="closeBook('book8')">✕</div>
        </div>
    </div>
    <!--   LIBRO 8  -->
    <!--   LIBRO 9  -->
    <div class="book-details" id="book9">
        <div class="overlay" onclick="closeBook()"></div>
        <div class="book-content">
            <div id="flipbook9">
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/1.jpg" alt="Página 1"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/2.jpg" alt="Página 2"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/3.jpg" alt="Página 3"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/4.jpg" alt="Página 4"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/5.jpg" alt="Página 5"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/6.jpg" alt="Página 6"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/7.jpg" alt="Página 7"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/8.jpg" alt="Página 8"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/9.jpg" alt="Página 9"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/10.jpg" alt="Página 10"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/11.jpg" alt="Página 11"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/12.jpg" alt="Página 12"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/13.jpg" alt="Página 13"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/14.jpg" alt="Página 14"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/15.jpg" alt="Página 15"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/16.jpg" alt="Página 16"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/17.jpg" alt="Página 17"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/18.jpg" alt="Página 18"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/19.jpg" alt="Página 19"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/20.jpg" alt="Página 20"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/21.jpg" alt="Página 21"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/22.jpg" alt="Página 22"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/23.jpg" alt="Página 23"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/24.jpg" alt="Página 24"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/25.jpg" alt="Página 25"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/26.jpg" alt="Página 26"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/27.jpg" alt="Página 27"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/28.jpg" alt="Página 28"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/29.jpg" alt="Página 29"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/30.jpg" alt="Página 30"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/31.jpg" alt="Página 31"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-meets-naughty-monster/32.jpg" alt="Página 32"></div>
            </div>
            <div class="close-btn" onclick="closeBook('book9')">✕</div>
        </div>
    </div>
    <!--   LIBRO 9  -->
    <!--   LIBRO 10  -->
    <div class="book-details" id="book10">
        <div class="overlay" onclick="closeBook()"></div>
        <div class="book-content">
            <div id="flipbook10">
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/1.jpg" alt="Página 1"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/2.jpg" alt="Página 2"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/3.jpg" alt="Página 3"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/4.jpg" alt="Página 4"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/5.jpg" alt="Página 5"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/6.jpg" alt="Página 6"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/7.jpg" alt="Página 7"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/8.jpg" alt="Página 8"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/9.jpg" alt="Página 9"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/10.jpg" alt="Página 10"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/11.jpg" alt="Página 11"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/12.jpg" alt="Página 12"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/13.jpg" alt="Página 13"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/14.jpg" alt="Página 14"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/15.jpg" alt="Página 15"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/16.jpg" alt="Página 16"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/17.jpg" alt="Página 17"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/18.jpg" alt="Página 18"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/19.jpg" alt="Página 19"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/20.jpg" alt="Página 20"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/21.jpg" alt="Página 21"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/22.jpg" alt="Página 22"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/23.jpg" alt="Página 23"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/24.jpg" alt="Página 24"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/25.jpg" alt="Página 25"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/26.jpg" alt="Página 26"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/27.jpg" alt="Página 27"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/28.jpg" alt="Página 28"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/29.jpg" alt="Página 29"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/30.jpg" alt="Página 30"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/31.jpg" alt="Página 31"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-learns-to-swim/32.jpg" alt="Página 32"></div>
            </div>
            <div class="close-btn" onclick="closeBook('book10')">✕</div>
        </div>
    </div>
    <!--   LIBRO 10  -->
    <!--   LIBRO 11  -->
    <div class="book-details" id="book11">
        <div class="overlay" onclick="closeBook()"></div>
        <div class="book-content">
            <div id="flipbook11">
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/1.jpg" alt="Página 1"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/2.jpg" alt="Página 2"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/3.jpg" alt="Página 3"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/4.jpg" alt="Página 4"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/5.jpg" alt="Página 5"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/6.jpg" alt="Página 6"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/7.jpg" alt="Página 7"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/8.jpg" alt="Página 8"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/9.jpg" alt="Página 9"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/10.jpg" alt="Página 10"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/11.jpg" alt="Página 11"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/12.jpg" alt="Página 12"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/13.jpg" alt="Página 13"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/14.jpg" alt="Página 14"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/15.jpg" alt="Página 15"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/16.jpg" alt="Página 16"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/17.jpg" alt="Página 17"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/18.jpg" alt="Página 18"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/19.jpg" alt="Página 19"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/20.jpg" alt="Página 20"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/21.jpg" alt="Página 21"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/22.jpg" alt="Página 22"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/23.jpg" alt="Página 23"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/24.jpg" alt="Página 24"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/25.jpg" alt="Página 25"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/26.jpg" alt="Página 26"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/27.jpg" alt="Página 27"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/28.jpg" alt="Página 28"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/29.jpg" alt="Página 29"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/30.jpg" alt="Página 30"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/31.jpg" alt="Página 31"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-and-the-mysterious-neighbor/32.jpg" alt="Página 32"></div>
            </div>
            <div class="close-btn" onclick="closeBook('book11')">✕</div>
        </div>
    </div>
    <!--   LIBRO 11  -->
    <!--   LIBRO 12  -->
    <div class="book-details" id="book12">
        <div class="overlay" onclick="closeBook()"></div>
        <div class="book-content">
            <div id="flipbook12">
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/1.jpg" alt="Página 1"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/2.jpg" alt="Página 2"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/3.jpg" alt="Página 3"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/4.jpg" alt="Página 4"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/5.jpg" alt="Página 5"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/6.jpg" alt="Página 6"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/7.jpg" alt="Página 7"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/8.jpg" alt="Página 8"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/9.jpg" alt="Página 9"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/10.jpg" alt="Página 10"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/11.jpg" alt="Página 11"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/12.jpg" alt="Página 12"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/13.jpg" alt="Página 13"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/14.jpg" alt="Página 14"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/15.jpg" alt="Página 15"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/16.jpg" alt="Página 16"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/17.jpg" alt="Página 17"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/18.jpg" alt="Página 18"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/19.jpg" alt="Página 19"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/20.jpg" alt="Página 20"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/21.jpg" alt="Página 21"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/22.jpg" alt="Página 22"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/23.jpg" alt="Página 23"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/24.jpg" alt="Página 24"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/25.jpg" alt="Página 25"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/26.jpg" alt="Página 26"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/27.jpg" alt="Página 27"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/28.jpg" alt="Página 28"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/29.jpg" alt="Página 29"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/30.jpg" alt="Página 30"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/31.jpg" alt="Página 31"></div>
                <div class="page"><img src="../../public/img/books/adventure/scaredy-monster-rides-a-bike/32.jpg" alt="Página 32"></div>
            </div>
            <div class="close-btn" onclick="closeBook('book12')">✕</div>
        </div>
    </div>
    <!--   LIBRO 12  -->
    <!-- Carrusel 1: Scaredy Monster -->





    <br>




    <!-- Carrusel 2: Ciencia Ficción -->
    <div class="header">
        <h1>Science Fiction</h1>
        <lord-icon target="div" loading="interaction" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/2474-sparkles-glitter.json">
            <img alt="" loading="eager" src="https://media.lordicon.com/icons/wired/flat/2474-sparkles-glitter.svg">
        </lord-icon>
    </div>
    <div class="carousel" id="carousel-2">
        <button class="carrusel-arrow carrusel-prev" id="button-prev-2">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                <path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path>
            </svg>
        </button>
        <div class="carrusel-container">
            <ul class="carrusel-list" id="carrusel-list-2">
                <li class="carrusel-item">
                    <div class="book-cover" onclick="openBook('book13')">
                        <img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level1-cat-ninja-gets-ready/cover.jpg" alt="Portada del libro 13">
                    </div>
                </li>
                <li class="carrusel-item">
                    <div class="book-cover" onclick="openBook('book14')">
                        <img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level2-cat-ninja-to-the-rescue/cover.jpg" alt="Portada del libro 14">
                    </div>
                </li>
                <li class="carrusel-item">
                    <div class="book-cover" onclick="openBook('book15')">
                        <img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book1/cover.jpg" alt="Portada del libro 15">
                    </div>
                </li>
                <li class="carrusel-item">
                    <div class="book-cover" onclick="openBook('book16')">
                        <img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book2/cover.jpg" alt="Portada del libro 16">
                    </div>
                </li>
                <li class="carrusel-item">
                    <div class="book-cover" onclick="openBook('book17')">
                        <img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book3/cover.jpg" alt="Portada del libro 17">
                    </div>
                </li>
                <li class="carrusel-item">
                    <div class="book-cover" onclick="openBook('book18')">
                        <img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book4/cover.jpg" alt="Portada del libro 18">
                    </div>
                </li>
                <li class="carrusel-item">
                    <div class="book-cover" onclick="openBook('book19')">
                        <img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book5/cover.jpg" alt="Portada del libro 19">
                    </div>
                </li>
                <!-- Agrega más elementos aquí si lo deseas -->
            </ul>
        </div>
        <button class="carrusel-arrow carrusel-next" id="button-next-2">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path>
            </svg>
        </button>
    </div>

    <!--   LIBRO 13  -->
    <div class="book-details" id="book13">
        <div class="overlay" onclick="closeBook()"></div>
        <div class="book-content">
            <div id="flipbook13">
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level1-cat-ninja-gets-ready/1.jpg" alt="Página 1"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level1-cat-ninja-gets-ready/2.jpg" alt="Página 2"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level1-cat-ninja-gets-ready/3.jpg" alt="Página 3"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level1-cat-ninja-gets-ready/4.jpg" alt="Página 4"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level1-cat-ninja-gets-ready/5.jpg" alt="Página 5"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level1-cat-ninja-gets-ready/6.jpg" alt="Página 6"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level1-cat-ninja-gets-ready/7.jpg" alt="Página 7"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level1-cat-ninja-gets-ready/8.jpg" alt="Página 8"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level1-cat-ninja-gets-ready/9.jpg" alt="Página 9"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level1-cat-ninja-gets-ready/10.jpg" alt="Página 10"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level1-cat-ninja-gets-ready/11.jpg" alt="Página 11"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level1-cat-ninja-gets-ready/12.jpg" alt="Página 12"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level1-cat-ninja-gets-ready/13.jpg" alt="Página 13"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level1-cat-ninja-gets-ready/14.jpg" alt="Página 14"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level1-cat-ninja-gets-ready/15.jpg" alt="Página 15"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level1-cat-ninja-gets-ready/16.jpg" alt="Página 16"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level1-cat-ninja-gets-ready/17.jpg" alt="Página 17"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level1-cat-ninja-gets-ready/18.jpg" alt="Página 18"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level1-cat-ninja-gets-ready/19.jpg" alt="Página 19"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level1-cat-ninja-gets-ready/20.jpg" alt="Página 20"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level1-cat-ninja-gets-ready/21.jpg" alt="Página 21"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level1-cat-ninja-gets-ready/22.jpg" alt="Página 22"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level1-cat-ninja-gets-ready/23.jpg" alt="Página 23"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level1-cat-ninja-gets-ready/24.jpg" alt="Página 24"></div>
            </div>
            <div class="close-btn" onclick="closeBook('book13')">✕</div>
        </div>
    </div>
    <!--   LIBRO 13  -->
    <!--   LIBRO 14  -->
    <div class="book-details" id="book14">
        <div class="overlay" onclick="closeBook()"></div>
        <div class="book-content">
            <div id="flipbook14">
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level2-cat-ninja-to-the-rescue/1.jpg" alt="Página 1"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level2-cat-ninja-to-the-rescue/2.jpg" alt="Página 2"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level2-cat-ninja-to-the-rescue/3.jpg" alt="Página 3"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level2-cat-ninja-to-the-rescue/4.jpg" alt="Página 4"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level2-cat-ninja-to-the-rescue/5.jpg" alt="Página 5"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level2-cat-ninja-to-the-rescue/6.jpg" alt="Página 6"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level2-cat-ninja-to-the-rescue/7.jpg" alt="Página 7"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level2-cat-ninja-to-the-rescue/8.jpg" alt="Página 8"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level2-cat-ninja-to-the-rescue/9.jpg" alt="Página 9"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level2-cat-ninja-to-the-rescue/10.jpg" alt="Página 10"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level2-cat-ninja-to-the-rescue/11.jpg" alt="Página 11"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level2-cat-ninja-to-the-rescue/12.jpg" alt="Página 12"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level2-cat-ninja-to-the-rescue/13.jpg" alt="Página 13"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level2-cat-ninja-to-the-rescue/14.jpg" alt="Página 14"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level2-cat-ninja-to-the-rescue/15.jpg" alt="Página 15"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level2-cat-ninja-to-the-rescue/16.jpg" alt="Página 16"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level2-cat-ninja-to-the-rescue/17.jpg" alt="Página 17"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level2-cat-ninja-to-the-rescue/18.jpg" alt="Página 18"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level2-cat-ninja-to-the-rescue/19.jpg" alt="Página 19"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level2-cat-ninja-to-the-rescue/20.jpg" alt="Página 20"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level2-cat-ninja-to-the-rescue/21.jpg" alt="Página 21"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level2-cat-ninja-to-the-rescue/22.jpg" alt="Página 22"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level2-cat-ninja-to-the-rescue/23.jpg" alt="Página 23"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-level2-cat-ninja-to-the-rescue/24.jpg" alt="Página 24"></div>
            </div>
            <div class="close-btn" onclick="closeBook('book14')">✕</div>
        </div>
    </div>
    <!--   LIBRO 14  -->
    <!--   LIBRO 15  -->
    <div class="book-details" id="book15">
        <div class="overlay" onclick="closeBook()"></div>
        <div class="book-content">
            <div id="flipbook15">
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book1/1.jpg" alt="Página 1"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book1/2.jpg" alt="Página 2"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book1/3.jpg" alt="Página 3"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book1/4.jpg" alt="Página 4"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book1/5.jpg" alt="Página 5"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book1/6.jpg" alt="Página 6"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book1/7.jpg" alt="Página 7"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book1/8.jpg" alt="Página 8"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book1/9.jpg" alt="Página 9"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book1/10.jpg" alt="Página 10"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book1/11.jpg" alt="Página 11"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book1/12.jpg" alt="Página 12"></div>
            </div>
            <div class="close-btn" onclick="closeBook('book15')">✕</div>
        </div>
    </div>
    <!--   LIBRO 15  -->
    <!--   LIBRO 16  -->
    <div class="book-details" id="book16">
        <div class="overlay" onclick="closeBook()"></div>
        <div class="book-content">
            <div id="flipbook16">
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book2/1.jpg" alt="Página 1"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book2/2.jpg" alt="Página 2"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book2/3.jpg" alt="Página 3"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book2/4.jpg" alt="Página 4"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book2/5.jpg" alt="Página 5"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book2/6.jpg" alt="Página 6"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book2/7.jpg" alt="Página 7"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book2/8.jpg" alt="Página 8"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book2/9.jpg" alt="Página 9"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book2/10.jpg" alt="Página 10"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book2/11.jpg" alt="Página 11"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book2/12.jpg" alt="Página 12"></div>
            </div>
            <div class="close-btn" onclick="closeBook('book16')">✕</div>
        </div>
    </div>
    <!--   LIBRO 16  -->
    <!--   LIBRO 17  -->
    <div class="book-details" id="book17">
        <div class="overlay" onclick="closeBook()"></div>
        <div class="book-content">
            <div id="flipbook17">
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book3/1.jpg" alt="Página 1"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book3/2.jpg" alt="Página 2"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book3/3.jpg" alt="Página 3"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book3/4.jpg" alt="Página 4"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book3/5.jpg" alt="Página 5"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book3/6.jpg" alt="Página 6"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book3/7.jpg" alt="Página 7"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book3/8.jpg" alt="Página 8"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book3/9.jpg" alt="Página 9"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book3/10.jpg" alt="Página 10"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book3/11.jpg" alt="Página 11"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book3/12.jpg" alt="Página 12"></div>
            </div>
            <div class="close-btn" onclick="closeBook('book17')">✕</div>
        </div>
    </div>
    <!--   LIBRO 17  -->
    <!--   LIBRO 18  -->
    <div class="book-details" id="book18">
        <div class="overlay" onclick="closeBook()"></div>
        <div class="book-content">
            <div id="flipbook18">
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book4/1.jpg" alt="Página 1"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book4/2.jpg" alt="Página 2"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book4/3.jpg" alt="Página 3"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book4/4.jpg" alt="Página 4"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book4/5.jpg" alt="Página 5"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book4/6.jpg" alt="Página 6"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book4/7.jpg" alt="Página 7"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book4/8.jpg" alt="Página 8"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book4/9.jpg" alt="Página 9"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book4/10.jpg" alt="Página 10"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book4/11.jpg" alt="Página 11"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book4/12.jpg" alt="Página 12"></div>
            </div>
            <div class="close-btn" onclick="closeBook('book18')">✕</div>
        </div>
    </div>
    <!--   LIBRO 18  -->
    <!--   LIBRO 19  -->
    <div class="book-details" id="book19">
        <div class="overlay" onclick="closeBook()"></div>
        <div class="book-content">
            <div id="flipbook19">
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book5/1.jpg" alt="Página 1"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book5/2.jpg" alt="Página 2"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book5/3.jpg" alt="Página 3"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book5/4.jpg" alt="Página 4"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book5/5.jpg" alt="Página 5"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book5/6.jpg" alt="Página 6"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book5/7.jpg" alt="Página 7"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book5/8.jpg" alt="Página 8"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book5/9.jpg" alt="Página 9"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book5/10.jpg" alt="Página 10"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book5/11.jpg" alt="Página 11"></div>
                <div class="page"><img src="../../public/img/books/Fantasy & Science Fiction/cat-ninja-wanted-book5/12.jpg" alt="Página 12"></div>
            </div>
            <div class="close-btn" onclick="closeBook('book19')">✕</div>
        </div>
    </div>
    <!--   LIBRO 19  -->
    <!-- Carrusel 2: Ciencia Ficción -->



    <br>



    <!-- Carrusel 3: Animals -->
    <div class="header">
        <h1>Animals</h1>
        <lord-icon target="div" loading="interaction" trigger="hover" src="https://media.lordicon.com/icons/wired/flat/1132-penguin.json">
            <img alt="" loading="lazy" src="https://media.lordicon.com/icons/wired/flat/1132-penguin.svg">
        </lord-icon>
    </div>
    <div class="carousel" id="carousel-3">
        <button class="carrusel-arrow carrusel-prev" id="button-prev-3">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                <path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path>
            </svg>
        </button>
        <div class="carrusel-container">
            <ul class="carrusel-list" id="carrusel-list-3">
                <li class="carrusel-item">
                    <div class="book-cover" onclick="openBook('book20')">
                        <img src="../../public/img/books/Animals/starting-out-baby-lions/cover.jpg" alt="Portada del libro 20">
                    </div>
                </li>
                <li class="carrusel-item">
                    <div class="book-cover" onclick="openBook('book21')">
                        <img src="../../public/img/books/Animals/starting-out-baby-penguins/cover.jpg" alt="Portada del libro 21">
                    </div>
                </li>
                <li class="carrusel-item">
                    <div class="book-cover" onclick="openBook('book22')">
                        <img src="../../public/img/books/Animals/starting-out-baby-koalas/cover.jpg" alt="Portada del libro 22">
                    </div>
                </li>
                <li class="carrusel-item">
                    <div class="book-cover" onclick="openBook('book23')">
                        <img src="../../public/img/books/Animals/starting-out-baby-elephants/cover.jpg" alt="Portada del libro 23">
                    </div>
                </li>
                <li class="carrusel-item">
                    <div class="book-cover" onclick="openBook('book24')">
                        <img src="../../public/img/books/Animals/starting-out-baby-bears/cover.jpg" alt="Portada del libro 24">
                    </div>
                </li>
                <li class="carrusel-item">
                    <div class="book-cover" onclick="openBook('book25')">
                        <img src="../../public/img/books/Animals/starting-out-baby-monkeys/cover.jpg" alt="Portada del libro 25">
                    </div>
                </li>
                <li class="carrusel-item">
                    <div class="book-cover" onclick="openBook('book26')">
                        <img src="../../public/img/books/Animals/so-cute-baby-animals-kittens/cover.jpg" alt="Portada del libro 26">
                    </div>
                </li>
                <li class="carrusel-item">
                    <div class="book-cover" onclick="openBook('book27')">
                        <img src="../../public/img/books/Animals/so-cute-baby-animals-puppies/cover.jpg" alt="Portada del libro 27">
                    </div>
                </li>
                <li class="carrusel-item">
                    <div class="book-cover" onclick="openBook('book28')">
                        <img src="../../public/img/books/Animals/so-cute-baby-animals-chicks/cover.jpg" alt="Portada del libro 28">
                    </div>
                </li>
                <li class="carrusel-item">
                    <div class="book-cover" onclick="openBook('book29')">
                        <img src="../../public/img/books/Animals/so-cute-baby-animals-bunnies/cover.jpg" alt="Portada del libro 29">
                    </div>
                </li>
                <!-- Agrega más elementos aquí si lo deseas -->
            </ul>
        </div>
        <button class="carrusel-arrow carrusel-next" id="button-next-3">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path>
            </svg>
        </button>
    </div>

    <!--   LIBRO 20  -->
    <div class="book-details" id="book20">
        <div class="overlay" onclick="closeBook()"></div>
        <div class="book-content">
            <div id="flipbook20">
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-lions/1.jpg" alt="Página 1"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-lions/2.jpg" alt="Página 2"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-lions/3.jpg" alt="Página 3"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-lions/4.jpg" alt="Página 4"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-lions/5.jpg" alt="Página 5"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-lions/6.jpg" alt="Página 6"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-lions/7.jpg" alt="Página 7"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-lions/8.jpg" alt="Página 8"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-lions/9.jpg" alt="Página 9"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-lions/10.jpg" alt="Página 10"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-lions/11.jpg" alt="Página 11"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-lions/12.jpg" alt="Página 12"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-lions/13.jpg" alt="Página 13"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-lions/14.jpg" alt="Página 14"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-lions/15.jpg" alt="Página 15"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-lions/16.jpg" alt="Página 16"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-lions/17.jpg" alt="Página 17"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-lions/18.jpg" alt="Página 18"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-lions/19.jpg" alt="Página 19"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-lions/20.jpg" alt="Página 20"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-lions/21.jpg" alt="Página 21"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-lions/22.jpg" alt="Página 22"></div>
            </div>
            <div class="close-btn" onclick="closeBook('book20')">✕</div>
        </div>
    </div>
    <!--   LIBRO 20  -->
    <!--   LIBRO 21  -->
    <div class="book-details" id="book21">
        <div class="overlay" onclick="closeBook()"></div>
        <div class="book-content">
            <div id="flipbook21">
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-penguins/1.jpg" alt="Página 1"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-penguins/2.jpg" alt="Página 2"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-penguins/3.jpg" alt="Página 3"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-penguins/4.jpg" alt="Página 4"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-penguins/5.jpg" alt="Página 5"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-penguins/6.jpg" alt="Página 6"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-penguins/7.jpg" alt="Página 7"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-penguins/8.jpg" alt="Página 8"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-penguins/9.jpg" alt="Página 9"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-penguins/10.jpg" alt="Página 10"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-penguins/11.jpg" alt="Página 11"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-penguins/12.jpg" alt="Página 12"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-penguins/13.jpg" alt="Página 13"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-penguins/14.jpg" alt="Página 14"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-penguins/15.jpg" alt="Página 15"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-penguins/16.jpg" alt="Página 16"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-penguins/17.jpg" alt="Página 17"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-penguins/18.jpg" alt="Página 18"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-penguins/19.jpg" alt="Página 19"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-penguins/20.jpg" alt="Página 20"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-penguins/21.jpg" alt="Página 21"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-penguins/22.jpg" alt="Página 22"></div>
            </div>
            <div class="close-btn" onclick="closeBook('book21')">✕</div>
        </div>
    </div>
    <!--   LIBRO 21  -->
    <!--   LIBRO 22  -->
    <div class="book-details" id="book22">
        <div class="overlay" onclick="closeBook()"></div>
        <div class="book-content">
            <div id="flipbook22">
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-koalas/1.jpg" alt="Página 1"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-koalas/2.jpg" alt="Página 2"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-koalas/3.jpg" alt="Página 3"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-koalas/4.jpg" alt="Página 4"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-koalas/5.jpg" alt="Página 5"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-koalas/6.jpg" alt="Página 6"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-koalas/7.jpg" alt="Página 7"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-koalas/8.jpg" alt="Página 8"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-koalas/9.jpg" alt="Página 9"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-koalas/10.jpg" alt="Página 10"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-koalas/11.jpg" alt="Página 11"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-koalas/12.jpg" alt="Página 12"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-koalas/13.jpg" alt="Página 13"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-koalas/14.jpg" alt="Página 14"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-koalas/15.jpg" alt="Página 15"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-koalas/16.jpg" alt="Página 16"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-koalas/17.jpg" alt="Página 17"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-koalas/18.jpg" alt="Página 18"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-koalas/19.jpg" alt="Página 19"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-koalas/20.jpg" alt="Página 20"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-koalas/21.jpg" alt="Página 21"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-koalas/22.jpg" alt="Página 22"></div>
            </div>
            <div class="close-btn" onclick="closeBook('book22')">✕</div>
        </div>
    </div>
    <!--   LIBRO 22  -->
    <!--   LIBRO 23  -->
    <div class="book-details" id="book23">
        <div class="overlay" onclick="closeBook()"></div>
        <div class="book-content">
            <div id="flipbook23">
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-elephants/1.jpg" alt="Página 1"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-elephants/2.jpg" alt="Página 2"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-elephants/3.jpg" alt="Página 3"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-elephants/4.jpg" alt="Página 4"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-elephants/5.jpg" alt="Página 5"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-elephants/6.jpg" alt="Página 6"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-elephants/7.jpg" alt="Página 7"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-elephants/8.jpg" alt="Página 8"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-elephants/9.jpg" alt="Página 9"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-elephants/10.jpg" alt="Página 10"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-elephants/11.jpg" alt="Página 11"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-elephants/12.jpg" alt="Página 12"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-elephants/13.jpg" alt="Página 13"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-elephants/14.jpg" alt="Página 14"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-elephants/15.jpg" alt="Página 15"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-elephants/16.jpg" alt="Página 16"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-elephants/17.jpg" alt="Página 17"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-elephants/18.jpg" alt="Página 18"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-elephants/19.jpg" alt="Página 19"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-elephants/20.jpg" alt="Página 20"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-elephants/21.jpg" alt="Página 21"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-elephants/22.jpg" alt="Página 22"></div>
            </div>
            <div class="close-btn" onclick="closeBook('book23')">✕</div>
        </div>
    </div>
    <!--   LIBRO 23  -->
    <!--   LIBRO 24  -->
    <div class="book-details" id="book24">
        <div class="overlay" onclick="closeBook()"></div>
        <div class="book-content">
            <div id="flipbook24">
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-bears/1.jpg" alt="Página 1"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-bears/2.jpg" alt="Página 2"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-bears/3.jpg" alt="Página 3"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-bears/4.jpg" alt="Página 4"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-bears/5.jpg" alt="Página 5"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-bears/6.jpg" alt="Página 6"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-bears/7.jpg" alt="Página 7"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-bears/8.jpg" alt="Página 8"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-bears/9.jpg" alt="Página 9"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-bears/10.jpg" alt="Página 10"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-bears/11.jpg" alt="Página 11"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-bears/12.jpg" alt="Página 12"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-bears/13.jpg" alt="Página 13"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-bears/14.jpg" alt="Página 14"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-bears/15.jpg" alt="Página 15"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-bears/16.jpg" alt="Página 16"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-bears/17.jpg" alt="Página 17"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-bears/18.jpg" alt="Página 18"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-bears/19.jpg" alt="Página 19"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-bears/20.jpg" alt="Página 20"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-bears/21.jpg" alt="Página 21"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-bears/22.jpg" alt="Página 22"></div>
            </div>
            <div class="close-btn" onclick="closeBook('book24')">✕</div>
        </div>
    </div>
    <!--   LIBRO 24  -->
    <!--   LIBRO 25  -->
    <div class="book-details" id="book25">
        <div class="overlay" onclick="closeBook()"></div>
        <div class="book-content">
            <div id="flipbook25">
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-monkeys/1.jpg" alt="Página 1"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-monkeys/2.jpg" alt="Página 2"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-monkeys/3.jpg" alt="Página 3"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-monkeys/4.jpg" alt="Página 4"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-monkeys/5.jpg" alt="Página 5"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-monkeys/6.jpg" alt="Página 6"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-monkeys/7.jpg" alt="Página 7"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-monkeys/8.jpg" alt="Página 8"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-monkeys/9.jpg" alt="Página 9"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-monkeys/10.jpg" alt="Página 10"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-monkeys/11.jpg" alt="Página 11"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-monkeys/12.jpg" alt="Página 12"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-monkeys/13.jpg" alt="Página 13"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-monkeys/14.jpg" alt="Página 14"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-monkeys/15.jpg" alt="Página 15"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-monkeys/16.jpg" alt="Página 16"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-monkeys/17.jpg" alt="Página 17"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-monkeys/18.jpg" alt="Página 18"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-monkeys/19.jpg" alt="Página 19"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-monkeys/20.jpg" alt="Página 20"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-monkeys/21.jpg" alt="Página 21"></div>
                <div class="page"><img src="../../public/img/books/Animals/starting-out-baby-monkeys/22.jpg" alt="Página 22"></div>
            </div>
            <div class="close-btn" onclick="closeBook('book25')">✕</div>
        </div>
    </div>
    <!--   LIBRO 25  -->
    <!--   LIBRO 26  -->
    <div class="book-details" id="book26">
        <div class="overlay" onclick="closeBook()"></div>
        <div class="book-content">
            <div id="flipbook26">
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-kittens/1.jpg" alt="Página 1"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-kittens/2.jpg" alt="Página 2"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-kittens/3.jpg" alt="Página 3"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-kittens/4.jpg" alt="Página 4"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-kittens/5.jpg" alt="Página 5"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-kittens/6.jpg" alt="Página 6"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-kittens/7.jpg" alt="Página 7"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-kittens/8.jpg" alt="Página 8"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-kittens/9.jpg" alt="Página 9"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-kittens/10.jpg" alt="Página 10"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-kittens/11.jpg" alt="Página 11"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-kittens/12.jpg" alt="Página 12"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-kittens/13.jpg" alt="Página 13"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-kittens/14.jpg" alt="Página 14"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-kittens/15.jpg" alt="Página 15"></div>
            </div>
            <div class="close-btn" onclick="closeBook('book26')">✕</div>
        </div>
    </div>
    <!--   LIBRO 26  -->
    <!--   LIBRO 27  -->
    <div class="book-details" id="book27">
        <div class="overlay" onclick="closeBook()"></div>
        <div class="book-content">
            <div id="flipbook27">
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-puppies/1.jpg" alt="Página 1"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-puppies/2.jpg" alt="Página 2"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-puppies/3.jpg" alt="Página 3"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-puppies/4.jpg" alt="Página 4"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-puppies/5.jpg" alt="Página 5"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-puppies/6.jpg" alt="Página 6"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-puppies/7.jpg" alt="Página 7"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-puppies/8.jpg" alt="Página 8"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-puppies/9.jpg" alt="Página 9"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-puppies/10.jpg" alt="Página 10"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-puppies/11.jpg" alt="Página 11"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-puppies/12.jpg" alt="Página 12"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-puppies/13.jpg" alt="Página 13"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-puppies/14.jpg" alt="Página 14"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-puppies/15.jpg" alt="Página 15"></div>
            </div>
            <div class="close-btn" onclick="closeBook('book27')">✕</div>
        </div>
    </div>
    <!--   LIBRO 27  -->
    <!--   LIBRO 28  -->
    <div class="book-details" id="book28">
        <div class="overlay" onclick="closeBook()"></div>
        <div class="book-content">
            <div id="flipbook28">
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-chicks/1.jpg" alt="Página 1"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-chicks/2.jpg" alt="Página 2"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-chicks/3.jpg" alt="Página 3"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-chicks/4.jpg" alt="Página 4"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-chicks/5.jpg" alt="Página 5"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-chicks/6.jpg" alt="Página 6"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-chicks/7.jpg" alt="Página 7"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-chicks/8.jpg" alt="Página 8"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-chicks/9.jpg" alt="Página 9"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-chicks/10.jpg" alt="Página 10"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-chicks/11.jpg" alt="Página 11"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-chicks/12.jpg" alt="Página 12"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-chicks/13.jpg" alt="Página 13"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-chicks/14.jpg" alt="Página 14"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-chicks/15.jpg" alt="Página 15"></div>
            </div>
            <div class="close-btn" onclick="closeBook('book28')">✕</div>
        </div>
    </div>
    <!--   LIBRO 28  -->
    <!--   LIBRO 29  -->
    <div class="book-details" id="book29">
        <div class="overlay" onclick="closeBook()"></div>
        <div class="book-content">
            <div id="flipbook29">
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-bunnies/1.jpg" alt="Página 1"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-bunnies/2.jpg" alt="Página 2"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-bunnies/3.jpg" alt="Página 3"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-bunnies/4.jpg" alt="Página 4"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-bunnies/5.jpg" alt="Página 5"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-bunnies/6.jpg" alt="Página 6"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-bunnies/7.jpg" alt="Página 7"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-bunnies/8.jpg" alt="Página 8"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-bunnies/9.jpg" alt="Página 9"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-bunnies/10.jpg" alt="Página 10"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-bunnies/11.jpg" alt="Página 11"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-bunnies/12.jpg" alt="Página 12"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-bunnies/13.jpg" alt="Página 13"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-bunnies/14.jpg" alt="Página 14"></div>
                <div class="page"><img src="../../public/img/books/Animals/so-cute-baby-animals-bunnies/15.jpg" alt="Página 15"></div>
            </div>
            <div class="close-btn" onclick="closeBook('book29')">✕</div>
        </div>
    </div>
    <!--   LIBRO 29  -->
    <!-- Carrusel 3: Animals -->














</div>

<?php
include('../../layout/mensajes.php');
include("../layout/parte2.php");
?>
<!-- Bootstrap JS y Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
<script src="../../public/js/books.js"></script>
<script src="../../public/js/turn.js"></script>