

    <title>Postez votre message</title>
    <h3>Postez vous aussi sur le mur de messages de <?php echo $evenement['NomEvenement']; ?></h3>

<?php if(isset($message)){ ?>
<div class="container-fluid">
    <div class="col-lg-6">
        <div class="alert alert-success alert-dismissible" role="alert">
            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
            <?php echo $message; ?>
        </div>
    </div>
</div>
<?php } ?>

<div class="container-fluid">
    <div class ='col-lg-4'>
        <?php echo validation_errors(); ?>

        <?php
        echo form_open('messages/post/'.$urlevenement);

        echo form_label("Votre nom", "nom");
        echo form_input('nom', '','class="form-control"');
        ?>



        <?php
        echo form_label("Votre message", "message");
        echo form_textarea('message','','class="form-control"');
        ?>



        <?php
        echo form_submit('submit', 'Submit', 'class="btn btn-default"');
        echo form_close();
        ?>
    </div>
</div>


</br>



