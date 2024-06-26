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
            <li class="nav-item"><a class="nav-link" href="find.php">About</a></li>
            <li class="nav-item"><a class="nav-link" href="post.php">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="logsign.php">Help</a></li>
            <li class="nav-item"><a id="fr" class="nav-link" href="#">Français</a></li>
            <li class="nav-item"><a id="ar" class="nav-link" href="#">العربية</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
<!-- End Header -->
<div class="sidenav text-center">
  <a href="#" id="sidenav1">Create</a>
  <a href="#" id="sidenav2">Events</a>
</div>
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

<div id="result1" class="container text-center">
  <br>
  <img src="img/logo.png" width="200px" height="50px"><hr>
  <h4 id="creating">Creating an Event</h4>
<form>
  <div class="row">
    <div class="col">
      <label for="eventname"><h5>Event Name</h5></label>
      <input id="eventname" type="text" class="form-control" placeholder="Event Name">
    </div>
    <div class="col">
      <label for="eventlogo"><h5>Event Logo</h5></label>
      <input type="file" class="form-control-file" id="eventlogo">
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="form-group">
      <label for="eventplace"><h5>Where</h5></label>
      <input type="text" class="form-control" id="eventplace" placeholder="Event Location">
     </div>
    </div>

    <div class="col">
      <div class="form-group">
    <label for="eventdesc"><h5>Description</h5></label>
    <input type="text" class="form-control" id="eventdesc" placeholder="Event Discription">
  </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="form-group">
      <label for="facebookevent"><h5>Facebook URL</h5></label>
      <input type="text" class="form-control" id="facebookevent" placeholder="Event Facebook URL">
     </div>
    </div>

    <div class="col">
      <div class="form-group row">
            <div class="form-group col">
              <label for="eventdate"><h5>Event Date</h5></label>
              <input type="date" class="form-control" id="eventdate">
            </div>

            <div class="form-group col">
              <label for="eventtime"><h5>Event Time</h5></label>
              <input type="time" class="form-control" id="eventtime">
            </div>
       </div>
    </div>
  </div>

  <div class="row">
    <div class="col-4">
      <h5 class="spon text-center">Foods</h5><br>
            <table class="table">
              <tbody id="myTableSpon">
                <tr>
                  <td>
                      <div class="input-group-prepend">
                         <a class="foods" ><span class="input-group-text">+</span></a>
                      </div>
                        
                  </td>
                  <td class="text-center">
                    KFC
                  </td>
                </tr>

                <tr>
                  <td>
                      <div class="input-group-prepend">
                        <a class="foods" ><span class="input-group-text">+</span></a>
                      </div>
                        
                  </td>
                  <td class="text-center">Baquette & Baguette</td>
                </tr>
              </tbody>
            </table>
    </div>



    <div class="col-4">
      <h5 class="spon text-center">Equipments</h5><br>

            <table class="table">
              <tbody id="myTableSpon">
                <tr>
                  <td>
                      <div class="input-group-prepend">
                         <a class="foods" href="#" ><span class="input-group-text">+</span></a>
                      </div>
                        
                  </td>
                  <td class="text-center">
                    Boudinar Group
                  </td>
                </tr>

                <tr>
                  <td>
                      <div class="input-group-prepend">
                        <a class="foods" href="#" ><span class="input-group-text">+</span></a>
                      </div>
                        
                  </td>
                  <td class="text-center">Level One</td>
                </tr>
              </tbody>
            </table>

    </div>

    <div class="col-4">
      <h5 class="spon text-center">Media</h5><br>

            <table class="table">
              <tbody id="myTableSpon">
                <tr>
                  <td>
                      <div class="input-group-prepend">
                         <button><a class="foods"href="#" ><span class="input-group-text">+</span></a></button>
                      </div>
                        
                  </td>
                  <td class="text-center">
                    IFM
                  </td>
                </tr>

                <tr>
                  <td>
                      <div class="input-group-prepend">
                        <a class="foods"href="#"><button><span class="input-group-text">+</span></button></a>
                      </div>
                        
                  </td>
                  <td class="text-center">Tunivision</td>
                </tr>
              </tbody>
            </table>

    </div>
  </div>

<div class="row">
  <div class="col-4"></div>
  <div class="col-4"> <a href="" class="btn add-btn2">Add Event</a></div>

</div>
 <br>
</form>
</div>

    

  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reservini";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM event" ;
$result = $conn->query($sql);
echo '<div id="result2">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Event Name</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Poster</th>
      <th scope="col">Location</th>
      <th scope="col">Facebook</th>
    </tr>
  </thead>';

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        echo '<tr>
      <td>'. $row["name"].'</td>
      <td>'. $row["date_event"].'</td>
      <td>' . $row["time_event"].'</td>
      <td>'. $row["email_maker"]. '</td>
      <td>'. $row["location_event"].'</td>
      <td>' . $row["facebook_event"].'</td>
    </tr>';


    }
    echo '</table>
</div>';
} else {
    echo "0 results";
}
$conn->close();
?>


<!-- jQuery 3.3.1 -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>
<!-- Include js plugin -->
<script src="js/owl-carousel/owl.carousel.min.js"></script>
<!-- Custom JavaScript -->
<script type="text/javascript" src="js/script.js"></script>
</body>

</html>