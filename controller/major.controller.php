<?php

require './model/major.model.php';

class MajorController extends MajorModel{
    public function majorData($course,$major,$paperm1,$paperm2,$papere1,$papere2,$paperl){
        $this->major($course,$major,$paperm1,$paperm2,$papere1,$papere2,$paperl);
    }

    public function streamData(){
        $stream = $this->stream();
        return $stream;
    }
}
?>