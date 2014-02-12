<?php

function gravatar_url($email, $size=null){
    $gravatar = md5(trim($email));
    if(isset($size)) $size = '?s=' . $size;
    return 'http://www.gravatar.com/avatar/' . $gravatar . $size ;
}

function set_active($path, $active = 'active'){
    return Request::is($path) ? $active : '';
}