<?php
    include 'design.php';
    echo "$header";
?>


    <section class="section1">
        <div class="div1">
            <h2 class="titres">Vous avez été déconnecté !</h2>
            <p class="deconnexion_message">Vous allez être reconduit à la page d'accueil d'ici quelques secondes</p>
            
            <script type="text/javascript">
                window.setTimeout("location=('../index.php');", 3000);
            </script>

    </section>

<?php
    echo "$footer";
?>