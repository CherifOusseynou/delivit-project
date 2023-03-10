// Header Scroll
//let nav = document.querySelector(".header");
//window.onscroll = function () {
  //  if(document.documentElement.scrollTop > 50){
    //    nav.classList.add("header-scrolled");
    //}else{
    //    nav.classList.remove("header-scrolled");
    //}
//}

/* QUI SOMMES-NOUS */
const imgFluid = document.querySelector('img-fluid');
const btnTheme = document.querySelector('a');
const text = document.querySelector('p');
const allItem = document.querySelectorAll('li');

const TL1 = new TimelineMax({paused: true});

TL1
.from(btnTheme, 1, {x: -100, opacity: 0})
.from(imgFluid, 1, {opacity: 0}, '-=0.4')
.from(text, 1, {x: 100, opacity: 0}, '-=0.5')
.staggerFrom(allItem, 1, {y: -50, opacity: 0}, 0.2, '-=0.3')

TL1.play();