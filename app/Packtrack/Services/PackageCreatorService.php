<?php namespace Packtrack\Services;

use Packtrack\Validators\PackageValidator;
use Packtrack\Exceptions\ValidationException;
use Package;
use Auth;
use Event;

class PackageCreatorService {

    protected $validator;

    public function __construct(PackageValidator $validator)
    {
        $this->validator = $validator;
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

            //$this->mailer->sendBarcode($package);
            Event::fire('mail.barcode', $package);

            return true;
        }

        throw new ValidationException('Package validation failed', $this->validator->getErrors());
    }
}