<?php 
session_start();

print_r($_SERVER);

echo $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']);

if($_SESSION["prenom"] == "")
{
    header('location: http://localhost/eval-e2.com/login.php');
}else{
    $nomPage = "Admin";
    $_SESSION["prenom"];
    include("includes/header.php"); 
    include("includes/content.php");
    include("includes/footer.php") ;
}
    


?>