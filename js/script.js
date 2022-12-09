let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .nav');
let header = document.querySelector('.header');

menu.onclick = () =>{
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
}

window.onscroll = () =>{
   menu.classList.remove('fa-times');
   navbar.classList.remove('active');

  if(window.scrollY > 0){
     header.classList.add('active');
  }else{
     header.classList.remove('active');
  }

}

var openPopupBtn = document.querySelector("#open-popup-btn");
var closePopupBtn = document.querySelector(".popup-close-btn");

openPopupBtn.addEventListener("click",function(){
   document.body.classList.add("popup-active");
})

closePopupBtn.addEventListener("click",function(){
   document.body.classList.remove("popup-active");
})

