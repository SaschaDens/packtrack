@extends('layouts.master')

@section('html-tag', 'ng-app')
@section('title', 'Dashboard')

@section('content')
    <h3>Quick Settings</h3>

    <h3>Packages</h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Sended at</th>
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
                    <td>{{ $package->tracking_code }}</td>
                    <td>{{ $package->address }}</td>
                    <td>{{ $package->postal_code }}</td>
                    <td>{{ $package->city }}</td>
                    <td>{{ $package->country }}</td>
                    <td>STATUS</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('scripts')
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.12/angular.min.js"></script>
@stop