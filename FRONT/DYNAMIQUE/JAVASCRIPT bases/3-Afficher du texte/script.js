let nom = prompt("Entrez votre nom :");
let prenom = prompt("Entrez votre prénom :");
alert("Informations de l'utilisateur :\nNom : " + nom + "\nPrénom : " + prenom);

let nombre1 = prompt("Entrez le premier nombre :");
let nombre2 = prompt("Entrez le deuxième nombre :");
let produit = Number(nombre1) * Number(nombre2);
alert("Le produit de " + nombre1 + " et " + nombre2 + " est : " + produit);

let celsius = prompt("Entrez la température en degrés Celsius :");
let fahrenheit = (Number(celsius) * 9 / 5) + 32;
alert(celsius + " degrés Celsius est égal à " + fahrenheit + " degrés Fahrenheit.");
