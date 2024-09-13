document.addEventListener("DOMContentLoaded", function () {
    function initializeCarousel(carouselId) {
        const slides = document.querySelectorAll(`#${carouselId} .slide, #${carouselId} .service`);
        const prev = document.querySelector(`#${carouselId} .carousel-button-prev`);
        const next = document.querySelector(`#${carouselId} .carousel-button-next`);
        const slidesContainer = document.querySelector(`#${carouselId} .slides`);
        const tabs = document.querySelectorAll(`#${carouselId} + .tabs .tab`); // Tab selectors
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

            // Update active tab
            tabs.forEach((tab, idx) => {
                if (idx === currentIndex) {
                    tab.classList.add("active");
                } else {
                    tab.classList.remove("active");
                }
            });
        }

        prev.addEventListener("click", function () {
            showSlide(currentIndex - 1);
        });

        next.addEventListener("click", function () {
            showSlide(currentIndex + 1);
        });

        // Tabs click event
        tabs.forEach((tab, index) => {
            tab.addEventListener("click", function () {
                showSlide(index);
            });
        });

        setInterval(function () {
            showSlide(currentIndex + 1);
        }, 15000);
    }

    initializeCarousel("slider");   // Initialize the first carousel
    initializeCarousel("services"); // Initialize the second carousel
});
