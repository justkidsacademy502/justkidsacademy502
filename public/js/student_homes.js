document.addEventListener('DOMContentLoaded', function () {
    const wrapper = document.querySelector(".wrapper");
    const carousel = document.querySelector(".carousel");
    const arrowBtns = document.querySelectorAll(".wrapper i");
    const cardWidth = 400; // Ancho de las tarjetas
    const gap = 25; // Espacio entre tarjetas

    function initializeCarousel() {
        const items = [...carousel.children];
        items.forEach(item => {
            carousel.appendChild(item.cloneNode(true));
        });
        carousel.scrollLeft = cardWidth + gap;
    }

    function moveCarousel(direction) {
        const scrollWidth = carousel.scrollWidth;
        const clientWidth = carousel.clientWidth;
        const maxScrollLeft = scrollWidth - clientWidth;
        const moveAmount = cardWidth + gap;

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
                carousel.scrollLeft = scrollWidth / 2;
            } else if (carousel.scrollLeft >= maxScrollLeft) {
                carousel.scrollLeft = scrollWidth / 2 - clientWidth;
            }
        }, 300);
    }

    arrowBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            moveCarousel(btn.id === "left" ? 'left' : 'right');
        });
    });

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

    let timeoutId;
    function autoPlay() {
        if (window.innerWidth < 800) return;
        timeoutId = setTimeout(() => {
            moveCarousel('right');
        }, 7000);
    }

    function infiniteScroll() {
        if (!isDragging) {
            if (carousel.scrollLeft <= 0) {
                carousel.scrollLeft = carousel.scrollWidth / 2;
            } else if (carousel.scrollLeft >= carousel.scrollWidth - carousel.clientWidth) {
                carousel.scrollLeft = carousel.scrollWidth / 2 - carousel.clientWidth;
            }
            clearTimeout(timeoutId);
            if (!wrapper.matches(":hover")) autoPlay();
        }
    }

    initializeCarousel();
    carousel.addEventListener("mousedown", dragStart);
    carousel.addEventListener("mousemove", dragging);
    document.addEventListener("mouseup", dragStop);
    carousel.addEventListener("scroll", infiniteScroll);
});