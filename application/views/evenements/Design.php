<?php
/**
 * Created by IntelliJ IDEA.
 * User: Xavier
 * Date: 21/04/2015
 * Time: 16:20
 */

echo form_open('Evenement/validation_design/'.$URLEvenement);
//echo form_label("Choisir un Fond d'écran", "fond_ecran");
//echo form_input("fond_ecran","");*/
?>
<div class="goldenforms-container gpro-container4">
    <!--<div class="container-fluid"> -->
    <div class="frm-header">
        <h2>Formulaire de création d'un évènement</h2>
    </div>

    <?php echo 'DESIGN DE L\'EVENEMENT';?> </br></br>

    <div id="big-form" class="well auth-box">
        <form class="form-horizontal" method="post" action="">
            <fieldset>
                <legend> Page</legend>
                <div class="form-group form_D">

                    <label class="control-label" for="textinput">Couleur de fond :
                        <input id="color_f" type="color" name='color_page' onchange="javascript:document.getElementById('chosen-colorf').value = document.getElementById('color_f').value;">
                        <input id="chosen-colorf" type="text" name="color_text_bandeau" readonly value="#000000">
                    </label>

                    <?php echo "&nbsp&nbsp&nbsp"?>

                    <label class="control-label" for="textinput">Police générale:
                        <select class="selectpicker" data-style="btn-info" name="police_page">
                          <!--  <option>Arial</option>
                            <option>Georgia</option>
                            <option>Lucida Sans Unicode</option>
                            <option>Tahoma</option>
                            <option>Times new roman</option> -->
                            <option>arial</option>
                            <option>cursive</option>
                            <option>monospace</option>
                            <option>times</option>
                        </select>
                    </label>

                    <br/>

                    <label class="control-label" for="textinput">Image de fond
                        <input type='file' name='image_page'>
                    </label>

                    <?php echo "&nbsp&nbsp&nbsp"?>

                    <label class="control-label" for="textinput">Logo
                        <input type="file" name='logo_page'/>
                    </label>

                    <?php echo "&nbsp&nbsp&nbsp"?>

                    <label class="control-label" for="textinput">Logo Partenaires
                        <input type="file" name='logo_partenaires'>
                    </label>

            </fieldset>
            <fieldset>
                <legend> Bandeau</legend>

                <label class="control-label" for="textinput">Texte :
                    <input id="textinput" name='text_bandeau'>
                </label>

                <?php echo "&nbsp&nbsp&nbsp"?>

                <label class="control-label" for="textinput">Couleur texte :
                    <input id="color_t" type="color" name='color_textbandeau' onchange="javascript:document.getElementById('chosen-colort').value = document.getElementById('color_t').value;">
                    <input id="chosen-colort" type="text" name="color_text_bandeau" readonly value="#000000">
                </label>

                <?php echo "&nbsp&nbsp&nbsp"?>

                <label class="control-label" for="textinput">Couleur de Fond :
                    <input id="color_fond" type="color" name='color_fondbandeau' onchange="javascript:document.getElementById('chosen-colorfond').value = document.getElementById('color_fond').value;">
                    <input id="chosen-colorfond" type="text" name="color_fond_bandeau" readonly value="#000000">
                </label>
            </fieldset>

            <fieldset>
                <legend> Pseudo</legend>
                <label class="control-label" for="textinput">Taille police :
                    <select class="selectpicker" data-style="btn-info" name="size_pseudo">
                        <option>6</option>
                        <option>8</option>
                        <option>10</option>
                    </select>
                </label>

                <?php echo "&nbsp&nbsp&nbsp"?>

                <label class="control-label" for="textinput">Couleur :
                    <input id="color_p" type="color" name='colorpseudo' onchange="javascript:document.getElementById('chosen-colorp').value = document.getElementById('color_p').value;">
                    <input id="chosen-colorp" type="text" name="color_pseudo" readonly value="#000000">
                </label>
            </fieldset>

            <fieldset>
                <legend> Messages</legend>

                <label class="control-label" for="selectbasic">Taille police :
                    <select class="selectpicker" data-style="btn-info" name="size_message">
                        <option>16</option>
                        <option>18</option>
                        <option>20</option>
                    </select>
                </label>

                <?php echo "&nbsp&nbsp&nbsp"?>

                <label class="control-label" for="textinput">Couleur :
                    <input id="color_m" type="color" name="colormessage" onchange="javascript:document.getElementById('chosen-color1').value = document.getElementById('color_m').value;">
                    <input id="chosen-color1" type="text" name="color_message" readonly value="#000000">
                </label>
            </fieldset>
    </div>
</div>

<!--<a href="validation_design" class="btn btn-danger"><span class="glyphicon glyphicon-tint"></span> Appliquer</a>-->

<br>
<?php
echo form_submit('submit', 'Validation','class="btn btn-default"');
echo form_close();
?>

<br>

<script type="text/javascript" src="/assets/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.js"></script>