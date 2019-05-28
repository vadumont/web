<?php 

    $loginForm = $_GET['pseudo'];
    $mailForm = $_GET['mail'];
    $mdpForm = md5($_GET['mdp']);

   try {
    $pdo = new PDO('mysql:host=localhost;dbname=web', 'root', '');
    $result=$pdo->query("INSERT INTO utilisateur VALUE ('$mailForm','$loginForm','$mdpForm')");

        if(!$result){

            header('Location: ../index.php?register=failed');

        } else {
            header('Location: ../index.php?register=success');
        }
       // header('Location: ../index.php?register=failed');
    }
 catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>