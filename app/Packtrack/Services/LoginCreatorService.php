<?php namespace Packtrack\Services;

use Packtrack\Validators\LoginValidator;
use Packtrack\Exceptions\ValidationException;
use Auth;
use Redirect;

class LoginCreatorService {

    protected $validator;

    public function __construct(LoginValidator $validator)
    {
        $this->validator = $validator;
    }

    public function auth(array $attributes)
    {
        if($this->validator->isValid($attributes))
        {
            $attempt = Auth::attempt(array(
                'email' => $attributes['email'],
                'password' => $attributes['password']
            ));

            return $attempt;
        }

        throw new ValidationException('Login validation failed', $this->validator->getErrors());
    }

    public function make(array $attributes)
    {
        if($this->validator->isValid($attributes))
        {
            User::create($attributes);

            return true;
        }

        throw new ValidationException('Task validation failed', $this->validator->getErrors());
    }
}