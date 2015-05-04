<div id="main">
    <div id="login">
        <h2>Formulaire de création d'un évènement</h2>

<?php
        if (isset($message_display)) {
            echo "<div class='alert alert-danger' role='alert'>";
            echo "<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>";
            echo "<span class='sr-only'>Error:</span>";
            echo $message_display;
            echo "</div>";
        }

        ?>

        <?php
        echo "</br>";

        echo form_open('evenement/validation_evenement');

        echo 'INFORMATIONS GENERALES DE L\'EVENEMENT';
        echo "</br></br>";
        echo form_label('Nom de l\'évènement : ');
        echo form_input('nomevents');

        echo "</br>";

        echo form_label('URL de l\'évènement : ');
        echo form_input('urlevents');


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
       // echo form_input('nbparticipant');
        echo "<input type='number' name='nbparticipant' min='0'>";

        echo form_label('Type de l\'évènement : ');
        echo form_input('typeevents');

        echo form_label('Date de l\'évènement : ');
        echo "<input name='dateevents' class='datepicker'>";
        echo "</br></br></br>";

        echo 'PARAMETRES DE L\'EVENEMENT';

        echo "</br></br>";

        echo form_label('Hastag à suivre : #&nbsp');
        echo form_input('hastag');

        echo "</br>";

        echo form_label('Modération :&nbsp');
        echo form_checkbox('moderationtxt', '1');
        echo "<font size='1,5'> Cochez la case si vous souhaitez modérer les messages</font>";

        echo "</br>";

        echo form_label('Mot de passe modération :&nbsp');
        echo form_input('passwordmoderation');

        echo "</br>";

        echo form_label('Mots interdits :&nbsp');
        echo form_checkbox('motinterdit', '1');
        echo "<font size='1,5'> Cochez la case si vous souhaitez interdire l'utilisation de certains mots prédéfinis</font>";
        echo "</br></br>";

        echo form_submit('submit', 'Validation');
        echo form_close();
        ?>
    </div>
</div>

<script type="text/javascript" src="/assets/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="/assets/locales/bootstrap-datepicker.fr.min.js"></script>

<script  type="text/javascript">
 $('.datepicker').datepicker({
        format: 'dd/mm/yyyy',
        language: 'fr'
    })

</script>