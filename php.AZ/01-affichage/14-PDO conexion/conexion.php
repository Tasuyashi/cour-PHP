<?php


// PDO est une surcouche de PHP, directemeent intégrée à ce dernier depuis php version 5.1.
// PDO permet de connecteer notre projet à sa base de données, puis de méler du langage php avec des requetes en sql

$pdo = new PDO('mysql:host=localhost; dbname=boutique2', 'root', '', array (PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

echo "<pre>"; print_r(get_class_methods($pdo)); echo"</pre>";