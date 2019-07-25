// Déclaration tableau et initialisation
var joueurs = [];

// déclaration de ma fonction add_joueur
    function add_joueur(){
        // affichez et stokcer les joeurs
        joueurs.push(prompt("Ecrire un nom de joueur en majuscule."))
        // tester variable joueurs
        if(joueurs != null){
            alert(joueurs.length);
            document.getElementById("affiche_joueur").style.textTransform = "uppercase";
            document.getElementById("affiche_joueur").innerHTML= "joueurs";
        } else{
            alert("Vous n'avez pas indiqué de nom");
        }

    } 

    function sort(){
        //tester la longueur de la chaine
        if(joueurs.length>0){
            //declaration d'une variable
            //methode mathématique pour mélanger les données 
            //tirage au sort d'une donnée
            //indication de la longueur de mon tableau joueur comme donnée

            var random = Math.floor(Math.random()*joueurs.length);
        }

    }