<?php
    function myAutoload($Class) {
        if(file_exists('./Models/'.$Class.'.php')) {
            require_once './Models/'.$Class.'.php';
        } elseif(file_exists('./Controllers/'.$Class.'.php')) {
            require_once './Controllers/'.$Class.'.php';
        }
    }
    spl_autoload_register('myAutoload');
    Route::_Route();