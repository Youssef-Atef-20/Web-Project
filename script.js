// Initialize AOS Animation Library
document.addEventListener("DOMContentLoaded", function() {
    AOS.init({
        duration: 800,
        easing: 'ease-in-out', 
        offset: 100
    });


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
