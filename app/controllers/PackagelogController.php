<?php

use Packtrack\Services\PackagelogCreatorService;

class PackagelogController extends BaseController {

    protected $packagelogCreator;
    public function __construct(PackagelogCreatorService $packagelogCreator)
    {
        $this->packagelogCreator = $packagelogCreator;
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $location = Auth::user()->location;
        return View::make('packagelogs.checkin', compact('location'));
	}

    public function checkout()
    {
        $location = Auth::user()->location;
        return View::make('packagelogs.checkout', compact('location'));
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('packagelogs.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        //$package = Package::trackingcode($input)->firstOrFail();
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

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return View::make('packagelogs.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('packagelogs.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
