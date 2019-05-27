<?php
    session_start();

    $user_mail=$_SESSION['mail'];

   try {
    $pdo = new PDO('mysql:host=localhost;dbname=web', 'root', '');
    $result=$pdo->query("SELECT * from personnage WHERE user_id='$user_mail'");
        if($result!=false){

            $niveau_max=0;

            foreach($result as $raw) {
                if($raw['perso_niveau'] > $niveau_max) {
                    $niveau_max=$raw['perso_niveau'];
                }
            } 
        }
        else {
            header('Location: ajout_perso.php');
        }
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>