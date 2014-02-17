@extends('layouts.support')

@section('content')

{{ Form::open() }}
    @include('locations._form')
{{ Form::close() }}

@stop