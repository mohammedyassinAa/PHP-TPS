<?php
// $x ="EMSI";
// $y ="GIR";
// $z= &$x;
// $x ="PHP";
// $y =&$x;
// echo "$x $y $z";
// Le resultat est PHP PHP PHP

$x = "28 ETUDIANTS" ;
$y =(integer)$x;
$x ="7E3";
$z = (double)$x;
$v = 0b111;

echo "$x $y $z $v";
// printf("%b",$z);    

// Le resultat est 7E3 28 7000 71101101011000


?>
<?php
function calculer($operateur, ...$notes) {
$resultat = null;

switch ($operateur) {
    case 'moyenne':
    $resultat = array_sum($notes) / count($notes);
    break;
    case 'somme':
    $resultat = array_sum($notes);
    break;
    case 'produit':
    $resultat = array_product($notes);
    break;
    default:
    $resultat = "Opérateur invalide. Utilisez 'moyenne', 'somme' ou 'produit'.";
}

return $resultat;
}

// Exemple d'utilisation :
$notes = [10, 15, 12, 8]; // Notes à utiliser (vous pouvez changer les valeurs ici)
$operateur = 'moyenne'; // Opérateur à utiliser (vous pouvez changer entre 'moyenne', 'somme' ou 'produit')

$resultat = calculer($operateur, ...$notes);

if (is_numeric($resultat)) {
echo "La $operateur des notes " . implode(', ', $notes) . " est : $resultat";
} else {
echo $resultat;
}
?>