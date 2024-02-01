<?php 
$valeur = $_GET['val'];
$format = strtolower($_GET['format']);


switch ($format) {
    case 'tel':
        $exp = "/^\+212[6][0-9]{8}$/";
        if(preg_match($exp,$valeur)){
            echo "<p style='$acceptedStyle'>Le format est accepté</p>";
        } else echo"<p style='$rejectedStyle'>Le format de téléphone n'est pas accepté</p>";
        break ;

    case 'mail':
        $exp = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
        if (preg_match($exp, $valeur)){
            echo "<p style='$acceptedStyle'> Email valide </p>";
        } else echo"<p style='$rejectedStyle'>Email Non Valide</p>";
        break;
}
  
        




?>