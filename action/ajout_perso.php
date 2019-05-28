<?php

$user_mail = $_SESSION['mail'];
$nom_personnage = $_SESSION['nom_personnage'];
$niveau_personnage = $_SESSION['niveau_personnage'];
$date_creation = date('Y-m-d');

try {
 $pdo = new PDO('mysql:host=localhost;dbname=web', 'root', '');
 $result = $pdo->query("INSERT INTO personnage VALUE (0, '$nom_personnage', '$niveau_personnage', '$date_creation', '$user_mail'");
     if($result != false ){

         $_SESSION['nom_personnage'] = $nom_personnage;
         $_SESSION['niveau_personnage'] = $niveau_personnage;
         $_SESSION['date_creation'] = $date_creation;

         header('Location: verif_personnage.php');

     }
     else {
         header('Location: ../index.php');
     }
} catch (PDOException $e) {
 print "Erreur !: " . $e->getMessage() . "<br/>";
 die();
}