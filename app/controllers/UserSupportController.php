<?php

use Packtrack\Mailers\UserMailer;
use Packtrack\Services\UserCreatorService;

class UserSupportController extends BaseController {

    protected $userCreator;
    public function __construct(UserMailer $mailer, UserCreatorService $userCreator)
    {
        $this->userCreator = $userCreator;
        $this->beforeFilter('isSupport');
    }


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $users = User::where('permission_level', '>', 0)->with('location')->get();
        return View::make('usersupport.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $locations = Location::Distribution()->lists('address', 'id');
        $locations[0] = "Koerrier";

        return View::make('usersupport.create', compact('locations'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        try{
            $this->userCreator->createWorker(Input::all());
        } catch(Packtrack\Exceptions\ValidationException $e)
        {
            return Redirect::back()->withInput()->withErrors($e->getErrors());
        }
        return Redirect::action('UserSupportController@index')->withSuccess('Support User added');
	}

}
