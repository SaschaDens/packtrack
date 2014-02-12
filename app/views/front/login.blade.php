@extends('layouts.master')

@section('post-title', 'Customer Login')

@section('content')
	<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		{{ Form::open(array('route' => 'sessions.store', 'role' => 'form')) }}
			{{ Form::bt_text('email', null, null, array('class' => 'input-lg', 'placeholder' => 'Email Address')) }}
			{{ Form::bt_password("password", null, array('class' => 'input-lg', 'placeholder' => 'Password')) }}
			{{ Form::bt_button('Login', array('class' => 'btn-lg btn-success')) }}
		{{ Form::close() }}
	</div>
@stop