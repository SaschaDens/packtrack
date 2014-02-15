<?php

function gravatar_url($email, $size=null){
    $gravatar = md5(trim($email));
    if(isset($size)) $size = '?s=' . $size;
    return 'http://www.gravatar.com/avatar/' . $gravatar . $size ;
}

function set_active($path, $active = 'active'){
    return Request::is($path) ? $active : '';
}

function sort_by($column, $body)
{
    $direction = (Request::get('direction') == 'asc')? 'desc' : 'asc';
    return link_to_route('employees', $body, array('sortBy' => $column, 'direction' => $direction));
}