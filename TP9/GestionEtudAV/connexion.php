//Script de connexion à la base de données getudiant
<?php 
// Connexion à la base de données avec PDO
$dsn = 'mysql:host=localhost;dbname=getetudiant';
$username = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
    die();
}
?>