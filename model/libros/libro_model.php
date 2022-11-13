<?php

include_once ("libro_class.php"); 
include_once ("model/database/query.php");
include_once ("model/function.php"); 

class libro_model extends libro_class {

    public function insert_libro () {
        return insert("insert into libros (des, precio, stock, id_autor) values ('$this->des', $this->precio, $this->stock, $this->id_autor)");
    }

    public function delete_libro () {
       return delete('libros',$this->id);
    }

    public function update_libro () {
        return update("update libros set id = $this->id, des = '$this->des', precio = $this->precio, stock= $this->stock, id_autor = $this->id_autor");
    }

    public function get_libro ($id) {
       $select = select_Object("select * from libros where id = $id");
       $libro = cast_array($select, new libro_model())[0];
       return $libro;
    }

}

?>