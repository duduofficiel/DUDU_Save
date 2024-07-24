// Déclaration des variables
let a = "100";    // Chaîne de caractères "100"
let b = 100;      // Nombre entier 100
let c = 1.00;     // Nombre décimal 1.00
let d = true;     // Valeur booléenne vrai

// Afficher "Ceci est une chaîne de caractères : 100"
console.log("Ceci est une chaîne de caractères : " + a);

// Appliquer l'opérateur de décrémentation à b
b--;

// Ajouter à c la valeur de a (convertie en nombre)
c += Number(a);

// Inverser la valeur de d
d = !d;

// Affichage des résultats
console.log("b après décrémentation : " + b); // Affiche 99
console.log("c après ajout de la valeur de a : " + c); // Affiche 101
console.log("Valeur de d inversée : " + d); // Affiche false
