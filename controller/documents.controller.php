<?php 

require './model/documents.model.php';

class DocumentsController extends DocumentsModel{
    public function documentData($photo,$marks,$identity){
        $this->document($photo,$marks,$identity);
    }
}
?>