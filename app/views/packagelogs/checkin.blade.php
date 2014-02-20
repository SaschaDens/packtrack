@extends('layouts.support')

@section('content')
<div ng-controller="TrackingController">
    <h2>Checkin Package: {{ $location->city or 'Koerrier' }}</h2>
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        {{ Form::open(array('ng-submit' => 'addKey()', 'role' => 'form', 'action' => 'PackagelogController@store')) }}
        {{-- Form::hidden('description', 'Checkin bij ' . $location->city ) --}}
        @include('packagelogs._form')
        {{ Form::close() }}
    </div>

    @include('packagelogs._result')

    ANGULARJS REFRESH / SUBMIT!!
    PACKAGE LOG HIER
</div>
@stop

@section('scripts')
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.12/angular.min.js"></script>
    <script>
        function TrackingController($scope, $http) {
            console.log($http);
        }
    </script>
@stop