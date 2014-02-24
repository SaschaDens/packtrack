@extends('layouts.master')

@section('html-tag', 'ng-app')
@section('title', 'Dashboard')

@section('content')
    <div class="pull-right">
        Welcome, {{ $user->email }} {{ link_to_action('SessionsController@destroy', 'Logout') }}
    </div>
    <h3>Quick Settings</h3>
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
            <a class="info-box-click" href="{{ action('HomeController@getLocations') }}">
                <div class="info-box slideLeft">
                    <h3>Locate Center</h3>
                    <span class="glyphicon glyphicon-send"></span>
                    <p>
                        <small>Create a package. Deliver it at one of our locations. And we will do the rest!</small>
                    </p>
                </div>
            </a>
        </div>
    </div>
    <div class="clearfix"></div>
    <hr/>
    <h3>Packages</h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Created at</th>
                <th>Tracking Code</th>
                <th>Address</th>
                <th>Postal Code</th>
                <th>City</th>
                <th>Country</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($packages as $package)
                <tr>
                    <td>{{ $package->created_at }}</td>
                    <td>{{ link_to_action('PackageController@show', $package->tracking_code, array($package->id)) }}</td>
                    <td>{{ $package->address }}</td>
                    <td>{{ $package->postal_code }}</td>
                    <td>{{ $package->city }}</td>
                    <td>{{ $package->country }}</td>
                    <td>Not tracked yet</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $packages->links() }}
@stop

@section('scripts')
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.12/angular.min.js"></script>
@stop