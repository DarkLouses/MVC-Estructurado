<?php

class libro_list {

    public $list_autor = array();
  
    public function getList_autor() {
        return $this->list_autor;
    }

    public function setList_autor($list_autor) {
        $this->list_autor = $list_autor;
        return $this;
    }
}

?>