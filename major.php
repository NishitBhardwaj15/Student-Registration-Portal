<?php require './controller/major.controller.php' ?>

<?php
$major = new MajorController();
$stream = $major->streamData();

require './includes/stream.inc.php';

if (isset($_POST['submit_maj'])) {
    $major = $_POST['major'];
    $paperm1 = $_POST['paperm1'];
    $paperm2 = $_POST['paperm2'];
    $papere1 = $_POST['papere1'];
    $papere2 = $_POST['papere2'];
    $paperl = $_POST['paperl'];

    $programme = new MajorController();
    $programme->majorData($course,$major,$paperm1,$paperm2,$papere1,$papere2,$paperl);
}
?>

<?php 
if($_SESSION['step'] == 3){
   
    require './includes/header.inc.php';

    require './includes/major.inc.php';

    require './includes/footer.inc.php';
}
if($_SESSION['step'] == 4){
    require './includes/header.inc.php';
    
    require './includes/progress.inc.php';
}
?>
