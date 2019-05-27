<?php 

    $loginForm = $_GET['pseudo'];
    $mailForm = $_GET['mail'];
    $mdpForm = md5($_GET['mdp']);

   try {
    $pdo = new PDO('mysql:host=localhost;dbname=web', 'root', '');
    $result=$pdo->query("INSERT INTO utilisateur VALUES ('$loginForm','$mailForm','$mdpForm')");

        if($result = false){

            header('Location: ../index.php');

        }
        else {
            header('Location: ../index.php');
        }
    }
 catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>