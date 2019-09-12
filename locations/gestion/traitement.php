<?php
//traitement du formulaire register
//print_r($_POST);

//var_dump($_POST["frmPrenom"]);

//foreach($_POST as $key => $value)
/*
{
   echo $key. "valeur". strip_tags($value). "<br />";
    if(strlen(htmlentities(strip_tags($value))) < 25)
    {
        echo "$key valeur".htmlentities(strip_tags($value))."<br />";
    }else{
        echo "la chaîne correspondant à $key, n'est pas valide <br />";
    }
}
*/
//print_r( password_hash($_POST["frmPass"],PASSWORD_DEFAULT));


//$salt = "MARsouins";

//$salt = md5($salt);

echo shal(md5($_POST["frmPass"]));



?>