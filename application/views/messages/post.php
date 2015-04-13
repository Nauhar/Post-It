<html>
<head>
    <title>Postez votre message</title>
</head>
<body>

<?php echo validation_errors(); ?>

<?php
echo $urlevenement;
echo form_open('messages/post/'.$urlevenement);

echo form_label("Votre nom", "nom");
echo form_input('nom', ''); ?>

</br>

<?php
echo form_label("Votre message", "message");
echo form_textarea('message','');

//echo form_label($contact_form["email"]["label"], $contact_form["email"]["field"]);
//echo form_input($contact_form["email"]["field"], '');

//echo form_label($contact_form["subject"]["label"], $contact_form["subject"]["field"]);
//echo form_input($contact_form["subject"]["field"], '');

//echo form_label($contact_form["message"]["label"], $contact_form["message"]["field"]);
//echo form_input($contact_form["message"]["field"], '');

echo form_submit('submit', 'Submit');
echo form_close();

?>

</body>
</html>



