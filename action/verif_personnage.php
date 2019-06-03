<?php
    session_start();

    $user_mail = $_SESSION['mail'];
    $nom_personnage = null;
    $date_personnage = null;

   try {
    $pdo = new PDO('mysql:host=localhost;dbname=web', 'root', '');
    $result=$pdo->query("SELECT * from personnage WHERE user_id='$user_mail'");
        if($result!=false){

            $niveau_max=0;

            foreach($result as $raw) {
                if($raw['perso_niveau'] > $niveau_max && $raw['est_vivant'] = 1) {
                    $niveau_max = $raw['perso_niveau'];
                    $nom_personnage = $raw['perso_nom'];
                    $date_personnage = $raw['date_creation'];
                }
            }
            $_SESSION['meilleur_perso_nom'] = $nom_personnage;
            $_SESSION['meilleur_perso_niveau'] = $niveau_max;
            $_SESSION['meilleur_perso_date'] = $date_personnage;
            
            header('Location: ../index.php');
        }
        else {
            header('Location: ajout_perso.php');
        }
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>