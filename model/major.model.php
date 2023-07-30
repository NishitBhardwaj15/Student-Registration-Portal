<?php 

session_start();

if(!$_SESSION['email']){
    header('Location:http://localhost/student-registration-portal/');
}

require './db/db.php';

class MajorModel extends Db{
    protected function major($course,$major,$paperm1,$paperm2,$papere1,$papere2,$paperl){

        $semester = 1;
        $id = $_SESSION['id'];
        $credit = 50;

        $setMajorQuery = "Insert into programme(course,semester,major,paper1,paper2,elec1,elec2,lab1,credits,user_id) values(?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->dbconnect()->prepare($setMajorQuery);
        $stmt->bindParam(1,$course);
        $stmt->bindParam(2,$semester);
        $stmt->bindParam(3,$major);
        $stmt->bindParam(4,$paperm1);
        $stmt->bindParam(5,$paperm2);
        $stmt->bindParam(6,$papere1);
        $stmt->bindParam(7,$papere2);
        $stmt->bindParam(8,$paperl);
        $stmt->bindParam(9,$credit);
        $stmt->bindParam(10,$id);
        $result = $stmt->execute();

        if(!$result){
            echo '<script>alert("Something went wrong!!")</script>';
        }
        else{
            $step = 4;
            $progressStepQuery = "Update users Set step=? Where email=?";
            $stmt = $this->dbconnect()->prepare($progressStepQuery);
            $stmt->bindParam(1, $step);
            $stmt->bindParam(2, $_SESSION['email']);
            $result = $stmt->execute();

            if($result){
                $_SESSION['step'] = $step;

                echo '<script>window.location.href = "http://localhost/student-registration-portal/documents.php";</script>';
            }

            else{
                echo '<script>alert("Something went wrong")</script>';
            }
        }
    }

    protected function stream(){
        $id = $_SESSION['id'];

        $searchStreamQuery = "Select stream from academic where user_id=?";
        $stmt = $this->dbconnect()->prepare($searchStreamQuery);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $stream = $stmt->fetchColumn();
        return $stream;
    }
}
?>