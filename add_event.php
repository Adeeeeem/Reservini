<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reservini";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['eventname'];
    $location = $_POST['eventplace'];
    $description = $_POST['eventdesc'];
    $facebook = $_POST['facebookevent'];
    $date = $_POST['eventdate'];
    $time = $_POST['eventtime'];

    // Handling file upload
    $logo = $_FILES['eventlogo']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["eventlogo"]["name"]);
    move_uploaded_file($_FILES["eventlogo"]["tmp_name"], $target_file);

    $sql = "INSERT INTO event (name, location_event, description, facebook_event, date_event, time_event, logo) VALUES ('$name', '$location', '$description', '$facebook', '$date', '$time', '$logo')";

    if ($conn->query($sql) === TRUE) {
        header("Location: view_event.php"); // Redirect to view_event.php after successful submission
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
