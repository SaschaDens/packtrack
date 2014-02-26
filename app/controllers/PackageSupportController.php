<?php

use Packtrack\Mailers\UserMailer;
use Packtrack\Services\UserCreatorService;

class PackageSupportController extends BaseController {

    public function __construct()
    {
        $this->beforeFilter('isSupport');
    }


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $packages = Package::with('user')->paginate(30);
        return View::make('packagesupport.index', compact('packages'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

        return View::make('packagesupport.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $package = Package::Trackingcode(Input::get('search_package'))->first();
        if(!$package) return Redirect::back()->withErrors('Package not found');
        return Redirect::action('PackageSupportController@show', Input::get('search_package'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $package = Package::Trackingcode($id)->with('user')->firstOrFail();
        $logs = Packagelog::wherePackageId($package->id)->with('location')->get();
        return View::make('packagesupport.show', compact('package', 'logs'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        //return View::make('packagesupport.edit');
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
