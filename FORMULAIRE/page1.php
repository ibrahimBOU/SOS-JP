<?php
$serveur = "localhost";
$dbname = "sosjp";
$user = "root";
$pass = "";



$question = [
    "page1" => [],
    "page2" => [],
    "page3" => [],
    "page4" => [],
    "page5" => [],
    "page6" => [],
];


/*Etape1*/

$question["page1"][] = $_POST["q1.1"];
$question["page1"][] = $_POST["q2.1"];
$question["page1"][] = $_POST["q3.1"];

/*Etape2*/
$question["page2"][] = $_POST["q2_1"];
$question["page2"][] = $_POST["q2_2"];
$question["page2"][] = $_POST["q2_3"];


// Etape3

$question["page3"][] = $_POST["q1_3"];
$question["page3"][] = $_POST["q2_3"];
$question["page3"][] = $_POST["q3_3"];
$question["page3"][] = $_POST["q4_3"];
$question["page3"][] = $_POST["q5_3"];
$question["page3"][] = $_POST["q6_3"];


/*Etape4*/

$question["page4"][] = $_POST["q1_4"];
$question["page4"][] = $_POST["q2_4"];
$question["page4"][] = $_POST["q3_4"];
$question["page4"][] = $_POST["q4_4"];
$question["page4"][] = $_POST["q5_4"];
$question["page4"][] = $_POST["q6_4"];
$question["page4"][] = $_POST["q7_4"];

/*Etape5*/

$question["page5"][] = $_POST["q5_1"];
$question["page5"][] = $_POST["q5_2"];
$question["page5"][] = $_POST["q5.3"];

/*Etape6*/

for ($i = 1; $i != 24; $i++) {
    $question["page 6"][] = $_POST["q6." . $i];
};
var_dump($question);


/*  

!!!!! a faire en dernier !!!!!!!
TABLE


champs a faire :
id
user = ["email"=> "udheuihd@.mescouillesfr
        "mobile"=> "068178937931"
        "name"=> "michel lapute"]
page1 = [$question["page1"]]

page2 = [$question["page2]]
        
]

pour que ça soit le bonne user tu get le dernier objet en BDD dans ton appel tu prend l'id le plus grand de toute ta table
il faut que tu stok en base de données avant de lancer le pdf 
ensuite tu prend  le dernier ajouter avec la fonction last() (pas sur que ca existe avec php tous seul)
et si jamais tu regarde tous tes id et tu prend l'id le plus grand de tous 



*/







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
