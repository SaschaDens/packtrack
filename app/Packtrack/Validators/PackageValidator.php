<?php namespace Packtrack\Validators;

class PackageValidator extends Validator{
    protected static $rules = array(
        'client_id'     =>  '',
        'country'    =>  'required',
        'city'       =>  'required',
        'address'    =>  'required',
        'postal_code' =>  'required',
        'tracking_code' =>  'unique:package',
        'reciever_name'    =>  'required',
        'reciever_mail' =>  'email|required_with:description',
        'description'   =>  ''
    );
}