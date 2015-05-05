
<!-- Block de recherche -->
<div class="container">
    <div class="jumbotron" >
        <h2> Partagez vos émotions </h2>
        <p>POST IT est un site qui permet de poster vos messages en direct lors de vos évènements</p>


        <div id="carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicateurs -->
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                 <div class="item active">
                      <img src="http://www.mrfizzix.com/amusementparks/images/carousel2.gif" alt="image1">
                  </div>

                  <div class="item">
                      <img src="/assets/images/Phototropbelle.jpg" alt="image2">
                  </div>

                  <div class="item">
                      <img src="http://www.scalakids.com/Media/Default/images/Carousel_main.jpg" alt="image3">
                  </div>
               </div>

              <!-- Controles -->
            <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <br/>

        <?php
        echo "<div class='error_msg'>";
        if (isset($error_message)) {
            echo $error_message;
        }
        echo validation_errors();
        echo "</div>";
        ?>

       <?php

        echo form_open('accueil/recherche_evenement');
        echo form_open('accueil/recherche_evenement');
        echo form_label("Rechercher un événement : ", "recherche_livewall");
        echo form_input('recherche_livewall','');
        ?>


        <?php

        echo form_submit('submit', 'Submit');
        echo form_close();
        ?>


       <!-- <input type='text' name='evenement' >
        <a href="#" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-search"></span> Rechercher un évènement</a> -->
    </div>
</div>

</br>


</body>
</html>