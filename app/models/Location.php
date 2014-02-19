<?php

class Location extends Eloquent {
	protected $guarded = array();

	public static $rules = array();
    protected $table = 'locations';

    public function scopeDistribution($query)
    {
        return $query->whereType(1);
    }

    public function users()
    {
        return $this->hasMany('User');
    }
}
