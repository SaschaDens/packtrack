@extends('layouts.master')

@section('content')

<h2>Locations</h2>

<div class="row">
    <div class="col-md-3">
        <a class="info-box-click" href="{{ action('LocationController@create') }}">
            <div class="info-box slideLeft">
                <h3>Create Location</h3>
                <span class="glyphicon glyphicon-send"></span>
                <p>
                    <small>Create Distribution center where packages can be delivered.</small>
                </p>
            </div>
        </a>
    </div>
</div>

<table class="table">
    <thead>
        <tr>
            <th>Address</th>
            <th>City</th>
            <th>Country</th>
            <th>Postal Code</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($locations as $loc)
        <tr>
            <td>{{ $loc->address }}</td>
            <td>{{ $loc->city }}</td>
            <td>{{ $loc->country }}</td>
            <td>{{ $loc->postal_code }}</td>
            <td>
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown">
                        Action <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            {{ link_to_action('LocationController@edit', 'Edit', array($loc->id)) }}
                        </li>
                        <li class="divider"></li>
                        <li><a href="#">Delete</a></li>
                    </ul>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="clearfix"></div>
<div class="pull-right">
    {{ link_to_action('SupportController@index', 'Return to Control Panel') }}
</div>
@stop