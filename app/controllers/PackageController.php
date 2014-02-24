<?php
use \Packtrack\Services\PackageCreatorService;
class PackageController extends BaseController {

    protected $packageCreator;
    function __construct(PackageCreatorService $packageCreator)
    {
        $this->beforeFilter('auth');
        //$this->beforeFilter('redirectAdmin');

        $this->packageCreator = $packageCreator;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $packages = Auth::user()->getUserPaginatedAttribute();
        $user = Auth::user();

        return View::make('packages.index', compact('packages', 'user'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('packages.create');
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
            $this->packageCreator->make(Input::all());
        } catch(Packtrack\Exceptions\ValidationException $e)
        {
            return Redirect::back()->withInput()->withErrors($e->getErrors());
        }

        return Redirect::action('PackageController@index')->withSuccess('Package successfully created');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $package = Package::find($id, Auth::user()->id);
        $logs = Packagelog::wherePackageId($package->id)->with('location')->get();

        return View::make('packages.show', compact('package', 'logs'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('packages.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//Enkel eigen packages met status 0 = Voorbereidfase
        $package = Package::find($id, Auth::user()->id);
        if($package and $package->status_code == 0 )
        {
            $package->delete();
            return Redirect::action('PackageController@index')->withSuccess('Package is removed.');
        }
        return Redirect::action('PackageController@index')->withErrors('Failed to remove package. Not enough permissions');
	}

}
