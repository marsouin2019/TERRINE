<?php 
 session_start();
//$url = "http://" .$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']);
 if(isset($_SESSION["prenom"]) == "")
 {


 }else{
    $nomPage = "Inscrits";
    include("includes/header.php");
    include("includes/content.php");
    include("includes/footer.php") ;
 }

?>