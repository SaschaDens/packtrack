<?php namespace Packtrack\Services;

use Packtrack\Validators\ApiValidator;
use Packtrack\Exceptions\ValidationException;

class ContactCreatorService {

    protected $validator;

    public function __construct(ContactValidator $validator)
    {
        $this->validator = $validator;
    }

    public function postLocate(array $attributes)
    {
        if($this->validator->isValidCreate($attributes))
        {

            return true;
        }

        throw new ValidationException('Api validation failed', $this->validator->getErrors());
    }
}