<?php
use \Packtrack\Services\PackageCreatorService;
class UserPackageController extends BaseController {

    protected $packageCreator;
    function __construct(PackageCreatorService $packageCreator)
    {
        $this->beforeFilter('auth');
        $this->beforeFilter('redirectAdmin');

        $this->packageCreator = $packageCreator;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        //http://stackoverflow.com/questions/20913606/laravel-4-1-how-to-paginate-eloquent-eager-relationship
        $packages = Auth::user()->getUserPaginatedAttribute();
        $user = Auth::user();

        return View::make('userpackages.index', compact('packages', 'user'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('userpackages.create');
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

        return Redirect::action('UserPackageController@index')->withSuccess('Package successfully created');
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

        return View::make('userpackages.show', compact('package'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('userpackages.edit');
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
		//
	}

}
