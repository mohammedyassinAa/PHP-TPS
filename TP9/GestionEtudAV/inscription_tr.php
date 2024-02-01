<?php
if (isset($_POST["submit"])) {
    $hostname = 'localhost';
    $username = 'root';
    $password = '';

    try {
        $conn = new PDO("mysql:host=$hostname;dbname=getetudiant", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO etudiant (CNE, NOM, PRENOM, LOGIN, PASSWORD) VALUES (:cne, :nom, :prenom, :login, :password)";

        $stmt = $conn->prepare($sql);

        $CNE = htmlspecialchars($_POST["cne"]);
        $NOM = htmlspecialchars($_POST["nom"]);
        $PRENOM = htmlspecialchars($_POST["prenom"]);
        $LOGIN = htmlspecialchars($_POST["login"]);
        $PASSWORD = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password

        $stmt->bindParam(':cne', $CNE);
        $stmt->bindParam(':nom', $NOM);
        $stmt->bindParam(':prenom', $PRENOM);
        $stmt->bindParam(':login', $LOGIN);
        $stmt->bindParam(':password', $PASSWORD);

        if ($stmt->execute()) {
            header("Location: myspace.php");
        } else {
            echo "Data not successfully Inserted.";
        }  
        $conn = null;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>