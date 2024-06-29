<!DOCTYPE html>
<html lang="en">
<head>
	<title>Reservini</title>
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
<!-- Home -->
<section id="home">
		<img id="home-bg-img" src="img/home.jpg">
	<!-- Overlay -->
	<div id="home-overlay"></div>
	<!-- Home Content -->
	<div id="home-content-parent">
		<div id="home-content-child" class="text-center">
			<div id="home-heading">
			</div>
			<div id="home-text">
				<p id="paragraphe">
					<br><br>
                    <div class="container">
    <div class="form-area" id="cu">  
        <form role="form">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center; color:white;">Contact Form</h3>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
					</div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                                        
                    </div>
            
        <button type="button" id="submit" name="submit" class="btn add-btn2 pull-right">Submit Form</button>
        							<!-- Contact PHP -->
							<?php
								if(isset($_POST['submit']))
								{
									$mail = $_POST['email'];
									$name = $_POST['name'];
									$mobile = $_POST['mobile'];
									$message = $_POST['message'];

									$email = 'Contact us From '.$name."\n".
									'E-mail : '.$mail."\n".
									$name." ".$mobile." ".
									'Message : '.$message."\n";
									mail("boudinar@yahoo.com","Reservini",$email);
								}
							?>
							<!-- End Contact PHP -->
        </form>
</div>
                </div></p>
			</div><br><br><br>
			
		</div>  
	</div>
	
</section>
<!-- End Home -->
<!-- jQuery 3.3.1 -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- Include js plugin -->
<script src="assets/owl-carousel/owl.carousel.js"></script>
<!-- Custom JavaScript -->
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>