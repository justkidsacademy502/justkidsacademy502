let flipbooksInitialized = {};

function openBook(bookId) {
    // Oculta todos los libros
    document.querySelectorAll('.book-details').forEach(book => {
        book.style.display = 'none';
    });

    // Muestra el libro seleccionado
    var bookContent = document.getElementById(bookId);
    bookContent.style.display = 'flex';

    // Inicializar flipbook si no está ya inicializado
    if (!flipbooksInitialized[bookId]) {
        const flipbookId = 'flipbook' + (bookId === 'book1' ? '1' : bookId === 'book2' ? '2' : bookId === 'book3' ? '3' : bookId === 'book4' ? '4' : bookId === 'book5' ? '5' : bookId === 'book6' ? '6' : 
                                         bookId === 'book7' ? '7' : bookId === 'book8' ? '8' : bookId === 'book9' ? '9' : bookId === 'book10' ? '10' : bookId === 'book11' ? '11' : bookId === 'book12' ? '12' :
                                         bookId === 'book13' ? '13' : bookId === 'book14' ? '14' : bookId === 'book15' ? '15' : bookId === 'book16' ? '16' : bookId === 'book17' ? '17' : bookId === 'book18' ? '18' :
                                         bookId === 'book19' ? '19' : bookId === 'book20' ? '20' : bookId === 'book21' ? '21' : bookId === 'book22' ? '22' : bookId === 'book23' ? '23' : bookId === 'book24' ? '24' :
                                         bookId === 'book25' ? '25' : bookId === 'book26' ? '26' : bookId === 'book27' ? '27' : bookId === 'book28' ? '28' : bookId === 'book29' ? '29' : "");
        $("#" + flipbookId).turn({
            width: 800,
            height: 600,
            autoCenter: true,
            gradients: true, // Efectos de gradiente en las páginas
            acceleration: true, // Aceleración para transiciones más suaves
            duration: 1000, // Duración de la animación
            elevation: 50, // Elevación para efectos de profundidad
            page: 1, // Página inicial
            turning: function (event, page, view) {
                console.log('Página girada a: ' + page);
            },
            turned: function (event, page, view) {
                console.log('Página girada a: ' + page);
            }
        });


        // Inicializar el zoom
        $("#flipbookId").zoom({
            max: 3, // Aumenta el nivel máximo de zoom (en este caso, 3x)
            flipbook: $("#" + flipbookId), // Asociar el zoom con el flipbook
            when: {
                swipeLeft: function() {
                    $(this).turn('next'); // Cambiar a la siguiente página al deslizar a la izquierda
                },
                swipeRight: function() {
                    $(this).turn('previous'); // Cambiar a la página anterior al deslizar a la derecha
                }
            }
        });

        flipbooksInitialized[bookId] = true;
    }
}

function closeBook(bookId) {
    document.getElementById(bookId).style.display = 'none';

    // Destruir flipbook correspondiente si está inicializado
    if (flipbooksInitialized[bookId]) {
        const flipbookId = 'flipbook' + (bookId === 'book1' ? '1' : bookId === 'book2' ? '2' : bookId === 'book3' ? '3' : bookId === 'book4' ? '4' : bookId === 'book5' ? '5' : bookId === 'book6' ? '6' : 
                                         bookId === 'book7' ? '7' : bookId === 'book8' ? '8' : bookId === 'book9' ? '9' : bookId === 'book10' ? '10' : bookId === 'book11' ? '11' : bookId === 'book12' ? '12' : 
                                         bookId === 'book13' ? '13' : bookId === 'book14' ? '14' : bookId === 'book15' ? '15' : bookId === 'book16' ? '16' : bookId === 'book17' ? '17' : bookId === 'book18' ? '18' :
                                         bookId === 'book19' ? '19' : bookId === 'book20' ? '20' : bookId === 'book21' ? '21' : bookId === 'book22' ? '22' : bookId === 'book23' ? '23' : bookId === 'book24' ? '24' :
                                         bookId === 'book25' ? '25' : bookId === 'book26' ? '26' : bookId === 'book27' ? '27' : bookId === 'book28' ? '28' : bookId === 'book29' ? '29' : "");
        $("#" + flipbookId).turn('destroy').remove();
        flipbooksInitialized[bookId] = false;
    }
}









//CARRUSEL
document.addEventListener('DOMContentLoaded', function() {
    function setupCarousel(carouselId) {
        const prevButton = document.getElementById(`button-prev-${carouselId}`);
        const nextButton = document.getElementById(`button-next-${carouselId}`);
        const track = document.getElementById(`carrusel-list-${carouselId}`);
        const items = Array.from(track.querySelectorAll('.carrusel-item'));

        // Clonamos los elementos para crear el efecto infinito
        const itemsClone = items.map(item => item.cloneNode(true));
        track.append(...itemsClone);

        const itemWidth = items[0].offsetWidth + parseInt(getComputedStyle(items[0]).marginRight);
        const itemCount = items.length;
        let currentIndex = 0;

        function updateTrackPosition() {
            const offset = -currentIndex * itemWidth;
            track.style.transform = `translateX(${offset}px)`;
        }

        prevButton.addEventListener('click', function() {
            if (currentIndex === 0) {
                currentIndex = itemCount;
                track.style.transition = 'none';
                updateTrackPosition();
                requestAnimationFrame(() => {
                    track.style.transition = 'transform 0.5s ease-in-out';
                    currentIndex--;
                    updateTrackPosition();
                });
            } else {
                currentIndex--;
                updateTrackPosition();
            }
        });

        nextButton.addEventListener('click', function() {
            if (currentIndex === itemCount) {
                currentIndex = 0;
                track.style.transition = 'none';
                requestAnimationFrame(() => {
                    track.style.transition = 'transform 0.5s ease-in-out';
                    currentIndex++;
                    updateTrackPosition();
                });
            } else {
                currentIndex++;
                updateTrackPosition();
            }
        });
    }

    // Inicializa ambos carruseles
    setupCarousel(1);
    setupCarousel(2);
    setupCarousel(3);
});
