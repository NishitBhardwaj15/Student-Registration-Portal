<?php require './view/final.view.php' ?>

<?php
$final = new FinalView();

$first = $final->firstData();
$second = $final->secondData();
$third = $final->thirdData();
$fourth = $final->fourthData(); 

?>

<?php 
if($_SESSION['step'] == 5){
   
    require './includes/header.inc.php';

    require './includes/view.inc.php';

    require './includes/footer.inc.php';
}

?>