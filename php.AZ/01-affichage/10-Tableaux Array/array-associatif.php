<?php
// les tableaux associatifs ont été crées pour encore mieux maitriser la création d'un tableau. On peut désormais donner un nom à l'indice, plutot que de devoir faire un print_r pour connaitre son indice (puis crocheter)
// au moment de declarer les éléments du tableau, je les précède d'un indice dont je vais maitriser le nommage (au lieu de laisser PHP leur donner les indices 0 , 1 , 2 etc...)
$listeCouleurs = array('j' => 'jaune', 'b' => 'bleu', 'v' => 'vert');
echo "<pre>"; print_r($listeCouleurs); "</pre>";
// dans le premier cas, j'utilise de simple quotes et je dois co,ncaténer. Au moment de crocheter, l'indice est aussi entre simple quotes
echo 'La couleur ' . $listeCouleurs['j'] . ' possède l\'indice j <br>' ;
// dans le second cas, double quotes, donc pas besoin de concaténer. Mais je ne dois plusmettre de simple quotes autour de l'indice
echo "La couleur $listeCouleurs[b] possède l'indice b";