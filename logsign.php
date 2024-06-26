<!DOCTYPE html>
<html lang="en">
<head>
	<title>Reservini</title>
	<!-- The Author of this page -->
	<meta name="author" content="Mohamed Adem Ben Moussa">
	<meta name="author" content="Mohamed Mehdi Charni">
	<meta name="author" content="Zakaria Ben Salem">
	<!-- Specify the character encoding of your content -->
	<meta charset="UTF-8">
	<!-- Tell Internet Explorer to use the latest Rendering Engine -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Setting the viewport to make your website look good on all devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Basic SEO -->
	<meta name="description" content="">
	<meta name="keywords" content="">
	<!-- Icon -->
	<link rel="shortcut icon" type="image/png" href="img/logo.png">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- Owl Caroussel CSS -->
	<link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body data-spy="scroll" data-target=".nav" data-offset="76">
<!-- Preloader -->
<div id="preloader">
	<div id="status">
		&nbsp;
	</div>
</div>
<!-- End Preloader -->
<!-- Home -->
<section id="home">
		<img id="home-bg-img" src="img/home.jpg">
	<!-- Overlay -->
	<div id="home-overlay"></div>
</section>
<!-- End Home -->
<!-- Header -->
  <nav class="navbar navbar-expand-md">
    <div class="container-fluid site-nav-wrapper">
      <div class="navbar-header">
        <!-- Logo -->
        <a class="navbar-brand" href="index.php">
          <img src="img/logo.png" alt="Logo">
        </a>
      </div>
      <!-- Main Menu -->
      <div class="container">
        <div id="menu" class="collapse navbar-collapse">
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="help.php">Help</a></li>
            <li class="nav-item"><a id="fr" class="nav-link" href="#">Français</a></li>
            <li class="nav-item"><a id="ar" class="nav-link" href="#">العربية</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
<!-- End Header -->
<!-- Login Sign up -->
  <div class="ls">
    <div class="backbox">
      <div class="loginMsg">
        <div class="textcontent">
          <p class="title">Don't have an account?</p>
          <p>Sign up to save all your graph.</p>
          <button id="switch1">Sign Up</button>
        </div>
      </div>
      <div class="signupMsg visibility">
        <div class="textcontent">
          <p class="title">Have an account?</p>
          <p>Log in to see all your collection.</p>
          <button id="switch2">LOG IN</button>
        </div>
      </div>
    </div>
    <!-- backbox -->

    <div class="frontbox">
      <div class="login">
        <h2>LOG IN</h2>
        <div class="inputbox">
          <input type="text" id="email" name="email" placeholder="  EMAIL">
          <input type="password" id="password" name="password" placeholder="  PASSWORD">
        </div>
        <p>FORGET PASSWORD?</p>
        <a href="create.php"><button>LOGIN</button></a>
        
      </div>

      <div class="signup hide">
        <h2>SIGN UP</h2>
        <div class="inputbox">
          <form method="POST" action="create.php">
          <input type="text" id="fullname1" name="fullname" placeholder="  FULLNAME">
          <input type="text" id="email1" name="email" placeholder="  EMAIL">
          <input type="password" id="password1" name="password" placeholder="  PASSWORD">
        </div>
        <a href="create.php"><button>SIGN UP </button></a>
      </form>
      </div>

    </div>
    <!-- frontbox -->
  </div>
  <!-- End Login Sign up -->
<div id="sp" >
	  <div id="sponsor" class="owl-carousel">
  <div><img src="img/logos/ifm.png"></div>
  <div><img src="img/logos/blasti.png"></div>
  <div><img src="img/logos/baguette.png"></div>
  <div><img src="img/logos/teskerti.png"></div>
  <div><img src="img/logos/boudinar.png"></div>
  <div><img src="img/logos/kfc.png"></div>
</div>
</div>




<!-- jQuery 3.3.1 -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- Include js plugin -->
<script src="js/owl-carousel/owl.carousel.min.js"></script>
<!-- Custom JavaScript -->
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>