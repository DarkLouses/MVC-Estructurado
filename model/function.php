<?php 

function cast($stdObject,$new_object) {

    $vars = get_object_vars($stdObject);
    foreach ($vars as $key => $valor) {
        $new_object->$key = $valor;
    }

    return $new_object;
}

function cast_array($array,$type) {

    $result = array();
    foreach($array as $object) {
        $casted_object = cast($object,new $type());
        array_push($result,$casted_object);
    }

    return $result;
}

?>