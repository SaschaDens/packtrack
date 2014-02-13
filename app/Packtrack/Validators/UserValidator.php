<?php namespace Packtrack\Validators;

class UserValidator extends Validator{
    protected static $rules = array(
        'first_name'            =>  'required',
        'last_name'             =>  'required',
        'email'                 =>  'required|email|unique:users',
        'password'              =>  'required',
        'password_confirmation' =>  'same:password',
        'address'               =>  'required',
        'city'                  =>  'required',
        'postal_code'           =>  'required',
        'country'               =>  'required'
    );
}