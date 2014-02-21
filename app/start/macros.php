<?php

Form::macro('bt_text', function($name, $value, $label = null, $attr = array())
{
    $element = Form::text($name, $value, mergeArr(array("class" => "form-control"), $attr));
    return bt_wrapper($element, $name, $label);
});

Form::macro('bt_email', function($name, $value, $label = null, $attr = array())
{
    $element = Form::email($name, $value, mergeArr(array("class" => "form-control"), $attr));
    return bt_wrapper($element, $name, $label);
});

Form::macro('bt_textarea', function($name, $value, $label = null, $attr = array())
{
    $element = Form::textarea($name, $value, mergeArr(array("class" => "form-control"), $attr));
    return bt_wrapper($element, $name, $label);
});

Form::macro('bt_password', function($name, $label = null, $attr = array())
{
    $element = Form::password($name, mergeArr(array("class" => "form-control"), $attr));
    return bt_wrapper($element, $name, $label);
});

Form::macro('bt_button', function($name, $attr = array())
{
    $element = Form::submit($name, mergeArr(array("class" => "btn"), $attr));
    return bt_wrapper($element, $name);
});

HTML::macro('package_log', function($type, $date, $message, $map = null){
    $config = typeGenerator($type);

    $out = '<article><div class="date"><span class="glyphicon ' . $config['icon'] . '"></span></div>';
    $out .= '<div class="arrow-left"></div><div class="articleblock">';
    $out .= "<small class=\"pull-right\">$date</small>";
    $out .= '<h3>' . $config['title'] . '</h3>';
    $out .= '<p>' . $message . '</p>';
    $out .= '</div></article>';
    return $out;
});

function typeGenerator($type){
    $out = "";
    switch($type)
    {
        case 'registration':
            $out = array('icon' => 'glyphicon-tag', 'title' => 'Package Registered');
            break;
        case 'pickup':
            $out = array('icon' => 'glyphicon-send', 'title' => 'Package in pickup center');
            break;
        case 'road':
            $out = array('icon' => 'glyphicon-road', 'title' => 'Package on the road');
            break;
        case 'arrived':
            $out = array('icon' => 'glyphicon-inbox', 'title' => 'Package Arrived');
            break;
        case 'recieved':
            $out = array('icon' => 'glyphicon-ok', 'title' => 'Arrived on destination');
            break;
    }

    return $out;
}

function getLabel($name, $label)
{
	if(isset($label))
	{
		return Form::label($name, $label, array('class' => 'control-label'));
	}

	return '';
}

function fieldError($field)
{
	$error = "";
	if($errors = Session::get('errors'))
	{
		$error = $errors->first($field) ? "has-error" : "";
	}
	return $error;
}

function bt_wrapper($element, $name, $label = null)
{
	$out = "<div class='form-group ";
	$out .= fieldError($name) . " '>";
	$out .= getLabel($name, $label);
	$out .= $element;
	$out .= "</div>";

	return $out;
}

//<div class="form-group">

function mergeArr($arr1, $arr2)
{
	$output = array_merge_recursive($arr1, $arr2);
	$keys = array();
	$vals = array();

	foreach ($output as $key => $val) {
		$s = "";
		$s = (is_array($val)) ? implode(" ", $val) : $val;

		array_push($keys, $key);
		array_push($vals, $s);

	}

	return array_combine($keys, $vals);
}