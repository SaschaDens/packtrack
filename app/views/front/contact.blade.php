@extends('layouts.master')

@section('title', 'Contact')

@section('content')

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

    {{ Form::open(array('url' => 'contact')) }}
        <h2>Contact <small>Do not hesitate to contact us!!</small></h2>
        <hr/>

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

        <div class="form-group">
            {{ Form::textarea('question', null, array('class' => 'form-control input-lg', 'placeholder' => 'Your question...', 'tabindex' => '4')) }}
        </div>

        {{ Form::submit('Send', array('class' => 'btn btn-primary btn-block btn-lg', 'tabindex' => '10')) }}


    {{ Form::close() }}
    </div>
</div>

@stop