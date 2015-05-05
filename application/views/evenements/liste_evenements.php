<?php

echo "<h2>Liste des évènements</h2>";

echo "</br>";
?>

    <div class="container-fluid" style='margin-left: 10px;'>
            <?php $i = 0 ?>

    <?php foreach ($evenements as $evenement):
        echo "<div id='post-".$evenement['IDEvenement']."' class='row'>";
        echo "<div class='col-lg-3'>".$evenement['NomEvenement']."</div>";
        echo "<div class='col-lg-2'>".$evenement['Lieu']."</div>";
        echo "<div class='col-lg-2'>".$evenement['VilleEvenement']."</div>";
        echo "<div class='col-lg-1'>".$evenement['DateEvenement']."</div>";
        echo "<div class='col-lg-1'><a href='/index.php/messages/index/$evenement[URLEvenement]'>"."Livewall"."</a></div>";?>

        <div class='col-lg-1'>
        <?php if ($evenement['ModerationTexte'] == true){
            echo "<a href='/index.php/messages/moderation_msg/$evenement[URLEvenement]'><span class='glyphicon glyphicon-check'></span>Modération</a>";
         } ?>
        </div>
        <a href="#" onclick="supprimer(<?php echo $evenement['IDEvenement']; ?>)" class="btn btn-danger">Supprimer</a>


        </br></br>
    </div>
    <?php endforeach ?>
    </div>

<a href="/index.php/evenement/creation_evenement" type="button" class="btn btn-default">Créer un évènement</a>
</br>

<script type="text/javascript" src="/assets/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.js"></script>
<script type="text/javascript">


    function supprimer(id) {

        var supprimer = 'http://localhost:8888/index.php/evenement/supprimer/'+id;
        alert(supprimer);

        console.log(id);
        $.post(supprimer, {p: id}, function(data) {
            alert(data);
           if (data == true) {
               alert("evenement supprimé");
               $("#post-" + id).slideUp();
           }else{
               alert("evenement non supprimé");
           }

        });
    }


</script>