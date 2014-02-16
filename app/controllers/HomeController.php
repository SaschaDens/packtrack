<?php

class HomeController extends BaseController {

	public function index()
	{
		return View::make('home');
	}
    public function about()
    {
        return View::make('about');
    }
    public function contact()
    {
        return View::make('contact');
    }

}