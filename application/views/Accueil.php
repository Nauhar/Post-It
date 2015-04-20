<title>Page d'Accueil</title>

<div class="span12 pagination-centered">

    <a href="/users/login">S'identifier</a>

</div>

</br>

<div class="span7 text-center">
    <div class="row vertical-center-row">
<a href="/users/validation_inscription">Créer un compte</a>
    </div>
</div>

</br>

<?php

//echo form_open('accueil/recherche_evenement');
echo form_open('accueil/recherche_evenement');
echo form_label("Rechercher le livewall d'un événement", "recherche_livewall");
echo form_input('recherche_livewall','');
?>

</br>

<?php

echo form_submit('submit', 'Submit');
echo form_close();
?>

</br>

</body>
</html>