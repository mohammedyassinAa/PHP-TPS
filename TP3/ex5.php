<?php

$tableau_entiers = array();
for ($i = 0; $i <= 180; $i += 10) {
    $tableau_entiers[] = $i;
}
print_r($tableau_entiers);
$tableau_nombres = array();
foreach ($tableau_entiers as $entier) {
    $tableau_nombres[] = $entier / 10.0;
}

$tableau_associatif = array();

for ($x = 0; $x<19; $x ++) {
    $tableau_associatif[$x] = cos($x);
}
echo "</br>";
print_r($tableau_associatif);


?>
<?php
echo "</br>";
echo "</br>";
    $email=["makil@gmail.com","fares@gmail.com","benmachich@yahoo.fr","soultana@gmail.com","sedrat@uae.ma","salsabil@ucbl.fr"];
    foreach ($email as $data){
        $domain=explode("@",$data);
        echo $domain[1]."</br>";
        $count = array_count_values($domain);
        print_r($count)   ;
     }
    
?>