<?php

class Package extends Eloquent {
	protected $guarded = array('id');

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'package';
    protected $hidden = array('id');

    public static function boot()
    {
        parent::boot();

        static::creating(function($model){
            // Userid kan voor problemen zorgen
            //$userID = $model->user_id = Auth::user()->id;
            $setTracking = $model->tracking_code = Generate::tracking_key();
        });
    }

    public static function byUserID($id){
        return User::byUserID($id)->packages;
    }

    public static function find($package_id, $userID = null)
    {
        $package = Static::with('user')->find($package_id);

        if($userID and $package->user->id !== $userID)
        {
            throw new Illuminate\Database\Eloquent\ModelNotFoundException;
        }

        return $package;
    }

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function packagelog()
    {
        return $this->hasMany('Packagelog');
    }

    public function scopeTrackingcode($query, $type)
    {
        return $query->whereTracking_code($type);
    }
}
