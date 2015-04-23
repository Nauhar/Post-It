<h2>Modération des messages</h2>

<div class="container-fluid" style='margin-left: 10px;'>
    <?php $i = 0 ?>

    <?php foreach ($moderationmessages as $moderationmessage):
        echo "<div class='row'>";
        echo"<div class='col-lg-3'>".$moderationmessage['Message']."</div>";
        echo"<div class='col-lg-2'>".$moderationmessage['Auteur']."</div>";
        if ($moderationmessage['URLPhoto'] !== '') {
            echo "<div class='col-lg-2'><img src='" . $moderationmessage['URLPhoto'] . "' style='max-width:300px; max-height:300px;'/></div>";
        }
        echo"<div class='col-lg-1'>".$moderationmessage['DateMessage']."</div>"?>
    <?php endforeach ?>

