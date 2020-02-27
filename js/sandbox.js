let cta1 = document.querySelector('.cta1');
let cta2 = document.querySelector('.cta2');
let navbar = document.querySelector('nav');

document.addEventListener('scroll', () => {
    let scrollPosition = window.scrollY;
    if(scrollPosition > 100){
        navbar.classList.add('transparentChange');
        navbar.classList.remove('transparent');
    }else{
      
      navbar.classList.add('transparent');
      navbar.classList.remove('transparentChange');
    }


})


document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.tap-target');
    var instances = M.TapTarget.init(elems);
  });

/*
  $(document).ready(function(){
    $('.tap-target').tapTarget();
  });
  */  
 
  
  /* scroll page back to top */
  let scrolltotop = document.querySelector('.backToTop');
  scrolltotop.addEventListener('click', () => {
    scrollTo(0,0);
  })


  /* change background for about us */
  let about = document.querySelector('.about');
  document.addEventListener('DOMContentLoaded', () => {
    about.style.backgroundImage = "url('./images/cust.jpg')";
  })
