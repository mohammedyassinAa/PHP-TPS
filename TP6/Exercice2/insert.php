<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myguests"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname); // Include the database name here

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to create table
// $tableCreationSQL = "CREATE TABLE IF NOT EXISTS table1 (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(50) NOT NULL,
//     lastname VARCHAR(50) NOT NULL,
//     email VARCHAR(100) NOT NULL
// )";

// // Execute table creation query
// if ($conn->query($tableCreationSQL) === TRUE) {
//     echo "Table created successfully .<br>";
// } else {
//     echo "Error creating table: " . $conn->error . "<br>";
// }

// SQL to insert data into table
$sql = "INSERT INTO table1(firstname, lastname, email)
VALUES ('John', 'Doe', 'john@email.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>