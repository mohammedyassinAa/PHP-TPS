<?php
$login=$_POST["login"];
$pass=$_POST["pw"];
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
$user_id = $login; 
// Requête préparée pour récupérer les informations de l'utilisateur
$query = "SELECT * FROM etudiant WHERE LOGIN = :user_id AND PASSWORD =:password";
$stmt = $dbh->prepare($query);
$stmt->bindParam(':user_id', $user_id);
$stmt->bindParam(':password', $pass);
$stmt->execute();
// Vérification des résultats de la requête
$user = $stmt->fetch(PDO::FETCH_ASSOC);
if ($user) {
    // Démarrer la session
    session_start();

    // Stocker les informations de l'utilisateur dans la session
    $_SESSION['user_id'] = $user['CNE'];
    $_SESSION['username'] = $user['NOM'];
    
    
    // Rediriger vers la page "myspace.php"
    header("Location: myspace.php");

    exit();
} else {
    // Afficher un message d'erreur si l'utilisateur n'est pas trouvé dans la base de données
    echo "Utilisateur non trouvé.";
    echo $user_id;
}
?>