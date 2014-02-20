<?php

/*Event::listen('illuminate.query', function($query){
    var_dump($query);
});//*/

// Main Routes
Route::get('/', 'HomeController@index');
Route::get('about', 'HomeController@about');
Route::get('contact', 'HomeController@contact');
Route::post('contact', 'HomeController@postContact');

// Login / Logout handler
Route::get('login', array('as' => 'login', 'uses' => 'SessionsController@create'));
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions', 'SessionsController', array('only' => array('create', 'store', 'destroy')));

// API ANDROID
Route::get('api', 'ApiController@index');
Route::get('api/tracking/{tracking_key}', 'ApiController@getTracking');

// Resources
Route::resource('register', 'UsersController');
Route::resource('dashboard', 'UserPackageController');

// Control panel for admins
Route::get('cp', 'SupportController@index');
Route::resource('cp/locations', 'LocationController', array('except' => array('show')));
Route::resource('cp/scan', 'PackagelogController');

// Testing
Route::get('mail', function(){
    return View::make('emails.mailreceived');
});