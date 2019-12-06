<?php


//definir les constante INSERT INTO logins SET email='',idinscrit='1';

define("SERVEUR", "localhost");
define("USER", "groupecarte");
define("PASSWORD", "projetcarte");
define("DATABASE", "carte");

//connexion database
$mysqli = mysqli_connect(SERVEUR,USER,PASSWORD,DATABASE);


//si je ne suis pas connecter affiche moi l'erreur
if(!$mysqli)
{
  echo "Erreur :impossible de se connecter à mysql.". PHP_EOL;
  echo "Errno de débogage:". mysqli_connect_errno(). PHP_EOL;
  echo "Erreur de débogage:". mysqli_connect_error(). PHP_EOL; 
  exit;
}