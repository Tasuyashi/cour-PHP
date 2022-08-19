<?php

$couleur = "bleu";

// je déclare une variable en lui affectant une valeur 
// else est jugée plus plus performante, elle séxécute plus vite qu'un elseif s'il y a beaucoup de  case à vérifier
switch($couleur){
   // elle débute avec un case qui test une valeur
    case "vert":
        echo "La couleur est bien vert";
        // un  break pour passer au case suivant si celui ci n'est pas vérifié
        // le break doit être codé pour chaque case. Sinon, même si le case est vérifié, il va aller tester le code suivant
        break;
        case "bleu":
        echo "La couleur est bien bleu";
        break;
        case "rouge":
        echo "La couleur est bien rouge";
        break;
        default:
        echo "La couleur est bien bonne";
        break;
}

// code la même en if/elseif 

if($couleur == "jaune" ){
    echo "La couleur est bien jaune ";
}elseif($couleur == "bleu"){
    echo "La couleur est bien bleu ";
}elseif($couleur == "noir"){
     echo "La couleur est bien bleu ";
}

