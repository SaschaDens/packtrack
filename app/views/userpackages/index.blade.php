@extends('layouts.master')

@section('html-tag', 'ng-app')
@section('title', 'Dashboard')

@section('content')
    <div class="pull-right">
        Welcome, {{ $user->email }} {{ link_to_action('SessionsController@destroy', 'Logout') }}
    </div>
    <h3>Quick Settings</h3>
    {{ link_to_action('UserPackageController@create', 'Create new package') }}
    <p>Mail Versturen naar ontvanger nadat het bij een locatie is binnengebracht</p>
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
                    <td>{{ link_to_action('UserPackageController@show', $package->tracking_code, array($package->id)) }}</td>
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