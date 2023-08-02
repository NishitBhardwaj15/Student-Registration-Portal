<?php 
session_start();

session_unset();

session_destroy();

header('Location:http://localhost/student-registration-portal/admin/login.php');
?>