let cta1 = document.querySelector('.cta1');
let cta2 = document.querySelector('.cta2');


document.addEventListener('scroll', () => {
    let scrollPosition = window.scrollY;

    if(scrollPosition > 50){
        cta1.style.bottom = "25%";
        cta2.style.bottom = "25%";
    }else{
        cta1.style.bottom = "0px";
        cta2.style.bottom = "0px";
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