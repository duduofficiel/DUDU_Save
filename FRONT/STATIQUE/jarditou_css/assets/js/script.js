



//Exercices 2
var num = 1;
var prenom = "Jean";

alert(num);
  alert(prenom);
      let age = 30;
          let pi = 3.14159;
             // Chaîne de caractères
          let message = "Bonjour, monde!";
       let ville = 'Paris';
// Booléen
     let estVrai = true;
        let estFaux = false;
           // Objet (Array)
            let tableau = [1, 2, 3, 4];
               // null (pas de valeur)
             let valeurNulle = null;
                // undefined (variable non initialisée)
                    let variableNonDefinie;

                          console.log(typeof age);     // "number"
                     console.log(typeof message); // "string"
                console.log(typeof estVrai); // "boolean"
           console.log(typeof tableau); // "object"
       console.log(typeof valeurNulle);   // "object" (attention : typeof null renvoie "object" par erreur historique)
   console.log(typeof variableNonDefinie); // "undefined"
console.log(typeof age);
      console.log(typeof message);
         console.log(typeof estVrai);
            console.log(typeof tableau);
               console.log(typeof valeurNulle);
                  console.log(typeof variableNonDefinie);




//Exercices 3

let nom = prompt("Veuillez entrer votre nom :");
    prenom = prompt("Veuillez entrer votre prénom :");
       alert("Informations de l'utilisateur :\nNom : " + nom + "\nPrénom : " + prenom); 
          function calculerProduit() {
              let nombre1 = prompt("Veuillez entrer le premier nombre :");
            let nombre2 = prompt("Veuillez entrer le deuxième nombre :");
          // Convert        oduit = num1 * num2;
     // Afficher le résultat
    alert("Le produit de " + num1 + " et " + num2 + " est : " + produit);
}
window.onload = calculerProduit;
function convertirCelsiusEnFahrenheit() {
    let celsius = prompt("Veuillez entrer la température en degrés Celsius :");

    // Convertir l'entrée en nombre
    let celsiusNum = parseFloat(celsius);

    // Calculer la température en Fahrenheit
    let fahrenheit = (celsiusNum * 9 / 5) + 32;

    // Afficher le résultat
    alert(celsiusNum + " degrés Celsius est égal à " + fahrenheit + " degrés Fahrenheit");
}

window.onload = convertirCelsiusEnFahrenheit;
function convertirCelsiusEnFahrenheit() 
{
    let celsius = prompt("Veuillez entrer la température en degrés Celsius :");

       // Convertir l'entrée en nombre
          let celsiusNum = parseFloat(celsius);
             // Vérifier si l'entrée est un nombre valide
                if (isNaN(celsiusNum)) {
                   alert("Veuillez entrer un nombre valide.");
                      return;
    }
    // Calculer la température en Fahrenheit
         let fahrenheit = (celsiusNum * 9 / 5) + 32;
           // Afficher le résultat
              alert(celsiusNum + " degrés Celsius est égal à " + fahrenheit + " degrés Fahrenheit");
}
window.onload = convertirCelsiusEnFahrenheit;



//Exercices 4  
a = "qui contient la chaîne de caractères 100";
a = "qui contient la chaîne de caractères 100";
b = 100;
a = "qui contient la chaîne de caractères 100";
b = 100;
c = 1.00;
a = "qui contient la chaîne de caractères 100";
b = 100;
c = 1.00;
d = true;
a = "100";
message = "Ceci est une chaîne de caractères : " + a;
       console.log(message);
          //Ceci est une chaîne de caractères : 100
             b = 100;
                b--; // Opérateur de décrémentation
                  console.log(b); // Affiche : 99
                   a = "100";
                      c = 1.00;
                        // Conversion de la variable a en nombre
                    let valeurA = parseFloat(a);
                // Addition de la valeur de a à c
             c = c + valeurA;
         console.log(c); // Affiche : 101
       let d = true;
     d = !d; // Inversion de la valeur de d
console.log(d); // Affiche : false 





//Exercices 5


// Demander à l'utilisateur de saisir un nombre
   let nombre = prompt("Entrez un nombre :");
     // Convertir la saisie en nombre entier
       nombre = parseInt(nombre);
         // Vérifier si le nombre est pair en utilisant l'opérateur modulo %
            if (nombre % 2 === 0) {
               console.log("Le nombre est pair.");
          } else {
     console.log("Le nombre est impair.");
}

// Demander à l'utilisateur de saisir son année de naissance
   let anneeNaissance = prompt("Entrez votre année de naissance :");
     // Convertir la saisie en nombre entier
       anneeNaissance = parseInt(anneeNaissance);
         // Obtenir l'année actuelle
let anneeActuelle = new Date().getFullYear();

// Calculer l'âge de l'utilisateur
 age = anneeActuelle - anneeNaissance;

// Afficher l'âge de l'utilisateur
console.log("Vous avez " + age + " ans.");

// Déterminer si l'utilisateur est majeur ou mineur
if (age >= 18) {
    console.log("Vous êtes majeur.");
} else {
    console.log("Vous êtes mineur.");
}
// Demander à l'utilisateur de saisir les deux nombres
let nombre1 = prompt("Entrez le premier nombre entier :");
let nombre2 = prompt("Entrez le deuxième nombre entier :");

// Convertir les saisies en nombres entiers
nombre1 = parseInt(nombre1);
nombre2 = parseInt(nombre2);

// Demander à l'utilisateur de saisir l'opérateur
let operateur = prompt("Entrez l'opérateur (+, -, * ou /) :");

// Vérifier si l'opérateur est valide et effectuer l'opération correspondante
resultat;
switch (operateur) {
    case '+':
        resultat = nombre1 + nombre2;
        break;
    case '-':
        resultat = nombre1 - nombre2;
        break;
    case '*':
        resultat = nombre1 * nombre2;
        break;
    case '/':
        if (nombre2 === 0) {
            console.log("Erreur : Division par zéro !");
        } else {
            resultat = nombre1 / nombre2;
        }
        break;
    default:
        console.log("Erreur : Opérateur invalide !");
        break;
}

// Afficher le résultat si aucun message d'erreur n'a été affiché
if (resultat !== undefined) {
    console.log("Le résultat de l'opération est : " + resultat);
}


//exercise 6


// Tableau pour stocker les prénoms saisis
let prenoms = [];

// Sélectionner le formulaire et le champ de saisie
const form = document.getElementById('prenomForm');
const prenomInput = document.getElementById('prenomInput');

// Écouter l'événement de soumission du formulaire
form.addEventListener('submit', function (event) {
    event.preventDefault(); // Empêcher le rechargement de la page

    // Récupérer la valeur saisie dans le champ de prénom
    let prenom = prenomInput.value.trim();

    // Vérifier si le champ n'est pas vide
    if (prenom !== '') {
        // Ajouter le prénom à la liste
        prenoms.push(prenom);

        // Vider le champ de saisie pour permettre une nouvelle saisie
        prenomInput.value = '';

        // Afficher les prénoms saisis dans la console
        console.log("Prénoms saisis :", prenoms);
    } else {
        // Si le champ est vide, arrêter la saisie et afficher le résultat final
        console.log("Nombre total de prénoms :", prenoms.length);
        console.log("Liste des prénoms saisis :", prenoms);
    }
});
let N = prompt("Entrez un nombre entier N :");

// Convertir la saisie en nombre entier
N = parseInt(N);

// Vérifier si N est un nombre valide
if (isNaN(N)) {
    console.log("Veuillez entrer un nombre valide.");
} else {
    console.log("Nombres inférieurs à", N, ":");

    // Afficher les nombres inférieurs à N
    for (let i = 0; i < N; i++) {
        console.log(i);
    }
}
let somme = 0;
let nombreEntiers = 0;
let entier;

// Boucle de saisie des entiers
do {
    // Demander à l'utilisateur de saisir un entier
    entier = parseInt(prompt("Entrez un entier (0 pour terminer la saisie) :"));

    // Vérifier si l'entier saisi est différent de 0
    if (entier !== 0) {
        somme += entier; // Ajouter l'entier à la somme
        nombreEntiers++; // Augmenter le compteur d'entiers saisis
    }
} while (entier !== 0);

// Calculer la moyenne si des entiers ont été saisis
let moyenne = (nombreEntiers > 0) ? somme / nombreEntiers : 0;

// Afficher la somme et la moyenne
          console.log("Somme des entiers saisis :", somme);
                 console.log("Moyenne des entiers saisis :", moyenne);
                        N = parseInt(prompt("Entrez le nombre N (nombre de multiples à afficher) :"));
                            let X = parseInt(prompt("Entrez le nombre X (pour lequel trouver les multiples) :"));
// Vérifier si N et X sont des nombres valides
                                if (isNaN(N) || isNaN(X)) {
                                   console.log("Veuillez entrer des nombres valides.");
}                                     else {
                                           console.log(`Les ${N} premiers multiples de ${X} :`);
    // Boucle pour calculer et afficher les N premiers multiples de X
    for (let i = 1; i <= N; i++) {
        let multiple = X * i;
        console.log(`${X} * ${i} = ${multiple}`);
    }
}
let mot = prompt("Entrez un mot :");

// Convertir le mot en minuscules pour faciliter la comparaison
mot = mot.toLowerCase();

// Définir les voyelles (accents inclus pour la langue française)
const voyelles = ['a', 'e', 'é', 'è', 'ê', 'i', 'î', 'o', 'ô', 'u', 'û', 'y'];

// Initialiser un compteur pour les voyelles
let nombreVoyelles = 0;

// Parcourir chaque caractère du mot
        for (let i = 0; i < mot.length; i++) {
                // Vérifier si le caractère courant est une voyelle
                   if (voyelles.includes(mot[i])) {
                 nombreVoyelles++;
    }
}

// Afficher le nombre de voyelles dans le mot
console.log(`Le mot "${mot}" contient ${nombreVoyelles} voyelle(s).`);
     str = "Hello, world!";
        let sub1 = str.substring(1, 4); // Extrait les caractères de la position 1 à la position 4 (non inclus), donc "ell"
            let sub2 = str.substring(7);   // Extrait à partir de la position 7 jusqu'à la fin de la chaîne, donc "world!"
                 let myVar = "Exemple de sous-chaîne";
                     let sousChaine = myVar.substring(8, 11); // Extrait la sous-chaîne à partir de la position 8 jusqu'à la position 11 (non inclus)
                          console.log(sousChaine); // Affiche "de "
                               let str = "Bonjour tout le monde";
                                       let index1 = str.indexOf("jour"); // Retourne 3 (la chaîne "jour" commence à l'index 3 dans "Bonjour tout le monde")
                                let index2 = str.indexOf("au revoir"); // Retourne -1 (la chaîne "au revoir" n'est pas présente dans "Bonjour tout le monde")
                          myVar = "Hello, World!";
                   let index = myVar.indexOf("World"); // Cherche la première occurrence de "World" dans myVar
            console.log(index); // Affiche 7 (car "World" commence à l'index 7 dans "Hello, World!")


//exercise 7

function produit(x, y) {
    return x * y; // Retourne le produit de x et y
}

// Exemples d'utilisation
     console.log(produit(3, 4)); // Affiche 12 (car 3 * 4 = 12)
           console.log(produit(-2, 5)); // Affiche -10 (car -2 * 5 = -10)
                console.log(produit(0, 10)); // Affiche 0 (car 0 * 10 = 0)
                   function afficheImg(image) {
       // Créer un nouvel élément img
            let imgElement = document.createElement('img');

    // Définir l'attribut src avec le chemin de l'image
    imgElement.src = image;

    // Ajouter l'élément img au corps (ou à un autre élément existant dans le DOM)
    document.body.appendChild(imgElement); // Ajoutez à <body> ou à un autre élément parent
}
let cheminImage = "chemin/vers/votre/image.jpg";
    afficheImg(cheminImage);
        function strtok(str1, str2, n) {
            // Diviser str1 en une liste de mots en utilisant str2 comme séparateur
                 let words = str1.split(str2);

    // Vérifier si n est valide (entre 1 et la longueur de la liste des mots)
    if (n > 0 && n <= words.length) {
        return words[n - 1]; // Retourner le nième mot (les indices des listes commencent à 0)
    } else {
        return ""; // Retourner une chaîne vide si n est hors des limites
    }
}

// Exemple d'utilisation
let str1 = "robert;dupont;amiens;80000";
   let str2 = ";";
      let n = 3;
         console.log(strtok(str1, str2, n)); // "amiens"
                console.log(strtok("robert;dupont;amiens;80000", ";", 3)); // "amiens"
                       console.log(strtok("apple,banana,cherry,date", ",", 2)); // "banana"
                              console.log(strtok("one:two:three:four", ":", 4)); // "four"
                       console.log(strtok("one:two:three:four", ":", 5)); // ""
                console.log(strtok("singleword", ":", 1)); // "singleword"
        console.log(strtok("singleword", ":", 2)); // ""




//exercise 8

// Demander à l'utilisateur la taille du tableau
var taille = parseInt(prompt("Entrez la taille du tableau :"));

// Créer un tableau vide de la taille saisie
 tableau = [];

// Demander à l'utilisateur de remplir le tableau avec des valeurs
for (var i = 0; i < taille; i++) {
    var valeur = prompt("Entrez la valeur pour l'élément numéro " + (i + 1) + " :");
    tableau.push(valeur); // Ajouter la valeur saisie à la fin du tableau
}

// Afficher le contenu du tableau
console.log("Contenu du tableau : ", tableau);
//Contenu du tableau: ["10", "20", "30", "40"]
