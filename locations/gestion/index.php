<?php   //Balise ouvrante

// C'est un commentaire 



/*
c'est un commentaire sur plusieurs lignes
/

echo "Bonjour c'est la D-WEB";
echo 'Bonjour c'est la D-WEB';   // AltGr+8
echo "<p>Bonjour c'est la D-WEB</p>";


// Une variable est un espace mémoire 

// Comment déclarer une variable en php ?
$nom_variable="";
$_nomVariable="";
$nomVariable=""; // cameCase
$NomVariable=""; //Déconseillé (commence par une Maj)

// ne pas faire 

/$NOMVARIABLE;
$1variable;
$nom-variable;
$ nom variiable
$nomvariable
$nomFiliere="";
*/

$nomFiliere="D-WEB";


//echo"Bonjour la $nomFiliere";
//echo'Bonjour la $nomfiliere'; // guillemets simples n'est pas interprété 
//echo"Bonjour la",$nomFiliere;
//echo'Bonjour la',$nomFiliere,"c'est l'heure de manger";



//PHP ne fait pas de distinction entre les variables



//variables et les chiffres/nombres/additions

$a=1;
$b=100;
$c=$a+$b;

//echo $c;
//echo"Le résultat est: $c.";

$c +=$a;
//echo $c;

//echo $c+=$c;

// les comparaisons 

 // Depuis la V7 =====>( $a<=>$b)

 if(  $a !=$b )
    {//echo 1;
     //echo 'true';


    }else
    {//echo 0;
    //echo 'false';
}


// afficher information d'une variable

//var_dump($nomFiliere);
//var_dump($e);


//afficher information d'une variable de manière lisible

print_r($nomFiliere);
print_r($e);

// tableaux
$tab=array();
$tab=[];

//données dans un tableau 

$tab=array("D-WEB", "PMSPA");
//var_dump($tab);

//nombre colonne // index // valeur correspondant index+longeur de chaine
$tab2=array($tab, $c, $e);
//var_dump($tab2);


//tableau de 3 elements= array(3) qui sont: 
/*
-index 0= un tableau qui contient 2 elements
-index 1= une variable 
-index 2= une variable 
*/


//pour afficher un tableau 

//echo $tab2[0][0]; 

//afficher toutes les valeurs d'un tableau 



//compter le nombre d'éléments dans un tableau 
$nbrElement= count($tab);

//boucle for 
for($i=0;$i < $nbrElement;$i++)
{
    //echo $i;
    //echo $tab[$i];

}


// boucle foreach 

foreach($tab as $filiere)
{
    //afficher valeur tableau
    //echo $filiere;
}


//afficher valeur avec index 
foreach($tab as $index =>$filiere)
{
   // echo "L'index: $index, correspond à la filiere: $filiere.";
}

//afficher contenu de $tab2

foreach($tab2 as $filiere)
{
    //echo $filiere;
}





//reponse

//foreach ($tab2 as $value)
//{
    //var_dump($filiere);
   // if($value == "$tab $c $e");
    //{
     //   echo $value;
    //}    
//}








$tab3=["un","deux","trois","stop"];
foreach($tab3 as $value)
{
    //afficher l'un des éléments du tableau
    if($value == "trois")
    {
        //echo $value;
    }
}
//declarer un tableau dans une variable qui contient les éléments suivants janvier, fevrier,mars,2019,2018,2017,"fin", "stop" "recommencer"
$tab4= ["janvier","fevrier","mars",2019,2018,2017,"fin","stop","recommencer"];
//var_dump($tab4);


 //afficherle contenu du tableau $tabMois
$tabMois = ["Janvier", "Fevrier","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Decembre"];
foreach ($tabMois as $index => $mois)
{
    //echo "$index - $mois";
}

//choisir/paramétrer/personaliser index tableau
$tabVS = ["id-850"=>"VERROUX", "id-851"=>"RENAY","id-852"=>"VITULIN","id-853"=>"TERRINE"];
foreach($tabVS as $id =>$nomVS)
{
    //afficher id et nom vs
    //echo "<pre>";
    //echo "L'identifiant :$id est attribue au vs:$nomVS";
    //echo "</pre>";
}

$a = 100;
$a += 200;
//echo $a;
$a = 50;
//echo $a;
//une variable constante

//déclarer une variable constante
define("JOURNEE", "24h");
//echo JOURNEE;
//echo "a la fin de cette journee nous aurons 24h de plus";
//echo "a la fin de cette journee nous aurons ".JOURNEE." de plus";
//echo 'a la fin de cette journée nous aurons '.JOURNEE.' de plus';

//JOURNEE +=24; A NE PAS FAIRE

//addition de variable constante
define("NBR1",50);
define("NBR2",150);

 $resultat = NBR1 + NBR2;
 //echo $resultat;

 define ("INFO",NBR1);
// echo INFO;
 define("URL", "https://nomdedomaine.com");
 echo URL."/css/fichierStyle.css";


 //structure de controle
 $a = 10;
 $b = -15;
 $c = 0.50;
 $e = $a + $c;

//if
if($a == $e)
{
    //si c'est vrai affiche une réponse
    echo "la reponse est vraie";

    //mettre d'autre actions
    $e = $a;
    echo "si c'est faux il ne se passe rien";
}
//ELSE
if($a == $e)
{
    //si c'est vraie ça affiche qlq chose
}else{
    //si c'est faux ça affiche autre chose
    //echo "la reponse est fausse";

    //mettre des actions
    $e = 0;
}
//ELSE ELSEIF
$a=5;
$b=6;

if($a > $b)
{
    //si c'est vraie
    //echo "a est plus grand que b";
}elseif($a == $b){
    //echo "a est égale a b";
}else{
    //echo "a est plus petit que b";
}

//syntaxe alternative

//Balise fermante ?>



<?php if($a ==5): ?>
<p>a est egal a 5</p>
<?php endif; ?>


<?php
$a = 7;
$b = 6;

if($a == 5): //cest faux
//echo "a egal 5";
//echo "...";
elseif ($a == 6):
//echo "a egal 6";
//echo "!!!";
else:
//echo "a ne vaut ni 5 ni 6";
endif;

//opérateur ternaire = condition ternaire
//?
//resultat ? si c'est vraie : si c'est faux
//echo $result ? $a  == $b : "c'est faux";

//c'est egal
if( $a == $b)
{
    //affiche rien
}else{
    //affiche
    //echo $result = "c'est faux";
}

//exercices
/*
mettre en place un script pour autoriser les hommes d'un age supérieur à 35 ans à écrire livre. 
*/

$a = 50;

if($a > 35)
{
    echo "<pre>";
  //echo "l'homme est autorisé à écrire un livre";
  echo "</pre>";
}else{
    echo "<pre>";
    //echo "l'homme n'est pas autorisé à écrire un livre";
    echo "</pre>";
}
/*
mettre en place un script permettant de  lister les pers ayant réussis l'examen du code de la route voici les notes
35,37,25,4,40,36,40,12,34,22,20,10,10
*/

$code = [35,37,25,4,40,36,40,12,34,22,20,10,10];
foreach ($code as $value)
{
    if($value > 34)
    {
        //echo $value; 
    }
}


//boucle while (prend une expression et une commande)
/*
$i = 1;
while($i <= 10) {
echo $i;
$i++;
}
*/
// boucle do while (fonction tester a la fin de chaque itération,ce qui n'est pas le cas avec la boucle while, la premiere est tjr exécuter)
$i = 0; //déclaration de variable
do {
   echo $i;
}while ($i > 0);

//break

$tabVS = ["RENARD","TERRINE","NEY","MARIELUCE","THOME"];
/*
$nbr = count($tabVS);
 foreach($tabVS as $value)
 {
      if($value == "MARIELUCE")
      {
          break;
      }
      echo $value;
 }*/

//switch 

$i=25;
switch($i){
    case 2 :
        echo $i; 
        break;


    case 20 :
    echo $i;
    break;

    case 25 ;
    echo $i;
    break;

}

//include (a l'intérieur d'un fichier php on inclus un fichier php, inclure un script dans au autre, exemple programme press, on appelle le ficher, on fait appelle a la fonction qui ce trouve à l'intérieur)

include ("head.php");











