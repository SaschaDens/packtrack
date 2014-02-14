<?php

class Package extends Eloquent {
	protected $guarded = array('id');

	public static $rules = array();

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'package';
}
