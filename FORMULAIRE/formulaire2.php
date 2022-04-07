<?php
$serveur = "localhost";
$dbname = "sos_jp";
$user = "root";
$pass = "";

$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];
$q6 = $_POST["q6"];

try {
    //On se connecte à la BDD
    $dbco = new PDO("mysql:host=$serveur;dbname=$dbname", $user, $pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //On crée une table etape1
    $form = "CREATE TABLE Etape1(
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        q1 TEXT,
        q2 TEXT,
        q3 TEXT,
        q4 TEXT,
        q5 TEXT)";

    //On insère les données reçues
    $sth = $dbco->prepare("
    INSERT INTO Etape1(q1, q2, q3, q4, q5, q6)
    VALUES (:q1, :q2, :q3, :q4, :q5, :q6)");

    $sth->bindParam(':q1', $q1);
    $sth->bindParam(':q2', $q2);
    $sth->bindParam(':q3', $q3);
    $sth->bindParam(':q4', $q4);
    $sth->bindParam(':q5', $q5);
    $sth->bindParam(':q6', $q6);
    $sth->execute();

    //On renvoie l'utilisateur vers la page de remerciement
    header("Location:form-merci.html");
} catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}
