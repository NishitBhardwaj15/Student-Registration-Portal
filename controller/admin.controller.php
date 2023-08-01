<?php require '../model/admin.model.php' ?>

<?php
class AdminController extends AdminModel{
    public function registerAdminData($email,$password, $cpassword){
        $this->registerAdmin($email,$password, $cpassword);
    }

    public function loginAdminData($email,$password){
        $this->loginAdmin($email,$password);
    }
}
?>