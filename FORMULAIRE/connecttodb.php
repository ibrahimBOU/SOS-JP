<?php
$serveur = "localhost";
$dbname = "sos_jp";
$user = "root";
$pass = "";

try {
    //On se connecte à la BDD
    $dbco = new PDO("mysql:host=$serveur;dbname=$dbname", $user, $pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}
