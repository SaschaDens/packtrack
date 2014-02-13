@extends('layouts.master')

@section('post-title', 'Customer Registration')

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        {{ Form::open(array('role' => 'form')) }}
            <h2>Please Sign Up <small>And you can track your packages.</small></h2>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        {{ Form::text('first_name', null, array('class' => 'form-control input-lg', 'placeholder' => 'First Name', 'tabindex' => '1')) }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        {{ Form::text('last_name', null, array('class' => 'form-control input-lg', 'placeholder' => 'Last Name', 'tabindex' => '2')) }}
                    </div>
                </div>
            </div>
            <div class="form-group">
                {{ Form::email('email', null, array('class' => 'form-control input-lg', 'placeholder' => 'Email Address', 'tabindex' => '3')) }}
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        {{ Form::password('password', array('class' => 'form-control input-lg', 'placeholder' => 'Password', 'tabindex' => '4')) }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        {{ Form::password('password_confirmation', array('class' => 'form-control input-lg', 'placeholder' => 'Confirm Password', 'tabindex' => '5')) }}
                    </div>
                </div>
                <div class="form-group"></div>
            </div>
            <hr/>
            <h2>Sending details</h2>
            <div class="form-group">
                {{ Form::text('address', null, array('class' => 'form-control input-lg', 'placeholder' => 'Address', 'tabindex' => '10')) }}
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                        {{ Form::text('city', null, array('class' => 'form-control input-lg', 'placeholder' => 'City', 'tabindex' => '8')) }}
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                        {{ Form::text('postal_code', null, array('class' => 'form-control input-lg', 'placeholder' => 'Postal', 'tabindex' => '9')) }}
                    </div>
                </div>
            </div>
            <div class="form-group">
                {{ Form::text('country', null, array('class' => 'form-control input-lg', 'placeholder' => 'Country', 'tabindex' => '10')) }}
            </div>

            <hr/>

            <div class="row">
                <div class="col-xs-12 col-md-6">
                    {{ Form::submit('Register', array('class' => 'btn btn-primary btn-block btn-lg', 'tabindex' => '6')) }}
                </div>
                <div class="col-xs-12 col-md-6">
                    {{ Form::button('Sign In', array('class' => 'btn btn-success btn-block btn-lg', 'tabindex' => '7')) }}
                </div>
            </div>
        {{ Form::close() }}
    </div>
</div>
@stop