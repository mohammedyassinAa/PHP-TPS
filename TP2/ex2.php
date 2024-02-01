<?php
     $S1 = array("Janvier","février","mars","avril","mai");
     $S2 = array("juin","juillet","août","septembre","octobre","novembre");
    // print_r($S2);
    // echo "</br>";
    // unset($S2[2]);
    // print_r($S2);
    // echo "</br>";
    $Annee = array_merge($S1,$S2);
    // print_r($Annee);
    //array_splice($Annee,7,0,"aout");
    $Annee[]="december";
    echo "</br>";
    // print_r($Annee);
    echo '<table style="border: 1px solid ;"><thead><th style="border: 1px solid ;">ORDRE</th><th style="border: 1px solid ;">MOIS</th></thead><tbody>';
    for($i=0;$i<sizeof($Annee);$i++){
        $order=$i+1;
        echo '<tr><td style="border: 1px solid ;">'.$order.'</td><td style="border: 1px solid ;" >'.$Annee[$i]."</td></tr>";
    }
    echo "</tbody></table>";

?>