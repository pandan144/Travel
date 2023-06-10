

var swiper = new Swiper(".home-slider",{
    loop:true,
    navigation:{
        nextEl:".swiper-button-next",
        prevEl:".swiper-button-pre",
    },
});

var swiper = new Swiper(".reviews-slider",{
    loop:true,
    spaceBetween:20,
    autoHeight:true,
    grabCursor:true,
    breakpoints:{
        640:{
            slidespreView:1,
        },
        768:{
            slidespreView:2,
        },
        1020:{
            slidespreView:3,
            spaceBetween:50,
        },
    }
})

// let menu=document.querySelectorAll('#menu-btn');
// let navbar= document.querySelectorAll('.header .navbar');

// menu.onclick =() =>{
//     menu.classList.toggle('fa-times');
//     navbar.classList.toggle('active'); 
// } 

// window.onscroll =()=>{
//     menu.classList.remove('fa-times');
//     navbar.classList.remove('active')
// }