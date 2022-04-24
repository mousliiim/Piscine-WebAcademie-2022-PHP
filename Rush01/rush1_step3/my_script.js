//Prendre le formulaire par son id et au moment du submit faire la fonction
document.getElementById("formulaire").addEventListener("submit", function(e){
//Initialisation de variable
    var erreur;
    var radio;
    var checkbox;
    var checkboxstyle = document.getElementsByName("hobbies");
    var civilite = document.getElementById("civilite");
    var nom = document.getElementById("focusnom");
    var email = document.getElementById("focusemail");
    var tel = document.getElementById("telfocus");
    var website = document.getElementById("focuswebsite");
    var datenaissance = document.getElementById("focusbirthday");
    var inputs = document.getElementById("formulaire").getElementsByTagName("input");
//à la place de mettre "document.getElementById("formulaire")" juste au dessus, j'aurai pu mettre : this. (dans la variable inputs juste au dessus).

//Radio : Sexe
    if(document.getElementById("homme").checked){
        radio = "";
    }
    else if(document.getElementById("femme").checked){
        radio = "";
    }
    else if(document.getElementById("autre").checked){
        radio = "";
    }
    else{
        radio = "Sexe ";
        erreur = true;
    }
//Checkbox : Hobbies
    if(document.getElementById("jxvideo").checked) {
        checkbox = "";
    }
    else if(document.getElementById("cinema").checked) {
        checkbox = "";
    }
    else if(document.getElementById("lecture").checked) {
        checkbox = "";
    }
    else if(document.getElementById("sport").checked) {
        checkbox = "";
    }
    else if(document.getElementById("informatique").checked) {
        checkbox = "";
    }
    else {
        checkbox = "Hobbies ";
        erreur = true;
    }
//Date de naissance : Si il n'y a pas de valeur entrée dedans alors mettre le fond en rouge et mettre du texte dans la variable : datenaissance. Sinon pas de background ( ou le retirer si il a été mis ) et mettre du texte nul dans la variable.
    if (!datenaissance.value) {
        datenaissance.style.backgroundColor = "hsla(0, 44%, 51%, 0.20)";
        datenaissance = "Date de naissance ";
    } else {
        datenaissance.style.background="none";
        datenaissance="";
    }
//Website : même fonctionnement que pour les dates de naissance.
    if (!website.value) {
        website.style.backgroundColor = "hsla(0, 44%, 51%, 0.20)";
        website = "Website ";
    } else {
        website.style.background="none";
        website="";
    }
//Tel : idem.
    if (!tel.value) {
        tel.style.backgroundColor="hsla(0, 44%, 51%, 0.20)";
        tel="Téléphone ";
    } else {
        tel.style.background="none";
        tel="";
    }
//Email : idem.
    if (!email.value) {
        email.style.backgroundColor="hsla(0, 44%, 51%, 0.20)";
        email="Email ";
    } else {
        email.style.background="none";
        email="";
    }
//Civilité : idem sauf qu'on va ici mettre assigné le booléen "true" à erreur car le for en bas ne prend pas en compte les champs de type : Select.
    if (!civilite.value){
        civilite.style.backgroundColor="hsla(0, 44%, 51%, 0.20)";
        civilite="Civilité ";
        erreur = true;
    } else {
        civilite.style.background="none";
        civilite="";
    }
//Nom : idem.
    if (!nom.value) {
        nom.style.backgroundColor="hsla(0, 44%, 51%, 0.20)";
        nom ="Nom ";
    } else {
        nom.style.background="none";
        nom="";
    }
// boucle for qui va parcourir les inputs 1 à 1 et vérifier si il y a un champ vide. Si il détecte un champ vide alors assigné le booléen "true" à erreur. Le [i] c'est parce que les inputs fonctionnent comme des tableaux.
    for(var i = 0; i < inputs.length; i++) {
        if (!inputs[i].value) {
            erreur = true;
        }
    }
//Permet juste de ne pas actualiser la page à chaque fois qu'on clique sur "Validation".
    e.preventDefault();
//Si erreur == True ( si il y a une erreur donc ), alors on va assigner à erreur du texte et donc tout les endroits où le champ est vide. D'où le texte entré à chaque if si le champ est vide. Et par conséquent si le champ n'est pas vide comme la variable ne retourne rien elle ne sera pas afficher ici.
    if (erreur) {
        erreur ="Veuillez renseigner le(s) champ(s) suivant(s) : " + radio + civilite + nom + email + tel + website + datenaissance + checkbox;
//Ici on va sélectionner le paragraphe vide dans le html qui a pour id "erreur", innerHTML signifie qu'on va entrer dans la balise en question et on va mettre le message juste au dessus ( erreur donc ).
        document.getElementById("erreur").innerHTML = erreur;
    }
//Et donc si il n'y a pas d'erreur on fait une alert comme quoi le formulaire a bien été envoyé. ( :kappa ).
    else{
        alert("formulaire envoyé !");
    }
})