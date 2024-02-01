<?php

class ListeTitulaires {
    private $titulaires = [];

    // Ajouter un titulaire à la liste
    public function ajouterTitulaire($titulaire) {
        $this->titulaires[] = $titulaire;
    }

    // Afficher la liste des titulaires
    public function afficherListeTitulaires() {
        echo "Liste des titulaires :\n";
        foreach ($this->titulaires as $titulaire) {
            echo "<br>" ."- " . $titulaire . "<br>";
        }
    }
}

// Tester la classe ListeTitulaires

$listeTitulaires = new ListeTitulaires();
$listeTitulaires->ajouterTitulaire("zaid ");
$listeTitulaires->ajouterTitulaire("moaado");
$listeTitulaires->ajouterTitulaire("shqeq ");

$listeTitulaires->afficherListeTitulaires();
?>