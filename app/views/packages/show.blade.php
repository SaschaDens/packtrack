@extends('layouts.master')

@section('content')
<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    <h2>Show package</h2>
    {{ var_dump($package) }}
    {{ $package->id }}
</div>
@stop