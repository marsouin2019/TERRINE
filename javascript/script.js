/*var marsouins= [
    "VERROUX","RENAY","VITULIN","TERRINE","ROBINEL","MAXIMIN","MARIE-LUCE","RENARD","NEY","THOME"
];
console.log(marsouins);
console.log(marsouins[4]);
console.log(marsouins.length);

var nbr= marsouins.length;
var copie = [];
var addNewMarsouin = marsouins.push("POPOTTE");
//document.write(marsouins);
var deleteLastMarsouin = marsouins.pop();
//document.write(marsouins);
var deleteFirstMarsouin = marsouins.shift();
//document.write(marsouins);

var question = prompt("Est ce que vous avez compris le cours ?");

if(question != null){
    document.getElementById("reponse").innerHTML = question;
}
*/

/*for(var i = 0; i < nbr; i++) {
    copie.push(marsouins[i]);

    console.log(copie);
}

var last = marsouins[marsouins.length - 1];
document.write(last);

marsouins.forEach(function(item,index,array){
    console.log(item,index);
    document.write(item,index);
});*/ 
/*
var question = prompt("comment je m'apelle?")
if(question !=null){
    document.getElementById("reponse").innerHTML =question;
}*/

var genre = prompt("Etes vous un homme ou une femme?");
if(genre != null){
    
    alert("genre");
}
else {
    alert("vous n'avez pas répondu");
}
