<div id="main">
    <div id="login">
        <h2>Formulaire de création d'un évènement</h2>
        <?php
        echo "<div class='error_msg'>";
        echo validation_errors();
        echo "</div>";

        echo "</br>";

        echo form_open('evenement/validation_evenement');

        echo form_label('Nom de l\'évènement : ');
        echo form_input('nomevents');
        echo form_label('URL de l\'évènement : ');
        echo form_input('urlevents');

        echo "</br>";

           echo "<div class='error_msg'>";
        if (isset($message_display)) {
            echo $message_display;
        }
        echo "</div>";

        echo form_label('Lieu de l\'évènement : ');
        echo form_input('lieuevents');

        echo "</br>";

        echo form_label('Ville de l\'évènement : ');
        echo form_input('villeevents');

        echo form_label('Pays de l\'évènement : ');
        echo form_input('paysevents');

        echo "</br>";

        echo form_label('Nombre de participants : ');
        echo form_input('nbparticipant');

        echo form_label('Type de l\'évènement : ');
        echo form_input('typeevents');

        echo form_label('Date de l\'évènement : ');
        echo "<input type='date' name='dateevents' placeholder='jj/mm/aaaa'>";

        echo "</br></br></br>";

        echo 'PARAMETRES DE L\'EVENEMENT';

        echo "</br></br>";

        echo form_label('Hastage à suivre : #');
        echo form_input('hastag');

        echo "</br>";

        echo form_label('Modération texte : ');
        echo form_input('moderationtxt');

        echo "</br>";

        echo form_label('Modération image : ');
        echo form_input('moderationimage');

        echo "</br>";

        echo form_label('Mot de passe modération : ');
        echo form_input('passwordmoderation');

        echo "</br>";

        echo form_label('Mots interdits : ');
        echo form_input('motinterdit');

        echo "</br></br>";

        echo form_submit('submit', 'Validation');
        echo form_close();
        ?>
    </div>
</div>