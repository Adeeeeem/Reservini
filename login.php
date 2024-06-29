<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reservini";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $conn->real_escape_string($_POST['email']);
$password = $conn->real_escape_string($_POST['password']);

$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $stored_password = $row['password'];

    // Verify the entered password against the stored hashed password
    if (password_verify($password, $stored_password)) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['fullname'] = $row['fullname'];
        echo json_encode(["status" => "success", "message" => "Login successful!"]);
        exit();
    } else {
        echo json_encode(["status" => "error", "message" => "Incorrect email or password."]);
    }
} else {
    echo json_encode(["status" => "not_found", "message" => "User not found."]);
}

$conn->close();
?>
