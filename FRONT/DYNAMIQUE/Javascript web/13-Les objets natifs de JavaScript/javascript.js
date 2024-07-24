function saisieEtCalcul() {
    let valeurs = [];
    let valeur;
    
    // Boucle pour saisir les valeurs jusqu'à ce que l'utilisateur entre 0
    do {
        valeur = prompt("Entrez une valeur numérique (0 pour arrêter) :");
        valeur = parseFloat(valeur); // Convertir en nombre flottant
        
        // Vérifier si la valeur est un nombre et n'est pas 0
        if (!isNaN(valeur) && valeur !== 0) {
            valeurs.push(valeur);
        }
    } while (valeur !== 0); // Sortir de la boucle quand la valeur est 0
    
    // Calculer le nombre de valeurs saisies
    let nombreValeurs = valeurs.length;
    
    // Calculer la somme des valeurs saisies
    let somme = 0;
    for (let i = 0; i < valeurs.length; i++) {
        somme += valeurs[i];
    }
    
    // Calculer la moyenne des valeurs saisies
    let moyenne = somme / nombreValeurs;
    
    // Afficher les résultats
    alert("Nombre de valeurs saisies : " + nombreValeurs +
          "\nSomme des valeurs : " + somme +
          "\nMoyenne des valeurs : " + moyenne);
}

// Appeler la fonction pour démarrer le programme
saisieEtCalcul();
