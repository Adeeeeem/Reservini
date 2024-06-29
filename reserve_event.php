<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    echo json_encode(["status" => "error", "message" => "User not logged in"]);
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reservini";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "Connection failed: " . $conn->connect_error]));
}

$sql = "INSERT INTO reservation (event_id, user_id) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $eventId, $userId);

$eventId = $_POST['event_id'];
$userId = $_SESSION['user_id'];

if ($stmt->execute()) {
    echo json_encode(["status" => "success", "message" => "Event reserved successfully"]);
} else {
    echo json_encode(["status" => "error", "message" => "Error: " . $conn->error]);
}

$stmt->close();
$conn->close();
?>
