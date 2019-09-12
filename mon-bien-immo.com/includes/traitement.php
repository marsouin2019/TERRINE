<?php
//traitement du formulaire register
print_r($_POST);

var_dump($_POST["frmMdp"]);

foreach($_POST as $key => $value)
{
   echo $key. "valeur". strip_tags($value). "<br />";
    if(strlen(htmlentities(strip_tags($value))) < 20)
    {
        echo "$key valeur".htmlentities(strip_tags($value))."<br />";
    }else{
        echo "la chaîne correspondant à $key, n'est pas valide <br />";
    }
}