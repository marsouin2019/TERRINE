<?php



// mettre en place la class Personne
class Personne
{

    // attributs
    public $civilite;
    public $nom;
    public $prenom;
    public $adresse;
    public $complementaire;
    public $code_postal;
    public $ville;
    public $telephone;
    public $email;
    public $password;

    //variable mysqli

    public $connectDB;


    // methodes

    public function __construct($myconnexion)
    {
        // initialisation de la connexion internet
       $this->connectDB = $myconnexion;

       //print_r($this->connectDB);
    }
    public function add_personne(array $data)
    {
        //print_r($data);

        $this->civilite =$data["frmCivilite"];
        if ($this->civilite !="M"|| $this->civilite !="Mme") {
            //return false;
            echo false;
        }

         $this->prenom = ltrim(htmlentities(ucfirst($data["frmPrenom"])));
         $this->nom = ltrim(htmlentities(strtoupper($data["frmNom"])));
         
           // mise en forme et securite password
         $this->adresse = ltrim(htmlentities($data["frmAdresse"]));
         
         $this->complementaire =ltrim(htmlentities( $data["frmComplementaire"]));
         $this->code_postal = ltrim(htmlentities($data["frmPostale"]));
         //preg_match();
         /*
         #0-9(5)#
         

         #dweb#
         
         */

        if (preg_match("#a-zA-Z{5}#", $data["frmPostale"]) ); 
        {
            //return false;
            echo false;
        }



         $this->ville = ltrim(htmlentities(ucfirst($data["frmVille"])));
         $this->telephone = htmlentities($data["frmTelephone"]);
        
         $this->email = strtolower($data["frmEmail"]);


         // mise en securite du mot de passe
            
         /*1 ere solution
         $nwpass = password_hash($this->password, PASSWORD_DEFAULT);*/
        
         /* 2 ème solution
         password_hash($this->password, PASSWORD_DEFAULT);*/

         /*3 ème solution*/
         //$this->password = password_hash($data["frmPass"], PASSWORD_DEFAULT);

         // mise en securite du mot de passe

        
         // condition test longueur chaine d emot de passe
         if (strlen($data["frmPass"]) < 8 ) 
         {
             //return false;
             echo false;
         }else {
             if (strlen($data["frmPass"]) > 12 )
              {
                 // return false;
                 echo false;
             } else {
                $this->password = password_hash($data["frmPass"], PASSWORD_DEFAULT);
             }
         }
        // echo $this->nom;
 
        $resultat = $this->connectDB->query( "INSERT INTO personnes (civilite, nom , prenom, adresse , complementaire , code_postal ,ville ,telephone)VALUES('".$this->civilite ."','".$this->nom."','".$this->prenom."','".$this->adresse."','".$this->complementaire."','".$this->code_postal."','".$this->ville."','".$this->telephone."')");
        //print_r($resultat);
         
       //requete select lastid
       if ($resultat == 1) 
       {
            //requette pour recuperer id personne
            $idPersonne = $this->connectDB->query("SELECT id,prenom FROM personnes WHERE telephone = '".$this->telephone."' ");
            $row = $idPersonne->fetch_assoc();

            //id
            $idP = $row["id"];
            $_SESSION["prenom"]=$row["prenom"];

            if( isset($idP))
            {
                $req = $this->connectDB->query("INSERT INTO logins (email, password, idpersonne) VALUES ('".$this->email."', '".$this->password."'   ,'".$idP."')");

                if($req == 1)
                {
                    // redirection page login
                    header('Location: http://localhost/eval-e2.com/login.php', replace);
                }
                

            } else {
                // problement insert email
                echo "probleme d'insertion d'une email";
            }


       } 
       
    
    } //fin de add personne

    public function login(array $data){
        //recuperer les donnees de form connexion--
        //faire une comparaison entre les donnes saisies et celle de notre base de donnees
        //redirection vers un espace admin

        //print_r($data);
        
        
       $this->email = $data["frmEmail"];   // voir comment mettre en minuscule

       //requete select pour comparer les info login d'une personne
       $req = $this->connectDB->query("SELECT * FROM logins WHERE email = '".$this->email."' ");
       $row = $req->fetch_assoc();

       
       $idPers = $row["idpersonne"];

       $personne = $this->connectDB-> query("SELECT prenom FROM personnes WHERE id = '".$idPers."'");
       $rowP = $personne->fetch_assoc();

      
        //condition test longueur chaine d emot de passe
        if (strlen($data["frmPass"]) < 8 ) 
        {
            //return false;
            echo false;
        }else {
                if (strlen($data["frmPass"]) > 12 )
                {
                    // return false;
                    echo false;
                } else {
                //$this->password = password_hash($data["frmPass"], PASSWORD_DEFAULT);
                $password = $row["password"];
  
                if (password_verify($data["frmPass"],$password)) 
                {
                    //stocker en session en ptrnom ry email
                    $prenomP = $_SESSION["prenom"];
                    $_SESSION["email"] = $row["email"]; 

                    //redirection vers page admin
                    header('Location: http://localhost/eval-e2.com/admin/', replace);

                    
                }else{
                    //redirection vers page form
                    echo "erreur";
                    }
                }
            }

       }

       

       

       public function resetPassword($data){

        $this->email = $data;
        //traitement adresse email

        $resetPassword = $this->connectDB->query("SELECT * FROM logins WHERE email = '".$this->email."' ");

        // generateur de nouveau password
        //$newPASSWORD = "azertyui";

        //
        echo $newPassword = $this->genePasswd(8); 
        //
        echo $this->envoi_password($newPassword);
        exit;

        //crypter le mot de passe
        $this->password = password_hash($newPassword, PASSWORD_DEFAULT);

        //mettre a jour
        /*
            UPDATE
        */
        $resultat = $this->connectivité->query("UPDATE logins SET password='".$this->password."'WHERE email='".$this."'");

        print_r($resultat);

    }//fin de function resetPassword 
    public function genePasswd(int $lenght)
    {
        //test longueur
        $lenght = ($lenght == 0) ? 8 : 12;

        //chaine
        $chaine = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789&#.-";

        //melanger
        $melanger = str_shuffle($chaine);

        //retourner
        return $passwd = substr($melanger,0, $lenght);
    }
    //envoie de mot de passe
    public function envoi_password($passwd)
    {
        //
        $to      = 'marsouin2019@gmail.com';
        $subject = 'New password localhost';
        $message = 'Bonjour !, voici votre nouveau mot de passe,' .$passwd.'.'."\r\n";
        $headers = 'From: hostmaster@gmail.com'."\r\n".'Reply-To: noreply@gmail.com' . "\r\n".'X-Mailer: PHP/' . phpversion();

        if(mail($to , $subject, $message, $headers))
        {
            return "Le message est envoyé";
        }else{
            return "Le message n'est pas envoyé";
        }
    }

    //fonction delete personne
    public function delete_personne(int $id)
    {
        //login il faut passer par l'id
        $requete = $this->connectDB->query("DELETE FROM connects WHERE id = '".$id."'");
    }
    // insert data in  database
    // table personnes
    // table logins
    // requete insert data
    

}