<?php
$serveur = "localhost";
$dbname = "sosjp";
$user = "root";
$pass = "";

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$mail = $_POST["mail"];
$tel = $_POST["tel"];
$startup = $_POST["startup"];
$message = $_POST["le-message"];

try {
    //On se connecte à la BDD
    $dbco = new PDO("mysql:host=$serveur;dbname=$dbname", $user, $pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //On insère les données reçues
    $sth = $dbco->prepare("
    INSERT INTO form(nom, prenom, mail, tel, startup, le-message)
    VALUES (:nom, :prenom, :mail, :tel, :startup, :le-message)");

    $sth->bindParam(':nom', $nom,);
    $sth->bindParam(':prenom', $prenom);
    $sth->bindParam(':mail', $mail);
    $sth->bindParam(':tel', $tel);
    $sth->bindParam(':startup', $startup);
    $sth->bindParam(':le-message', $message);
    $sth->execute();

    //On renvoie l'utilisateur vers la page de remerciement
    header("Location:form-merci.html");
} catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Page de traitement</title>
    <meta charset="utf-8">
</head>

<body>
    <p>Dans le formulaire précédent, vous avez fourni les
        informations suivantes :</p>

    <?php
    echo 'nom : ' . $_POST["nom"] . '<br>';
    echo 'prenom : ' . $_POST["prenom"] . '<br>';
    echo 'mail : ' . $_POST["mail"] . '<br>';
    echo 'tel : ' . $_POST["tel"] . '<br>';
    echo 'startup : ' . $_POST["startup"] . '<br>';
    echo 'message : ' . $_POST["le-message"] . '<br>';
    ?>
</body>

</html>