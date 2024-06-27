<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservini - View Events</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid site-nav-wrapper">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo.png" alt="Logo" width="150">
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

    <div class="sidenav text-center">
        <a href="create.php" id="sidenav1">Create</a>
        <a href="view_event.php" id="sidenav2">Events</a>
    </div>

    <div class="container text-center">
        <br>
        <img src="img/logo.png" width="200px" height="50px"><hr>
        <h4 id="viewing">Events</h4>

        <div class="table-responsive">
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

            $sql = "SELECT name, date_event, time_event, location_event, facebook_event FROM event";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo '<table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Event Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Time</th>
                                <th scope="col">Location</th>
                                <th scope="col">Facebook</th>
                            </tr>
                        </thead>
                        <tbody>';

                while($row = $result->fetch_assoc()) {
                    echo '<tr>
                            <td>'. $row["name"].'</td>
                            <td>'. $row["date_event"].'</td>
                            <td>' . $row["time_event"].'</td>
                            <td>'. $row["location_event"].'</td>
                            <td>' . $row["facebook_event"].'</td>
                          </tr>';
                }

                echo '  </tbody>
                      </table>';
            } else {
                echo "No events found.";
            }

            $conn->close();
            ?>
        </div>
    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
