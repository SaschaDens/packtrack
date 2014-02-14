<?php

class DashboardController extends BaseController {

    function __construct()
    {
        $this->beforeFilter('auth');
        $this->beforeFilter('isActivated');
    }

    public function index()
	{
        return View::make('dashboard.index');
	}

}
