<?php
session_start();

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

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $name = isset($_POST['eventname']) ? $_POST['eventname'] : '';
    $location = isset($_POST['eventplace']) ? $_POST['eventplace'] : '';
    $facebook = isset($_POST['facebookevent']) ? $_POST['facebookevent'] : '';
    $date = isset($_POST['eventdate']) ? $_POST['eventdate'] : '';
    $time = isset($_POST['eventtime']) ? $_POST['eventtime'] : '';

    // Validate required fields
    if (empty($name) || empty($location) || empty($date) || empty($time)) {
        echo "Error: All required fields must be filled out.";
        exit();
    }

    // Prepare and bind parameters
    $stmt = $conn->prepare("INSERT INTO event (name, location_event, facebook_event, date_event, time_event) VALUES (?, ?, ?, ?, ?)");
    
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("sssss", $name, $location, $facebook, $date, $time);

    // Execute and check
    if ($stmt->execute()) {
        header("Location: view_event.php"); // Redirect to view_event.php after successful submission
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
