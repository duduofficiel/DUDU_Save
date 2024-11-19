let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');

menu.onclick= () =>{
menu.classlist.toggle('fa-times');
navbar.classlist.toggle('active');
}

let section = document.querySelectorAll('section');
let navlinks = document.querySelectorAll('header .navbar a');

window.onscroll= () =>{

menu.classlist.remove('fa-times');
navbar.classlist.remove('active'); 
}
section.forEach(sec =>{

let top = window.scrollY;
let height = sec.offsetHeight;
let offset = sec.offsetTop -150;
let id = sec.getAttribute('id');   

if(top => offset && top < offset + height){
navLinks.forEach(links =>{
links.classList.remove('active');
document.querySelector('header .navbar a[href*='+id+']').classList.add('active');
});
};

});



document.querySelector('#search-icon').onclick = () =>{
document.querySelector('#search-form').classList.toggle('active');
}

document.querySelector('#close').onclick = () =>{
document.querySelector('#search-form').classList.remove('active');
}

var swiper = new swiper(".home-slider",{
   specebetween:30,
   centeredslides: true,
   autoplay: {
       delay: 7500,
       disableooninteraction: false,
   },
   pagination: {
       el: ".swiper-pagination",
       clickable: true,
   },
   loop:true,
});   

var swiper = new swiper(".review-slider",{
    specebetween:20,
    centeredslides: true,
    autoplay: {
        delay: 7500,
        disableooninteraction: false,
    },
    loop:true,
    breakpoints: {
       0:{
          slidesperview: 1,
       },
       640:{
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
   
 function loader(){
document.querySelector('.loader-container').classList.add('fade-out');
 }
 
 function fadeOut(){
setInterval(loader, 3000);
 }

 window.onload =fadeOut;

 


 





