<?php 

require './config/config.php';

if(!$_SESSION['email']){
    header('Location:http://localhost/student-registration-portal/');
}

require './db/db.php';

class DocumentsModel extends Db{
    protected function document($photo,$marks,$identity){
        $id = $_SESSION['id'];

        $setDocQuery = "Insert into documents(photo_src,marks_src,identity_src,user_id) values(?,?,?,?)";
        $stmt = $this->dbconnect()->prepare($setDocQuery);
        $stmt->bindParam(1,$photo);
        $stmt->bindParam(2,$marks);
        $stmt->bindParam(3,$identity);
        $stmt->bindParam(4,$id);
        $result = $stmt->execute();

        if(!$result){
            echo '<script>alert("Something went wrong!!")</script>';
        }
        else{
            $step = 5;
            $progressStepQuery = "Update users Set step=? Where email=?";
            $stmt = $this->dbconnect()->prepare($progressStepQuery);
            $stmt->bindParam(1, $step);
            $stmt->bindParam(2, $_SESSION['email']);
            $result = $stmt->execute();

            if($result){
                $_SESSION['step'] = $step;

                echo '<script>window.location.href = "http://localhost/student-registration-portal/view.php";</script>';
            }

            else{
                echo '<script>alert("Something went wrong")</script>';
            }
        }
    }
}
