// Initialize AOS Animation Library
document.addEventListener("DOMContentLoaded", function () {

    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        offset: 100
    });

    // JavaScript function: Display current date
    displayCurrentDate();

    // Hamburger Menu Toggle
    const hamburger = document.querySelector('.hamburger');
    const navLinks  = document.querySelector('.nav-links');

    if (hamburger && navLinks) {
        hamburger.addEventListener('click', function () {
            hamburger.classList.toggle('open');
            navLinks.classList.toggle('open');
        });

        // Mobile dropdown toggle (click to open submenu)
        const dropdownParents = navLinks.querySelectorAll('.has-dropdown');
        dropdownParents.forEach(function (item) {
            item.querySelector('a').addEventListener('click', function (e) {
                if (window.innerWidth <= 768) {
                    e.preventDefault();
                    const dropdown = item.querySelector('.dropdown-menu');
                    if (dropdown) dropdown.classList.toggle('open');
                }
            });
        });

        // Close menu when a non-dropdown link is clicked
        navLinks.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                if (!link.closest('.has-dropdown')) {
                    hamburger.classList.remove('open');
                    navLinks.classList.remove('open');
                }
            });
        });
    }
});

function displayCurrentDate() {
    const dateElement = document.getElementById('current-date-display');
    if (dateElement) {
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        const today   = new Date();
        dateElement.innerHTML = '&#128197; ' + today.toLocaleDateString('en-US', options);
    }
}
