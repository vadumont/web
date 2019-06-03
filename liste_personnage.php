<?php
    include 'design.php';
    session_start();
    echo "$header";

    echo "
    <section class=\"section1\">
            <div class=\"titre_hall\">
                <h1>Liste des personnages</h1>

                <table>
                    <tr>
                        <th>PSEUDO</th>
                        <th>PERSONNAGE</th>
                        <th>NIVEAU</th>
                        <th>DATE DE CREATION</th>
                    </tr>
    ";

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=web', 'root', '');
        $result=$pdo->query("SELECT U.pseudo, P.perso_nom, P.perso_niveau, P.date_creation from personnage P, utilisateur U WHERE P.est_vivant=1 AND P.user_id=U.mail");
            if($result!=false){
    
                foreach($result as $raw) {

                    $pseudo = $raw['pseudo'];
                    $perso_nom = $raw['perso_nom'];
                    $perso_niveau = $raw['perso_niveau'];
                    $perso_date = $raw['date_creation'];

                    echo "<tr>";
                    echo "<td>$pseudo</td>";
                    echo "<td>$perso_nom</td>";
                    echo "<td>$perso_niveau</td>";
                    echo "<td>$perso_date</td>";
                    echo "</tr>";
                }

                echo "</table>

                </div>
                </section>";
                
            }
            else {
                echo "Une erreur s'est produite.";
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
    }



?>

<?php
    echo "$footer";
?>