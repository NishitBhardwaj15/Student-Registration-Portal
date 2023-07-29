<?php 
require './controller/personal.controller.php';
?>

<?php 
if(isset($_POST['submit_personal'])){
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $father = $_POST['father'];
    $mother = $_POST['mother'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $religion = $_POST['religion'];
    $caste = $_POST['caste'];
    $category = $_POST['category'];
    $address = $_POST['address'];
    $tmp = $_POST['tmp'];
    $state = $_POST['state'];
    $district = $_POST['district'];
    $pin = $_POST['pin'];
    $gcontact = $_POST['gcontact'];

    $personal = new PersonalController();
    $personal->personalData($name,$contact,$father,$mother,$dob,$gender,$religion,$caste,$category,$address,$tmp,$state,$district,$pin,$gcontact);
}
?>


<?php
if($_SESSION['step'] == 1){
   
    require './includes/header.inc.php';

    require './includes/personal.inc.php';

    require './includes/footer.inc.php';
}
if($_SESSION['step'] == 2){
    require './includes/header.inc.php';
    
    require './includes/progress.inc.php';
}
?>