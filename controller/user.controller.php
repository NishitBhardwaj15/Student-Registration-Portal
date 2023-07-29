<?php require './model/user.model.php' ?>

<?php
class UserController extends UserModel{
    public function registerData($email,$password, $cpassword){
        $this->register($email,$password, $cpassword);
    }

    public function loginData($email,$password){
        $this->login($email,$password);
    }
}
?>