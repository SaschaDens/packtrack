<?php

class Package extends Eloquent {
	protected $guarded = array('id');

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'package';
}
