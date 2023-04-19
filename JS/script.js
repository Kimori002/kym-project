let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

var swiper = new swiper(".home-slide", {
    loop:true,
    navigation:{
        nextE1: ".swiper-button-next",
        prevE1: ".swiper-button-prev",
    },
});

var swiper = new swiper(".review-slider", {
    grabcursor:true,
    loop:true,
            spaceBetween:20,
            autoheight:true,
    breakpoints:{
        0: {
            slideperview:1,
        },
        700:{
            slideperview:2,
        },
        1000{
            slideperview:3,
        },
    },
});

let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
    let boxes = [...document.querySelectorAll('.packages .box-container .box')];
    for (var i = currentItem; i < currentItem + 3; i++){
        boxes[i].style.display = 'inline-block';
    };
    currentItem += 3;
    if(currentItem >= boxes.length){
        loadMoreBtn.style.display = 'none';
    }
};