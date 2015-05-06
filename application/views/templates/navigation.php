
    <!-- Barre de navigation-->
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/index.php/accueil/index">POST IT</a>
            </div>

            <ul class="nav navbar-nav">
                <li><a href="#">A propos de POST IT</a></li>
                <?php if (isset($this->session->userdata['logged_in'])) { ?>
                    <li><a href ="/index.php/evenement/index">Vos évènements</a></li>
                <?php }?>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($this->session->userdata['logged_in'])) { ?>
                <li><p class="navbar-text" style="margin: 0px"><?php echo $this->session->userdata['NomUtilisateur']." ".$this->session->userdata['PrenomUtilisateur'];?></p><a href ="/index.php/users/logout"><span class ="glyphicon glyphicon-log-out"></span> Déconnexion</a></li>
                <?php }else{?>
                <li><a href="/index.php/users/login"><span class="glyphicon glyphicon-log-in"></span> S'identifier</a></li>
                <li><a href="/index.php/users/inscription"><span class="glyphicon glyphicon-leaf"></span> Créer un compte</a></li>
                <?php }?>
            </ul>
      <!--  </div> -->
    </nav>


    
     
         