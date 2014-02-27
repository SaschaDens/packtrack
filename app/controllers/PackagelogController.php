<?php

use Packtrack\Services\PackagelogCreatorService;

class PackagelogController extends BaseController {

    protected $packagelogCreator;
    public function __construct(PackagelogCreatorService $packagelogCreator)
    {
        $this->beforeFilter('isSupport');
        $this->packagelogCreator = $packagelogCreator;
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        //Packagelog::registered(1,2)
        $location = Auth::user()->location;
        if($location->type != 0)
        {
            $packages = Packagelog::Locations($location->id)
                ->with('package')
                ->orderBy('created_at', 'desc')
                ->take(20)
                ->get();
            return View::make('packagelogs.index', compact('location', 'packages'));
        }

        return Redirect::back()->withErrors("A courrier can only checkout a package with our mobile app");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        try
        {
            $package = Package::trackingcode(Input::get('tracking_code'))->firstOrFail();
            $this->packagelogCreator->make($package, Input::all());
        } catch(Illuminate\Database\Eloquent\ModelNotFoundException $e){
            return Redirect::back()->withErrors("Tracking number not found");
        } catch(Packtrack\Exceptions\ValidationException $e)
        {
            return Redirect::back()->withErrors($e->getErrors());
        }

        return Redirect::back()->withSuccess('Package registered');
	}
}
