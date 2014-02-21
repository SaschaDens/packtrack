<?php

class Packagelog extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

    protected $table = 'packagelog';

    public function package()
    {
        return $this->belongsTo('Package');
    }

    public function location()
    {
        return $this->belongsTo('Location');
    }

    public static function registered($package_id, $location_id)
    {
        $result = static::wherePackageId($package_id)->whereLocationId($location_id)->count();

        return ($result % 2)? true : false;
    }

    public function scopePackage($query, $type)
    {
        return $query->wherePackage_id($type);
    }

    public function scopeLocation($query, $type)
    {
        return $query->whereLocation_id($type);
    }
}
