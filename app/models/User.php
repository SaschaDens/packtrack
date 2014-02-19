<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

    protected $fillable = array(
        'first_name',
        'last_name',
        'email',
        'password',
        'address',
        'city',
        'postal_code',
        'country'
    );

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('id', 'password', 'activation_key', 'activated');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

    public function scopeActivation($query, $type)
    {
        return $query->whereActivation_key($type);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function($model){
            $setActivation = $model->activation_key = Generate::activation_key();
        });
    }

    public function setPasswordAttribute($value){
        $this->attributes['password'] = Hash::make($value);
    }

    public function getPermission()
    {
        return $this->permission_level;
    }

    public function isActivated()
    {
        return (bool) $this->activated;
    }

    public static function byUserID($id){
        return static::whereId($id)->first();
    }

    public function getUserPaginatedAttribute()
    {
        return $this->packages()->orderBy('created_at', 'desc')->paginate(5);
    }

    public function packages()
    {
        return $this->hasMany('Package');
    }

    public function location()
    {
        return $this->belongsTo('Location');
    }
}