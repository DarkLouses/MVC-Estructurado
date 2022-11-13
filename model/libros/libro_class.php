<?php

class libro_class {
    
    public $id;
    public $des;
    public $precio;
    public $stock;
    public $id_autor; // foreing key

    // get //
    public function getId_libro() {
        return $this->id_libro;
    }

    public function getDes_libro() {
        return $this->des_libro;
    }

    public function getPrecio_libro() {
        return $this->precio_libro;
    }

    public function getStock_libro() {
        return $this->stock_libro;
    }

    public function getId_autor() {
        return $this->id_autor;
    }

    // set //
    public function setId_libro($id_libro) {
        $this->id_libro = $id_libro;
        return $this;
    }

    public function setDes_libro($des_libro) {
        $this->des_libro = $des_libro;
        return $this;
    }

    public function setPrecio_libro($precio_libro) {
        $this->precio_libro = $precio_libro;
        return $this;
    }

    public function setStock_libro($stock_libro) {
        $this->stock_libro = $stock_libro;
        return $this;
    }

    public function setId_autor($id_autor) {
        $this->id_autor = $id_autor;
        return $this;
    }
}

?>