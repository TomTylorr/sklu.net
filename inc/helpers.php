<?php

defined('ABSPATH') || exit;


if ( ! function_exists('d')) {
    
    function d($var, $die = true) {
        echo '<pre>';
        print_r($var);
        echo '</pre>';
        if ( $die ) {
            die();
        }
    }
}


if ( ! function_exists('get_vd')) {
    
    function get_vd($var, $die = true) {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
        if ( $die ) {
            die();
        }
    }
}
