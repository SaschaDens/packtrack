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
        return View::make('front.users.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('front.users.create');
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
        } catch(Packtrack\Validators\ValidationException $e)
        {
            return Redirect::back()->withInput()->withErrors($e->getErrors());
        }
		/*$user = new User(Input::all());



        if( ! $user->save())
        {
            return Redirect::back()->withInput()->withErrors($user->getErrors());
        }

        $this->mailer->welcome($user);
        return Redirect::action('SessionsController@create')->withSuccess('An email has been sended. Please confirm you account.');
		//*/
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $registration = User::Activation($id)->first();
        if(!$registration)
        {
            return Redirect::action('SessionsController@create')->withErrors('Incorrect validation key. If this problem persists contact administrator');
        }

        // Update User ID
        $registration->active = 1;
        $registration->save();
        return Redirect::action('SessionsController@create')->withSuccess('Your account has been activated. You can login now.');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('users.edit');
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
