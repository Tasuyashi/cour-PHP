<?php

$pays = "France";

function affichePays(){
    global $pays;
    echo $pays;

}

affichePays();

// du local vers le global 

function afficheJour(){
     $jour = "mercredi";
    return $jour;
    echo "Demain nous serons jeudi";
}
echo afficheJour();