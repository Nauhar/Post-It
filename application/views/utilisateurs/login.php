<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css">


<?php
if (($this->session->userdata('logged_in'))!== null)
    echo $this->session->userdata('NomUtilisateur');
?>

<?php
if (isset($logout_message)) {
    echo "<div class='message'>";
    echo $logout_message;
    echo "</div>";
}
?>
<?php
if (isset($message_display)) {
    echo "<div class='message'>";
    echo " blabla".$message_display;
    echo "</div>";
}
?>

<div class="container">
<div class="jumbotron">
<div id="main">
    <div id="login">
        <h2 class="glyphicon glyphicon-briefcase"> Connexion</h2><br/><br/>
        <?php echo form_open('users/user_login_process'); ?>
        <?php
        echo "<div class='error_msg'>";
        if (isset($error_message)) {
            echo "<div class='alert alert-danger alert-dismissible' role='alert'>";
            echo "<span class='glyphicon glyphicon-remove' aria-hidden='true'></span>";
            echo " ".$error_message;
            echo "</div>";
        }
        if (validation_errors() != "") {
            echo "<div class='alert alert-danger alert-dismissible' role='alert'>";
            echo "<span class='glyphicon glyphicon-remove' aria-hidden='true'></span>";
            echo " " . validation_errors();
            echo "</div>";
        }
        //echo "</div>";
        ?>
        <fieldset>
        <div class="form-group-lg">
        <label>E-Mail :
        <input type="text" name="mail" id="mail" placeholder="adresse mail"/></label>
        <label>Mot de passe :
        <input type="password" name="password" id="password" placeholder="**********"/>
        <input class="btn btn-success" type="submit" value=" Connexion " name="submit"/></label>
        </div>
        </fieldset>
        <div class="container">

        <a href="/index.php/users/inscription" class="btn btn-info" >Vous n'avez pas de Compte?</a> </div>

        <?php echo form_close(); ?>
    </div>
</div>
    </div>

</div>