<?php
// la méthode GET(Superglobale) permet de véhiculer des information dans l'URL pour les récupérer sur un autre fichier (ou a un endroit du même fichier) pour un affichage spécial

// première exemple, je récupère les informations sur la même page (comme un one-page)
// deuxième exemple, en récupérant les infos sur une autre page
// dans l'attribut href, d'bord j'indique le nom du fichiet ou je veux récupérer les infos, puis j'écris ? pour envoyer les infos. Chaque info étant séparée de la précédente par un &
// target='_blank' permet d'ouvrire la nouvelle page dans un autre onglet
if(!$_GET){
echo "<button><a href='get_arriver.php?produit=Gateau&variete=fraise&prix=12'target='_blank'>Tester</a></button>"; 
}

//ce code n'est valable que si on veut récupérer les infos sur le mmême page
// if($_GET){
// echo $_GET['produit'] . " à la " . $_GET['variete'] . '<br>';
// echo "Vendu au prix de ". $_GET['prix'] . "€, aujourd'hui seulement !";
// }

