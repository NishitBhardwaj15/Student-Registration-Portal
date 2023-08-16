<?php

require './config/config.php';



require './db/db.php';

class UserModel extends Db
{
    protected function register($email, $password, $cpassword){
        $searchEmailQuery = "Select count(*) from users where email=?";
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

                $step = 0;
                $insertDetailsQuery = "Insert into users(email,password,step) values(?,?,?)";
                $stmt = $this->dbconnect()->prepare($insertDetailsQuery);
                $stmt->bindParam(1,$email);
                $stmt->bindParam(2,$passwordHash);
                $stmt->bindParam(3,$step);
                $result = $stmt->execute();

                if($result){
                    echo '<script>alert("Your account is successfully created, please log in to complete the registration process");</script>';
                   
                    echo '<script>window.location.href = "http://localhost/student-registration-portal/";</script>';
                }
            }
            else{
                echo '<script>alert("Password and Confirm password do not match")</script>';
            }
        }
    }

    protected function login($email,$password){
        $searchUsernameQuery = "Select count(*) from users where email=?";
        $stmt = $this->dbconnect()->prepare($searchUsernameQuery);
        $stmt->bindParam(1, $email);
        $stmt->execute();
        $result = $stmt->fetchColumn();

        if ($result != 1) {
            echo '<script>alert("Email or password incorrect")</script>';
        }
        else{
            $searchPasswordQuery = "Select password from users where email=?";
            $stmt = $this->dbconnect()->prepare($searchPasswordQuery);
            $stmt->bindParam(1, $email);
            $stmt->execute();
            $hash = $stmt->fetchColumn();

            if(!password_verify($password,$hash)){
                echo '<script>alert("Email or password is incorrect")</script>';
            }
            else{
                $searchIdQuery = "Select user_id from users where email=?";
                $stmt = $this->dbconnect()->prepare($searchIdQuery);
                $stmt->bindParam(1, $email);
                $stmt->execute();
                $id = $stmt->fetchColumn();

                $searchStepQuery = "Select step from users where email=?";
                $stmt = $this->dbconnect()->prepare($searchStepQuery);
                $stmt->bindParam(1, $email);
                $stmt->execute();
                $result = $stmt->fetchColumn();
        
                if ($result == 0) {
                    $step = 1;
                    $progressStepQuery = "Update users Set step=? Where email=?";
                    $stmt = $this->dbconnect()->prepare($progressStepQuery);
                    $stmt->bindParam(1, $step);
                    $stmt->bindParam(2, $email);
                    $result = $stmt->execute();

                    if($result){
                        $_SESSION['email'] = $email;
                        $_SESSION['step'] = $step;
                        $_SESSION['id'] = $id;

                        echo '<script>window.location.href = "http://localhost/student-registration-portal/personal.php";</script>';
                    }

                    else{
                        echo '<script>alert("Something went wrong")</script>';
                    }
                }
                else{
                    $searchStepQuery = "Select step from users where email=?";
                    $stmt = $this->dbconnect()->prepare($searchStepQuery);
                    $stmt->bindParam(1, $email);
                    $stmt->execute();
                    $step = $stmt->fetchColumn();

                    $_SESSION['email'] = $email;
                    $_SESSION['step'] = $step;
                    $_SESSION['id'] = $id;

                    echo '<script>window.location.href = "http://localhost/student-registration-portal/personal.php";</script>';
                }
            }
        }
    }
}

