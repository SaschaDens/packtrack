<?php

class DashboardController extends BaseController {

    function __construct()
    {
        $this->beforeFilter('auth');
    }

    public function index()
	{
        return View::make('dashboard.index');
	}

}
