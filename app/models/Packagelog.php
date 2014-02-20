<?php

class Packagelog extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

    protected $table = 'packagelog';

    public function package()
    {
        return $this->belongsTo('Package');
    }

    public static function registered($package_id, $location_id)
    {
        $result = static::wherePackageId($package_id)->whereLocationId($location_id)->first();

        if($result) return true;
        return false;
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
