<?php

class libro_list {

    public $list_libro = array();

    public function getList_libro() {
        return $this->list_libro;
    }

    public function setList_libro($list_libro) {
        $this->list_libro = $list_libro;
        return $this;
    }

    public function get_libro_List() {
        $select = select_Object("select * from libros");
        $this->list_libro = cast_array($select, new libro_model());
        return $this->list_libro;
    }
}



?>