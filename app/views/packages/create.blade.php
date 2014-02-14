@extends('layouts.master')

@section('content')
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <h2>Create new package</h2>
        {{ Form::open(array('role' => 'form')) }}
        <div class="form-group">
            {{ Form::text('address', null, array('class' => 'form-control input-lg', 'placeholder' => 'Address', 'tabindex' => '6')) }}
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="form-group">
                    {{ Form::text('city', null, array('class' => 'form-control input-lg', 'placeholder' => 'City', 'tabindex' => '7')) }}
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="form-group">
                    {{ Form::text('postal_code', null, array('class' => 'form-control input-lg', 'placeholder' => 'Postal', 'tabindex' => '8')) }}
                </div>
            </div>
        </div>
        <div class="form-group">
            {{ Form::text('country', null, array('class' => 'form-control input-lg', 'placeholder' => 'Country', 'tabindex' => '9')) }}
        </div>
        <hr/>
        <h2>Package Information</h2>
        <div class="form-group">
            {{ Form::text('reciever_mail', null, array('class' => 'form-control input-lg', 'placeholder' => 'Reciever Email', 'tabindex' => '6')) }}
            <span class="help-block">Reciever email is optional.</span>
        </div>
        <div class="form-group">
            {{ Form::textarea('description', null, array('class' => 'form-control input-lg', 'placeholder' => 'Package Description')) }}
        </div>
        <div class="form-group">
            {{ Form::submit('Create', array('class' => 'btn btn-primary btn-block btn-lg', 'tabindex' => '4')) }}
        </div>
        {{ Form::close() }}
    </div>
@stop