<?php

function get_links($string, $spacer){
        $arr = array();
        $arr = explode($spacer, $string);
    return $arr;
}

function make_string_toArray($string, $spacer){
    $count = 0;
    foreach($string as $str){
        $arr[] = array();
        $arr[$count] = explode($spacer, $str);
        $count += 1;
    }
    return $arr;
}


