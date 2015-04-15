<title>Page d'Accueil</title>


<?php

echo form_label("S'identifier", "identification");
echo form_input('identification', '');
?>

</br>

<?php
echo form_label("Créer un compte", "creation_compte");
echo form_textarea('creation_compte','');
?>

</br>

<?php
echo form_submit('submit', 'Submit');
echo form_close();
?>

</body>
</html>