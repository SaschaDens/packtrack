@extends('layouts.master')

@section('content')
<h1>Support Panel</h1>

<div class="row">
    <div class="col-md-3">
        <a class="info-box-click" href="{{ action('PackagelogController@index') }}">
            <div class="info-box slideLeft">
                <h3>Scan Package</h3>
                <span class="glyphicon glyphicon-search"></span>
                <p>
                    <small>Add, Change or Delete a user. This tool makes it also possible to change working location.</small>
                </p>
            </div>
        </a>
    </div>

    <div class="col-md-3">
        <a class="info-box-click" href="{{ action('LocationController@index') }}">
            <div class="info-box slideLeft">
                <h3>Manage Locations</h3>
                <span class="glyphicon glyphicon-send"></span>
                <p>
                    <small>This tool will be used to create a new location. OR when changes happen at one of our distribution center</small>
                </p>
            </div>
        </a>
    </div>

    <div class="col-md-3">
        <a class="info-box-click" href="{{ action('PackageController@create') }}">
            <div class="info-box slideLeft">
                <h3>Manage User</h3>
                <span class="glyphicon glyphicon-user"></span>
                <p>
                    <small>Add, Change or Delete a user. This tool makes it also possible to change working location.</small>
                </p>
            </div>
        </a>
    </div>
</div>
<h2>Packtrack Service <small>Free for an employee!</small></h2>
<div class="row">
    <div class="col-md-3">
        <a class="info-box-click" href="{{ action('PackageController@index') }}">
            <div class="info-box slideLeft">
                <h3>Package Control</h3>
                <span class="glyphicon glyphicon-th-large"></span>
                <p>
                    <small>Create a package. Deliver it at one of our locations. And we will do the rest!</small>
                </p>
            </div>
        </a>
    </div>
</div>
<div class="clearfix"></div>
@stop