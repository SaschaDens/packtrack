@extends('layouts.master')

@section('content')
<h1>User Support Panel</h1>
<div class="row">
    <div class="col-md-3">
        <a class="info-box-click" href="{{ action('UserSupportController@create') }}">
            <div class="info-box slideLeft">
                <h3>Create User</h3>
                <span class="glyphicon glyphicon-user"></span>
                <p>
                    <small>Create Distribution center where packages can be delivered.</small>
                </p>
            </div>
        </a>
    </div>
</div>

<h2>Worker List</h2>
<table class="table">
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Country</th>
        <th>City</th>
        <th>Work Location</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->first_name . " " . $user->last_name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->country }}</td>
            <td>{{ $user->city }}</td>
            <td>{{ $user->location->address or 'Koerrier' }}</td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="clearfix">
    <div class="pull-right">
        {{ link_to_action('SupportController@index', 'Return to Control Panel') }}
    </div>
</div>
@stop