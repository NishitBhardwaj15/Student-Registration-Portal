<?php 

session_start();

if(!$_SESSION['email']){
    header('Location:http://localhost/student-registration-portal/');
}

require './db/db.php';

class EducationModel extends Db{
    protected function education($school,$saddress,$year,$stream,$board,$sub1,$sub2,$sub3,$sub4,$sub5,$tot,$percent){

        $id = $_SESSION['id'];

        $setEduQuery = "Insert into academic(school,schooladdress,passing,stream,board,sub1,sub2,sub3,sub4,sub5,total,percent,user_id) values(?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->dbconnect()->prepare($setEduQuery);
        $stmt->bindParam(1,$school);
        $stmt->bindParam(2,$saddress);
        $stmt->bindParam(3,$year);
        $stmt->bindParam(4,$stream);
        $stmt->bindParam(5,$board);
        $stmt->bindParam(6,$sub1);
        $stmt->bindParam(7,$sub2);
        $stmt->bindParam(8,$sub3);
        $stmt->bindParam(9,$sub4);
        $stmt->bindParam(10,$sub5);
        $stmt->bindParam(11,$tot);
        $stmt->bindParam(12,$percent);
        $stmt->bindParam(13,$id);
        $result = $stmt->execute();

        if(!$result){
            echo '<script>alert("Something went wrong!!")</script>';
        }
        else{
            $step = 3;
            $progressStepQuery = "Update users Set step=? Where email=?";
            $stmt = $this->dbconnect()->prepare($progressStepQuery);
            $stmt->bindParam(1, $step);
            $stmt->bindParam(2, $_SESSION['email']);
            $result = $stmt->execute();

            if($result){
                $_SESSION['step'] = $step;

                echo '<script>window.location.href = "http://localhost/student-registration-portal/major.php";</script>';
            }

            else{
                echo '<script>alert("Something went wrong")</script>';
            }
        }
    }
}
?>