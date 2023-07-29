<?php

require './model/personal.model.php';

class PersonalController extends PersonalModel{
    public function personalData($name,$contact,$father,$mother,$dob,$gender,$religion,$caste,$category,$address,$tmp,$state,$district,$pin,$gcontact){
        $this->personal($name,$contact,$father,$mother,$dob,$gender,$religion,$caste,$category,$address,$tmp,$state,$district,$pin,$gcontact);
    }
}
?>