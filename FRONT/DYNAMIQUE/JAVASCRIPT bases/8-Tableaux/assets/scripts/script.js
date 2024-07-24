
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
alert("Contenu du tableau : ");
alert(tableau);