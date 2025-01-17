<?php
$servername = "localhost"; 
$username = "renad"; 
$password = "renad"; 
$dbname = "robot_control"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT direction FROM directions ORDER BY timestamp DESC LIMIT 1");

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode($row);
} else {
    echo json_encode(['direction' => null]);
}

$conn->close();
?>