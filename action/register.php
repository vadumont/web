<?php 
    include 'sql_util.php';

    $loginForm = $_GET['pseudo'];
    $mailForm = $_GET['mail'];
    $mdpForm = md5($_GET['mdp']);

   try {
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