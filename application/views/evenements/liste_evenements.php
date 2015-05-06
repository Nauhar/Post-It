<?php

echo "<h2>Liste des évènements</h2>";

echo "</br>";
?>

    <div class="container-fluid" style='margin-left: 10px;'>
            <?php $i = 0 ?>





        <table class="table table-striped">

        <!-- On rows -->
            <tr>
                <td><b>Nom de l'évènement</b></td>
                <td><b>Lieu de l'évènement</b></td>
                <td><b>Ville de l'évènement</b></td>
                <td><b>Date de l'évènement</b></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        <?php foreach ($evenements as $evenement): ?>
            <tr>
                <?php echo "<div id='post-".$evenement['IDEvenement']."' class='row'>"?>
                <td><?php echo $evenement['NomEvenement']?></td>
                <td><?php echo $evenement['Lieu']?></td>
                <td><?php echo $evenement['VilleEvenement']?></td>
                <td><?php echo $evenement['DateEvenement']?></td>
                <td><?php echo "<a href='/index.php/messages/index/$evenement[URLEvenement]'>"."Livewall"."</a>"?></td>
                <td>
                    <?php if ($evenement['ModerationTexte'] == true){
                        echo "<a href='/index.php/messages/moderation_msg/$evenement[URLEvenement]'><span class='glyphicon glyphicon-check'></span>Modération</a>";
                    }
                    ?>
                </td>
                <td><a href="#" onclick="supprimer(<?php echo $evenement['IDEvenement']; ?>)" class="btn btn-danger">Supprimer</a></td>
                </div>
            </tr>
        <?php endforeach ?>

        </table>


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