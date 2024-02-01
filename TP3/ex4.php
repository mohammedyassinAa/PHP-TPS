<?php 


function SPM($table){
    $somme = array_sum($table);
    
    $produit = array_product($table);

    $moyenne = array_sum($table) / count($table);

    echo "La somme est : $somme <br>";
    echo 'La moyenne est : '. $moyenne . "<br>";
    echo 'Le produit est : '. $produit . "<br>";
    
}

$tableexemple = [1,10,9,12];
SPM($tableexemple);
 
// Q2

// $filiere = array("GSEA","GINF");
// array_push($filiere,"GSE","GSTR");
// Q3
// Pour inserer au debut on utilise :  
// array_unshift($filiere,"t");
// var_dump($filiere);
// foreach ($filiere as $valeur) {
//     echo $valeur . "<br>";
// }

// Q4
// array_shift($tableexemple);
// print_r($tableexemple);
// var_dump($tableexemple);

// Q5

function estPalindrome($mot) {
    // Convertir le mot en minuscules et supprimer les espaces
    $mot = strtolower(str_replace(' ', '', $mot));
    
    
    if ($mot === strrev($mot)) {
        return "Le mot ".$mot." est un palindrome.<br>";
    } else {
        return "Le mot " .$mot ." n'est pas un palindrome.";
    }
}

$test = "1441";
$resultat = estPalindrome($test);
echo $resultat;

// Q6
function Q6($email) {
    
    $email = strtolower($email);

    // "@" comme séparateur
    $parties = explode('@', $email);
     // Vérifier si l'adresse e-mail est valide (contient un "@" et a deux parties)
    if (count($parties) === 2) {
        $nom = $parties[0];
        $domaine = $parties[1];
        echo ' <br> nom est : ' .$nom .'<br> domaine est : '.$domaine."<br>";

    } else {
        echo "Error"; 
    }
}
$email = "yssnmed@gmail.com" ;
Q6($email);


// Q7

// Prints: July 1, 2000 is on a Saturday
function Q7() {
echo " <br> On est " . date('j\/\ n ') ;
echo "<br> IL est " . date(' g:i A') ;
}
Q7();
echo "</br>";
 function remplace($replace){
        $newtext=str_replace($replace,"***","hello there");
        echo $newtext."</br>";
    }
    remplace("e");




?>