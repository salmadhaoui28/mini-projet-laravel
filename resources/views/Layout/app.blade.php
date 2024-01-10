<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Jurse 2025</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
    /* Styles pour la liste déroulante Participation */
    #participationSubMenu {
        display: none;
        position: absolute;
        background-color: #fff; /* Couleur de fond de la liste déroulante */
        border: 1px solid #ccc; /* Bordure de la liste déroulante */
        padding: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre de la liste déroulante */
        z-index: 1; /* Assure que la liste déroulante apparaît au-dessus des autres éléments */
        list-style: none; /* Supprime les puces de la liste déroulante */
        margin: 0;
    }

    /* Styles pour les éléments de la liste déroulante */
    #participationSubMenu a {
        display: block;
        color: #333;
        text-decoration: none;
        padding: 8px 0;
        font-weight: normal; /* Poids de la police par défaut */
        transition: font-weight 0.3s ease; /* Animation pour le changement de font-weight */
    }

    /* Styles pour le lien Participation lorsqu'il est survolé */
    #participation:hover #participationSubMenu {
        display: block; /* Affiche la liste déroulante lorsque le lien Participation est survolé */
    }

    /* Styles pour le texte en gras lorsqu'un lien est survolé */
    #participationSubMenu a:hover {
        font-weight: bold; /* Met en gras le texte lorsque le lien est survolé */
    }
</style>


  </head>

  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Jurse 2025.</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	     

			  <li class="nav-item"><a class="nav-link" href="{{ route('home')}}">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('date')}}">Date</a></li>

        <li id="participation" class="nav-item">
    <a class="nav-link" href="#">Participation</a>
    <ul id="participationSubMenu">
        <li><a href="{{ route('program')}}">Program</a></li>
        <li><a href="{{ route('guideline')}}">Guidelines</a></li>
        <li><a href="{{ route('call-for-papers')}}">Call for Papers</a></li>
        <li><a href="{{ route('registration')}}">Registration</a></li>
        <li><a href="{{ route('social-events')}}">Social Events</a></li>
    </ul>
</li>


<li id="participation" class="nav-item">
    <a class="nav-link" href="#">Presentation</a>
    <ul id="participationSubMenu">
        <li><a href="{{ route('keynotes')}}">Keynotes</a></li>
        <li><a href="{{ route('topics')}}">Topics</a></li>
        <li><a href="{{ route('specialsessions')}}">Special Session</a></li>
        <li><a href="{{ route('studentcontest')}}">Student Contest</a></li>
        <li><a href="{{ route('exibitors')}}">Exibitors</a></li>
    </ul>
</li>

        <li class="nav-item"><a class="nav-link" href="{{ route('commitees')}}">Commitees</a></li>

              <li class="nav-item"><a class="nav-link" href="{{ route('sponsors')}}">Sponsors</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('venue')}}">Venue</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('photosvideos')}}">Photos et Vidéo</a></li>

              <li class="nav-item"><a class="nav-link" href="{{ route('contact')}}">Contact</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>


@yield('content')
    <!-- END nav -->

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Jurse 2025 .</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Useful Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Speakers</a></li>
                <li><a href="#" class="py-2 d-block">Shcedule</a></li>
                <li><a href="#" class="py-2 d-block">Events</a></li>
                <li><a href="#" class="py-2 d-block">Blog</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Privacy</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Comittees</a></li>
                <li><a href="#" class="py-2 d-block">About Us</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                <li><a href="#" class="py-2 d-block">Sponsors</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Ramada Plaza, Gammarth - Tunisia</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+216 *******</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>