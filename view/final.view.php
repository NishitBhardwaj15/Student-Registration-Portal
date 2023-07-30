<?php 

require './model/final.model.php';

class FinalView extends FinalModel{
    public function firstData(){
        $first = $this->first();
        return $first;
    }
    public function secondData(){
        $second = $this->second();
        return $second;
    }
    public function thirdData(){
        $third = $this->third();
        return $third;
    }
    public function fourthData(){
        $fourth = $this->fourth();
        return $fourth;
    }
}

?>
