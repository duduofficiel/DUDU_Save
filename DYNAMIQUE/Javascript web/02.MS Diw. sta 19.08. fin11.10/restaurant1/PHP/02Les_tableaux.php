<?php
// Initialiser le tableau associatif des mois avec leurs nombres de jours dans une année non bissextile  
// ინიციალიზება ასოციატიური მასივისა თვეების მიხედვით,მათი დღის რაოდენობით არაკეთილმოსურნე წელში.
$mois = [
    'Janvier' => 31,
    'Février' => 28,
    'Mars' => 31,
    'Avril' => 30,
    'Mai' => 31,
    'Juin' => 30,
    'Juillet' => 31,
    'Août' => 31,
    'Septembre' => 30,
    'Octobre' => 31,
    'Novembre' => 30,
    'Décembre' => 31
];

// Fonction pour afficher le tableau dans un tableau HTML ფუნქცია მასივის გამოსატანად HTML-ის ცხრილში.
function afficherTableau($mois) {
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>Mois</th><th>Nombre de jours</th></tr>";
    foreach ($mois as $nomMois => $jours) {
        echo "<tr><td>$nomMois</td><td>$jours</td></tr>";
    }
    echo "</table><br>";
}

// Affichage du tableau original ორიგინალური მასივის ჩვენება.
echo "<h2>Tableau des mois avec leurs jours (année non bissextile)</h2>";
afficherTableau($mois);

// Trier le tableau par le nombre de jours მასივის დასახელება დღის რაოდენობის მიხედვით.
asort($mois);

// Affichage du tableau trié   დალაგებული მასივის ჩვენება.
echo "<h2>Tableau des mois triés par nombre de jours</h2>";
afficherTableau($mois);
?>


<?php
// Tableau associatif des pays et leurs capitales ასოციატიური მასივი ქვეყნების და მათი დედაქალაქების.
$paysEtCapitales = [
    'France' => 'Paris',
    'Italie' => 'Rome',
    'Espagne' => 'Madrid',
    'Allemagne' => 'Berlin',
    'Portugal' => 'Lisbonne',
    'Pays-Bas' => 'Amsterdam',
    'Belgique' => 'Bruxelles',
    'Suisse' => 'Berne',
    'Autriche' => 'Vienne',
    'Grèce' => 'Athènes'
];

// 1. Afficher les capitales par ordre alphabétique, suivies du pays დედაქალაქების ჩვენება ბგერითი წესით, ქვეყნის სახელით.

// Inverser les clés et valeurs pour avoir les capitales comme clés მნიშვნელობების და გასაღებების გადაბრუნება, რომ დედაქალაქები გასაღებად იქცეს.
$capitalesEtPays = array_flip($paysEtCapitales);
ksort($capitalesEtPays);

echo "<h2>Capitales par ordre alphabétique avec leur pays</h2>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Capitale</th><th>Pays</th></tr>";
foreach ($capitalesEtPays as $capitale => $pays) {
    echo "<tr><td>$capitale</td><td>$pays</td></tr>";
}
echo "</table><br>";

// 2. 

// Trier le tableau $paysEtCapitales par clés (pays) ქვეყნების ჩვენება ბგერითი წესით, შემდეგ კი მათი დედაქალაქების.
ksort($paysEtCapitales);

echo "<h2>Pays par ordre alphabétique avec leur capitale</h2>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Pays</th><th>Capitale</th></tr>";
foreach ($paysEtCapitales as $pays => $capitale) {
    echo "<tr><td>$pays</td><td>$capitale</td></tr>";
}
echo "</table><br>";

// 3. Afficher le nombre total de pays dans le tableau მსოფლიო ქვეყნების საერთო რაოდენობის ჩვენება მასივში.
$nombreDePays = count($paysEtCapitales);
echo "<h2>Nombre total de pays dans le tableau : $nombreDePays</h2><br>";

// 4. Supprimer les capitales ne commençant pas par la lettre 'B' et afficher le tableau 
// წაშლა დედაქალაქებისა, რომლებიც არ იწყება 'B' ასოებით, და მასივის ჩვენება.
foreach ($paysEtCapitales as $pays => $capitale) {
    if (stripos($capitale, 'B') !== 0) { // stripos pour chercher 'B' au début, insensible à la casse 
        //stripos 'B'-ის ძიებისთვის დასაწყისში, რეგისტრირების მიმართ შეუმჩნეველი.
        unset($paysEtCapitales[$pays]);
    }
}

echo "<h2>Tableau des pays avec capitales commençant par 'B'</h2>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Pays</th><th>Capitale</th></tr>";
foreach ($paysEtCapitales as $pays => $capitale) {
    echo "<tr><td>$pays</td><td>$capitale</td></tr>";
}
echo "</table>";
?>

<?php
// Tableau associatif des régions et leurs départements
// ასოციატიური მასივი რეგიონებისა და მათი დეპარტამენტების.
$regions = [
    'Île-de-France' => ['Paris', 'Seine-et-Marne', 'Yvelines', 'Essonne', 'Hauts-de-Seine', 'Seine-Saint-Denis', 'Val-de-Marne', 'Val-d\'Oise'],
    'Provence-Alpes-Côte d\'Azur' => ['Alpes-de-Haute-Provence', 'Hautes-Alpes', 'Alpes-Maritimes', 'Bouches-du-Rhône', 'Var', 'Vaucluse'],
    'Auvergne-Rhône-Alpes' => ['Ain', 'Allier', 'Ardèche', 'Cantal', 'Drôme', 'Isère', 'Loire', 'Haute-Loire', 'Puy-de-Dôme', 'Rhône', 'Savoie', 'Haute-Savoie']
];

// 1. Afficher les régions par ordre alphabétique avec leurs départements 
// რეგიონების ჩვენება ბგერითი წესით მათი დეპარტამენტებით.

// Trier les régions par ordre alphabétique
// რეგიონების დალაგება ბგერითი წესით.
ksort($regions);

echo "<h2>Liste des régions et départements (par ordre alphabétique des régions)</h2>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Région</th><th>Départements</th></tr>";
foreach ($regions as $region => $departements) {
    // Trier les départements de chaque région რეგიონების თითოეული დეპარტამენტის სორტირება.
    sort($departements);
    echo "<tr><td><strong>$region</strong></td><td>" . implode(', ', $departements) . "</td></tr>";
}
echo "</table><br>";

// 2. Afficher la liste des régions avec le nombre de départements
// რეგიონების სიის ჩვენება დეპარტამენტების რაოდენობით.
echo "<h2>Liste des régions avec le nombre de départements</h2>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Région</th><th>Nombre de départements</th></tr>";
foreach ($regions as $region => $departements) {
    $nombreDepartements = count($departements);
    echo "<tr><td><strong>$region</strong></td><td>$nombreDepartements</td></tr>";
}
echo "</table>";
?>
