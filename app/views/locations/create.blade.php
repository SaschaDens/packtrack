@extends('layouts.support')

@section('content')
<h2>Create Location</h2>
<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    {{ Form::open() }}
        @include('locations._form')
    {{ Form::close() }}
</div>

@stop