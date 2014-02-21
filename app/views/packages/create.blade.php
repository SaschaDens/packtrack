@extends('layouts.master')

@section('content')
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <h2>Create new package</h2>
        {{ Form::open(array('role' => 'form', 'action' => 'PackageController@store')) }}
            @include('packages._form')
        {{ Form::close() }}
    </div>
@stop