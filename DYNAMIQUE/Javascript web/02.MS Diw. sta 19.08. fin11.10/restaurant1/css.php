<?php
// Pour traiter des données dynamiques 6 დინამიური მონაცემების დასამუშავებლად.

header("Content-type: text/css; charset: UTF-8"); // Grâce à cela, le serveur reconnaît qu'il s'agit d'un fichier CSS - ამის მეშვეობით სერვერი იგებს, რომ ეს არის CSS ფაილი.

// Ici, le fichier style.css est lu et son contenu est affiché - აქ ხდება style.css-ის წაკითხვა და მისი შინაარსის გამოყვანა.
readfile('style.css');
?>
