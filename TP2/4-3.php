<?php

$t1 = [
    "prenom" => "p1",
    "ville" => "v1",
    "age" => "18"
];
array_values($t1);
$t2 = [
    "prenom" => "p2",
    "ville" => "v2",
    "age" => "15"
];

$t3 = [
    "prenom" => "p3",
    "ville" => "v3",
    "age" => "16"
];

$t = [
    "e1" => $t1,
    "e2" => $t2,
    "e3" => $t3
];
echo '<br>';

$s1 = array(1 =>"janvier" , 2=>"fevrier",3=> "mars", 4=>"avril" , 5=>"mai" , 6=>"juin");

$s2 = array(7=>"juillet" , 8=>"aout" , 9=>"septembre" ,10=> "octobre" ,11=> "novembre");

print_r($s2);
//supression du mois aout
unset($s2[1]);
echo "<br>";
print_r($s2);
echo "<br>";
foreach ($t as $k => $v) {
    echo $k . "<br/>";
    
    foreach ($v as $kk => $vv) {
        echo $kk . ": " . $vv . "<br/>";
    }
}

?>