<?php

class Animal {
    // Attributs :
    public $nom;
    public $taille;
    public $poids;
    public $sexe;
    
    // Constructeur :
    public function __construct($name, $size,  $weight, $sex){
        $this-> nom = $name;
        $this-> taille = $size;
        $this-> poids = $weight;
        $this-> sexe = $sex;
    }

    // Pour une question de sécurité, les attributs ne sont touchables que si ???

    // Getter and Setter
    public function getNom(){
        return $this -> nom;
    }
    public function getTaille(){
        return $this -> taille;
    }
    public function getPoids(){
        return $this -> poids;
    }
    public function getSexe(){
        return $this -> sexe;
    }

    public function setNom($nom){
        $this -> nom = $nom;
    }
    public function setTaille($taille){
        $this -> nom = $taille;
    }
    public function setPoids($poids){
        $this -> nom = $poids;
    }
    public function setSexe($sexe){
        $this -> nom = $sexe;
    }
}

?>

