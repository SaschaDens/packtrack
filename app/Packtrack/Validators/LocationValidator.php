<?php namespace Packtrack\Validators;

class LocationValidator extends Validator{
    protected static $rules = array(
        'lat'   => '',
        'long'  =>  '',
        'address'   =>  'required',
        'country'   =>  'required',
        'city'  =>  'required',
        'postal_code'   =>  'required'
    );
}