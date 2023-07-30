<?php 

require './db/db.php';

class FinalModel extends Db{
    protected function final(){
        $getUserQuery = "Select Name,Mail,Phone from userdetail where Mail=?";
        $stmt = $this->dbconnect()->prepare($getUserQuery);
        $stmt->bindParam(1,$mail);
        $stmt->execute();
        $result = $stmt->fetch();

        if($result){
            return $result;
        }
        else{
            echo '<script>alert("Something went wrong")</script>';
        }
    }
    protected function getPersonal($mail){
        $getPersonalQuery = "Select Father,Mother,Dob,Religion,Category,School,Board,Year,Total,Percentage from personalinfo where Mail=?";
        $stmt = $this->dbconnect()->prepare($getPersonalQuery);
        $stmt->bindParam(1,$mail);
        $stmt->execute();
        $result = $stmt->fetch();

        if($result){
            return $result;
        }
        else{
            echo '<script>alert("Something went wrong")</script>';
        }
    }
    protected function getElective($mail){
        $getElectiveQuery = "Select Stream,Elective1,Elective2 from elective where Mail=?";
        $stmt = $this->dbconnect()->prepare($getElectiveQuery);
        $stmt->bindParam(1,$mail);
        $stmt->execute();
        $result = $stmt->fetch();

        if($result){
            return $result;
        }
        else{
            echo '<script>alert("Something went wrong")</script>';
        }
    }
    protected function getAddress($mail){
        $getElectiveQuery = "Select Address,State,District,Pincode,Gcontact from addressinfo where Mail=?";
        $stmt = $this->dbconnect()->prepare($getElectiveQuery);
        $stmt->bindParam(1,$mail);
        $stmt->execute();
        $result = $stmt->fetch();

        if($result){
            return $result;
        }
        else{
            echo '<script>alert("Something went wrong")</script>';
        }
    }
}

?>