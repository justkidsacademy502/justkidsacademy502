document.addEventListener('DOMContentLoaded', function() {
    const wrapper = document.querySelector(".wrapper");
    const carousel = document.querySelector(".carousel");
    const arrowBtns = document.querySelectorAll(".wrapper i");
    const cardWidth = 300; // Ancho de las tarjetas
    const gap = 20; // Espacio entre tarjetas

    const firstCardWidth = carousel.querySelector(".card").offsetWidth + gap;
    const carouselChildrens = [...carousel.children];
    
    // Duplicar contenido para el efecto infinito
    function initializeCarousel() {
        const items = [...carousel.children];
        items.forEach(item => {
            carousel.appendChild(item.cloneNode(true));
        });
        carousel.scrollLeft = firstCardWidth;
    }

    // Movimiento del carrusel con ajuste de posición
    function moveCarousel(direction) {
        const scrollWidth = carousel.scrollWidth;
        const clientWidth = carousel.clientWidth;
        const maxScrollLeft = scrollWidth - clientWidth;
        const moveAmount = cardWidth + gap; // Cantidad de movimiento por clic

        if (direction === 'left') {
            carousel.scrollBy({
                left: -moveAmount,
                behavior: 'smooth'
            });
        } else if (direction === 'right') {
            carousel.scrollBy({
                left: moveAmount,
                behavior: 'smooth'
            });
        }

        setTimeout(() => {
            if (carousel.scrollLeft <= 0) {
                carousel.classList.add("no-transition");
                carousel.scrollLeft = scrollWidth / 2;
                carousel.classList.remove("no-transition");
            } else if (carousel.scrollLeft >= maxScrollLeft) {
                carousel.classList.add("no-transition");
                carousel.scrollLeft = scrollWidth / 2 - clientWidth;
                carousel.classList.remove("no-transition");
            }
        }, 500); // Ajusta el tiempo para la suavidad del desplazamiento (más lento)
    }

    // Botones de desplazamiento
    arrowBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            moveCarousel(btn.id === "left" ? 'left' : 'right');
        });
    });

    // Controlar el arrastre del carrusel
    let isDragging = false, startX, startScrollLeft;

    function dragStart(e) {
        isDragging = true;
        carousel.classList.add("dragging");
        startX = e.pageX;
        startScrollLeft = carousel.scrollLeft;
    }

    function dragging(e) {
        if (!isDragging) return;
        carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
    }

    function dragStop() {
        isDragging = false;
        carousel.classList.remove("dragging");
    }

    // Reproducción automática
    let timeoutId;
    function autoPlay() {
        if (window.innerWidth < 800) return;
        timeoutId = setTimeout(() => {
            moveCarousel('right');
        }, 4000); // Ajusta el tiempo para el autoplay (más lento)
    }

    // Manejo de desplazamiento infinito
    function infiniteScroll() {
        if (carousel.scrollLeft <= 0) {
            carousel.classList.add("no-transition");
            carousel.scrollLeft = carousel.scrollWidth / 2;
            carousel.classList.remove("no-transition");
        } else if (Math.ceil(carousel.scrollLeft) >= carousel.scrollWidth - carousel.clientWidth) {
            carousel.classList.add("no-transition");
            carousel.scrollLeft = carousel.scrollWidth / 2 - carousel.clientWidth;
            carousel.classList.remove("no-transition");
        }

        clearTimeout(timeoutId);
        if (!wrapper.matches(":hover")) autoPlay();
    }

    // Inicializa el carrusel y configura eventos
    initializeCarousel();
    carousel.addEventListener("mousedown", dragStart);
    carousel.addEventListener("mousemove", dragging);
    document.addEventListener("mouseup", dragStop);
    carousel.addEventListener("scroll", infiniteScroll);
});