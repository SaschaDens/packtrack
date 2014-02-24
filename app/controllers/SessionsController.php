<?php

use \Packtrack\Services\LoginCreatorService;

class SessionsController extends \BaseController {

    protected $loginCreator;
	public function __construct(LoginCreatorService $loginCreator){
		$this->beforeFilter('guest', array('except' => array('destroy')));
		$this->beforeFilter('csrf', array('only' => array('store')));

        $this->loginCreator = $loginCreator;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::Make('login');
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
            $login = $this->loginCreator->auth(Input::all());

            if($login)
            {
                if(Auth::user()->getPermission() >= 1) return Redirect::action('SupportController@index');
                return Redirect::intended('dashboard');
            }

            return Redirect::to('login')->withErrors('Incorrect Credentials')->withInput();;
        } catch(Packtrack\Validators\ValidationException $e)
        {
            return Redirect::back()->withInput()->withErrors($e->getErrors());
        }
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
        if(Auth::user())
        {
            Auth::logout();
            return Redirect::to('login')->withSuccess("You've successfully logged out.");
        }
        return Redirect::to('login');
	}

}