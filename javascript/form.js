// declaration variable sur element html titre 
//let titre = document.getElementById("titre");
// affiche la propriete de l'element cible
//document.write(titre);

// declaration variable sur les elements html de type paragraphe
//let paragraphes = document.getElementsByTagName("p");

// indiquer index de la collection (tableau) pour afficher la propriete du paragraphe cible
//document.write(paragraphes[1]);

//let info = document.getElementsByClassName("info");
//document.write(info[1]);

//let menu = document.querySelectorAll(".menu");
//document.write(menu[1]);


/* exercices */
/*
  - cible le 2ème paragraphe
  - cible la class bleu
*/


//let paragraphe = document.getElementsByClassName("p");
//document.write(paragraphe[1]);

//let bleu = document.querySelector(".bleu");
//document.write(bleu);

// afficher le contenu d'un element cible

/*
Difference entre la methode javascript var et let
- var declaration de variable de même nom possible
- let impossible de declarer des variable de même nom
*/

// cible une propriete et affiche son contenu
//let Titre = document.getElementById("titre").innerHTML;
//document.write(Titre);

// cible un element par son tag et affiche son contenu
//let P = document.getElementsByTagName("p");
//document.write(P[3].innerHTML);

// cible le menu, la class bleu et afficher son contenu
//let M = document.getElementsByClassName("bleu");
//document.write(M[3]);

//let M = document.getElementsByTagName("ul");
//document.write(M[1].innerHTML);
//console.log(M[1].children[3]);
/*
- cible les listes document.getElementsByTagName("ul") => M
- selection LA liste qui contient element de classe bleu => M[1]
- afficher le contenu de LA liste selectionne M[1].innerHTML
- afficher l'enfant qui contient la class bleu => M[1].children[3].innerHTML
*/
//document.write(M[1].children[3].innerHTML);




// formulaire facture traitement
document.getElementById("submit").addEventListener("click", function(event){
    event.preventDefault();  // empeche le rechargement de la page formulaire

    // quantite 1 definition et calcul
    let q1 = document.getElementById("q1");
    //q1.innerHTML = 10;  // ne s'affiche pas dans input q1
    // div, span, p, li, a, nav, h1-h6, td  // element HTML

    // comment faire pour afficher un contenu dans un input ?
    // input renvoi des valeurs = value
    document.getElementById("q1").value = 10;

    let  q2 = document.getElementById("q2");
    q2.value = 25;

    let q3 = document.getElementById("q3");
    q3.value = 15;

    let q4 = document.getElementById("q4");
    q4.value = 5;

    let q5 = document.getElementById("q5");
    q5.value = 8;

    // prix definition et calcul
    let p1 = document.getElementById("p1");
    p1.value = 2.50;

    let p2 = document.getElementById("p2");
    p2.value = 0.50;

    let p3 = document.getElementById("p3");
    p3.value = 1.25;

    let p4 = document.getElementById("p4");
    p4.value = 36;

    let p5 = document.getElementById("p5");
    p5.value = 250.33;

    // calculer quantite/prix et afficher le total ligne
    /*
        - variable quantite
        - variable prix
        - calcule = quantite *  prix
        - afficher le total
    */
    //calculer(q1, p1);   // fonction avec passage de paramettre

    // tableaux - les quantites et les prix 
    let tabQ = [q1.value,q2.value,q3.value,q4.value,q5.value];
    let tabP = [p1.value, p2.value, p3.value, p4.value, p5.value];

    calculer(tabQ, tabP);


});  // fin fonction anonyme


function calculer(quantites, prix)
{

    let nbrQ = quantites.length;
    let totals = document.getElementsByClassName("total"); // 8
    let subTotal = [];

     // exemple de resultat a atteindre
  /*  subTotal = (quantites[0] * prix[0]) + (quantites[1] * prix[1]);
    totals[5].innerHTML = subTotal; */


    for(let i=0; i < nbrQ; i++)
    {
        //totals[1].innerHTML = quantites[i] * prix[i];
        for(let t =0; t < nbrQ; t++)
        {
            // i et t
            if( i === t)
            {
                totals[t].innerHTML = quantites[i] * prix[i];

                //stocker les résultats de total par ligne
                subTotal.push((quantites[1]*prix[1]));

            }
            
        }        
    }
    // comment faire une addtition des sommes dans notre array
    console.log(subTotal);

    //
    let tax = 0.055;
    totals[6].innerHTML = ((subTotal.reduce(getTotal, 0)) * tax);
    totals[7].innerHTML = ((subTotal.reduce(getTotal, 0)) * tax) + subTotal.reduce(getTotal, 0);

    totals
    
        
    }

}
function roundNumber(number, digits) {
    var multiple = Math.pow(10, digits);
    var rndedNum = Math.round(number * multiple) / multiple;
    return rndedNum;
}
