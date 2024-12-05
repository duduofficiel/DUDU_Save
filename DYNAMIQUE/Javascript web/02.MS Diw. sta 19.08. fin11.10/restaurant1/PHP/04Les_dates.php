
<?php 

// 1. Trouver le numéro de semaine pour le 14/07/2019, გამოიყენეთ DateTime ობიექტი, რათა მოიძიოთ კვირის ნომერი 14/07/2019-ისთვის.
$date = new DateTime('2019-07-14');
echo "Le numéro de semaine pour le 14/07/2019 est : " . $date->format("W");
?>


 
<?php

// 2. Combien reste-t-il de jours avant la fin de la formation, რამდენი დღე დარჩა სასწავლო პროცესის დასრულებამდე.
$dateFinFormation = new DateTime('2024-12-31');
$aujourdhui = new DateTime();
$interval = $aujourdhui->diff($dateFinFormation);

echo "Il reste " . $interval->days . " jours avant la fin de la formation.";
?>

<?php

// 3. Déterminer si une année est bissextile, შეაფასეთ, არის თუ არა წელი ბისექსტილური.
function estBissextile($annee) {
    return ($annee % 4 == 0 && $annee % 100 != 0) || ($annee % 400 == 0);
}

$annee = 2024;
echo $annee . " est " . (estBissextile($annee) ? "bissextile" : "non bissextile");
?>


<?php

// 4. Montrer que la date du 32/17/2019 est erronée, მიუთითეთ, რომ თარიღი 32/17/2019 არის შეცდომა.
$dateErronee = DateTime::createFromFormat('d/m/Y', '32/17/2019');
$erreurs = DateTime::getLastErrors();

if ($erreurs['warning_count'] > 0 || $erreurs['error_count'] > 0) {
    echo "La date 32/17/2019 est erronée.";
} else {
    echo "La date est correcte.";
}
?>


<?php

// 5. Afficher l'heure courante sous la forme 11h25, მიმდინარე დროის ჩვენება ფორმატში 11h25.
$heureCourante = new DateTime();
echo "L'heure courante est : " . $heureCourante->format('H\hi');
?>


<?php

//6. Ajouter 1 mois à la date courante, მიმდინარე თარიღზე 1 თვის დამატება.
$dateCourante = new DateTime();
$dateCourante->modify('+1 month');
echo "Dans un mois, nous serons le : " . $dateCourante->format('d/m/Y');
?>


<?php

//7. Que s'est-il passé le 1000200000, რას წარმოადგენდა 1000200000 თარიღზე.
$timestamp = 1000200000;
$date = new DateTime();
$date->setTimestamp($timestamp);

echo "Le timestamp 1000200000 correspond à la date : " . $date->format('d/m/Y H:i:s');
?>


