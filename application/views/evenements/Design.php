<?php
/**
 * Created by IntelliJ IDEA.
 * User: Xavier
 * Date: 21/04/2015
 * Time: 16:20
 */



echo form_open('Design/validation_design');
//echo form_label("Choisir un Fond d'écran", "fond_ecran");
//echo form_input("fond_ecran","");*/
?>
<div class="goldenforms-container gpro-container4">
    <!--<div class="container-fluid"> -->
    <div class="frm-header">
        <h3>Design event</h3>
    </div>

    <div id="big-form" class="well auth-box">
        <form class="form-horizontal" method="post" action="">
            <fieldset>
                <legend>Page</legend>
                <div class="form-group form_D">

                    <label class="control-label" for="textinput">Logo :
                        <input id="textinput" name='logo'>
                    </label>

                    <label class="control-label" for="textinput">Fond d'écran :
                        <input id="textinput" name='fond_ecran'>
                    </label>

                    <label class="control-label" for="textinput">Image de fond :
                        <input id="textinput" name='image'>
                    </label>

                    <label class="control-label" for="textinput">Police générale:
                        <input id="textinput" name='police'>
                    </label>

            </fieldset>
            <fieldset>
                <legend> Bandeau</legend>

                <label class="control-label" for="textinput">Texte :
                    <input id="textinput" name='text_bandeau'>
                </label>

                <label class="control-label" for="textinput">Couleur texte :
                <input id="textinput" name='color_text_bandeau'><input type="color" name="color_text_picker" onsubmit="">
                </label>

                <label class="control-label" for="textinput">Fond :
                    <input id="textinput" name='fond_bandeau'>
                </label>
            </fieldset>

            <fieldset>
                <legend> Pseudo</legend>
                <label class="control-label" for="textinput">Texte :
                    <input id="textinput" name='text_pseudo'>
                </label>

                <label class="control-label" for="textinput">Taille Police :
                    <input id="textinput" name='size_police_pseudo'>
                </label>

                <label class="control-label" for="textinput">Couleur :
                    <input id="textinput" name='color_pseudo'><input type="color">
                </label>
            </fieldset>

            <fieldset>
                <legend> Messages</legend>

                <label class="control-label" for="selectbasic">Taille police :
                    <select class="selectpicker" data-style="btn-info" name="size_police_message">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </label>

                <label class="control-label" for="textinput">Couleur :
                    <input id="color_m" type="color" name="color_message" value="#ff0000" onchange="javascript:document.getElementById('chosen-color1').value = document.getElementById('color_m').value;">
                    <input id="chosen-color1" type="text" name="chosen-color11" readonly value="#ff0000">
                </label>
            </fieldset>
    </div>
</div>

<!--<a href="validation_design" class="btn btn-danger"><span class="glyphicon glyphicon-tint"></span> Appliquer</a>-->
<button class="uit-button" type="reset">Cancel</button>
</form>
</div>

<?php

echo form_submit('submit', 'Submit');
echo form_close();
?>

<br> <br> <br>

<script type="text/javascript" src="/assets/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.js"></script>