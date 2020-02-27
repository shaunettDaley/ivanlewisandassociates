<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/fontawesome.min.css">
  <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">-->
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <title>Contact Us</title>
  <link rel="stylesheet" href="css/style.css" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <script src="https://kit.fontawesome.com/ff32477cb2.js" crossorigin="anonymous"></script>
</head>
<body>

  <!-- navbar -->
<header class="about">
   
    <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
    <li><a href="#!">Tax Preparation</a></li>
    <li class="divider"></li>
    <li><a href="#!">Accounting Services</a></li>
  </ul>
  <ul id="contactInfo" class="dropdown-content">
    <li><a href="#!">Request Appointment</a></li>
    <li class="divider"></li>
    <li><a href="#!">Contact Us</a></li>
  </ul>

  <!--mobile version-->
  <ul id="dropdown-mobile" class="dropdown-content">
    <li><a href="#!">Tax Preparation</a></li>
    <li class="divider"></li>
    <li><a href="#!">Accounting Services</a></li>
  </ul>
  <ul id="contactInfo-mobile" class="dropdown-content">
    <li><a href="#!">Request Appointment</a></li>
    <li class="divider"></li>
    <li><a href="#!">Contact Us</a></li>
  </ul>
  <div class="navbar-fixed">
    <nav class="nav-wrapper transparent">
        <div class="container">
          <a href="#" class="brand-logo">Ivan Lewis & Associates Inc.</a>
          <a href="" class="sidenav-trigger" data-target="mobile-menu">
              <i class="material-icons">menu</i>
          </a>
          
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="sass.html">About</a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown-mobile">Services<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="https://sa.www4.irs.gov/irfof/lang/en/irfofgetstatus.jsp" target="_blank">Refund Status</a></li>
            <li><a href="collapsible.html">Resources</a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="contactInfo-mobile">Contact<i class="material-icons right">arrow_drop_down</i></a></li>
          </ul>

          <!--mobile version-->
          
         <ul class="sidenav grey lighten-2" id="mobile-menu">
         <li><a href="sass.html">About</a></li>
         <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Services<i class="material-icons right">arrow_drop_down</i></a></li>
         <li><a href="badges.html">Refund Status</a></li>
         <li><a href="collapsible.html">Resources</a></li>
         <li><a class="dropdown-trigger" href="#!" data-target="contactInfo">Contact<i class="material-icons right">arrow_drop_down</i></a></li>
         
         </ul>
        </div>
      </nav>
    </div>
      <!--call out boxes-->
      <!--
      <div class="cta1 hide-on-med-and-down z-depth-5" style="bottom: 0px;">
        <span class="info">
            <div class="title"> <i class="material-icons">star_half</i>The Support You Deserve<i class="material-icons">star_half</i></div>
            <ul>
                <li> <i class="material-icons">check</i>Reliable</li>
                <li>  <i class="material-icons">check</i>Trustworthy</li>
                <li> <i class="material-icons">check</i> Expert with over 25 years experience</li>
                <li> <i class="material-icons">check</i>Affordable</li>
                <li><i class="material-icons">check</i>Peace of Mind</li>
                <li> <i class="material-icons">check</i>Satisfaction</li>
            </ul>

  </span>
    </div>-->
      <div class="cta2 hide-on-med-and-down">
        <span class="info">Affordable & Gaurantee Result</span>
    </div>

    <!--show on mobile only-->
    <div class="cta-mobile show-on-medium-and-down hide-on-large-only">
        <span class="info">Affordable, Reliable &amp; Peace of mind</span>
    </div>
</header>
<section class="icons-info">
  <div class="row container sub-section">
    <div class="col s12 l3 requestApt">
      <button class="btn waves-effect waves-light" type="submit" name="action">Request Appointment
        <i class="material-icons right">send</i>
      </button>
    </div>
    <div class="col s12 l3 smallNav">
      <div class="row">
        <div class="col s12 l2 smallIcon">
            <i class="material-icons right section-icons">cloud</i>
        </div>
        <div class="col s12 l10">
            Tax Services<br>
            Account<br>
            Other Services
        </div>
        
    </div>
    </div>

    <div class="col s12 l3 smallNav">
      <div class="row">
        <div class="col s12 l2 smallIcon">
            <i class="material-icons right section-icons">location_on</i>
        </div>
        <div class="col s12 l10">
          3500 N State Rd 7 <br/>Suite 205<br/>
          Fort Lauderdale, FL 33319
       </div>
       
        
    </div>
    </div>

    <div class="col s12 l3 smallNav">
      <div class="row">
        <div class="col s12 l2 smallIcon">
            <i class="material-icons right section-icons">chat</i>
        </div>
        <div class="col s12 l10">
          T:954-717-8892<br>
          Aemail@email.com<br>
          Other Services
      </div>
        
    </div>
    </div>
  </div>
</section>
  <!-- photo / grid -->
<section class="container welcome">
    <div class="row">
        <div class="col s12">
      
            <h1>Stay in contact with  Ivan Lewis & Associates</h1>
            <p>
              Please stay in touch with us by using any of the communication method. If you reach out to us via email please 
              give us atleast 24 hours to reply. Otherwise we wil try to  reply to everyone throughout the day.
            </p>
            
        </div>
    </div>
</section>

<section class="container welcome">
    <div class="row">
        <div class="col s12 l6">
      address
            
        </div>
        <div class="col s12 l6">
      social Info
            
        </div>
    </div>
</section>
  
 
  <!-- parallax -->
<section class="inset sub-pages">
  <span class="par-info animated slow slideInUp  delay-2s">
       <img src="images/experience.png" alt="Ivan Lewis over 25 years of experiences"/>
      </span>
</section>
  <!-- contact form -->

  <!-- footer -->
  <footer class="page-footer orange">
    <span class="backToTop"><i class="material-icons rotated animated slow bounce delay-2s">arrow_upward</i></span>
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">We Care!</h5>
          <p class="grey-text text-lighten-4">We are here to provide you with the best services, with over 25 yearsof experience.
            Just ask the question and we will guide you on the right path.
          
          </p>


        </div>
        <div class="col l3 s6">
          <h5 class="white-text">Navigation</h5>
          <ul>
            <li><a class="white-text" href="#!">About Us</a></li>
            <li><a class="white-text" href="#!">Tax Preparation</a></li>
            <li><a class="white-text" href="#!">Accounting Services</a></li>
            <li><a class="white-text" href="https://sa.www4.irs.gov/irfof/lang/en/irfofgetstatus.jsp" target="_blank">Refund Status</a></li>
          </ul>
        </div>
        <div class="col l3 s6">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="#">Shaunett Daley - Innovations Design Technology - (754)251-7130</a> 
      </div>
    </div>
  </footer>


  <!-- Compiled and minified JavaScript -->
  <script src="js/sandbox.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script>
      document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, {
        hover:true,
            coverTrigger: false,
            constrainWidth: false
    });

   
    var elemSidenav = document.querySelectorAll('.sidenav');
    var instancesidenav = M.Sidenav.init(elemSidenav);
 
  });

  $(document).ready(function(){
    $('.parallax').parallax();
  })
  
  /*
    $(document).ready(function(){
        $(".dropdown-trigger").dropdown({
            hover:true,
            coverTrigger: false,
            constrainWidth: false
        });

        $(".sidenav").sidenav();
    });*/
  </script>
</body>
</html>
