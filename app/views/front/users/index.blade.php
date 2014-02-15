@extends('layouts.master')

@section('post-title', 'Customer Registration')

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        {{ Form::open(array('role' => 'form')) }}
            @include('front.users._form')
        {{ Form::close() }}
    </div>
</div>
@stop