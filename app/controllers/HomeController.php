<?php

use Packtrack\Services\ContactCreatorService;
use Packtrack\Services\TrackingSearcherService;

class HomeController extends BaseController {

    protected $contactCreator;
    protected $trackingSearch;
    public function __construct(ContactCreatorService $contactCreator, TrackingSearcherService $trackingSearch)
    {
        $this->beforeFilter('csrf', array('only' => array('postTracking', 'postContact')));

        $this->contactCreator = $contactCreator;
        $this->trackingSearch = $trackingSearch;
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
            return Redirect::back()->withErrors($e->getErrors());
        }

        return Redirect::back()->withSuccess("Thanks for contacting us, we will contact you as soon as possible!");
    }

    public function getTracking()
    {
        return View::make('tracking');
    }

    public function postTracking()
    {
        try
        {
            $counter = 0;
            $this->trackingSearch->search(Input::all());
            $package = Package::Trackingcode(Input::get('tracking_code'))->firstOrFail();
            $logs = Packagelog::wherePackageId($package->id)->with('location')->get();
        } catch(Packtrack\Exceptions\ValidationException $e)
        {
            return Redirect::back()->withInput()->withErrors($e->getErrors());
        } catch(Illuminate\Database\Eloquent\ModelNotFoundException $e)
        {
            return Redirect::back()->withErrors("No package found with the given Tracking number");
        }

        return View::make('results', compact('package', 'logs', 'counter'))->withSuccess("Thanks for contacting us, we will contact you as soon as possible!");
    }

    public function getLocations()
    {
        $locations = Location::Distribution()->get();
        return View::make('locations', compact('locations'));
    }
}