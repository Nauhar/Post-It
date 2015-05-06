<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css">

<script type="text/javascript" src="/assets/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="/assets/locales/bootstrap-datepicker.fr.min.js"></script>


<br>

<div class="container">
<div id="main">
    <div id="login">
        <h2>Formulaire d'inscription</h2>
        <?php
        if ("" !== validation_errors()) {
            echo "<div class='alert alert-danger alert-dismissible' role='alert'>";
            echo validation_errors();
            echo "</div>";
        }

        echo "<br/>";


        echo form_open('users/inscription', 'class="form-inline"');

        echo form_label('&nbsp&nbsp Nom &nbsp&nbsp ');
        echo form_input('nom');

        echo "&nbsp&nbsp&nbsp&nbsp";

        echo form_label('&nbsp Prénom &nbsp ');
        echo form_input('prenom');

        echo "</br></br>";

        echo form_label('&nbsp&nbsp Email &nbsp ');
        $data = array(
            'type' => 'email',
            'name' => 'email_value'
        );
        echo form_input($data, '', 'class="form-control"');

        echo "&nbsp&nbsp";

        echo form_label('&nbsp&nbsp Mot de Passe &nbsp ');
        echo form_password('password');

       // echo "<div class='error_msg'>";
        if (isset($message_display)) {
            echo "<div class='alert alert-danger' role='alert'>";
            echo "<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>";
            echo "<span class='sr-only'>Error:</span>";
            echo $message_display;
        }
        echo "</div>";

        echo "</br>";

        echo form_label('&nbsp&nbsp Date de naissance &nbsp '); ?>

        </br>

        <div class="span2 col-md-3" id="sandbox-container">
            <div class="input-group date">
                <input type="text" name='datenaissance' class="form-control">
                    <span class="input-group-addon">
                            <i class="glyphicon glyphicon-th"></i>
                    </span>
            </div>
        </div>

        <br/><br/><br/>

       <?php

        echo form_label('&nbsp&nbsp Organisation &nbsp ');
        echo form_input('organisation');

        echo "</br></br>";

        echo form_label('&nbsp&nbsp Pays &nbsp ');
        echo form_input('pays');

        echo "</br></br>";

        echo form_label('&nbsp&nbsp Ville &nbsp ');
        echo form_input('ville');

        echo "</br></br>";
        echo form_submit('submit', 'Validation', 'class="btn btn-default"');
        echo form_close();
        ?>
    </div>
</div>

</div>


<script  type="text/javascript">

    $('#sandbox-container .input-group.date').datepicker({
        format: "mm/dd/yyyy",
        startDate: "01/01/1900",
        language: "fr",
        autoclose: true,
        todayHighlight: true
    });

</script>