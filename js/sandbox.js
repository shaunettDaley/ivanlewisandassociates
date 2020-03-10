let cta1 = document.querySelector('.cta1');
let cta2 = document.querySelector('.cta2');
let navbar = document.querySelector('nav');
//let logo = document.querySelector('.brand-logo ');


document.addEventListener('scroll', () => {
    let scrollPosition = window.scrollY;
    if(scrollPosition > 100){
        navbar.classList.add('transparentChange');
        navbar.classList.remove('transparent');
        //logo.style.color = "white";
    }else{
      
      navbar.classList.add('transparent');
      navbar.classList.remove('transparentChange');
      //logo.style.color = "black";
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
   // about.style.backgroundImage = "url('./images/cust.jpg')";
  })


  //collapse
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems);
  });



  //to include header and footer
  function includeHTML() {
    var z, i, elmnt, file, xhttp;
    /* Loop through a collection of all HTML elements: */
    z = document.getElementsByTagName("*");
    for (i = 0; i < z.length; i++) {
      elmnt = z[i];
      /*search for elements with a certain atrribute:*/
      file = elmnt.getAttribute("w3-include-html");
      if (file) {
        /* Make an HTTP request using the attribute value as the file name: */
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4) {
            if (this.status == 200) {elmnt.innerHTML = this.responseText;}
            if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
            /* Remove the attribute, and call this function once more: */
            elmnt.removeAttribute("w3-include-html");
            includeHTML();
          }
        }
        xhttp.open("GET", file, true);
        xhttp.send();
        /* Exit the function: */
        return;
      }
    }
  }


  includeHTML();


//testimonal slides show
let testimonal_slide = document.querySelector('.testimonal-slides');
let i = 0;
let timer = 3000;
let slideInfo = [];

sliderInfo[0] = " Thank you Mr. Lewis we appreciate your service and your professionality ";
sliderInfo[1] = " You are the best around time ";
sliderInfo[2] = " Affordable, Reliable, Professional and Straightforward. Keep it up Mr Lewis ";
sliderInfo[3] = " You are one of kind , we love and appreciate you ";

let slideshow = () => {
if( i < slideInfo.lenght-1){
testimonal_slide.textContent = sliderInfo[i];

}else{
    
    i = 0;
}
setTimeout(()=> {
   slideshow(); 
    
}.time)
    
}

window.onload = slideshow();
