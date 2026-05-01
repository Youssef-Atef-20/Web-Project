let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider",{
    loop:true,
    navigation: {
        nextEl:".swiper-button-next",
        prevEl:".swiper-button-prev",
    },
});

var swiper = new Swiper(".reviews-slider",{
    loop:true,
    spaceBetween: 20,
    autoHeight:true,
    grabCursor:true,
    breakpoints: {
        640: {
          slidesPerView: 1,

        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
});

let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 3;

// Hide all boxes except the first three
let boxes = [...document.querySelectorAll('.packages .box-container .box')];
boxes.forEach((box, index) => {
    if(index >= currentItem) {
        box.style.display = 'none';
    }
});

loadMoreBtn.onclick = () =>{
    console.log('Load more button clicked');
    let boxes = [...document.querySelectorAll('.packages .box-container .box')];
    for(let i = currentItem; i < currentItem + 3; i++){
        if(boxes[i]) {
            boxes[i].style.display = 'inline-block';
            console.log(`Displaying box ${i}`);
        }
    }
    currentItem += 3;
    if(currentItem >= boxes.length){
        loadMoreBtn.style.display = 'none';
    }
};