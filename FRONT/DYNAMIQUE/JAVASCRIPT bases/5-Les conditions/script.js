
let nombre = parseInt(prompt("Entrez un nombre pour vérifier s'il est pair ou impair :"));

// Vérifier si le nombre est pair ou impair
if (nombre % 2 === 0) {
    console.log(`${nombre} est un nombre pair.`);
} else {
    console.log(`${nombre} est un nombre impair.`);
}
let anneeNaissance = parseInt(prompt("Entrez votre année de naissance :"));

// Calculer l'année actuelle
let anneeActuelle = new Date().getFullYear();

// Calculer l'âge de l'utilisateur
let age = anneeActuelle - anneeNaissance;

// Déterminer si l'utilisateur est majeur ou mineur
let statut = (age >= 18) ? "majeur" : "mineur";

// Afficher l'âge et le statut de l'utilisateur
console.log(`Vous avez ${age} ans.`);
console.log(`Vous êtes ${statut}.`);
let nombre1 = parseInt(prompt("Entrez le premier nombre entier :"));
let nombre2 = parseInt(prompt("Entrez le deuxième nombre entier :"));

// Demander à l'utilisateur de saisir un opérateur (+, -, * ou /)
let operateur = prompt("Entrez l'opérateur (+, -, * ou /) :");

// Vérifier si l'opérateur est valide et effectuer l'opération correspondante
let resultat;

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
        // Vérifier si on divise par zéro
        if (nombre2 === 0) {
            console.log("Erreur : Division par zéro.");
        } else {
            resultat = nombre1 / nombre2;
        }
        break;
    default:
        console.log("Erreur : Opérateur invalide.");
}

// Afficher le résultat si tout s'est bien passé
if (resultat !== undefined) {
    console.log(`Résultat : ${nombre1} ${operateur} ${nombre2} = ${resultat}`);
}
