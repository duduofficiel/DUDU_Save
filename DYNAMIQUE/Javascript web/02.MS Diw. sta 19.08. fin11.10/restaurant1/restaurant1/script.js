let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

let section = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header .navbar a');

window.onscroll = () => {

    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}
section.forEach(sec => {

    let top = window.scrollY;
    let height = sec.offsetHeight;
    let offset = sec.offsetTop - 150;
    let id = sec.getAttribute('id');
    if(id !== null && top >= offset && top < offset + height) {
        navLinks.forEach(links => {
            links.classList.remove('active');
            document.querySelector('header .navbar a[href*=' + id + ']').classList.add('active');
        });
    };

});


document.querySelector('#search-icon').onclick = () => {
    document.querySelector('#search-form').classList.toggle('active');
}

document.querySelector('#close').onclick = () => {
    document.querySelector('#search-form').classList.remove('active');
}

var swiper1 = new Swiper(".home-slider", {
    spacebetween: 20,
    centeredslides: true,
    autoplay: {
        delay: 7500,
        disableooninteraction: false,
    },
    loop: true,
    breakpoints: {
        0: {
            slidesperview: 1,
        },
        640: {
            slidesperview: 2,
        },
        768: {
            slidesperview: 2,
        },
        1024: {
            slidesperview: 3,
        },
    },
/*    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 500,
        disableoOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    loop: false,
*/
});

var swiper2 = new Swiper(".review-slide", {
    spacebetween: 20,
    centeredslides: true,
    autoplay: {
        delay: 7500,
        disableooninteraction: false,
    },
    loop: true,
    breakpoints: {
        0: {
            slidesperview: 1,
        },
        640: {
            slidesperview: 2,
        },
        768: {
            slidesperview: 2,
        },
        1024: {
            slidesperview: 3,
        },
    },
});




function loader() {
    let loader=document.querySelector('.loader-container');
    if(loader)
    loader.classList.add('fade-out');
}

function fadeOut() {
    setInterval(loader, 3000);
}

window.onload = fadeOut;



// ღილაკის ჩვენება



