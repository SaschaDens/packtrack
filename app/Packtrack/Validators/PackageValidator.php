<?php namespace Packtrack\Validators;

class PackageValidator extends Validator{
    protected static $rules = array(
        'client_id'     =>  '',
        'to_country'    =>  'required',
        'to_city'       =>  'required',
        'to_address'    =>  'required',
        'to_postalcode' =>  'required',
        'tracking_code' =>  'required',
        'reciever_mail' =>  '',
        'description'   =>  ''
    );
}