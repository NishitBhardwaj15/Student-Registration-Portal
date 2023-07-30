<?php 
require './controller/education.controller.php';
?>

<?php 
if(isset($_POST['submit_edu'])){
    $school = $_POST['school'];
    $saddress = $_POST['saddress'];
    $year = $_POST['year'];
    $stream = $_POST['stream'];
    $board = $_POST['board'];
    $sub1 = $_POST['sub1'];
    $sub2 = $_POST['sub2'];
    $sub3 = $_POST['sub3'];
    $sub4 = $_POST['sub4'];
    $sub5 = $_POST['sub5'];
    $tot = $_POST['total'];
    $percent = $_POST['percent'];

    $edu = new EducationController();
    $edu->educationData($school,$saddress,$year,$stream,$board,$sub1,$sub2,$sub3,$sub4,$sub5,$tot,$percent);
}
?>

<?php 
if($_SESSION['step'] == 2){
   
    require './includes/header.inc.php';

    require './includes/edu.inc.php';

    require './includes/footer.inc.php';
}
if($_SESSION['step'] == 3){
    require './includes/header.inc.php';
    
    require './includes/progress.inc.php';
}
?>