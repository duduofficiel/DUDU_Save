<?php
function genererLien($url, $titre) {
    return "<a href=\"$url\">$titre</a>";
}

// Exemple d'appel გამოძახების მაგალითი.
echo genererLien("https://www.example.com", "Visitez notre site");
?>

<?php
function sommeTableau($tableau) {
    return array_sum($tableau);
}

// Exemple d'appel გამოძახების მაგალითი.
$valeurs = [10, 20, 30, 40];
echo "La somme du tableau est : " . sommeTableau($valeurs);
?>

<?php
function verifierComplexiteMotDePasse($motDePasse) {
    // Vérifier la longueur minimale de 8 caractères მინიმალური სიგრძის 8 სიმბოლოს შემოწმება.
    if (strlen($motDePasse) < 8) {
        return false;
    }
    // Vérifier qu'il contient au moins un chiffre შეამოწმეთ, რომ შეიცავს მინიმუმ ერთ ციფრს.
    if (!preg_match('/\d/', $motDePasse)) {
        return false;
    }
    // Vérifier qu'il contient au moins une majuscule et une minuscule შეამოწმეთ, რომ შეიცავს მინიმუმ ერთ დიდი და ერთ პატარა ასოს.
    if (!preg_match('/[A-Z]/', $motDePasse) || !preg_match('/[a-z]/', $motDePasse)) {
        return false;
    }
    return true;
}

// Exemple d'appel გამოსახვის მაგალითი.
$motDePasse = "oqsdfvkmjh<vuh<145ixcAETHEEhviuhximvux<fv****";
if (verifierComplexiteMotDePasse($motDePasse)) {
    echo "Le mot de passe est complexe.";
} else {
    echo "Le mot de passe ne respecte pas les critères de complexité.";
}
?>
