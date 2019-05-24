<?php
    include 'design.php';
    echo "$header";
?>
    
        <section class="section1">
            <h1 class="titre_contact">Demande de contact</h1>
            <form class="formulaire" action="/my-handling-form-page" method="post">
                <div>
                    <input class="input1" type="text" name="nom" placeholder="Nom">
                </div>
                <div>
                    <input class="input1" type="text" name="prenom" placeholder="Prénom">
                </div>
                <div>
                    <input class="input1" type="email" name="mail" placeholder="E-mail">
                </div>
                <div>
                    <form>
                        <SELECT name="liste" size="1">
                            <OPTION>Demande de renseignement
                            <OPTION>Autre demande
                        </SELECT>
                    </form>
                </div>
                <div class="button_validate">
                    <button type="submit">Valider</button>
                </div>
            </form>
        </section>

<?php
    echo "$footer";
?>