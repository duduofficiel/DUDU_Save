<?php
// login_script.php : script de connexion ავტორიზაციის სკრიპტი.
session_start(); // Démarrer la session სესიის დაწყება. 

// Connexion à la base de données მონაცემთა ბაზასთან დაკავშირება.
$servername = "localhost";
$username = "root"; // Remplacez par votre nom d'utilisateur შეიცვალეთ თქვენი მომხმარებლის სახელით.
$password = ""; // Remplacez par votre mot de passe შეიცვალეთ თქვენი პაროლით.
$dbname = "votre_base_de_donnees"; // Remplacez par le nom de votre base de données ჩაანაცვლეთ თქვენი მონაცემთა ბაზის სახელით.

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion შეამოწმეთ კავშირი.
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Vérifier si les données du formulaire ont été envoyées შეამოწმეთ, გამოიგზავნა თუ არა ფორმის მონაცემები.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $mot_de_passe = $_POST['password']; // Changement ici pour correspondre au champ du formulaire შეცვალეთ აქ, რომ მოერგოს ფორმის ველს.

    // Préparer la requête pour récupérer l'utilisateur მოამზადეთ მოთხოვნა მომხმარებლის აღსადგენად.
    $stmt = $conn->prepare("SELECT mot_de_passe FROM user WHERE email = ?");
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $stmt->bind_result($mot_de_passe_hache);
    $stmt->fetch();

    // Vérifier si le mot de passe est correct შეამოწმეთ, არის თუ არა პაროლი სწორი.
    if ($mot_de_passe_hache && password_verify($mot_de_passe, $mot_de_passe_hache)) {
        $_SESSION['auth'] = 'ok'; // Initialiser la variable de session სესიის ცვლადების ინიცირება.
        header('Location: protected_page.php'); // Rediriger vers une page protégée გადამისამართება დაცულ გვერდზე.
        exit();
    } else {
        unset($_SESSION['auth']); // Détruire la variable de session სესიის ცვლადის წაშლა.
        echo "Identifiant ou mot de passe incorrect.";
    }

    $stmt->close();
} else {
    header('Location: login_form.php'); // Redirection vers le formulaire si la méthode n'est pas POST გადამისამართება ფორმაზე, თუ მეთოდი არ არის POST.
    exit();
}

$conn->close();
?>

<!-- register_form.php : formulaire d'inscription რეგისტრაციის ფორმა. -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire d'inscription</title>
</head>
<body>
    <h2>Inscription</h2>
    <form action="register_script.php" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <br><br>
        
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <br><br>
        
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        
        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" id="mot_de_passe" name="mot_de_passe" required>
        <br><br>
        
        <input type="submit" value="S'inscrire">
    </form>
</body>
</html>


<?php
// protected_page.php : page protégée დაცული გვერდი.
session_start(); // Démarrer la session სესიის დაწყება.

// Vérifier si l'utilisateur est authentifié შეამოწმეთ, არის თუ არა მომხმარებელი ავთენტიფიცირებული.
if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== 'ok') {
    header('Location: login_form.php'); // Rediriger vers la page de connexion გადაიყვანეთ შესვლის გვერდზე.
    exit();
}

// Contenu de la page protégée დაცული გვერდის შინაარსი.
echo "<h1>Bienvenue dans la page protégée !</h1>";
echo "<p>Vous êtes connecté.</p>";
?>

<?php
// register_script.php : script d'inscription რეგისტრაციის სკრიპტი.
$servername = "localhost";
$username = "root"; // Remplacez par votre nom d'utilisateur ჩაანაცვლეთ თქვენი მომხმარებლის სახელით.
$password = ""; // Remplacez par votre mot de passe ჩაანაცვლეთ თქვენი პაროლით.
$dbname = "votre_base_de_donnees"; // Remplacez par le nom de votre base de données ჩაანაცვლეთ თქვენი მონაცემთა ბაზის სახელით.

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion შეამოწმეთ კავშირი.
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Vérifier si les données du formulaire ont été envoyées შეამოწმეთ, გამოიგზავნა თუ არა ფორმის მონაცემები.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    // Validation des données მონაცემების ვალიდაცია.
    if (empty($nom) || empty($prenom) || empty($email) || empty($mot_de_passe)) {
        die("Veuillez remplir tous les champs.");
    }

    // Hacher le mot de passe პაროლის ჰეშირება.
    $mot_de_passe_hache = password_hash($mot_de_passe, PASSWORD_DEFAULT);

    // Insérer les données dans la table user მონაცემების ჩასმა user მაგიდაში.
    $stmt = $conn->prepare("INSERT INTO user (nom, prenom, email, mot_de_passe) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nom, $prenom, $email, $mot_de_passe_hache);

    if ($stmt->execute()) {
        echo "Inscription réussie !";
    } else {
        echo "Erreur : " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    mot_de_passe VARCHAR(255) NOT NULL
);
