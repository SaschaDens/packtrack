<?php namespace Packtrack\Validators;

class UserSupportValidator extends Validator{
    protected static $create_rules = array(
        'first_name'            =>  'required',
        'last_name'             =>  'required',
        'email'                 =>  'required|email|unique:users',
        'password'              =>  'required',
        'address'               =>  'required',
        'city'                  =>  'required',
        'postal_code'           =>  'required',
        'country'               =>  'required'
    );
}