$(document).ready(function(){

  /* Smooth scroll */
  $('.menu-links a').smoothScroll({
      afterScroll: function() {
          $(this).closest('.menu-links').find('a');
      }
      
  });
  
    $('.side-menu a').smoothScroll({
        offset: -80,
        afterScroll: function() {
            $(this).closest('.side-menu').find('a');
        }
        
    });
});

let animEl = document.getElementsByClassName("animation");
let tallest = document.getElementById("tallest");
let animPages = document.getElementsByClassName('animPage');
let mainMenu = document.getElementById('mainMenu');
let mainHeader = document.getElementById('mainHeader');

let windowPosition = 0;
let windowHeight = window.innerHeight;
let windowEnd = windowHeight;

window.onload = function addAnim() {

    if( tallest ) {
        tallest.classList.add('appear');
    } else if ( animPages ) {
        let i;

        for ( i=0; i<animPages.length; i++ ) {
            animPages[i].classList.add('appearPage');
        }
    } 
}

window.addEventListener('resize', function() {

    windowHeight = window.innerHeight;
});

window.addEventListener('scroll', function() {

    windowPosition = window.scrollY;
    windowEnd = windowPosition + windowHeight;

    let i;

    for( i=0; i < animEl.length; i++ ) {

        if( animEl[i].offsetTop < windowEnd ) {
            animEl[i].classList.add('appear');
        }
    }

    if( mainMenu ) {

        if( window.scrollY > 0.9 * windowHeight ) {
            mainMenu.classList.add('fixed');
        } else if (window.scrollY < 662) {
            mainMenu.classList.remove('fixed');
        }
    }


});

















