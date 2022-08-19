<?php

// une variable permet de stoker des valeur
$listePrenom = "Asuna, Naruto, Kazuto, Hinata";

echo $listePrenom . "<br>";


$tableauPrenom = array("Asuna", "Naruto", "Kazuto", "Hinata");



echo "<pre>"; print_r($tableauPrenom); "</pre>";

echo "<pre>"; var_dump($tableauPrenom); "</pre>";

echo $tableauPrenom[2] . '<br>';

// autre suntaxe pour declarer un tableau.
// elle est plus pratique que le première pour ajouter des élément au tableau au fur at à mesure de notrer code, si on ne les connait pas tous au départ


$listePays[] = "France";
$listePays[] = "Japon";
$listePays[] = "Kanada";
$listePays[] = "Egypte";
$listePays[] = "Espagne";
$listePays[] = "Argentine";

// la boucle foreach est trés adaptée pour recupérer les valeur d'un tableau
foreach($listePays as $indice => $valeur){
    echo "<p>La valeur " . $valeur . " a pour indice " . $indice . "</p>";
}

foreach($listePays as $valeur){
    echo "<p>" . $valeur . "</p>";
}

echo "<p>" . implode(' - ', $tableauPrenom) . "</p>"; 

echo count($tableauPrenom) . '<br>' ;

echo sizeof($tableauPrenom) . '<br>' ;