<?php namespace Packtrack\Services;

use Packtrack\Validators\UserValidator;
use Packtrack\Exceptions\ValidationException;
use User;

class UserCreatorService {

    protected $validator;

    public function __construct(UserValidator $validator)
    {
        $this->validator = $validator;
    }

    public function make(array $attributes)
    {
        if($this->validator->isValidCreate($attributes))
        {
            User::create($attributes);

            return true;
        }

        throw new ValidationException('Task validation failed', $this->validator->getErrors());
    }
}