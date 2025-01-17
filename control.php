<?php
$servername = "localhost"; 
$username = "renad"; 
$password = "renad"; 
$dbname = "robot_control";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['direction'])) {
    $direction = $_GET['direction'];
    $stmt = $conn->prepare("INSERT INTO directions (direction) VALUES (?)");
    $stmt->bind_param("s", $direction);
    $stmt->execute();
    $stmt->close();
}

$conn->close();
?>