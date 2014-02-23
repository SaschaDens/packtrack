@extends('layouts.master')

@section('title', 'Login')


@section('post-title', 'Customer Login')

@section('content')
	<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <h2>Please Sign In<small> and manage your packages.</small></h2>

		{{ Form::open(array('route' => 'sessions.store', 'role' => 'form')) }}
			{{ Form::bt_text('email', null, null, array('class' => 'input-lg', 'placeholder' => 'Email Address')) }}
			{{ Form::bt_password("password", null, array('class' => 'input-lg', 'placeholder' => 'Password')) }}
            {{ Form::submit('Login', array('class' => 'btn btn-pack btn-block btn-lg', 'tabindex' => '3')) }}
            <hr/>
            <p>{{ link_to_action('UsersController@index', 'Sign up here to use our service.', null, array('tabindex' => '4')) }}</p>
		{{ Form::close() }}
	</div>
@stop