<?php

// Main Routes
Route::get('/', 'HomeController@index');
Route::get('locations', 'HomeController@getLocations');
Route::get('about', 'HomeController@about');
Route::get('contact', 'HomeController@contact');
Route::post('contact', 'HomeController@postContact');

Route::get('tracking', 'HomeController@getTracking');
Route::post('tracking', 'HomeController@postTracking');

// Login / Logout handler
Route::get('login', array('as' => 'login', 'uses' => 'SessionsController@create'));
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions', 'SessionsController', array('only' => array('create', 'store', 'destroy')));

// API ANDROID
Route::get('api', 'ApiController@index');
Route::get('api/locations', 'ApiController@getLocations');
Route::get('api/tracking/{tracking_key}', 'ApiController@getTracking');
Route::post('api/auth', 'ApiController@postAuth');
Route::post('api/locate', 'ApiController@postLocate');
Route::post('api/package', 'ApiController@postPackage');

// Resources
Route::resource('register', 'UsersController');
Route::resource('dashboard', 'PackageController');

// Control panel for admins
Route::get('cp', 'SupportController@index');
Route::resource('cp/locations', 'LocationController', array('except' => array('show')));
Route::resource('cp/scan', 'PackagelogController');
Route::resource('cp/users', 'UserSupportController');

// Testing
Route::get('maps', function(){
    return View::make('maps.index');
});
Route::get('mail', function(){
    //$activation = User::find(1)->activation_key;
    $package = Package::find(1);
    return View::make('emails.barcode', compact('package'));
});