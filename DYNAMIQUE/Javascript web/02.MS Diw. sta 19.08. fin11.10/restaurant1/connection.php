<?php

try 
{
    $db = new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8', 'dudu', 'dudu');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (Exception $e) 
{
    echo 'Erreur : ' . $e->getMessage() . '<br />';
    echo 'N° : ' . $e->getCode();
    die('Fin du script');
}


?>