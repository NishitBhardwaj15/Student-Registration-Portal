<?php

require '../config/config.php';

if(!$_SESSION['admin']){
    header('Location:http://localhost/student-registration-portal/admin/login.php');
}

require '../db/db.php';

class DashboardModel extends Db{
    protected function dashboard(){
        $studentQuery = "Select u.user_id, u.email,u.step,p.name,p.contact,a.total,a.percent,d.photo_src,d.marks_src from users u left join personal p on u.user_id = p.user_id left join academic a on u.user_id = a.user_id left join documents d on u.user_id = d.user_id";
        $stmt = $this->dbconnect()->prepare($studentQuery);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if($result){
            return $result;
        }
        else{
            echo '<script>alert("Something went wrong")</script>';
        }
    }
}

