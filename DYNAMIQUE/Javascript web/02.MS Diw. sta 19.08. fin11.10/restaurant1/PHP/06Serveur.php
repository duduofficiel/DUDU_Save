<!-- 1: Modification du formulaire en JavaScript ფორმის შეცვლა JavaScript-ით -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Formulaire</title>
</head>
<body>
    <form action="traitement.php" method="POST">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des valeurs transmises გადაცემული მნიშვნელობების მიღება.
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);

    // Affichage des valeurs მნიშვნელობების გამოჩენა.
    echo "<h1>Valeurs reçues</h1>";
    echo "<p><strong>Nom:</strong> $nom</p>";
    echo "<p><strong>Email:</strong> $email</p>";
} else {
    echo "Aucune donnée reçue.";
}
?>
