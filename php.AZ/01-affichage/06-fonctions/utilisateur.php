<?php

// la fonction utilisateur, par opposition à prédéfinie est celle qui n'existe pas. Que nous allons coder pour nos prpores besion aux fonctionnalités du site

function こんにちは($prenom){
    echo "こんにちは" . $prenom . '<br>';

}
// paramètre qui sera donné au moment ou on l'exécute. Ce paramètre étant envoyé en ligne 7 pour être concatené au reste de la chaine de caractère
echo  こんにちは("Kazuto");