<?php
$nom = 'Lassoie';
$prenom = 'Samuel';

//echo "$nom $prenom";


echo 'Bonjour je m\'appelle <b>' . $nom . ' ' . $prenom . '</b>, comment allez-vous ?';

?>
<h1>CALCULS</h1>

<?php

$nbre1 = 1526;
$nbre2 = 25;

$nbre1 * $nbre2;





echo "<h1>EXEMPLE</h1>";

$mot1 = 'maison';
$mot2 = 'voiture';



$variableTemporaire = $mot1; // maison
$mot1 = $mot2; // voiture
$mot2 = $variableTemporaire;

echo $mot1 . '<br>';
echo $mot2 . '<br>';
echo $variableTemporaire . '<br>';





