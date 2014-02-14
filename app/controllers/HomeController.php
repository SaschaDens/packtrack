<?php

class HomeController extends BaseController {

	public function index()
	{
		return View::make('front.home');
	}
    public function about()
    {
        return View::make('front.about');
    }
    public function contact()
    {
        return View::make('front.contact');
    }

}