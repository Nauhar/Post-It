<div class="container" >

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

</div> 

    <?php
    if (!empty($_POST['btn']))
    {
       // echo form_open("accueil/recherche_evenement");
       // echo form_label("Rechercher le livewall d'un événement : ", "recherche_livewall");
        //echo form_input("recherche_livewall","");

        echo form_open('Messages/post/'.$urlevenement);
    }
?>

    
     
         