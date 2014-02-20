<?php
use \Packtrack\Services\ContactCreatorService;
class HomeController extends BaseController {

    protected $contactCreator;
    public function __construct(ContactCreatorService $contactCreator)
    {

        $this->contactCreator = $contactCreator;
    }
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
    public function postContact()
    {
        try
        {
            $this->contactCreator->make(Input::all());

        } catch(Packtrack\Exceptions\ValidationException $e)
        {
            return Redirect::back()->withInput()->withErrors($e->getErrors());
        }
        return Redirect::back()->withSuccess("Thanks for contacting us, we will contact you as soon as possible!");
    }
}