document.addEventListener("DOMContentLoaded", function () {
    function initializeCarousel(carouselId) {
        const slides = document.querySelectorAll(`#${carouselId} .slide, #${carouselId} .service`);
        const prev = document.querySelector(`#${carouselId} .carousel-button-prev`);
        const next = document.querySelector(`#${carouselId} .carousel-button-next`);
        const slidesContainer = document.querySelector(`#${carouselId} .slides`);
        let currentIndex = 0;

        function showSlide(index) {
            if (index < 0) {
                currentIndex = slides.length - 1;
            } else if (index >= slides.length) {
                currentIndex = 0;
            } else {
                currentIndex = index;
            }
            const offset = -currentIndex * 100;
            slidesContainer.style.transform = `translateX(${offset}%)`;
        }

        prev.addEventListener("click", function () {
            showSlide(currentIndex - 1);
        });

        next.addEventListener("click", function () {
            showSlide(currentIndex + 1);
        });

        setInterval(function () {
            showSlide(currentIndex + 1);
        }, 15000);
    }

    initializeCarousel("slider");
    initializeCarousel("services");
});



