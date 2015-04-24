<h2>Modération des messages</h2>
</br>

    <div class="container-fluid" style='margin-left: 3px;'>
        <?php $i = 0 ?>

    <?php foreach ($moderationmessages as $moderationmessage):
        echo "<div class='col-lg-7 col-md-9 col-xs-12' style='margin-bottom:10px;'>Auteur : ".$moderationmessage['Auteur']."</br>Message : ".$moderationmessage['Message']."</br>";
            if ($moderationmessage['URLPhoto'] !== '') {
                echo "<img src='" . $moderationmessage['URLPhoto'] . "' style='max-width:300px; max-height:300px;'/></br>";
            }
            echo "<button class='btn btn-sm btn-success' type='button'>Valider</button>&nbsp";
            echo "<button class='btn btn-sm btn-danger' type='button'>Supprimer</button>";
            echo "</div>";

    endforeach ?>
    </div>

