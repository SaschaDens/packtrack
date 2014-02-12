<?php

class SessionsController extends \BaseController {

	public function __construct(){
		$this->beforeFilter('guest', array('except' => array('destroy')));
		$this->beforeFilter('csrf', array('only' => array('store')));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::Make('front.login');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validate = Validator::make($input,array(
			'email' => 'required|email',
			'password' => 'required'
		));

		if(!$validate->fails()){
			$attempt = Auth::attempt(array(
				'email' => $input['email'],
				'password' => $input['password']
			));

			if($attempt) return Redirect::intended('admin');

			return Redirect::to('login')->withErrors('Incorrect Credentials')->withInput();;
		};
		return Redirect::to('login')->withErrors($validate)->withInput();
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();
		return Redirect::to('login');
	}

}