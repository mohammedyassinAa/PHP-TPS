<?php
    if(isset($_POST["submit"])){
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $sexe = $_POST["sexe"];

        if(!is_numeric($age) || is_numeric($nom) || is_numeric($prenom) ){
            echo "Saisie incorrecte.";
        }
        else{
            $file = fopen("list.csv","a+");
            $choices = ['I2R' , '3IIR' , '4IIR' ];  
                if ($file === false) {
	                die('Cannot open the file ' . ".//list.csv");
            }
            while (($row = fgetcsv($file)) !== false) {
                    $data[] = $row;
            }
            fclose($file);

        }
        
    }
?>