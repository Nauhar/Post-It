<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css">
<link rel="stylesheet" media="screen" type="text/css" href="/assets/css/bootstrap-datepicker.css" >
<link rel="stylesheet" media="screen" type="text/css" href="/assets/css/bootstrap-datepicker3.css" >

<script type="text/javascript" src="/assets/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="/assets/locales/bootstrap-datepicker.fr.min.js"></script>


<br>

<div class="container">
<div id="main">
    <div id="login" class="col-lg-9">
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
        echo form_input('nom', '', 'class="form-control"');

        echo "&nbsp&nbsp&nbsp&nbsp";

        echo form_label('&nbsp Prénom &nbsp ');
        echo form_input('prenom', '', 'class="form-control"');

        echo "</br></br>";

        echo form_label('&nbsp&nbsp Email &nbsp ');
        $data = array(
            'type' => 'email',
            'name' => 'email_value'
        );
        echo form_input($data, '', 'class="form-control"');

        echo "&nbsp&nbsp";

        echo form_label('&nbsp&nbsp Mot de Passe &nbsp ');
        echo form_password('password', '', 'class="form-control"');

       // echo "<div class='error_msg'>";
        if (isset($message_display)) {
            echo "<div class='alert alert-danger' role='alert'>";
            echo "<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>";
            echo "<span class='sr-only'>Error:</span>";
            echo $message_display;
        }
        //echo "</div>";

        echo "</br></br>";

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
        echo form_input('organisation', '', 'class="form-control"');

        echo "</br></br>";

        echo form_label('&nbsp&nbsp Pays &nbsp ');
        echo form_input('pays', '', 'class="form-control"');

        echo "</br></br>";

        echo form_label('&nbsp&nbsp Ville &nbsp ');
        echo form_input('ville', '', 'class="form-control"');

        echo "</br></br>";
        echo form_submit('submit', 'Validation', 'class="btn btn-success"');
        echo form_close();
        ?>
    </div>
</div>

</div>


<script  type="text/javascript">

    $('#sandbox-container .input-group.date').datepicker({
        format: "yyyy-mm-dd",
        startDate: "01/01/1900",
        endDate:new Date(),
        language: "fr",
        autoclose: true,
        todayHighlight: true
    });

</script>