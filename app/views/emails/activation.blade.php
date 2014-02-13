@extends('layouts.mail')

@section('content')
    <h1>Welcome by Pack And Track</h1>
    <p>
        Before you can start sending packages you have to verify your account.
    </p>
    <p>
        Please follow the following link to activate your account. <a href={{ \URL::to('/') }} >{{ $activation }}</a>
    </p>
@stop