<?php

include './maison.php';

$adrar = new Maison('adrar', 45,40,3);

$philippe = new Maison('philippe',60,77,4);

$philippe->setLongueur(76);
var_dump ($adrar);
echo '<br>';
var_dump ($philippe);

echo "La surface de ".$philippe -> getNom ()." est de ".$philippe -> surface(). "m²" ;

?>

