<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myguests"; // Replace with your database name

$conn = new mysqli($servername, $username, $password);

// Connect
if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

$conn->close();
?>