

    <title>Postez votre message</title>

<?php echo validation_errors(); ?>

<?php
echo form_open('messages/post/'.$urlevenement);

echo form_label("Votre nom", "nom");
echo form_input('nom', '');
?>

</br>

<?php
echo form_label("Votre message", "message");
echo form_textarea('message','');
?>

</br>

<?php
echo form_submit('submit', 'Submit');
echo form_close();
?>

</body>
</html>



