<?php
include("connect.php");
//afficher information de connexion
//print_r($mysqli);
 
//requete de selection de la table personnes
$resultat = $mysqli->query("SELECT * FROM personnes");
print_r($resultat);


