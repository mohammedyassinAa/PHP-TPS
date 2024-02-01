<?php
if(isset($_POST["submit"])){
    $hostname='localhost';
    $username='root';
    $password='';
    
    try {
        $dbh = new PDO("mysql:host=$hostname;dbname=produit",$username,$password);
        
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "INSERT INTO produit (TITRE, DESCRIPTION, PRIX, CATEGORIE) VALUES (:titre, :description, :prix, :categorie)";
        
        $stmt = $dbh->prepare($sql);
        
        // Sanitize and bind parameters
        $titre = htmlspecialchars($_POST["titre"]);
        $description = htmlspecialchars($_POST["description"]);
        $prix = floatval($_POST["prix"]); // Assuming the price is numeric
        $categorie = htmlspecialchars($_POST["categorie"]);
        
        $stmt->bindParam(':titre', $titre);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':prix', $prix);
        $stmt->bindParam(':categorie', $categorie);
        
        if ($stmt->execute()) {
            echo "New Record Inserted Successfully";
        } else {
            echo "Data not successfully Inserted.";
        }
        
        $dbh = null;
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>