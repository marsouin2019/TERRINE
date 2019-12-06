<?php
include("connect.php");
//afficher information de connexion
//print_r($mysqli);
 
//requete de selection de la table inscrits
$resultat = $mysqli->query("SELECT * FROM inscrits");
print_r($resultat);

