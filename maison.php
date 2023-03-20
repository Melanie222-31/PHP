<?php

class Maison {
    private $nom;
    private $longueur;
    private $largeur;
    private $nbreEtage;

    public function __construct($name, $long, $larg, $etage){
        $this->nom = $name;
        $this->longueur = $long;
        $this->largeur = $larg;
        $this->nbreEtage=$etage;
    }

    public function getNom(){
        return $this->nom;
    }
    public function getLongueur(){
        return $this->longueur;
    }
    public function getLargeur(){
        return $this->largeur;
    }
    public function getNbreEtage(){
        return $this->nbreEtage;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setLongueur($longueur){
        $this->longueur = $longueur;
    }
    public function setLargeur($largeur){
        $this->largeur = $largeur;
    }
    public function setNbreEtage($nbreEtage){
        $this->nbreEtage = $nbreEtage;
    }

    public function surface () {
        $largeeur = $this->largeur;
        $longueeur = $this -> longueur; 
        $etages= $this -> nbreEtage;
        $surface = $largeeur * $longueeur*$etages;
        return $surface;
    }



}

?>

