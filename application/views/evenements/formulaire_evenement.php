<div id="main">
    <div id="login">
        <h2>Formulaire de création d'un évènement</h2>

        <link rel="stylesheet" media="screen" type="text/css" href="/assets/css/bootstrap-datepicker.css" >
        <link rel="stylesheet" media="screen" type="text/css" href="/assets/css/bootstrap-datepicker3.css" >

        <script type="text/javascript" src="/assets/js/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="/assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="/assets/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="/assets/locales/bootstrap-datepicker.fr.min.js"></script>

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

        echo form_open('evenement/validation_evenement', 'class="form-inline"');

        echo 'INFORMATIONS GENERALES DE L\'EVENEMENT';
        echo "</br></br>";
        echo form_label('Nom de l\'évènement : ');
        echo form_input('nomevents', '', 'class="form-control"');

        echo "</br>";

        echo form_label('URL de l\'évènement : ');
        echo form_input('urlevents', '', 'class="form-control"');

        echo "<br/>";

        echo form_label('Lieu de l\'évènement : ');
        echo form_input('lieuevents', '', 'class="form-control"');

        echo "</br>";

        echo form_label('Ville de l\'évènement : ');
        echo form_input('villeevents', '', 'class="form-control"');

        echo form_label('Pays de l\'évènement : ');
        echo form_input('paysevents', '', 'class="form-control"');

        echo "</br>";

        echo form_label('Nombre de participants : ');
       // echo form_input('nbparticipant');
        echo "<input type='number' name='nbparticipant' min='0'>";

        echo form_label('Type de l\'évènement : ');
        echo form_input('typeevents', '', 'class="form-control"');

        //echo form_label('Date de l\'évènement : ');
        //echo form_input('dateevents', '', 'id="sandbox-container" class="input-group date" class="form-control" class="input-group-addon"');

        echo "</br></br></br>";




        ?>


        <div class="span5 col-md-3" id="sandbox-container">
            <div class="input-group date">
                <input type="text" name='dateevents' class="form-control">
                    <span class="input-group-addon">
                            <i class="glyphicon glyphicon-th"></i>
                    </span>
            </div>
        </div>



<?php
        echo "</br></br>";
        echo 'PARAMETRES DE L\'EVENEMENT';

        echo "</br></br>";

        echo form_label('Hastag à suivre : #&nbsp');
        echo form_input('hastag', '', 'class="form-control"');

        echo "</br>";

        echo form_label('Modération :&nbsp');
        echo form_checkbox('moderationtxt', '1', '', 'onclick="activerpswd()"');
        echo "<font size='1,5'> Cochez la case si vous souhaitez modérer les messages</font>";

        echo "</br>";

        echo form_label('Mot de passe modération :&nbsp');
        echo form_input('passwordmoderation', '', 'disabled="true" id="passwordmoderation" class="form-control"');

        echo "</br>";

        echo form_label('Mots interdits :&nbsp');
        echo form_checkbox('motinterdit', '1');
        echo "<font size='1,5'> Cochez la case si vous souhaitez interdire l'utilisation de certains mots prédéfinis</font>";
        echo "</br></br>";

        echo form_submit('submit', 'Validation', 'class="btn btn-default"');
        echo form_close();
        ?>
    </div>
</div>


<script type="text/javascript">

    $('#sandbox-container .input-group.date').datepicker({
        format: "mm/dd/yyyy",
        startDate: new Date(),
        language: "fr",
        autoclose: true,
        todayHighlight: true
    });



    function activerpswd(){
        if (document.getElementById("passwordmoderation").disabled == true) {
            document.getElementById("passwordmoderation").disabled = false;
        }else{
            document.getElementById("passwordmoderation").disabled = true;
        }
    }

</script>