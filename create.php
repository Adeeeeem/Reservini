<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reservini</title>
    <!-- Meta tags and other head content -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" type="image/png" href="img/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Open+Sans|Pacifico" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body data-spy="scroll" data-target=".nav" data-offset="76">
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- End Preloader -->
    <!-- Header -->
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid site-nav-wrapper">
            <div class="navbar-header">
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
        <a href="create.php" id="sidenav1">Create</a>
        <a href="view_event.php" id="sidenav2">Events</a>
    </div>

    <div id="result1" class="container text-center">
        <br>
        <img src="img/logo.png" width="200px" height="50px"><hr>
        <h4 id="creating">Creating an Event</h4>
        <form id="createEventForm" action="add_event.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <label for="eventname"><h5>Event Name *</h5></label>
                    <input id="eventname" type="text" class="form-control" name="eventname" placeholder="Event Name" required>
                </div>
                <div class="col">
                    <label for="eventlogo"><h5>Event Logo *</h5></label>
                    <input type="file" class="form-control-file" id="eventlogo" name="eventlogo" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="eventplace"><h5>Where *</h5></label>
                        <input type="text" class="form-control" id="eventplace" name="eventplace" placeholder="Event Location" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="eventdesc"><h5>Description</h5></label>
                        <input type="text" class="form-control" id="eventdesc" name="eventdesc" placeholder="Event Description">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="facebookevent"><h5>Facebook URL</h5></label>
                        <input type="text" class="form-control" id="facebookevent" name="facebookevent" placeholder="Event Facebook URL">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group row">
                        <div class="form-group col">
                            <label for="eventdate"><h5>Event Date *</h5></label>
                            <input type="date" class="form-control" id="eventdate" name="eventdate" required>
                        </div>
                        <div class="form-group col">
                            <label for="eventtime"><h5>Event Time *</h5></label>
                            <input type="time" class="form-control" id="eventtime" name="eventtime" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <button type="submit" class="btn add-btn2">Add Event</button>
                </div>
            </div>
            <br>
        </form>
    </div>

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
