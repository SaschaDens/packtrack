<?php

Form::macro('bt_text', function($name, $value, $label = null, $attr = array())
{
    $element = Form::text($name, $value, mergeArr(array("class" => "form-control"), $attr));
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