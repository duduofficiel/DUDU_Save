function validateForm() {
    let isValid = true;

    // Réinitialiser les messages d'erreur
    document.querySelectorAll('.error-message').forEach(message => {
        message.style.display = 'none';
    });

    // Validation de la société
    const societe = document.getElementById('societe').value.trim();
    if (societe === '') {
        document.getElementById('societeError').style.display = 'block';
        isValid = false;
    }

    // Validation de la personne à contacter
    const contact = document.getElementById('contact').value.trim();
    if (contact === '') {
        document.getElementById('contactError').style.display = 'block';
        isValid = false;
    }

    // Validation du code postal
    const codePostal = document.getElementById('codePostal').value.trim();
    if (!/^\d{5}$/.test(codePostal)) {
        document.getElementById('codePostalError').style.display = 'block';
        isValid = false;
    }

    // Validation de la ville
    const ville = document.getElementById('ville').value.trim();
    if (ville === '') {
        document.getElementById('villeError').style.display = 'block';
        isValid = false;
    }

    // Validation de l'email
    const email = document.getElementById('email').value.trim();
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        document.getElementById('emailError').style.display = 'block';
        isValid = false;
    }

    return isValid;
}

function updateTextArea() {
    const selectElement = document.getElementById('envTech');
    const textAreaElement = document.getElementById('envTechText');

    if (selectElement.value && selectElement.value !== '') {
        textAreaElement.value = selectElement.value;
    } else {
        textAreaElement.value = '';
    }
}

function handleManualInput() {
    const textAreaElement = document.getElementById('envTechText');
    const selectElement = document.getElementById('envTech');

    selectElement.value = '';
}

document.getElementById('contactForm').addEventListener('submit', function(event) {
    if (!validateForm()) {
        event.preventDefault(); // Empêche l'envoi du formulaire si des erreurs sont présentes
    }
});