<?php 
require './config/config.php';

if(!$_SESSION['email']){
    header('Location:http://localhost/student-registration-portal/');
}

require './db/db.php';

class FinalModel extends Db{
    protected function first(){
        $getFirstQuery = "Select name,contact,semester,father,mother,dob,gender,religion,caste,category,address,state,district from personal where user_id=?";
        $stmt = $this->dbconnect()->prepare($getFirstQuery);
        $stmt->bindParam(1,$_SESSION['id']);
        $stmt->execute();
        $result = $stmt->fetch();

        if($result){
            return $result;
        }
        else{
            echo '<script>alert("Something went wrong 1")</script>';
        }
    }
    protected function second(){
        $getSecondQuery = "Select school,passing,stream,board,total,percent from academic where user_id=?";
        $stmt = $this->dbconnect()->prepare($getSecondQuery);
        $stmt->bindParam(1,$_SESSION['id']);
        $stmt->execute();
        $result = $stmt->fetch();

        if($result){
            return $result;
        }
        else{
            echo '<script>alert("Something went wrong 2")</script>';
        }
    }
    protected function third(){
        $getThirdQuery = "Select course,major,paper1,paper2,elec1,elec2,lab1 from programme where user_id=?";
        $stmt = $this->dbconnect()->prepare($getThirdQuery);
        $stmt->bindParam(1,$_SESSION['id']);
        $stmt->execute();
        $result = $stmt->fetch();

        if($result){
            return $result;
        }
        else{
            echo '<script>alert("Something went wrong 3")</script>';
        }
    }
    protected function fourth(){
        $getFourthQuery = "Select photo_src,marks_src,identity_src from documents where user_id=?";
        $stmt = $this->dbconnect()->prepare($getFourthQuery);
        $stmt->bindParam(1,$_SESSION['id']);
        $stmt->execute();
        $result = $stmt->fetch();

        if($result){
            return $result;
        }
        else{
            echo '<script>alert("Something went wrong 4")</script>';
        }
    }
}
