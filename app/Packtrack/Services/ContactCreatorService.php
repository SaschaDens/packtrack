<?php namespace Packtrack\Services;

use Packtrack\Validators\ContactValidator;
use Packtrack\Exceptions\ValidationException;

class ContactCreatorService {

    protected $validator;

    public function __construct(ContactValidator $validator)
    {
        $this->validator = $validator;
    }

    public function make(array $attributes)
    {
        if($this->validator->isValidCreate($attributes))
        {
            //Send Mail

            return true;
        }

        throw new ValidationException('Task validation failed', $this->validator->getErrors());
    }
}