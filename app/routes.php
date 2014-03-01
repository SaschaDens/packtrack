<?php
//Queue's

Route::post('queues', function(){
    //php artisan queue:subscribe app http://packandtrack.be/queues
    return Queue::marshal();
});

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
Route::resource('register', 'UsersController', array('only' => array('index', 'store', 'show')));
Route::resource('dashboard', 'PackageController', array('except' => array('edit', 'update')));

// Control panel for admins
Route::resource('cp/locations', 'LocationController', array('except' => array('show', 'destroy')));
Route::resource('cp/scan', 'PackagelogController', array('only' => array('index', 'store')));
Route::resource('cp/users', 'UserSupportController', array('only' => array('index', 'create', 'store')));
Route::resource('cp/package', 'PackageSupportController', array('only' => array('index', 'store', 'show')));
Route::get('cp', 'SupportController@index');

Route::get('test', function(){
    //Event::fire('mail.register', User::find(1));
    //Event::fire('mail.barcode', Package::find(1));
    //Event::fire('mail.tracking', Package::find(1));
    return "Send";
});