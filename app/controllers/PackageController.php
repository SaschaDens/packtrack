<?php
use \Packtrack\Services\PackageCreatorService;
use \Packtrack\Mailers\PackageMailer;

class PackageController extends BaseController {

    protected $packageCreator;
    protected $mailer;
    function __construct(PackageCreatorService $packageCreator, PackageMailer $mailer)
    {
        $this->beforeFilter('auth');
        $this->packageCreator = $packageCreator;

        $this->mailer = $mailer;
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
            $create = $this->packageCreator->make(Input::all());
            if($create)
            {
                $this->mailer->sendBarcode($create);
            }
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
