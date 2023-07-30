<?php
if ($stream === "Science") {
    $course = "B.SC";
    $options = array("Physics", "Chemistry", "Mathematics","Zoology","Botany");
} 
elseif ($stream === "Commerce") {
    $course = "B.COM";
    $options = array("Economics", "Business Studies","Accountancy","Mangement");
} 
else{
    $course = "B.A";
    $options = array("Political Science", "Sociology","Economics","English","History","Geography");
}
?>