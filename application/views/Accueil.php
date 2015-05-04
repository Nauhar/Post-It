
<!-- Block de recherche -->
<div class="container">
    <div class="jumbotron" >
        <h2> Partagez vos émotions </h2>
        <p>POST IT est un site qui permet de poster vos messages en direct lors de vos évènements</p>

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