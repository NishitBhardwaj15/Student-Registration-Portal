<?php 

require './config/config.php';

if(!$_SESSION['email']){
    header('Location:http://localhost/student-registration-portal/');
}

require './db/db.php';

class PersonalModel extends Db{
    protected function personal($name,$contact,$father,$mother,$dob,$gender,$religion,$caste,$category,$address,$tmp,$state,$district,$pin,$gcontact){

        $semester = 1;
        $id = $_SESSION['id'];

        $setPersonalQuery = "Insert into personal(name,contact,semester,father,mother,dob,gender,religion,caste,category,address,tmpaddress,state,district,pin,contactparent,user_id) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->dbconnect()->prepare($setPersonalQuery);
        $stmt->bindParam(1,$name);
        $stmt->bindParam(2,$contact);
        $stmt->bindParam(3,$semester);
        $stmt->bindParam(4,$father);
        $stmt->bindParam(5,$mother);
        $stmt->bindParam(6,$dob);
        $stmt->bindParam(7,$gender);
        $stmt->bindParam(8,$religion);
        $stmt->bindParam(9,$caste);
        $stmt->bindParam(10,$category);
        $stmt->bindParam(11,$address);
        $stmt->bindParam(12,$tmp);
        $stmt->bindParam(13,$state);
        $stmt->bindParam(14,$district);
        $stmt->bindParam(15,$pin);
        $stmt->bindParam(16,$gcontact);
        $stmt->bindParam(17,$id);
        $result = $stmt->execute();

        if(!$result){
            echo '<script>alert("Something went wrong!!")</script>';
        }
        else{
            $step = 2;
            $progressStepQuery = "Update users Set step=? Where email=?";
            $stmt = $this->dbconnect()->prepare($progressStepQuery);
            $stmt->bindParam(1, $step);
            $stmt->bindParam(2, $_SESSION['email']);
            $result = $stmt->execute();

            if($result){
                $_SESSION['step'] = $step;

                echo '<script>window.location.href = "http://localhost/student-registration-portal/education.php";</script>';
            }

            else{
                echo '<script>alert("Something went wrong")</script>';
            }
        }
    }
}
