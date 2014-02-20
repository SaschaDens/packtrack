@extends('layouts.support')

@section('content')
<h2>Checkin Package: {{ $location->city or 'Koerrier' }}</h2>
<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    {{ Form::open(array('role' => 'form', 'action' => 'PackagelogController@store')) }}
    {{-- Form::hidden('description', 'Checkin bij ' . $location->city ) --}}
    @include('packagelogs._form')
    {{ Form::close() }}
</div>

@include('packagelogs._result')

ANGULARJS REFRESH / SUBMIT!!
PACKAGE LOG HIER
@stop