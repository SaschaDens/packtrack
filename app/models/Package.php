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

    public function user()
    {
        return $this->belongsTo('User');
    }
}
