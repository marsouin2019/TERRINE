<?php
//print_r($_SERVER);

// url normal
/*
- protocole
- nom de domaine
- uri

http://www.toutemescartes.fr/

*/

// serveur distant = hebergement client
echo $_SERVER['SERVER_NAME']."/save_cartes";


// pour sauvegarder un fichier serveur distant = hebergement client
echo $_SERVER["SERVER_NAME"]."/web/save_cartes/";



// contest local
echo $_SERVER["DOCUMENT_ROOT"]."/Mescartes/save_cartes/";

