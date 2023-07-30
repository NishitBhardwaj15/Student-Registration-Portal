<?php require './controller/documents.controller.php' ?>

<?php
$id = $_SESSION['id'];

if(isset($_POST["submit_doc"])){

    $photo = $_FILES['photo']['name'];
    $photoTmp = $_FILES['photo']['tmp_name'];
    $extensionPhoto = pathinfo($photo, PATHINFO_EXTENSION);
    $userPhoto = $id . "p" . "." . $extensionPhoto;

    $marks = $_FILES['marks']['name'];
    $marksTmp = $_FILES['marks']['tmp_name'];
    $extensionMarks = pathinfo($marks, PATHINFO_EXTENSION);
    $userMarks = $id . "m" . "." . $extensionMarks; 

    $identity = $_FILES['identity']['name'];
    $identityTmp = $_FILES['identity']['tmp_name'];
    $extensionIdentity = pathinfo($identity, PATHINFO_EXTENSION);
    $userIdentity = $id . "i" . "." . $extensionIdentity;

    $folderPhoto = "uploads/" . $userPhoto;
    $folderMarks = "uploads/" . $userMarks;
    $folderIdentity = "uploads/" . $userIdentity;

    move_uploaded_file($photoTmp,$folderPhoto);
    move_uploaded_file($marksTmp,$folderMarks);
    move_uploaded_file($identityTmp,$folderIdentity);

    $documents = new DocumentsController();
    $documents->documentData($folderPhoto,$folderMarks,$folderIdentity);

}
?>

<?php 
if($_SESSION['step'] == 4){
   
    require './includes/header.inc.php';

    require './includes/doc.inc.php';

    require './includes/footer.inc.php';
}
if($_SESSION['step'] > 4){
    require './includes/header.inc.php';
    
    require './includes/progress.inc.php';
}
?>