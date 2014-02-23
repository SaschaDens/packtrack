@extends('layouts.master')

@section('content')
<h1>Support Panel</h1>

<div class="row">
    <div class="col-md-3">
        <a class="info-box-click" href="{{ action('PackageController@create') }}">
            <div class="info-box slideLeft">
                <h3>Create Package</h3>
                <span class="glyphicon glyphicon-th-large"></span>
                <p>
                    <small>Create a package. Deliver it at one of our locations. And we will do the rest!</small>
                </p>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a class="info-box-click" href="{{ action('PackageController@create') }}">
            <div class="info-box slideLeft">
                <h3>Create Package</h3>
                <span class="glyphicon glyphicon-th-large"></span>
                <p>
                    <small>Create a package. Deliver it at one of our locations. And we will do the rest!</small>
                </p>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a class="info-box-click" href="{{ action('PackageController@create') }}">
            <div class="info-box slideLeft">
                <h3>Create Package</h3>
                <span class="glyphicon glyphicon-th-large"></span>
                <p>
                    <small>Create a package. Deliver it at one of our locations. And we will do the rest!</small>
                </p>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a class="info-box-click" href="{{ action('PackageController@create') }}">
            <div class="info-box slideLeft">
                <h3>Create Package</h3>
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