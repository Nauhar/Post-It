
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

</br>
</br>
</br>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3" id="M1">M1</div>
        <div class="col-lg-3" id="M2">M2</div>
        <div class="col-lg-3" id="M3">M3</div>
        <div class="col-lg-3" id="M4">M4</div>
    </div>
    <div class="row">
        <div class="col-lg-3" id="M5">M5</div>
        <div class="col-lg-3" id="M6">M6</div>
        <div class="col-lg-3" id="M7">M7</div>
        <div class="col-lg-3" id="M8">M8</div>
    </div>
</div>


<?php // var_dump($_SERVER); ?>
<a href="#" onclick="updateMsg()">lien</a>

<script type="text/javascript" src="/assets/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.js"></script>
<script type="text/javascript" src="/assets/js/messages.js"></script>
<script type="text/javascript">

</script>
