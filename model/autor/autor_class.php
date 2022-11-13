<?php 

class autor_class {
    public $id_autor;
    public $nombre_autor;

    // get //
    public function getId_autor() {
        return $this->id_autor;
    }

    public function getNombre_autor() {
        return $this->nombre_autor;
    }

    // setter //
    public function setId_autor($id_autor) {
        $this->id_autor = $id_autor;
        return $this;
    }

    public function setNombre_autor($nombre_autor) {
        $this->nombre_autor = $nombre_autor;
        return $this;
    }
}




?>