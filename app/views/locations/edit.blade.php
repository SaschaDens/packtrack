@extends('layouts.support')

@section('content')

<h2>Edit Location</h2>
<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    {{ Form::model($location, array('role' => 'form', 'method' => 'PUT', 'action' => array('LocationController@update', $location->id))) }}
    @include('locations._form')
    {{ Form::close() }}
</div>

@stop