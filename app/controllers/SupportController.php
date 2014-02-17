<?php

class SupportController extends BaseController {

    function __construct()
    {
        $this->beforeFilter('isSupport');
    }

	public function index()
	{
        return View::make('support.index');
	}

}
