<?php

// include connexion
include("connect.php");
include("traitement_inscription.php");
include("traitement_carte.php");


$addInscrit = new traitement_inscription($mysqli);
$addCarte = new traitement_carte($mysqli);



//switch ou condition
switch($_POST["frmCartes"])
{
    case "frmInscrit" :
        //appel methode add_personne
        $addInscrit->add_inscrit($_POST);
    break;
    case "frmConnex" :
        //appel methode login
        $addInscrit->connects($_POST); 
    break;
    case "frmPassword" :
        //appel methode pass
        //echo "traitement email mot de passe";
        $addInscrit->resetPassword($_POST["frmEmail"]);
    break;
    case "frmCarte" :
        // add_carte
        $addCarte->add_carte($_POST, $_FILES);
        
    break;
    default :
        // action par defaut
    break;
}







// traitement pour page connexion


/*
$per = new add_inscrit();
$per->add_inscrit($_POST);*/