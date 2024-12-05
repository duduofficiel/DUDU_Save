<?php
// Lire le fichier et récupérer son contenu sous forme de tableau, ფაილის კითხვა და მისი შინაარსის მიღება როგორც მასივის ფორმატში.
$sites = file('sites.txt');

// Démarrer la sortie HTML ის გამოყოფის დაწყება
echo "<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Liste de Sites</title>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
</head>
<body>
    <div class='container'>
        <h1>Liste de Sites Indispensables</h1>
        <ul class='list-group'>";

// Construire la liste de liens, ბმულების სიების მშენებლობა.
foreach ($sites as $site) {

    // Nettoyer chaque ligne pour éviter les espaces inutiles, ყოველ ხაზს წმენდთ ზედმეტი სივრცეების თავიდან ასაცილებლად.
    $url = trim($site);
    echo "<li class='list-group-item'><a href='$url' target='_blank'>$url</a></li>";
}

echo "        </ul>
    </div>
</body>
</html>";
?>

<?php
// Récupérer le contenu du fichier CSV, ფაილის CSV შინაარსის მიღება.
$csvContent = file('https://ncode.amorce.org/customers.csv');

// Démarrer la sortie HTML ის გამოშვების დაწყება.
echo "<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Liste des Utilisateurs</title>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
</head>
<body>
    <div class='container'>
        <h1>Liste des Nouveaux Utilisateurs</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>City</th>
                    <th>State</th>
                </tr>
            </thead>
            <tbody>";

// Parcourir chaque ligne du fichier CSV, ფაილის CSV ყოველი ხაზის გავლის პროცესი.
foreach ($csvContent as $line) {

    // Découper chaque ligne en utilisant explode(), ყოველი ხაზის გაწყვეტა explode() ფუნქციის გამოყენებით.
    $userData = explode(',', trim($line));
    echo "<tr>";
    foreach ($userData as $data) {
        echo "<td>" . htmlspecialchars($data) . "</td>";
    }
    echo "</tr>";
}

echo "            </tbody>
        </table>
    </div>
</body>
</html>";
?>

