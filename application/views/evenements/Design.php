<?php
/**
 * Created by IntelliJ IDEA.
 * User: Xavier
 * Date: 21/04/2015
 * Time: 16:20
 */



echo form_open("Design/design_index");
echo form_label("Choisir un Fond d'écran", "fond_ecran");
echo form_input("fond_ecran","");
?>
<!--echo <form class='form-horizontal'>

<fieldset>

<legend> Design</legend>
<div class='form-group'>
<label class='control-label' for='textinput'>LOGO :</label>
<input id='textinput' name='logo'>
</div>

</fieldset>
</form> -->
<script>
$('fond_ecran').ColorPicker(options); </script>


