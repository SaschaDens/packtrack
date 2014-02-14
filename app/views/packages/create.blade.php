@extends('layouts.master')

@section('content')
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <h2>Create new package</h2>
        {{ Form::open(array('role' => 'form', 'action' => 'PackageController@store')) }}
            {{ Form::bt_text('to_address', null, null, array('class' => 'input-lg', 'placeholder' => 'Address', 'tabindex' => '1')) }}
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    {{ Form::bt_text('to_city', null, null, array('class' => 'input-lg', 'placeholder' => 'City', 'tabindex' => '2')) }}
                </div>
                <div class="col-xs-12 col-md-6">
                    {{ Form::bt_text('to_postalcode', null, null, array('class' => 'input-lg', 'placeholder' => 'Postal Code', 'tabindex' => '3')) }}
                </div>
            </div>
            {{ Form::bt_text('to_country', null, null, array('class' => 'input-lg', 'placeholder' => 'Country', 'tabindex' => '4')) }}
            <hr/>
            <h2>Package Information</h2>
            <div class="form-group">
                {{ Form::text('reciever_mail', null, array('class' => 'form-control input-lg', 'placeholder' => 'Reciever Email', 'tabindex' => '5')) }}
                <span class="help-block">Reciever email is optional.</span>
            </div>

            {{ Form::bt_textarea('description', null, null, array('class' => 'input-lg', 'placeholder' => 'Package Description', 'tabindex' => '6')) }}

            {{ Form::bt_button('Create', array('class' => 'btn-primary btn-block btn-lg', 'tabindex' => '7')) }}
        {{ Form::close() }}
    </div>
@stop