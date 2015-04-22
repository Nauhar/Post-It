<?php
/**
 * Created by IntelliJ IDEA.
 * User: Xavier
 * Date: 21/04/2015
 * Time: 16:20
 */



 /*echo form_open("Design/design_index");
echo form_label("Choisir un Fond d'écran", "fond_ecran");
echo form_input("fond_ecran","");*/
?>

<div class="container-fluid">
    <div id="big-form" class="well auth-box">
 <form class="form-horizontal">

<fieldset>
<legend>Page</legend>
<div class="form-group form_D">

    <label class="control-label" for="textinput">Logo :</label>
    <input id="textinput" name='logo'>
    <label class="control-label" for="textinput">Fond d'écran :</label>
    <input id="textinput" name='fond_ecran'>
    <label class="control-label" for="textinput">Image de fond :</label>
    <input id="textinput" name='Image'>
    <label class="control-label" for="textinput">Police générale:</label>
    <input id="textinput" name='Police'>
</fieldset>
    <fieldset>
        <legend> Bandeau</legend>
    <label class="control-label" for="textinput">Texte : </label>
    <input id="textinput" name='text_bandeau'>
    <label class="control-label" for="textinput">Couleur texte :</label>
    <input id="textinput" name='color_text_bandeau'><label class="control-label" for="textinput">Fond :</label>
        <input id="textinput" name='fond_bandeau'>
    </fieldset>
    <fieldset>
        <legend> Pseudo</legend>
        <label class="control-label" for="textinput">Texte : </label>
        <input id="textinput" name='text_bandeau'>
        <label class="control-label" for="textinput">Taille Police  :</label>
        <input id="textinput" name='color_text_bandeau'><label class="control-label" for="textinput">Couleur :</label>
        <input id="textinput" name='fond'>
    </fieldset>
    <fieldset>
        <legend> Messages</legend>
        <label class="control-label" for="selectbasic">Taille police : </label>
        <select class="selectpicker" data-style="btn-info">
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
        <label class="control-label" for="textinput">Couleur :</label>
        <input id="textinput" name="color_message">


    </fieldset>
</div>

    <a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-tint"></span> Appliquer</a>
</form>
</div>
</div>

<!--echo "<input type='date' name='datenaissance' placeholder='jj/mm/aaaa'>"; -->
<script type="text/javascript">
$('input').ColorPicker(onShow);

</script>

<script type="text/javascript"> alert(selectpicker); $('.selectpicker').selectpicker();</script>

<script type="text/javascript" src="/assets/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.js"></script>
<script type="text/javascript" src="/assets/js/colorpicker.js"></script>
