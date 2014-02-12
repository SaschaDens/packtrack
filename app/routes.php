<?php
Route::get('/', function(){
   return Generate::activation_key();
});
//Route::get('/', 'HomeController@index');

Route::get('login', array('as' => 'login', 'uses' => 'SessionsController@create'));
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions', 'SessionsController', array('only' => array('create', 'store', 'destroy')));

Route::resource('dashboard', 'DashboardController@index');