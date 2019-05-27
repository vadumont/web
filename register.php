<?php 

    $loginForm = $_GET['pseudo'];
    $mailForm = $_GET['mail'];
    $mdpForm = md5($_GET['mdp']);

   try {
    $pdo = new PDO('mysql:host=localhost;dbname=web', 'root', '');
    foreach($pdo->query("INSERT INTO utilisateur VALUES ('$loginForm','$mailForm','$mdpForm')") as $row) {
        if($loginForm == $row["pseudo"] && $mdpForm == $row["mdp"]){

            session_start();
            $_SESSION['pseudo']=$_GET['pseudo'];
            $_SESSION['mdp']=$_GET['mdp'];

            header('Location: index.php');

        }
        else {
            header('Location: index.php');
        }
    }
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>