<?php
    include 'design.php';
    echo "$header";
?>
    
        <section class="section1">
            <h1 class="titre_contact">Demande de contact</h1>
            <form class="formulaire_contact" action="/my-handling-form-page" method="post">
                <div>
                    <label for="nom">Nom</label>
                    <input type="text" id="name" name="user_name">
                </div>
                <div>
                    <label for="prenom">Prénom</label>
                    <input type="email" id="mail" name="user_mail">
                </div>
                <div>
                    <label for="choix">Message</label>
                    <form>
                        <SELECT name="liste" size="1">
                            <OPTION>Demande de renseignement
                            <OPTION>Autre demande
                        </SELECT>
                    </form>
                </div>
                <div class="button">
                    <button type="submit">Envoyer le message</button>
                </div>
            </form>
        </section>

<?php
    echo "$footer";
?>