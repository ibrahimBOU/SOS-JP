<?php
$serveur = "localhost";
$dbname = "sos_jp";
$user = "root";
$pass = "";

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$mail = $_POST["mail"];
$tel = $_POST["tel"];
$startup = $_POST["startup"];
$message = $_POST["le_com"];

try {
    //On se connecte à la BDD
    $dbco = new PDO("mysql:host=$serveur;dbname=$dbname", $user, $pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //On insère les données reçues
    $sth = $dbco->prepare("
    INSERT INTO form(nom, prenom, mail, tel, startup, le_com)
    VALUES (:nom, :prenom, :mail, :tel, :startup, :le_com)");

    $sth->bindParam(':nom', $nom);
    $sth->bindParam(':prenom', $prenom);
    $sth->bindParam(':mail', $mail);
    $sth->bindParam(':tel', $tel);
    $sth->bindParam(':startup', $startup);
    $sth->bindParam(':le_com', $message);
    $sth->execute();

    //On renvoie l'utilisateur vers la page de remerciement
    header("Location:form-merci.html");
} catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}
