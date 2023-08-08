<?php

require '../config/config.php';

require '../db/db.php';

class AdminModel extends Db
{
    protected function registerAdmin($email, $password, $cpassword){
        $searchEmailQuery = "Select count(*) from admin where email=?";
        $stmt = $this->dbconnect()->prepare($searchEmailQuery);
        $stmt->bindParam(1, $email);
        $stmt->execute();
        $result = $stmt->fetchColumn();

        if ($result > 0) {
            echo '<script>alert("Email already exits")</script>';
        } 
        else {
            if ($password == $cpassword) {
                $passwordHash = password_hash($password, PASSWORD_BCRYPT);

                $insertDetailsQuery = "Insert into admin(email,password) values(?,?)";
                $stmt = $this->dbconnect()->prepare($insertDetailsQuery);
                $stmt->bindParam(1,$email);
                $stmt->bindParam(2,$passwordHash);
                $result = $stmt->execute();

                if($result){    
                    echo '<script>alert("Your admin account is successfully created.");</script>';
                   
                    echo '<script>window.location.href = "http://localhost/student-registration-portal/admin/login.php";</script>';
                }
            }
            else{
                echo '<script>alert("Password and Confirm password do not match")</script>';
            }
        }
    }

    protected function loginAdmin($email,$password){
        $searchAdminQuery = "Select count(*) from admin where email=?";
        $stmt = $this->dbconnect()->prepare($searchAdminQuery);
        $stmt->bindParam(1, $email);
        $stmt->execute();
        $result = $stmt->fetchColumn();

        if ($result != 1) {
            echo '<script>alert("Email or password incorrect")</script>';
        }
        else{
            $searchPasswordQuery = "Select password from admin where email=?";
            $stmt = $this->dbconnect()->prepare($searchPasswordQuery);
            $stmt->bindParam(1, $email);
            $stmt->execute();
            $hash = $stmt->fetchColumn();

            if(!password_verify($password,$hash)){
                echo '<script>alert("Email or password is incorrect")</script>';
            }
            else{
                $_SESSION['admin'] = true; 

                echo '<script>window.location.href = "http://localhost/student-registration-portal/admin/dashboard.php";</script>';
            }
        }
    }
}

