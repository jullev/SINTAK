<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function assetUrl(){
    $url = "http://localhost/newsintak/assets/";
    return $url;
}
function printr($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}
