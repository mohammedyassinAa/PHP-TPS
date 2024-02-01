<?php
    $pays = array("Maroc"=>"Arab","France"=>"Français","Espagne"=>"Espagnol","Algéri"=>"Arab","Brésil"=>"Portugais");
    // printf($lang["France"]);
     echo "</br>";
    foreach($pays as $language){
         printf($language);
         echo "</br>";
     }
     echo "</br>";

    //print_r($pays); //Array ( [Maroc] => Arab [France] => Français [Espagne] => Espagnol [Algéri] => Arab [Brésil] => Portugais )
    // echo "</br>";
    //var_dump($pays);// src size lenght 
    // echo "</br>";
    //var_export($pays);//array ( 'Maroc' => 'Arab', 'France' => 'Français', 'Espagne' => 'Espagnol', 'Algéri' => 'Arab', 'Brésil' => 'Portugais', )
    // echo "</br>";
//print_r(array_values($pays));
    // echo "</br>";
    print_r(array_keys($pays));
    // echo "</br>";
    
?>