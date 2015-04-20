<?php

echo "Liste des évènements";

echo "</br></br></br>";
?>

<div class="container-fluid" style='margin-left: 10px;'>
            <?php $i = 0 ?>

<?php foreach ($evenements as $evenement):
        echo "<div class='row'>";
        echo "<div class='col-lg-3'>".$evenement['NomEvenement']."</div>"?> <?php echo "<div class='col-lg-2'>".$evenement['Lieu']."</div>"?> <?php echo "<div class='col-lg-2'>".$evenement['VilleEvenement']."</div>"?> <?php echo "<div class='col-lg-1'>".$evenement['DateEvenement']."</div>"?> <?php echo "<div class='col-lg-1'><a href='/messages/index/$evenement[URLEvenement]'>"."Livewall"."</a></div>"?> <?php echo "<div class='col-lg-1'>"."Modération"."</div>"?>
    </div>
<?php endforeach ?>

</div>


<?php
echo "</br>";
echo form_submit('submit', 'Créer un évènement');

echo "</br></br></br>";
?>