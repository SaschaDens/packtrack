@extends('layouts.master')

@section('content')
<h1>Create Account</h1>
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        {{ Form::open(array('role' => 'form', 'action' => 'UserSupportController@store')) }}
            @include('usersupport._form')
        {{ Form::close() }}
    </div>

<div class="clearfix">
    <div class="pull-right">
        {{ link_to_action('UserSupportController@index', 'Return to User Control Panel') }}
    </div>
</div>
@stop