<link rel="stylesheet" href="/assets/css/bootstrap.css" >
<link rel="stylesheet" href="/assets/css/postIT_css.css" >

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
<div class="en_tete">
    <div class="col-lg-3 logo"> LOGO </div>
    <div class="col-lg-9 info_bandeau"> SEnd Msg to #gala </div>
</div>

<?php var_dump($design); ?>

<div class="container1" style="font: <?php echo $design['Police'] ?>" >

    <div class="row">
        <div class="col-lg-3" id="M0">M0</div>
        <div class="col-lg-3" id="M1">M1</div>
        <div class="col-lg-3" id="M2">M2</div>
        <div class="col-lg-3" id="M3">M3</div>
    </div>
    <div class="row ligne2">
        <div class="col-lg-3" id="M4">M4</div>
        <div class="col-lg-3" id="M5">M5</div>
        <div class="col-lg-3" id="M6">M6</div>
        <div class="col-lg-3" id="M7">M7</div>
    </div>

</div>

<div class="partenaires"> PARTENAIRES</div>

<?php  /*var_dump($_SERVER['PATH_INFO']);
$x = explode("/", $_SERVER['PATH_INFO']);
var_dump ($x);
$y = $x['3'];
var_dump ($y);
*/

?>
<br/>
<br/>

<?php

$a = $this->input->server('PATH_INFO');
$b = explode("/", $a);
$c = $b[3];

?>

<a href="#" onclick="updateMsg()">lien</a>


<script type="text/javascript" src="/assets/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.js"></script>
<script type="text/javascript">
    // Passage d'une variable au javascript
    var arg='<?php echo $c;?>';
</script>
<script type="text/javascript" src="/assets/js/messages.js"></script>
