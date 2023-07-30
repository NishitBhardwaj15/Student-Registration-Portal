<?php
function isCurrentPage($pageName)
{
    $currentPage = basename($_SERVER['PHP_SELF']);
    return ($currentPage === $pageName);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Portal</title>
    <link rel="stylesheet" href="styles/total.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=REM&display=swap" rel="stylesheet">
</head>

<body>
    <div class="navbar" id="nav">
        <div class="navbar-brand">
            <i class="fa-sharp fa-solid fa-building-columns"></i>
            XYZ College
        </div>
        <div class="navbar-options">
            <strong><a class="nav-links <?php echo isCurrentPage('personal.php') ? 'active' : ''; ?>" href="http://localhost/student-registration-portal/personal.php">Personal Details</a></strong>
            <strong><a class="nav-links <?php echo isCurrentPage('education.php') ? 'active' : ''; ?>" href="http://localhost/student-registration-portal/education.php">Educational Qualification</a></strong>
            <strong><a class="nav-links <?php echo isCurrentPage('major.php') ? 'active' : ''; ?>" href="http://localhost/student-registration-portal/major.php">Programme Details</a></strong>
            <strong><a class="nav-links <?php echo isCurrentPage('documents.php') ? 'active' : ''; ?>" href="http://localhost/student-registration-portal/documents.php">Upload Documents</a></strong>
            <strong><a class="nav-links <?php echo isCurrentPage('view.php') ? 'active' : ''; ?>" href="http://localhost/student-registration-portal/view.php">View Form</a></strong>
        </div>
        
        <div class="navbar-action">
            <a href="http://localhost/student-registration-portal/logout.php">Logout <i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
    </div>