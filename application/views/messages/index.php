
<h2><?php echo $title ?></h2>

<?php foreach ($Messages as $Message):?>

    <ul>
        <li><?php echo $Message['Message']?> - <?php echo $Message['Auteur']?></li>


    </ul>

<?php endforeach ?>