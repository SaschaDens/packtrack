@extends('layouts.master')

@section('title', 'Pack And Track')

@section('content')
<h2>Search Package</h2>
<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    {{ Form::open(array('role' => 'form', 'action' => 'HomeController@postTracking')) }}
    {{ Form::bt_text('tracking_code', null, 'Tracking Code', array('class' => 'input-lg', 'placeholder' => 'Tracking code', 'tabindex' => '1', 'maxlength' => '13', 'autocomplete'=>'off', 'autofocus'=>'')) }}
    {{ Form::bt_button('Search', array('class' => 'btn-pack btn-block btn-lg', 'tabindex' => '2')) }}
    {{ Form::close() }}
</div>
@stop