<?php
    include 'design.php';
    include 'action/sql_util.php';
    session_start();
    echo "$header";


    $date_creation = date('Y-m-d');

    $perso_attaquant_nom = $_SESSION['meilleur_perso_nom'];
    $perso_attaquant_niveau = $_SESSION['meilleur_perso_niveau'];

    $perso_victime_nom = $_GET['perso_nom'];
    $perso_victime_niveau = $_GET['perso_niveau'];

try {
    

    $id_attaquant = $pdo->query("SELECT perso_id FROM personnage WHERE perso_nom=\"$perso_attaquant_nom\"");
    $id_attaquant = $id_attaquant->fetchObject();
    $id_victime = $pdo->query("SELECT perso_id FROM personnage WHERE perso_nom=\"$perso_victime_nom\"");
    $id_victime = $id_victime->fetchObject();

    $resultat = rand(1, 10);

    if($resultat > 5){

        $attaquant_gagne = 1;
        echo "<h1>$perso_attaquant_nom a vaincu $perso_victime_nom</h1>";
        echo $date_creation;
        $sql = "INSERT INTO combat VALUE (0, '$id_attaquant->perso_id', '$id_victime->perso_id', '$attaquant_gagne', '$date_creation')";
        echo $sql;
        $result = $pdo->query($sql);


    } else {

        $attaquant_gagne = 0;
        echo "<h1>$perso_attaquant_nom a perdu face à $perso_victime_nom</h1>";
        $result = $pdo->query("INSERT INTO combat VALUE (0, '$id_attaquant->perso_id', '$id_victime->perso_id', '$attaquant_gagne', '$date_creation')");

    }

} catch (PDOException $e) {
    //print "Erreur !: " . $e->getMessage() . "<br/>";
}
    echo "$footer";
?>