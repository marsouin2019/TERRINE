<?php
//connexion base de données dweb

//msqli_connect()  connection data base
//msqli_query()    executer une requete sql
//msqli_fetch_assoc()  stocker le resultat

//information sur la connexion 
/*
  localhost ou 137.0.0.1 ou bien google.com 
  user de connexion
  password de connexion
  database
  
*/

//definir les constanteINSERT INTO logins SET email='emlyn@hotmail.fr',idpersonne='1';

define("SERVEUR", "localhost");
define("USER", "marsouin");
define("PASSWORD", "mrsma");
define("DATABASE", "dweb");


//connexion database
$mysqli = mysqli_connect(SERVEUR,USER,PASSWORD,DATABASE);

//print_r($mysqli);  

//si je ne suis pas connecter affiche moi l'erreur
if(!$mysqli)
{
  echo "Erreur :impossible de se connecter à mysql.". PHP_EOL;
  echo "Errno de débogage:". mysqli_connect_errno(). PHP_EOL;
  echo "Erreur de débogage:". mysqli_connect_error(). PHP_EOL; 
  exit;
}

//afficher message de connexion reussi 
//echo "connexion ok";
