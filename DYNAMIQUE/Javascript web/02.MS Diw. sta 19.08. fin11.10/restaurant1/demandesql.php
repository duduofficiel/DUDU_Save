<?php
include 'connection.php'; // Assurez-vous que ce fichier définit la connexion db - დარწმუნდით, რომ ეს ფაილი განსაზღვრავს db კავშირს.

function get_plats() {
    global $db; // Rendez la variable $db accessible à l'intérieur de la fonction - გახადეთ $db ცვლადი ხელმისაწვდომი ფუნქციის შიგნით.
    try {

        // Préparez et exécutez la requête - მოამზადეთ და შეასრულეთ მოთხოვნა.
        $requete = $db->prepare("SELECT libelle, description, prix, image, id FROM plat;");
        $requete->execute();
        

        // Récupérez les résultats sous forme d'un tableau d'objets - გამოიტანეთ შედეგები ობიექტების მასივის სახით. 
        $plats = $requete->fetchAll(PDO::FETCH_OBJ); 

        return $plats; // Retournez les données récupérées - აბრუნეთ აღებული მონაცემები.
    } catch (PDOException $e) {

        // Gérer les erreurs de base de données - ბაზის შეცდომების მართვა.
        echo "Error fetching plats: " . $e->getMessage();
        return []; // Retourner un tableau vide en cas d'erreur - შეცდომის შემთხვევაში დააბრუნეთ ცარიელი მასივი.
    }
}
function get_categorys() {
    global $db; 
    try {

        // Préparez et exécutez la requête - მოამზადეთ და შეასრულეთ შეკითხვა. 
        $requete = $db->prepare("SELECT libelle, image, id FROM categorie;");
        $requete->execute();

        
        // Récupérez les résultats sous forme d'un tableau d'objets - გამოიტანეთ შედეგები ობიექტების მასივის სახით. 
        $categorys = $requete->fetchAll(PDO::FETCH_OBJ); 
        return $categorys; 
    } catch (PDOException $e) {

        // Gérer les erreurs de la base de données - ბაზის მონაცემთა შეცდომების მართვა.
        echo "Error fetching plats: " . $e->getMessage();

        return []; // Retourner un tableau vide en cas d'erreur - შეცდომის შემთხვევაში დაბრუნეთ ცარიელი მასივი.
    }
}


function getProducts($id) {
    global $db; 
    try {
        // Prepare the SQL query with a placeholder
        $requete = $db->prepare("SELECT libelle, image, id, prix FROM plat WHERE id = ?;");
        
        // Execute the query with the $id parameter securely
        $requete->execute([$id]);
        
        // Fetch all results as objects
        $products = $requete->fetchAll(PDO::FETCH_OBJ);
        
        return $products;
    } catch (PDOException $e) {
        // Handle database errors
        echo "Error fetching plats: " . $e->getMessage();

        return []; // Return an empty array on error
    }
}
