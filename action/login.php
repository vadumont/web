<?php 

    $loginForm = $_GET['pseudo'];
    $mdpForm = md5($_GET['mdp']);

   try {
    $pdo = new PDO('mysql:host=localhost;dbname=web', 'root', '');
    foreach($pdo->query("SELECT * from utilisateur WHERE pseudo='$loginForm'") as $row) {
        if($loginForm == $row["pseudo"] && $mdpForm == $row["mdp"]){

            session_start();
            $_SESSION['pseudo']=$_GET['pseudo'];
            $_SESSION['mdp']=$_GET['mdp'];
            $_SESSION['mail']=$row["mail"];

            header('Location: ../index.php');

        }
        else {
            header('Location: ../index.php');
        }
    }
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>