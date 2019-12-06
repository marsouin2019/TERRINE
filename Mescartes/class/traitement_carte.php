<?php

class traitement_carte
{
    // variables
    public $nom;
    public $prenom;
    public $categorie;
    public $enseigne;





    // methodes
    public function __construct()
    {
        // initialisation de la connexion internet
       //$this->connectDB = $myconnexion;

    }


    public function add_carte(array $data, array $file)
    {
        //
        //print_r($data);

        

        // test extension
          $ext = $file["carte"]["type"];
          $tmpFile = $file["carte"]["tmp_name"];

        if($ext == "image/png")
        {
            //print_r($file["carte"]);

            // traitement image size
            $size = getimagesize($tmpFile);

            $width = $size[0];
            $height = $size[1];

            // changer image size

            // cree nouvelle image depuis fichier telecharge
            //var_dump(gd_info());
            $img = imagecreatefrompng($tmpFile);

            

            // cree une image nouvelle taille
            $img_nw_size = imagecreatetruecolor(200, 200);

            // copie image avec nouvelle taille
            $img_cp = imagecopyresized($img_nw_size, $img, 0,0,0,0,200, 200, $width, $height);

            if($img_cp == true)
            {
                // test affichage image et sauvegarde new image
                $url = $_SERVER["DOCUMENT_ROOT"]."/Mescartes/save_cartes/";

               /* header('Content-Type: image/png');*/
                imagepng($img_nw_size, $url."carte.png"); 

                // crypter base 64 nouvelle image

                 //data:image/png;base64,xxxxxx;


            } else {
                // erreur traitement image
                echo "big problème !!!";
            }







            
        } elseif($ext == "image/jpg"){
            
        } else {
            // erreur
        }


    }

    public function update_carte()
    {

    }


    public function all_carte()
    {

    }


    public function delete_carte()
    {

    }
    




}
 