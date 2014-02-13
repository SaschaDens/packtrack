@extends('layouts.master')

@section('post-title', 'Customer Login')

@section('content')
	<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		{{ Form::open(array('route' => 'sessions.store', 'role' => 'form')) }}
			{{ Form::bt_text('email', null, null, array('class' => 'input-lg', 'placeholder' => 'Email Address')) }}
			{{ Form::bt_password("password", null, array('class' => 'input-lg', 'placeholder' => 'Password')) }}

            <div class="row">
                <div class="col-xs-12 col-md-6">
                    {{ Form::submit('Login', array('class' => 'btn btn-primary btn-block btn-lg', 'tabindex' => '3')) }}
                </div>
                <div class="col-xs-12 col-md-6">
                    {{ link_to_action('UsersController@index', 'Register', null, array('class' => 'btn btn-success btn-block btn-lg', 'tabindex' => '4')) }}
                </div>
            </div>
		{{ Form::close() }}
	</div>
@stop