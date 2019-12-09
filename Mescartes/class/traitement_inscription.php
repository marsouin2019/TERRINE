<?php

class traitement_inscription
{
    // variables
    public $nom;
    public $prenom;
    public $email;
    public $password;
    public $passwordb;

    public $connexion;
    //variable mysqli

   
    //methodes
    public function __construct($myconnexion)
    {
        // initialisation de la connexion internet
       $this->connectDB = $myconnexion;

    }


    public function add_inscrit(array $data)
    {
        $this->prenom = ltrim(htmlentities(ucfirst($data["frmPrenom"])));
        $this->nom = ltrim(htmlentities(strtoupper($data["frmNom"])));
        $this->email = ltrim(strtolower($data["frmEmail"]));


        if(!empty($_POST['frmEmail'])) {
            if(filter_var($_POST['frmEmail'], FILTER_VALIDATE_EMAIL)) {
            // adresse e-mail valide
            } else {
            // adresse e-mail invalide
             echo false;
            }
            }
         
            
        
         // condition test longueur chaine d emot de passe
         if (strlen($data["frmPassword"]) < 8 ) 
         {
             //return false;
             echo "erreur mot de passe";
         }else {
            // verification egalite saisie mot de passe avant affection
            if($this->password == $this->passwordb)
            {
                $this->password = password_hash($data["frmPassword"], PASSWORD_DEFAULT);

                //requete d'insertion 

                $resultat = $this->connectDB->query( "INSERT INTO inscrits ( nom , prenom, email, password ) 
                VALUES ('".$this->nom."','".$this->prenom."','".$this->email."', '".$this->password."')");
                print_r($resultat);

                // redirection vers page login
                header("Location: http://localhost/Mescartes/connexion.php", replace);
                
            } else {
                // erreur
                echo "erreur mot de passe!!!";
            }



            
         }
         
         


    }


    public function connects(array $data){
        //recuperer les donnees de form connexion--
        //faire une comparaison entre les donnes saisies et celle de notre base de donnees
        //redirection vers un espace admin

        //print_r($data);
        
        
       $this->email = $data["frmEmail"];   // voir comment mettre en minuscule

       //requete select pour comparer les info login d'une personne
       $req = $this->connectDB->query("SELECT * FROM inscrits WHERE email = '".$this->email."' ");
       $row = $req->fetch_assoc();

       
       $idinscrit = $row["id"];

       $idinscrit = $this->connectDB-> query("SELECT nom FROM inscrits WHERE id = '".$idinscrit."'");
       $rowP = $idinscrit->fetch_assoc();

      
        //condition test longueur chaine d emot de passe
        if (strlen($data["frmPassword"]) < 8 ) 
        {
            //return false;
            echo false;
        }else {
                if (strlen($data["frmPassword"]) > 12 )
                {
                    // return false;
                    echo false;
                } else {
                //$this->password = password_hash($data["frmPass"], PASSWORD_DEFAULT);
                $password = $row["password"];
  
                if (password_verify($data["frmPassword"],$password)) 
                {
                    //stocker en session en ptrnom ry email
                    $prenomI = $_SESSION["prenom"];
                    $_SESSION["email"] = $row["email"]; 

                    //redirection vers page admin
                    header('Location: http://localhost/Mescartes/index.php', replace);

                    
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

        $resetPassword = $this->connectDB->query("SELECT * FROM connects WHERE email = '".$this->email."' ");

        // generateur de nouveau password
        $newPASSWORD = "azertyui";

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
        $resultat = $this->connectivité->query("UPDATE connects SET password='".$this->password."'WHERE email='".$this->email."'");

        print_r($resultat);

        }//fin de function resetPassword 

        
        //fonction génération mot de passe
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
            /*
            $to      = 'marsouin2019@gmail.com'; //personne a qui envoye rle nouveau mot de passe
            $subject = 'New password localhost';
            $message = 'Bonjour !, voici votre nouveau mot de passe,' .$passwd.'.'."\r\n";
            $headers = 'From: hostmaster@gmail.com'."\r\n".'Reply-To: noreply@gmail.com' . "\r\n".'X-Mailer: PHP/' . phpversion();
            
            if(mail($to , $subject, $message, $headers))
            {
                return "Le message est envoyé";
            }else{
                return "Le message n'est pas envoyé";
            }
            */
        }
        
        //fonction delete personne
        public function delete_inscrit(int $id)
        {
        //login il faut passer par l'id
        $requete = $this->connectDB->query("DELETE FROM connects WHERE id = '".$id."'");
        }


}

