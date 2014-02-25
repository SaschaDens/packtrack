<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
    // Uitbreiding
    if(!Auth::guest() and !Auth::user()->isActivated())
    {
        Auth::logout();
        return Redirect::to('login')->withErrors('Your account is not validated yet');
    }
	if (Auth::guest()) return Redirect::guest('login')->withErrors('You have to login first.');
});


Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('dashboard');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});

/*
|--------------------------------------------------------------------------
| Admin Filter
|--------------------------------------------------------------------------
|
| This filter will check if user has permission for admin area
|
*/

Route::filter('redirectAdmin', function(){
    $level = Auth::user()->getPermission();
    if($level >= 1) return Redirect::action('SupportController@index');
});

Route::filter('isSupport', function(){
    if(Auth::check())
    {
        $level = Auth::user()->getPermission();
        if($level < 1) throw new Packtrack\Exceptions\PermissionException('This account has not enough support permissions.');
    } else {
        throw new Packtrack\Exceptions\PermissionException('This account has not enough support permissions.');
    }
});

Route::filter('isAdmin', function(){
    $level = Auth::user()->getPermission();
    if($level < 2) throw new Packtrack\Exceptions\PermissionException('This account has not enough admin permissions.');
    //return (bool) Auth::user()->getPermission();
});

/*
|--------------------------------------------------------------------------
| Cache Filter
|--------------------------------------------------------------------------
|
| This filter will cache the output into a key "route_{url}" for 60 minutes
|
*/

Route::filter('fetch', 'Packtrack\Filters\CacheFilter@fetch');
Route::filter('put', 'Packtrack\Filters\CacheFilter@put');