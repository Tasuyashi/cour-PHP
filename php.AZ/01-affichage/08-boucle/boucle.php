<?php

// 01 boucle wihle
    
// j'initialise ma variable $i en lui affectant la valeur 0
// souvent on initialise à 0 le premier indice d'un tableau est l'indice 0 (les boucles servent beaucoup à tavailler sur les tableau)
// $i = 0;

// Dans la parenthèse on donne la condition pour que la boucle puisse fonstionner (tant que la valeur de $i ne dépasse pas 10)
// while($i <= 10){
//     // tant que la condition est resectée, on exécutute ce qui est dans ce bloc d'instructions on affiche ce qqui est après echo )
//     echo "Tour de boucle" . $i . "---";
//     // Incrémentation de $i. A chaque tour de boucle effectué; on ajoute à la valeur de $i +1
//     $i++;
    
// }

while($i <= 20){
    if($i == 10 ){
    echo "Tour de boucle" . $i . '<br>';
    }else{
        echo "Tour de boucle" . $i . "---" . '<br>';
    }
   $i++;
}

// 02 do while() pas trés utiliser, presque jamais 

// $i = 0;
// initiation aussi à l'extèrieur de la boucle 
// do{
//         echo "Tour de boucle " . $i . " --- ";
//     // Incrémentation de $i. A chaque tour de boucle effectué; on ajoute à la valeur de $i +1
//     $i++;
//     // équivalent de $i = $i + 1 ou $i += 1
//     // au moment ou $i prendra la valeur de 11, on ne pourra plus entrer dans la condition ( $i <= 10) et on n'exécutera donc plus son bloc d'instructions
// }

// echo '<br>';


// // 01 bis, même boucle, sauf que l'on affiche pas les trois derniers tirets (après tour de boucle 10, ils n'ont plus d'utilité)

// $i = 0;

// while($i <= 10){
//     // lorsque $i sera égal à 10, on utilise cet affichage, sans les tirets
//     if($i == 10){
//         echo "Tour de boucle " . $i ;
//     }else{
//         // pour les autres cas de figure (de 0 à 9), on utilise les tirets
//         echo "Tour de boucle " . $i . " --- ";
//     }
//     // on incrémente
//     $i++;
// }
// // 02 do while() pas très utilisée, presque jamais
// echo '<br>';
// // initialisation aussi à l'extérieur de la boucle
// $i = 0;
// // elle débute par le bloc d'instructions do (les instructions à exécuter + l'incrémentation)
// do{
//     echo "Tour de boucle " . $i . " --- ";
//     // incrémentation de deux en deux
//     $i += 2;
//     // elle se termine avec la condition dans la while
// }while($i <= 10);
// // 03 boucle for()
// // elle ressemble beaucoup à la while, sauf que toutes les instructions sont dans la parenthèse (initialisation, condition, incrémentation)
// for($i = 0; $i <= 10; $i++){

//     echo "ligne " . $i . '<br>';

// }
   echo '<br>';
  echo "<from>";
        echo "<select>";
          echo "<option selected> Sélectionnez l'annez </option>";
          for($annee = date('Y'); $annee >= date('Y') - 2020; $annee--){
            echo "<option>" . $annee . "</option>";
          }
          echo "</select>";
          echo "<from>";

 // 04 double for imbriquée
echo '<br>';
echo "<table border='1' style='border-collapse: collapse'>";
        echo "<tr>";
        for($i = 1; $i <= 9; $i++){
            echo "<td>" . $i . "</td>";
        }
        echo"</tr>";
echo"</table>";

echo "<table border='1' style='border-collapse: collapse'>";
for($ligne = 0; $ligne <= 9; $ligne++){
        echo "<tr>";
        for($ce = 0; $ce <= 9; $ce++){
            echo "<td>" . (10*$ligne+$ce) + 1 . "</td>";
        }
        echo"</tr>";
        }
echo"</table>";