<?php

//  fichier pour afficher les éléments  du même tableau listePays, mais avec une boucle for()



$listePays[] = "France";
$listePays[] = "Japon";
$listePays[] = "Kanada";
$listePays[] = "Egypte";
$listePays[] = "Espagne";
$listePays[] = "Argentine";


for($i = 0; $i < count($listePays); $i++){
    echo "<ul>";
    echo "<li>" . $listePays[$i] . "</li>";
    echo "</ul>";
} 