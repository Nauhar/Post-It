
    <!-- Barre de navigation-->
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">POST IT</a>
            </div>

            <ul class="nav navbar-nav">
                <li class="active"><a href="#">A propos de POST IT</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($this->session->userdata['logged_in'])) { ?>
                <li><a href ="/index.php/users/logout"><span class ="glyphicon glyphicon-log-out"</span> Déconnexion</a></li>
                <?php }else{?>
                <li><a href="/index.php/users/login"><span class="glyphicon glyphicon-log-in"></span> S'identifier</a></li>
                <li><a href="/index.php/users/inscription"><span class="glyphicon glyphicon-leaf"></span> Créer un compte</a></li>
                <?php }?>
            </ul>
      <!--  </div> -->
    </nav>

 <div id="navbar" class="collapse navbar-collapse">
     <?php if (isset($this->session->userdata['logged_in'])) {
                    echo "<li><a href='/index.php/evenement/index'>Mes évènements</a></li>";
                }?>


                <?php if (isset($this->session->userdata['logged_in'])) {
                    //Si on est connecté
                    // ajouter le code HTML dans un echo""
                }
                else{
                    //Si on est pas connecté
                    //Ajouter le code HTML dans un echo ""

                }
                ?>

            </div><!--/.nav-collapse -->



    <?php
    if (!empty($_POST['btn']))
    {
       // echo form_open("accueil/recherche_evenement");
       // echo form_label("Rechercher le livewall d'un événement : ", "recherche_livewall");
        //echo form_input("recherche_livewall","");

        echo form_open('Messages/post/'.$urlevenement);
    }
?>

    
     
         