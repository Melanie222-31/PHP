<?php
// import des ressources
include './Exercice_20_03_23.php';
// créer une instance d'un objet Animal
$cat = new Animal(null, null,4, true);
var_dump($cat);
echo '<br>';


$dog = new Animal ("chien", 60,7,false);
var_dump($dog);
echo '<br>';
var_dump($cat);
echo '<br>';

// afficher le contenu d'un attribut :

var_dump($dog);
echo '<br>';
var_dump($cat);
?>