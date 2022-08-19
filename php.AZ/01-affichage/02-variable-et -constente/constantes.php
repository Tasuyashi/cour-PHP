<?php

// sa fonction est similaire e celle d'une variable, elle stocke une valeur récupérable. Par contre, cette valeur ne sera pas modifiable par la suite

// une constante se declare avec le mot clé defini
// in prend deux aeguments. Le nom de la constante (par convention, en majuscules). Le second argument est la valeur de la constante
define('VILLE', 'Poissy');

echo VILLE;

// tenter de redéfinire sa valeur comme en dessous générera une erreur php
// define('VILLE'), 'Paris');
// echo VILLE;

// il serautile de stoker une valeur que l'on sait fixe, non variable, dans une constante, par exemple, la valeur de l'URL de site. on pourra la stocker avec
// define('URL', )

// 02 - les constantes magiques (déja existantes).

// les constantes magiques sont des constantes déjà codée


// cete constante donne le cemin physique jusqu'au fichier (file)
echo __FILE__ . '<br>';
// celle ci donne le chemin physique jusqu'au dossier (dans lequel se trouve le fichier)
echo __DIR__  . '<br>';
// cette dernière donne la ligne ou elle est codée
echo __LINE__ ;


