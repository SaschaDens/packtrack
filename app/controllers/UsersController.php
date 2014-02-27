<?php

use Packtrack\Mailers\UserMailer;
use Packtrack\Services\UserCreatorService;

class UsersController extends BaseController {

    protected $mailer;
    protected $userCreator;
    public function __construct(UserMailer $mailer, UserCreatorService $userCreator)
    {
        $this->mailer = $mailer;
        $this->userCreator = $userCreator;
    }


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('users.index');
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
            $this->userCreator->make(Input::all());
            $user = User::whereEmail(Input::get('email'))->first();
            $this->mailer->welcome($user);
        } catch(Packtrack\Exceptions\ValidationException $e)
        {
            return Redirect::back()->withInput()->withErrors($e->getErrors());
        }

        return Redirect::action('SessionsController@create')->withSuccess('An email has been sent. Please confirm your account.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        if(strlen($id) == 20)
        {
            $registration = User::Activation($id)->first();
            if(!$registration)
            {
                return Redirect::action('SessionsController@create')->withErrors('Incorrect validation key. If this problem persists contact administrator');
            }

            // Update User ID
            $registration->activated = 1;
            $registration->activation_key = $id . "0000";
            $registration->save();
            return Redirect::action('SessionsController@create')->withSuccess('Your account has been activated. You can login now.');
        }

        // Incorrect Activation key
        return Redirect::to('/');
	}
}
