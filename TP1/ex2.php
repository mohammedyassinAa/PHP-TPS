<!DOCTYPE html>
<html>

<head></head>

<body>
    <form method="post" action="ex2.php">
        <label>Entrez le nombre</label>
        <input type="number" name="num">
        <input type="submit" value="Vérifier">
    </form>

    <?php
    if (isset($_POST['num'])) {
        $num = $_POST['num'];

        if ($num % 9 == 0 && $num % 7 == 0) {
            echo "Le nombre est un multiple de 9 et 7.";
        } else {
            echo "Ce n'est pas un multiple de 9 et 7.";
        };
    }
    ?>

</body>

</html>

<!-- Q2 -->
<?php
$nombreInitial = 892;

echo "Le nombre initial est : $nombreInitial  <br>";

$compteur = 0;

while (true) {
    $nombreAleatoire = rand(100, 999);
    echo "$nombreAleatoire <br>";
    $compteur++;
    
    if ($nombreAleatoire == $nombreInitial) {
        break;
    }
}

echo "Le nombre de tentatives réalisées est : $compteur";
?>
<!-- Q3 -->
<?php
$found = false;

while (true) {
    $num1 = rand(1, 9);
    $num2 = rand(1, 9);
    $num3 = rand(1, 9);
    echo "$num1 $num2 $num3 <br>";

    if ($num1 % 2 != 0 && $num2 % 2 == 0 && $num3 % 2 == 0) {
        echo "Le nombre correct est : $num1 $num2 $num3  <br>";
       break;
    }
}
?>
<!-- Q4 -->
<ul>
    <?php
for ($i = 2; $i <= 20; $i += 2) {
    $res = $i * $i;
    echo "<li>$i ² = $res</li>";
}
?>

</ul>