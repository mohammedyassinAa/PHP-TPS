<?php
    function somme(array $t){
        global $rs;
        for($i=0;$i<sizeof($t);$i++){
            $rs=$rs+$t[$i];
        }
        echo "la somme est $rs </br>";
    }
    $table=array(5,8,9,2,7,20,6,9);
    somme($table);
    function produit(array $t){
        $rs = 1;
        for($i=0;$i<sizeof($t);$i++){
            $rs=$rs*$t[$i];
        }
        echo "le produit et $rs </br>";
    }

    produit ($table);

   function moyenne(array $t){
    $rs = 0;
    $moy = 0;    
        for ($i = 0; $i < sizeof($t); $i++) {
            $rs = $rs + $t[$i];
        }
        $moy = $rs / $i;
        echo "la moyenne est $moy";
}

// Appel de la fonction avec un tableau $table
moyenne($table);
//  $filiere=array("GSEA","GINF");
//     array_push($filiere,"G3E","GSTR"); // the new elements have been added to the end of the array 
//     print_r($filiere);
//     echo "</br>";
//     array_unshift($filiere,"DataSc","GIL"); //the new elements have been added to the beginning of the array
//     print_r($filiere);
//     echo "</br>";
//     unset($filiere[0]);
//     print_r($filiere);
?>