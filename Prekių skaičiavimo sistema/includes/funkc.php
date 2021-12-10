<?php

if( !function_exists('prekes_exists') ) {

    //Ar $element atitinka kondicija ar ne
    function prekes_exists() {

        if( isset($_GET['prekes']) AND is_array($_GET['prekes']) AND count($_GET['prekes']) > 0) {
            return true; // break; cikle
        }

        return false;
    }

    //true arba false

}

if( !function_exists('is_param_equal') ) {

    // function is_param_equal($param, $param2) {

    //     if(isset($param) && $param ==  $param2) {
    //         return true;
    //     }

    //     return false;
    // }

    function is_param_equal($method, $key, $compare) {
        
        return (isset($method[$key]) && $method[$key] ==  $compare) ? true : false;

    }

}