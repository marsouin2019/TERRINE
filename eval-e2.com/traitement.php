 <?php
include("class/connect.php");
include("class/cl_traitement.php");
//création de l'objet
$addPersonne = new Personne($mysqli);



//traitement du formulaire register
//print_r($_POST);

//var_dump($_POST["frmPrenom"]);

/*foreach($_POST as $key => $value)

{
   //echo $key. "valeur". strip_tags($value). "<br />"; &
    if(strlen(htmlentities(strip_tags($value))) < 50)
    {
        echo "la chaine correspondant a $key , n'est pas valide <br />" ;
    }else{
        echo "champ $key correspond à $value <br />";
    }
}
*/

//print_r( password_hash($_POST["frmPass"],PASSWORD_DEFAULT));


//$salt = "MARsouins";

//$salt = md5($salt);

//echo shal(md5($_POST["frmPass"]));

//echo $key correspond à $value

switch($_POST["frmForm"])
{
    case "frmRegister" :
        //appel methode add_personne
        $addPersonne->add_personne($_POST);
    break;
    case "frmLogin" :
        //appel methode login
        $addPersonne->login($_POST); 
    break;
    case "frmPass" :
        //appel methode pass
        //echo "traitement email mot de passe";
        $addPersonne->resetPassword($_POST["frmEmail"]);
    break;
    default :
        // action par defaut
    break;
}