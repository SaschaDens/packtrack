<?php
Route::get('/', 'HomeController@index');

Route::get('login', array('as' => 'login', 'uses' => 'SessionsController@create'));
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions', 'SessionsController', array('only' => array('create', 'store', 'destroy')));

Route::get('mail', function(){
    $user = User::find(1);
    $mail = new Packtrack\Mailers\UserMailer();

    $mail->welcome($user);

    return "Mail send";
});

Route::resource('register', 'UsersController');

Route::resource('dashboard', 'DashboardController@index');