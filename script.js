// Initialize AOS Animation Library
document.addEventListener("DOMContentLoaded", function() {
    AOS.init({
        duration: 800, // values from 0 to 3000, with step 50ms
        easing: 'ease-in-out', // default easing for AOS animations
        once: true, // whether animation should happen only once - while scrolling down
        offset: 100 // offset (in px) from the original trigger point
    });

    // JavaScript with a function: Display current date in the header
    displayCurrentDate();
});

function displayCurrentDate() {
    const dateElement = document.getElementById('current-date-display');
    
    if (dateElement) {
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        const today = new Date();
        const formattedDate = today.toLocaleDateString('en-US', options);
        
        dateElement.innerHTML = `<i class="far fa-calendar-alt"></i> ${formattedDate}`;
    }
}
