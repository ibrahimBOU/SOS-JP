<?php
$serveur = "localhost";
$dbname = "sosjp";
$user = "root";
$pass = "";

$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];

try {
    //On se connecte à la BDD
    $dbco = new PDO("mysql:host=$serveur;dbname=$dbname", $user, $pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //On insère les données reçues
    $sth = $dbco->prepare("
    INSERT INTO etape1(q1, q2, q3)
    VALUES (:q1, :q2, :q3)");

    $sth->bindParam(':q1', $q1);
    $sth->bindParam(':q2', $q2);
    $sth->bindParam(':q3', $q3);

    $sth->execute();

    //On renvoie l'utilisateur vers la page 2
    header("Location:page2.html");
} catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}
