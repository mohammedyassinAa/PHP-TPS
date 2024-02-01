<?php
    $details = array("azghin"=>array("Abdelkarim","tanger",22),"takkal"=>array("mostafa","nouinouich",22));  
    $details1 = array("azghin"=>array("nom"=>"Abdelkarim","ville"=>"tanger","age"=>22),"takkal"=>array("nom"=>"mostafa","ville"=>"nouinouich","age"=>22));
    print_r($details);
    echo"</br>";
    print_r($details1);
      echo"</br>";
    foreach($details1 as $key=>$value){
        echo "element $key </br>";
        foreach($value as $Kdata=>$Vdata){
            echo $Kdata.": ".$Vdata."</br>";    
        }
        echo '-------------------------- </br>';
    }
    echo "exercicce 4.5 <br>";

    foreach($details as $key=>$value){
        echo "personne $key </br>";
        foreach($value as $Kdata=>$Vdata){
            echo "clee ". $Kdata." valeur  ".$Vdata."</br>";
        }
        echo '-------------------------- </br>';
    }

?>