<?php

// Main Routes
Route::get('/', 'HomeController@index');
Route::get('about', 'HomeController@about');
Route::get('contact', 'HomeController@contact');

// Login / Logout handler
Route::get('login', array('as' => 'login', 'uses' => 'SessionsController@create'));
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions', 'SessionsController', array('only' => array('create', 'store', 'destroy')));

// API ANDROID
Route::get('api', 'ApiController@index');
Route::get('api/tracking/{tracking_key}', 'ApiController@getTracking');

// Resources
Route::resource('register', 'UsersController');
Route::resource('dashboard', 'PackageController');

// Control panel for admins
Route::get('cp', 'SupportController@index');