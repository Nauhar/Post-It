<h2>Modération des messages</h2>
</br>



    <div class="container-fluid" style='margin-left: 3px;'>
        <?php $i = 0 ?>

    <?php

    if (empty($moderationmessages))
        echo "Aucun nouveau message à modérer";
    //var_dump($moderationmessage);

    foreach ($moderationmessages as $moderationmessage):
        echo "<div id='post-".$moderationmessage['IDMessage']."' class='col-lg-7 col-md-9 col-xs-12' style='margin-bottom:10px;'>";
        echo "Auteur : ".$moderationmessage['Auteur']."</br>";
        echo "Message : ".$moderationmessage['Message']."</br>";

        if ($moderationmessage['URLPhoto'] !== '') {
            echo "<img src='" . $moderationmessage['URLPhoto'] . "' style='max-width:300px; max-height:300px;'/></br>";
        }
        ?>

        <a href="#" onclick="valider(<?php echo strval($moderationmessage['IDMessage']); ?>)" class="btn btn-success">Approuver</a>
        <?php
            echo strval($moderationmessage['IDMessage']);
            echo "<a href='#' onclick='valider(".$moderationmessage['IDMessage'].");' class='btn btn-sm btn-success'>pouet</a>";
            echo "<button class='btn btn-sm btn-success' type='button'>Valider</button>&nbsp";
            echo "<button class='btn btn-sm btn-danger' type='button'>Supprimer</button>";
        echo "</div>";


    endforeach;

?>

<script type="text/javascript" src="/assets/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.js"></script>
<script type="text/javascript">


    function valider(id) {

        var validermessage = 'http://localhost:8888/index.php/messages/validermessage/'+id;
        alert(validermessage);

        console.log(id);
        $.post(validermessage, {p: id}, function(data) {
           $("#post-" + id).slideUp();
        });
    }

</script>
<!--<script type="text/javascript" src="/assets/js/moderation.js"></script>



    </div>

