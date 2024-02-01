<?php
echo "<table style='border-collapse: collapse; border: 1px solid black'>";
echo "<tr><th>Id</th><th>TITRE</th><th>PRIX</th></tr>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tp7";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT ID_P, TITRE , PRIX FROM produit");
    $stmt->execute();

    // Set the resulting array to associative
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    while ($row = $stmt->fetch()) {
      echo "<tr><td>".$row['ID_P']."</td><td>".$row['TITRE']."</td><td>".$row['PRIX']."</td></tr>";
    }
  } catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
  }
  $conn = null;
  echo "</table>";
?>