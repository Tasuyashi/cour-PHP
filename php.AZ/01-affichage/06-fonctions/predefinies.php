<?php

// les fonction prédéfinies sont celles qui sont déja  codées, mises à notre disosition par PHP (par exemple isset())

// 01 strlen() et iconv_strlen()
// les deux permettent de tester la longeur dd'une chaine de caractères (pour que par exemple on n'entre pas 200 caractères pour un pseudo, on va limiter au maximum à 20 )

$arme = "Volto Hache";

// le résulat trouvé sera 32 (espace et apostrophes compris)
echo iconv_strlen($arme) . "<br>";
// strlen donnera le même résultata pour ceet exemple 
echo strlen($arme) . "<br>";

// seconde test avec un mot qui comporte des accents
$arme2 = "étés";
// avec iconv_strlen, le rérultat est 4
echo iconv_strlen($arme2) . "<br>";
// avec strlen le résultat est 6; elle compte les accents en plus
echo strlen($arme2) . "<br>";


// 02 subastr()
// fonction prédéfinie qui permet de couper une chaine de caractères en des endroits précis et supprimer le reste

// elle prend trois paramétres. La chaine à découper, le point de départ et le ponit d'arrivée  (je veux conserver la première moitié de ma chaine de caractères)
echo substr($arme, 0, 16) . '<br>';

echo substr($arme, 0, -4) . '<br>';

// 03 date()
// celle ci permet de récupérer l'année  en cour

echo date("d / m / Y /") . '<br>';

echo  "&copy" . date("") . "Kazuto" . '<br>';

echo date("B / M / Y /") . '<br>';

// 04- empty()

// isset() vérifie qu'une variable existe. empty() vérifie si elle à reçu du contenu ou non
// ci dessous, la variable existe, mais sans contanu
$arme3 = "insect au glaive";

if(empty($arme3)){
    echo "La variable n'a pas de contanu <br>" ;
}else{
    echo "La variable à reçu du contenu";
}
