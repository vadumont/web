<?php 

    $loginForm = $_GET['pseudo'];
    $mdpForm = md5($_GET['mdp']);
    echo "le login du form est ".$loginForm;
    echo "le mdp du form est ".$mdpForm;
   try {
    $pdo = new PDO('mysql:host=localhost;dbname=web', 'root', '');
    foreach($pdo->query("SELECT * from utilisateur WHERE pseudo='$loginForm'") as $row) {
        print_r($row);
        if($loginForm == $row["pseudo"]){

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