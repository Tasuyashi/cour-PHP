<?php
// exercice avec une fonction qui va calculer la TVA pour un  prix HT
// on va compliquer  cette fonction et  amesure pour le rendre interessante

// fonction qu'attend pas de paramètre
function calculTva(){
    // return permet de conserver en mémoire un résultat, récupérable ensuit dans notre code 
    return 100*1.2 . '€ TTC';
}

// j'éxécuter en affichant le résultat ( consérvé le return )
echo calculTva() . '<br>';

// étape 1, elle devra recevoir le prix en argument, puis elle calculera le prix en TTC 
// objetif. La fonction est capable de calculer le prix TTC de n'importe quel chiffre et pas juste 100

function calculTva3($prix){
   return $prix *1.2 . '€ TTC';
}

echo calculTva3(500) . '<br>';

// étape 2. La fonction doit a présent calculer un prix TTC en fonction de deux arguments qu'on doit lui donner. Le prix TH, mais aussi quel taux de TVA appliquer au prix  HT

function calculTva2($prix, $tva ){
   return $prix * $tva. '€ TTC';
}

echo calculTva2(500, 1.055) . '<br>';

echo calculTva(300, 1.2) . '<br>';

// cette fonction prend toujours deux arguments, sauf que celui concernant le taux va recevoir une valeur par défaut ($taux = 1.2)
function calculTva4 ( $prix, $taux = 1.2){
    // elle multiplie le prix par le taux
    return $prix * $taux . '€ TTC';
}
// au moment de l'exécution, si je ne donnne qu'un argument (100), alors ma fonction, intelligemment va lui appliquer le taux par défaut
echo calculTva4(100) . '<br>';
// si par contre je précise le prix, mais aussi le taux (différent de celui par défaut), alors ce dernier va ecraser la valeur du taux par défaut pour la remplacer (1.055 va remplacer 1.2)
echo calculTva4(100, 1.055) . '<br>';