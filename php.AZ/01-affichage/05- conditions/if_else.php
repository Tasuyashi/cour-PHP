<?php
// je declare 5 variables que je vais tester
$a = 22;
$b = 33;
$c = 44;
$d = 55;
$e = 66;
// 01- if else simple
// le if va tester (ce qu'on lui porpose entre parenthèses)
// si c'est vrai (TRUE) il exécute ce qu'il y a dans le bloc d'instructions. Si c'est FALSE, il execute ce qui est dans le bloc d'instructions du else
if( $a < $b){
    echo "Vrai $a est bien inférieur à $b <br>";
}else{
    echo "Faux, $a n'est pas inférieur à $b";
}
// en php, on n'est pas obligé de coder le else.
// on peut tester qlq chose et si c'est vrai, oa exécute ce qui est dans le bloc d'instructions
// mais si c'est faux, si on ne rentre pas dans ce cas de figure, on continue simplement à exécuter la suite du code
if( $b < $c){
    echo "Vrai $b est bien inférieur à $c <br>";
}
// 02 avec && (and)
// avec &&, les deux tests doivent etre TRUE, sinon, on entre dansle else (le FALSE)
if($a < $b && $b > $c){
    echo "Vrai, les deux affirmations sont exactes";
}else{
    echo "Faux, une des deux affirmations n'est pas vérifiée <br>";
}
// 03 avec OR (||)
//  avec || (OR) une seule des deux conditions vérifiées suffisent a entrer dans le TRUE (le bloc d'instructions du if)
if($a < $b || $b > $c){
    echo "Vrai, une des deux affirmations est exacte <br>";
}else{
    echo "Faux, aucune des deux affirmations n'est vérifiée <br>";
}
// 04 avec XOR (ou exclusif)
// XOR exige qu'une seule des deux affirmations soit exacte. Si les deux sont exactes ou les deux fausses, on entre dans le else
if($a < $b XOR $b < $c){
    echo "Vrai, une seule des deux affirmations est exacte <br>";
}else{
    echo "Faux, les des deux affirmations sont exactes <br>";
}
// 05 if/elseif/else
// condition avec trois possibilités. Si la première n'est pas vérifiée, on entre dans la seconde (elseif). Si cette dernière est toujours fausse, on entre dans le else
if($a > $b){
    echo "$a est bien supérieur à $b";
}elseif( $a != 22){
    echo "Vrai, $a est différent de 22";
}else{
    echo "Faux, aucune des affirmations n'est vraie <br>";
}
// condition contractée (appelée aussi ternaire)
// la condition contractée est utilisée quand on doit coder du PHP dans un bloc HTML
// elle permet une syntaxe plus condensée
// elle est difficile a comprendre au début; mais une fois habitué ...
// if( $a < $b){
//     echo "Vrai $a est bien inférieur à $b <br>";
// }else{
//     echo "Faux, $a n'est pas inférieur à $b";
// }
// 06 la ternaire ci-dessous est l'équivalente de la condition mise en commentaires au dessus
// entre les parenthèses, on ecrit toujours ce que l'on veut tester
// après le ? on ecrit le bloc d'intructions du if
// après les : on ecrit le bloc d'instructions du else
echo ($a < $b)? "Vrai $a est bien inférieur à $b <br>" : "Faux" ;
// 07 if/else avec == et ===
$var = 100;
$var2 = "100";
// == ne teste que la valeur
if($var == $var2){
    echo "Vrai, les deux variables ont la même valeur <br>";
}else{
    echo "Faux, elles sont différentes";
}
// === teste aussi le type
if($var === $var2){
    echo "Vrai, les deux variables ont la même valeur et le même type <br>";
}else{
    echo "Faux, elles sont la même valeur mais des types différents";
}

// 08 if(isset)/else
// isset() est une fonction prédéfinie pour tester si une variable existe, a été declarée avant dant le script, non 
// c'est trés utile pour savoir si on continue à dérouler le code, à l'éxécuter, ou stopper avec un message d'erreur
if(isset($test)){
    echo "La variable test existe";
}else{
    echo "Non, elle n'existe pas <br>";
}

$test = TRUE;

// code de la même condition en version contractée, en ternaire (utile lorsque l'on est dans un bloc HTML) 

echo (isset($test)) ? "La variable test exist" : "Elle n'existe pas !";