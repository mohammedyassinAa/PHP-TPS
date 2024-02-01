<?php
session_start();
echo "<h1>Bienvenu ".$_SESSION['username']." dans votre espace personnel</h1>";
echo "<p>votre resultat est:</p>";
$etudiant_cne = $_SESSION['user_id']; // Remplacez-le par le CNE réel de l'étudiant

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'getetudiant';

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Sélectionnez les résultats de l'étudiant en fonction de son CNE
    $sql = "SELECT matière.TITRE, resultat.NOTE, resultat.APPRECIATION
            FROM resultat
            INNER JOIN matière ON resultat.IDM = matière.IDM
            WHERE resultat.CNE = :cne";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':cne', $etudiant_cne);
    $stmt->execute();
    $somme=0;
    $cmp=0;
    // Affichez les résultats de l'étudiant
    echo "<table border='1'>
            <tr>
                <th>Matière</th>
                <th>Note</th>
                <th>Appréciation</th>
            </tr>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
                <td>{$row['TITRE']}</td>
                <td>{$row['NOTE']}</td>
                <td>{$row['APPRECIATION']}</td>
            </tr>";
            $somme+=$row['NOTE'];
            $cmp++;

        }
        echo "</table>";
    if($cmp==0) {
        echo "Pas de note trouve";
    }
    else {
    echo "votre moyenne est :".round($somme/$cmp,3);
    }
    $conn = null;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>