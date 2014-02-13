<?php

class BaseModel extends Eloquent {
    protected $errors;

    public static function boot()
    {
        parent::boot();

        static::saving(function($model)
        {
            return $model->validate();
        });
    }

    public function validate()
    {
        $validator = Validator::make($this->getAttributes(), static::$rules);

        if($validator->fails())
        {
            $this->errors = $validator->messages();
            return false;
        }

        return true;
    }

    public function getErrors()
    {
        return $this->errors;
    }
}
