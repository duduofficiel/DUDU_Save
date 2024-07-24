
// Fonction de validation d'adresse e-mail
function validateEmail(email) {
    const regex = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/i;
    return regex.test(email);
}

// Gestionnaire d'événement pour le formulaire
document.getElementById('emailForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Empêche l'envoi du formulaire

    const emailInput = document.getElementById('email');
    const message = document.getElementById('message');

    if (validateEmail(emailInput.value)) {
        message.textContent = 'Adresse e-mail valide !';
        message.className = 'success';
    } else {
        message.textContent = 'Adresse e-mail invalide !';
        message.className = 'error';
    }

    message.classList.remove('hidden');
});