<title>Page d'Accueil</title>

<a href="/users/login">S'identifier</a>

</br>

<a href="/users/new_user_registration">Créer un compte</a>

</br>

<?php

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