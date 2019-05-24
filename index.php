<?php
    include 'design.php';
    echo "$header";
?>


    <section class="section1">
        <div class="div1">
            <h2 class="titres">Connexion</h2>

            <form class="formulaire_contact" action="login.php" method="get">
                <div>
                    <label for="peudo">Login :</label>
                    <input type="text" id="pseudo" name="pseudo">
                </div>
                <div>
                    <label for="mdp">Mot de passe:</label>
                    <input type="text" id="mdp" name="mdp">
                </div>
                <div class="button">
                    <button type="submit">Envoyer le message</button>
                </div>
            </form>

        </div>
        <div class="div2">
            <h2 class="titres">Inscription</h2>
        </div>

        <div class="div3">
            <h2 class="titres">Une autre div</h2>
        </div>

    </section>


<?php
    echo "$footer";
?>