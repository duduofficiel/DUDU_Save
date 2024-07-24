location.reload();

// Charger une nouvelle page
location.replace("https://www.example.com");

// Afficher des informations sur l'URL
console.log(location.hostname); // "www.example.com"
console.log(location.href);     // "https://www.example.com/path"
console.log(location.pathname); // "/path"
console.log(location.port);     // "80"
console.log(location.protocol); // "https:"
history.back();

// Aller à la page suivante
history.forward();

// Aller à une page spécifique dans l'historique
history.go(-2); // Aller deux pages en arrière
console.log(screen.availHeight); // Hauteur disponible de l'écran
console.log(screen.availWidth);  // Largeur disponible de l'écran
console.log(screen.colorDepth);  // Profondeur de couleur de l'écran
console.log(screen.height);      // Hauteur totale de l'écran
console.log(screen.width);       // Largeur totale de l'écran

console.log(window.document); // Affiche l'objet document
let heading = document.querySelector('h1');
console.log(heading.textContent); // "Bienvenue"

// Modifier le contenu de l'élément <h1>
heading.textContent = "Bienvenue sur notre site";
window.alert("Bienvenue sur notre site!");

// Ouvrir une nouvelle fenêtre
window.open("https://www.example.com");

// Fermer la fenêtre actuelle
window.close();
// Accéder au formulaire par son ID
let form = document.getElementById('inscriptionForm');

// Afficher l'objet formulaire
console.log(form);
// Accéder à l'input "nom" par son ID
let nomInput = document.getElementById('nom');

// Modifier la valeur de l'input "nom"
nomInput.value = "Jean Dupont";

// Accéder à l'input "email" par son ID
let emailInput = document.getElementById('email');

// Modifier la valeur de l'input "email"
emailInput.value = "jean.dupont@example.com";

// Ajouter un événement de soumission au formulaire
form.addEventListener('submit', function(event) {
    event.preventDefault(); // Empêcher l'envoi du formulaire
    console.log('Formulaire soumis!');
    console.log('Nom:', nomInput.value);
    console.log('Email:', emailInput.value);
});
// Modifier la valeur de la zone de texte
nomInput.value = "Jean Dupont";

// Sélectionner le premier bouton radio
option1.checked = true;

// Ajouter un événement de soumission au formulaire
form.addEventListener('submit', function(event) {
    event.preventDefault(); // Empêcher l'envoi du formulaire
    console.log('Formulaire soumis!');
    console.log('Nom:', nomInput.value);
    console.log('Option sélectionnée:', option1.checked ? option1.value : option2.value);
});
