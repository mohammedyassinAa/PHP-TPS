<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myguests"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to display data in an HTML table
function displayDataAsTable($conn) {
    $sql = "SELECT * FROM table1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["firstname"] . "</td>
                <td>" . $row["lastname"] . "</td>
                <td>" . $row["email"] . "</td>
            </tr>";
        }

        echo "</table>";
    } else {
        echo "0 results";
    }
}

// Call the function to display data in HTML table format
displayDataAsTable($conn);

$conn->close();
?>