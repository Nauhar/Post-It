<link rel="stylesheet" href="/assets/css/bootstrap.css" >


<div class="row" style="background-color: <?php echo $design['CouleurFondBandeau']  ?>">
    <div class="col-lg-3" style="background-image: <?php echo $design['Logo'] ?>"></div>
    <div class="col-lg-9" style="color: <?php echo $design['CouleurTexteBandeau'] ?>; font-family: <?php echo $design['Police'] ?>, serif; font-size:20pt"> <?php echo $design["TexteBandeau"] ?> </div>
</div>


<div class="container-fluid" style="padding-top: 5px; font-family: <?php echo $design['Police'] ?>, serif ; background-color: <?php echo $design['CouleurFondPage']  ?> " >

    <div class="row" style="color: <?php echo $design['CouleurMessage'] ?>; font-size: <?php echo $design['TaillePoliceMessage']?>pt">
        <div class="col-lg-3" id="M0"></div>
        <div class="col-lg-3" id="M1"></div>
        <div class="col-lg-3" id="M2"></div>
        <div class="col-lg-3" id="M3"></div>
    </div>
    <div class="row" style="color: <?php echo $design['CouleurMessage'] ?>; font-size: <?php echo $design['TaillePoliceMessage']?>pt">
        <div class="col-lg-3" id="M4"></div>
        <div class="col-lg-3" id="M5"></div>
        <div class="col-lg-3" id="M6"></div>
        <div class="col-lg-3" id="M7"></div>
    </div>

</div>

<div class="container-fluid" style="background-color:<?php echo $design['CouleurFondBandeau'] ?> ; height:80px"></div>

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


<script type="text/javascript" src="/assets/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.js"></script>
<script type="text/javascript">
    // Passage d'une variable au javascript
    var arg='<?php echo $c;?>';
</script>
<script type="text/javascript" src="/assets/js/messages.js"></script>
