<?php
    include 'design.php';
    session_start();
    echo "$header";
?>


    <section class="section1">
        <div class="div1">
            <h2 class="titres">Connexion</h2>


            <?php

                if(isset($_SESSION['pseudo']) && isset($_SESSION['mdp'])) {
                    $pseudo_set=$_SESSION['pseudo'];
                    echo "<p class=\"connecte_text\">Bienvenue $pseudo_set</p>";
                    echo "<div class=\"button_validate_deconnexion\">
                    <form class=\"formulaire\" action=\"action/deconnexion.php\" method=\"get\">
                    <button type=\"submit\">Se déconnecter</button>
                    </form>
                </div>";
                }
                else {
                    echo "<form class=\"formulaire\" action=\"action/login.php\" method=\"get\">
                    <div>
                        <input class=\"input1\" type=\"text\" name=\"pseudo\" placeholder=\"Pseudo\">
                    </div>
                    <div>
                        <input class=\"input1\" type=\"password\" name=\"mdp\" placeholder=\"Mot de passe\">
                    </div>
                    <div class=\"button_validate_connexion\">
                        <button type=\"submit\">Se connecter</button>
                    </div>
                    </form>";

                    $code_pseudo = isset($_GET['pseudo']) ? $_GET['pseudo'] : NULL;
                    $code_passwd = isset($_GET['passwd']) ? $_GET['passwd'] : NULL;
                    if(!isset($_SESSION['pseudo']) && $code_pseudo == 'failed') {
                        echo "<p id=\"pseudo\" class=\"erreur_connecte_text\">L'utilisateur n'existe pas. Merci de vous inscrire.</p>";
                        echo "<script type=\"text/javascript\">
                        setTimeout(function()
                        {
                            document.getElementById(\"pseudo\").style.display = \"none\";
                        }, 4000);
                    </script>"; 
                    }

                    if(!isset($_SESSION['pseudo']) && $code_passwd == 'failed') {
                        echo "<p id=\"passwd\" class=\"erreur_connecte_text\">Le mot de passe est erroné.</p>";
                        echo "<script type=\"text/javascript\">
                        setTimeout(function()
                        {
                            document.getElementById(\"passwd\").style.display = \"none\";
                        }, 4000);
                    </script>"; 
                    }

                }
            ?>



        </div>
        <div class="div2">
            <h2 class="titres">Inscription</h2>

            <form class="formulaire" action="action/register.php" method="get">
                <div>
                    <input class="input1" type="email" name="mail" placeholder="E-mail">
                </div>
                <div>
                    <input class="input1" type="text" name="pseudo" placeholder="Pseudo">
                </div>
                <div>
                    <input class="input1" type="password" name="mdp" placeholder="Mot de passe">
                </div>
                <div class="button_validate_inscription">
                    <button type="submit">S'inscrire</button>
                </div>
            </form>

            <?php
                $code_register = isset($_GET['register']) ? $_GET['register'] : NULL;

                if($code_register == 'failed') {
                    echo "<p id=\"code_register\">L'inscription a échoué.</p>";
                    echo "<script type=\"text/javascript\">
                    setTimeout(function()
                    {
                        document.getElementById(\"code_register\").style.display = \"none\";
                    }, 4000);
                </script>";                    
                }
               
                if($code_register == 'success') {
                    echo "<p id=\"code_register\">Vous vous êtes bien inscrit.</p>";
                    echo "<script type=\"text/javascript\">
                    setTimeout(function()
                    {
                        document.getElementById(\"code_register\").style.display = \"none\";
                    }, 4000);
                </script>";                    
                }
            ?>

        </div>

        <div class="div3">
            <h2 class="titres">Meilleur personnage</h2>

            <?php
                if(isset($_SESSION['meilleur_perso_nom']) && isset($_SESSION['meilleur_perso_niveau']) && isset($_SESSION['meilleur_perso_date'])){
                    $nom_personnage = $_SESSION['meilleur_perso_nom'];
                    $niveau_personnage = $_SESSION['meilleur_perso_niveau'];
                    $date_personnage = $_SESSION['meilleur_perso_date'];
                    
                    
                    echo "<p class=\"personnage_index\">Nom : $nom_personnage</p>";
                    echo "<p class=\"personnage_index\">Niveau : $niveau_personnage</p>";
                    echo "<p class=\"personnage_index\">Date de création : $date_personnage</p>";

                }


            ?>
        </div>

    </section>


<?php
    echo "$footer";
?>