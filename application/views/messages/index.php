
<h2><?php echo $title ?></h2>

<div class="container-fluid">
    <div class="row">

        <?php $i = 0 ?>
        <?php foreach ($Messages as $Message):?>
            <?php $i++ ?>

            <?php if($i === 5){
                echo "</div>";
                echo "<div class='row'>";
            }
            ?>

            <div class="col-lg-3">
                <?php echo $Message['Message']?> - <?php echo $Message['Auteur']?>
            </div>
        <?php endforeach ?>


    </div>

</div>



