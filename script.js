let menu = document.querySelector('#bars');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

let section = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header .navbar a');


window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');

    section.forEach(sec =>{

      let top = window.scrollY;
      let height = sec.offsetHeight;
      let offset = sec.offsetTop;
      let id = sec.getAttribute('id');

      if(top => offset && top < offset + height){
        navLinks.forEach(links =>{
          links.classList.remove('active');
          document.querySelectorAll('header .navbar a[href*='+id+']').classList.add('active');
        })
      }
    });
}

document.querySelector('#search-icon').onclick = () =>{
    document.querySelector('#search-form').classList.toggle('active');
}

document.querySelector('#close').onclick = () =>{
    document.querySelector('#search-form').classList.remove('active');
}


// function search(){
//   let filter = document.getElementById('search-box').ariaValueMax.toUpperCase();

//   let item = document.querySelectorAll('.content');

//   let l = document.getElementsByTagName('h3');

//   for(var i=0; i<=l.length; i++){
//     let a=item[i].getElementsByTagName('h3')[0];

//     let value = a.innerHTML || a.innerText || a.textContent;

//     if(value.toUpperCase(),indexof(filter) > -1) {
//       item[i].style.display="";
//     }
//     else{
//       item[i].style.display="none";
//     }
//   }
// }
//swiper js code
var swiper = new Swiper(".home-slider", {
    spaceBetween: 700,
    centeredSlides: true,
    autoplay: {
      delay: 1500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    loop:true,
    
  });
