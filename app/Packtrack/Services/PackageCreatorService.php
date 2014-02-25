<?php namespace Packtrack\Services;

use Packtrack\Validators\PackageValidator;
use Packtrack\Exceptions\ValidationException;
use Packtrack\Mailers\PackageMailer;
use Package;
use Auth;

class PackageCreatorService {

    protected $validator;
    protected $mailer;

    public function __construct(PackageValidator $validator, PackageMailer $mailer)
    {
        $this->validator = $validator;
        $this->mailer = $mailer;
    }

    public function make(array $attributes)
    {
        if($this->validator->isValid($attributes))
        {
            $package = new Package();
            $package->user_id = Auth::user()->id;
            $package->address = $attributes['address'];
            $package->city = $attributes['city'];
            $package->postal_code = $attributes['postal_code'];
            $package->country = $attributes['country'];
            $package->reciever_name = $attributes['reciever_name'];
            $package->reciever_mail = $attributes['reciever_mail'];
            $package->description = $attributes['description'];
            $package->save();

            $this->mailer->sendBarcode($package);

            /*Package::create(array(
                'user_id'       =>  Auth::user()->id,
                'address'       =>  $attributes['address'],
                'city'          =>  $attributes['city'],
                'postal_code'   =>  $attributes['postal_code'],
                'country'       =>  $attributes['country'],
                'reciever_name' =>  $attributes['reciever_name'],
                'reciever_mail' =>  $attributes['reciever_mail'],
                'description'   =>  $attributes['description'],
            ));//*/

            return true;
        }

        throw new ValidationException('Package validation failed', $this->validator->getErrors());
    }
}