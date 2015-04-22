<div class="container" >
  
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container"> 
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
          </button>
          <a class="navbar-brand" href="#">POST IT</a> 
 <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="#Accueil">A propos de POST IT</a></li>
                  <!-- <form class='navbar-form navbar-right inline-form' method="post" action="">
                        <li> <input type='search' class='input-sm form-control' placeholder=''>
                            <span> 
                            <button type='submit' name='btn' class='btn btn-primary btn-sm glyphicon glyphicon-eye-open'>
                            Rechercher un évènement
                                </button>

                            </span>
                        </li>
                     </form>-->

                </li>
             </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>  
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

    
     
         