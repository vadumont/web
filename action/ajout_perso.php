<?php

$user_mail=$_SESSION['mail'];

try {
 $pdo = new PDO('mysql:host=localhost;dbname=web', 'root', '');
 foreach($pdo->query("SELECT * from personnage WHERE user_id='$user_mail'") as $row) {
     if($loginForm == $row["pseudo"] && $mdpForm == $row["mdp"]){

         $_SESSION['pseudo']=$_GET['pseudo'];
         $_SESSION['mdp']=$_GET['mdp'];

         header('Location: verif_personnage.php');

     }
     else {
         header('Location: ../index.php');
     }
 }
} catch (PDOException $e) {
 print "Erreur !: " . $e->getMessage() . "<br/>";
 die();
}