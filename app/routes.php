<?php

//dd(Str::camel(Request::path()));

Route::get('/', 'HomeController@index');
Route::get('about', 'HomeController@about');
Route::get('contact', 'HomeController@contact');


Route::get('login', array('as' => 'login', 'uses' => 'SessionsController@create'));
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions', 'SessionsController', array('only' => array('create', 'store', 'destroy')));

Route::get('mail', function(){
    $user = User::find(1);
    $mail = new Packtrack\Mailers\UserMailer();
    $mail->welcome($user);
    return "Mail send";
});

// API ANDROID
Route::get('api', 'ApiController@index');
Route::get('api/tracking/{tracking_key}', 'ApiController@getTracking');

Route::resource('register', 'UsersController');

Route::resource('dashboard', 'PackageController');