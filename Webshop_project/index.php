<?php

function myAutoload($class_name){
    if(file_exists('./classes/'.$class_name.'.php')){
        require_once './classes/'.$class_name.'.php';
    }elseif(file_exists('./Controllers/'.$class_name.'.php')){
        require_once './Controllers/'.$class_name.'.php';
    }
}
    
spl_autoload_register('myAutoload');

require_once('Routes.php');

?>