<?php
echo "Structure itéractives : les boucles";
// Les bouces sont sont destinées à répéter des lignes de codes de façon automatique
$annee = date('Y') - 100; // date() fournit la date du jour au format indiqué, ici 'Y' pour Year sur 4 chiffres


// echo '<select>';
// while ($annee <= date('Y')){
//     // echo '<option>$annee</option>';
//      echo '<option>' . $annee . '</option>';
//      $annee++;

// }
//  echo '</select>';


echo "<br>";
 // :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

$annee = date('Y') - 100;

 echo '<select>';
 echo '<option>année</option>';
 do{
    echo '<option>' . $annee . '</option>';
    $annee++;
 }while ($annee <= date('Y'));
 echo '</select>';


 echo "<h4> La boucle do while </h4>";

 // --------------------------------
 // La boucle do while a la particularité de s'exécuter au moins une fois (conrrespondant à "do") puis  tant que la condition while est vrais.
$j = 1;
 do{
    echo 'je fais un tour de boucle <br>';
    $j++;

 } while ($j > 10 );
// Exemple d'utilisation : poser une question à l'internaute une première fois avec le "do", puis tant qu'il n'a pas répondu avec le "while".


// Boucle For
// La boucle for est une autre syntaxe de la boucle while

// for($i = 0; $i <10; $i++) {// on trouve dans les parnthéses du for : valeur de départ; conditionn d'entrée dans la boucle; variable de $i (incrémmentatiion ou autre chose )

//     echo $i . "<br>";// affiche 0 à 9 en 10 tours
// }// $Nacime : si on veut faier varier $nacime de 10 en 10, on écrit $nacime += 10 à la place de $nacime++

// Exercice : Afficher 12 <option> de 1  </option>

echo "<hr>";
  echo "<select>";
for($pompe = 1; $pompe <= 13; $pompe++ ){
    echo '<option>Pompe</option>';
} echo "</select>";

// Exercice : afficher avec une boucle for les chiffres de 0 à 9 sur la même ligne dans une table HTML 

echo "<br>";

echo "<table border= 1;>";
for ($yadaf = 0; $yadaf < 10; $yadaf++){

    
    echo "<tr>";
    
    echo "<td> $yadaf </td>";


   echo "</tr>";
}
echo "/<table>";
