<?php
for ($i = 1; $i <= 150; $i += 2) {
    echo $i . " ";
}
?>

<?php
for ($i = 1; $i <= 500; $i++) {
    echo "Je dois faire des sauvegardes régulières de mes fichiers<br>";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Table de Multiplication</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th></th>
                <?php
                // Affichage des entêtes de colonnes (1 à 9) სვეტების სათაურების ჩვენება (1-დან 9-მდე).
                for ($i = 1; $i <= 9; $i++) {
                    echo "<th>$i</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            // Affichage de chaque ligne pour les valeurs de 1 à 9 ყოველი ხაზის ჩვენება მნიშვნელობებისთვის 1-დან 9-მდე.
            for ($i = 1; $i <= 9; $i++) {
                echo "<tr><th>$i</th>"; // Entête de ligne ხაზის სათაური.
                for ($j = 1; $j <= 9; $j++) {
                    echo "<td>" . ($i * $j) . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
