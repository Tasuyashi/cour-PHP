<?php

// 01 concaténation simple
$prenom = "Aziz";
$nom = "Tobbal";

// Il y a deux manieres de concaténer en php
// d'abord la moins utilisées, avec une virgule

echo "Je suis " , $prenom , " " , $nom , "<br>";

// la plus utilisée, quasi tout le monde : le point

echo "Je suis " . $prenom . " " . $nom . "<br>";

// 02 concaténation par affectation

$nombre = 'Ko';

echo $nombre .= 15 ;