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
                    <form class=\"formulaire\" action=\"deconnexion.php\" method=\"get\">
                    <button type=\"submit\">Se déconnecter</button>
                    </form>
                </div>";
                }
                else {
                    echo "<form class=\"formulaire\" action=\"login.php\" method=\"get\">
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
                }
            ?>



        </div>
        <div class="div2">
            <h2 class="titres">Inscription</h2>

            <form class="formulaire" action="register.php" method="get">
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

        </div>

        <div class="div3">
            <h2 class="titres">Une autre div</h2>
        </div>

    </section>


<?php
    echo "$footer";
?>