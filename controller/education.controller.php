<?php

require './model/education.model.php';

class EducationController extends EducationModel{
    public function educationData($school,$saddress,$year,$stream,$board,$sub1,$sub2,$sub3,$sub4,$sub5,$tot,$percent){
        $this->education($school,$saddress,$year,$stream,$board,$sub1,$sub2,$sub3,$sub4,$sub5,$tot,$percent);
    }
}
?>