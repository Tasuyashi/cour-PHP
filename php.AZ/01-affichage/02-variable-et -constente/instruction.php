<?php
// 01- affichage conventionel, destné aux visiteur du site (echo, print et passage contracté)
// syntaxe au dessus pour ouvrir un passage php
// il est conseillé de le laisser ouvert si on ne fait que du traitement PHP (du code PHP). C'est plus facile pour debugguer
// on peut aussi le fermer, mais plus difficile a corriger en cas de problème
// ?/

// instructiob d'affichage trés souvent utilisée
echo "Bonjour, je suis Nouha, un éléve de Aziz en PHP <br>";
// le ; est une fin d'instruction, il est obligatoir pour signifier cet ordre au navigateur, sinon, ereur php
// une seconde instruction est possible en php avec le mot print, mais il n'est quasiment pas utilisé, dans quasiement aucun script ou tutoriel

?>





<!-- passage contracté en php  -->

 <!-- il ne necessite pas de echo, il est implicite, il ne sert que pour afficher -->
<?= "Nous sommes jeudi <br>" ?>






<?php 
// 02-affichage non conventionel (print_r et var_dump) 

//  laffichage non conventionel ne sert que durant la période de développement du site. Li est utile pour le développeur , pas pour le visiteur de site

//  je declare une variable, pour ensuite tester sontype dans un print_r gettype
$prenom = "Kazuto";
//  la balise <pre></pre> qui entour le print_r est utile pour mieux lire les information que on veut récupérer momentanément
echo "<pre>"; print_r(gettype($prenom)); echo"</pre>";

//  03- les commentaire en php

/* commentair sur plusieurs 
ligne*/

// commentaire sur une seule ligne

//  04 - mix php et html 
//  on peut mélanger le code php avec diverses balises html ( h1, strong, div = Class)

echo "<h1>Salut</h1>";
echo "nous sommes des apprenants du <strong> Pole S</strong> <br>";
echo "<div class='heure> Le cours commence à 9h <br> </div>";

?>


<!-- les syntaxes en dessous n'est pas tolérée, même si elle fonctionne. Elle alterne trop les passage d'un langage à l'autre C'est du code "sale" -->
<h1><?php echo "Bonjour";  ?></h1>
<?php echo "Nous sommes" ?>  <strong>jeudi</strong> <?php echo " et il est 11h30"; ?>

<!-- Le code php n'est visible dans le code source de la page ( en faisant clic droit etc....). C'est la preuve que le navigateur ne peut pas géerer ce langage, seulement les langage front -->