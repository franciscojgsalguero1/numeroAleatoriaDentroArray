<?php
    // devuelve un valor aleatorio de dentro de un array
    function random_value($array, $default=null) {
        $k = mt_rand(0, count($array) - 1);
        return isset($array[$k])? $array[$k]: $default;
    }
    
    $array1 = array();
    
    for ($i=0; $i < 10; $i++) {
        $array1[$i] = rand(0, 1000);
    }
    
    sort($array1);
    
    echo random_value($array1);
    var_dump($array1);    
    
?>