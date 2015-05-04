<h1>Login Form</h1>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>


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
    echo $message_display;
    echo "</div>";
}
?>
<div id="main">
    <div id="login">
        <h2>Login Form</h2>
        <?php echo form_open('users/user_login_process'); ?>
        <?php
        echo "<div class='error_msg'>";
        if (isset($error_message)) {
            echo $error_message;
        }
        echo validation_errors();
        echo "</div>";
        ?>
        <label>Mail :</label>
        <input type="text" name="mail" id="mail" placeholder="adresse mail"/>
        <label>Password :</label>
        <input type="password" name="password" id="password" placeholder="**********"/>
        <input type="submit" value=" Login " name="submit"/>
        <a href="/index.php/users/inscription">To SignUp Click Here</a>
        <?php echo form_close(); ?>
    </div>


    <a href="retour_accueil">Retour à la page d'accueil</a>

</div>