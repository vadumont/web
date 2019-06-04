<?php 
    include 'sql_util.php';

    $loginForm = $_GET['pseudo'];
    $mdpForm = md5($_GET['mdp']);

   try {
    $pdo = new PDO('mysql:host=localhost;dbname=web', 'root', '');
    foreach($pdo->query("SELECT * from utilisateur WHERE pseudo='$loginForm'") as $row) {

        if($loginForm == $row["pseudo"]){
            if($mdpForm == $row["mdp"]) {
                session_start();
                $_SESSION['pseudo'] = $_GET['pseudo'];
                $_SESSION['mdp'] = $_GET['mdp'];
                $_SESSION['mail'] = $row["mail"];

                header('Location: verif_personnage.php');

            } else {
                header('Location: ../index.php?passwd=failed');                
            }
        }
    }
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>