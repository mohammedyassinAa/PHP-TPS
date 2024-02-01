<?php
class compte{
   
    protected $devise;
    protected $solde;
    protected $titulaire;

    public function __construct(  $devise,$solde,$titulaire){
        $this->devise = $devise;
        $this->solde = $solde;
        $this->titulaire = $titulaire;
        }
    public function afficherSolde(){
   echo"solde" . $this->solde ;
}

public function afficherDevise(){
    echo"devise" . $this->devise ;
 }

 public function afficherTitulaire(){
    echo"titulaire" . $this->titulaire ;
 }
 public function modifiersolde($s){
    $this->solde = $s;
}
public function crediter($montant){
    $this->solde =$this->solde + $montant;
}
}
class epargne extends compte{
    private $taux;
    public function __construct($devise,$solde,$titulaire , $taux){
        parent::__construct($devise,$solde,$titulaire);
        $this->taux = $taux;
}
public function afficherTaux(){
    echo "Taux". $this->taux ;
}
public function calculerinteret(){
    echo "interet :". ($this->solde * $this->taux/100) ;

}

}
// Tester les classes en instanciant des objets

// Compte
$compte1 = new Compte("EUR", 1000, "John Doe");
$compte1->afficherSolde();
$compte1->afficherDevise();
$compte1->afficherTitulaire();
$compte1->crediter(500);
$compte1->afficherSolde();
$compte1->afficherSolde();

// Epargne
$epargne1 = new Epargne("USD", 2000, "Jane Doe", 3);
$epargne1->afficherSolde();
$epargne1->afficherDevise();
$epargne1->afficherTitulaire();
$epargne1->afficherTaux();
$epargne1->crediter(1000);
$epargne1->calculerInteret();
?>