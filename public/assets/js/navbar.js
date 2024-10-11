let lastScrollTop = 0;
const navbar = document.querySelector('.nav-bar');

window.addEventListener('scroll', function() {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > 105) { // Only check scroll position if beyond 105px
        if (scrollTop > lastScrollTop) {
            // Scrolling down, hide navbar
            navbar.style.top = '-105px'; // Adjust this value if necessary
        } else {
            // Scrolling up, show navbar
            navbar.style.top = '0';
        }
    } else {
        // If scrolled above 105px, reset navbar position
        navbar.style.top = '0';
    }
    
    lastScrollTop = scrollTop;
});



function toggleMenu() {
    const navLinks = document.querySelector('.nav-links');
    navLinks.classList.toggle('show');
}