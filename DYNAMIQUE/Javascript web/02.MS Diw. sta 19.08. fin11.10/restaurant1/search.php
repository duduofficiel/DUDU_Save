<?php
// Réception des données - მონაცემების მიღება.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchQuery = trim($_POST['search_query']); // Nettoyage du texte de recherche - საძიებო ტექსტის გაწმენდა.

    if (!empty($searchQuery)) {

        // Connexion à la base de données - მონაცემთა ბაზის კავშირი.
        $host = 'localhost';
        $dbname = 'your_database_name';
        $username = 'your_username';
        $password = 'your_password';

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            // Extraction des résultats de recherche - ძიების შედეგების ამოღება
            $stmt = $pdo->prepare("SELECT * FROM your_table WHERE column_name LIKE :query");
            $stmt->execute(['query' => '%' . $searchQuery . '%']);
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);


            // Affichage des résultats - შედეგების ჩვენება.
            echo "<!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Search Results</title>
                <link rel='stylesheet' href='styles.css'>
            </head>
            <body>
                <div class='container'>
                    <h1>Search Results</h1>";

            if ($results) {
                echo "<ul>";
                foreach ($results as $result) {
                    echo "<li>" . htmlspecialchars($result['column_name']) . "</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>No results found for '<strong>" . htmlspecialchars($searchQuery) . "</strong>'</p>";
            }

            echo "<a href='index.php'>Go Back</a>
                </div>
            </body>
            </html>";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    } else {
        echo "<p>Please enter a valid search query.</p>";
    }
} else {
    header("Location: index.php"); // Retour en arrière si ouvert directement - უკან დაბრუნება თუ პირდაპირ გახსნა search.php.
    exit;
}
?>
