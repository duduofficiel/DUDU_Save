
let N = parseInt(prompt("Entrez un nombre entier N :"));

// Afficher les entiers inférieurs à N
console.log(`Les entiers inférieurs à ${N} :`);
for (let i = 1; i < N; i++) {
    console.log(i);
}
let sum = 0;
let count = 0;
let average = 0;

// Boucle de saisie des entiers et calcul de la somme et de la moyenne
while (true) {
    let num = parseInt(prompt("Entrez un entier (0 pour terminer) :"));
    if (num === 0) {
        break;
    }
    sum += num;
    count++;
}
// Calcul de la moyenne
if (count > 0) {
    average = sum / count;
}
console.log(`Somme des entiers saisis : ${sum}`);
console.log(`Moyenne des entiers saisis : ${average}`);

let N = parseInt(prompt("Entrez le nombre de multiples N :"));
let X = parseInt(prompt("Entrez le nombre entier X dont vous voulez les multiples :"));

// Afficher les N premiers multiples de X
console.log(`Les ${N} premiers multiples de ${X} :`);
for (let i = 1; i <= N; i++) {
    console.log(X * i);
}
let mot = prompt("Entrez un mot pour compter les voyelles :");

// Fonction pour vérifier si un caractère est une voyelle
function estVoyelle(char) {
    return 'aeiouAEIOU'.indexOf(char) !== -1; // Retourne true si le caractère est une voyelle
}

// Initialisation du compteur de voyelles
let nombreVoyelles = 0;

// Parcourir chaque caractère du mot
for (let i = 0; i < mot.length; i++) {
    let char = mot.charAt(i);
    if (estVoyelle(char)) {
        nombreVoyelles++;
    }
}

// Affichage du résultat
console.log(`Le mot "${mot}" contient ${nombreVoyelles} voyelle(s).`);