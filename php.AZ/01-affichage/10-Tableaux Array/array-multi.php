<?php 

$marvel_hero = array(
    array('personnage' => 'Iron Man', 'prenom' => 'Tony', 'nom' => 'Stark'),
    array('personnage' => 'Spider-man', 'prenom' => 'Peter', 'nom' => 'Parker'),
    array('personnage' => 'Black Widow', 'prenom' => 'Natasha', 'nom' => 'Romanov'),
);

echo "<pre>";  var_dump($marvel_hero); echo "</pre>";

echo '<p>'. $marvel_hero[1]['prenom'].'</p>';

$marvel_hero = array(
    "Spider-man" => array('prenom' => 'Peter', 'nom' => 'Parker'),
    "Iron man" => array('prenom' => 'Tony', 'nom' => 'Stark'),
    "black Widow" => array('prenom' => 'Natasha', 'nom' => 'Romanov'),
);

echo "<pre>"; var_dump($marvel_hero); echo "</pre>";

echo '<p>' . $marvel_hero['Black Widow']['prenom'] . '</p>';

foreach($marvel_hero as $key => $value){
    echo "<ul>";
    if(is_array($value)){
      echo "<li>";
   echo "<h4>" . $key ."</h4>";
   foreach($value as $key2 => $value2){
     echo "<p>$key2: $value2</p>";
   }
      echo"</li>";
      }
    echo "</ul>";
};