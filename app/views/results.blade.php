@extends('layouts.master')

@section('title', 'Pack And Track')

@section('content')
<h2>Found Package: {{ $package->tracking_code }}</h2>

<dl class="dl-horizontal">
    <dt>Address</dt>
    <dd>{{ $package->address }}</dd>

    <dt></dt>
    <dd>{{ $package->postal_code . ' ' . $package->city }}</dd>

    <dt>Reciever name</dt>
    <dd>{{ $package->reciever_name }}</dd>

    <dt>Country</dt>
    <dd>{{ $package->country }}</dd>

    <dt>Tracking Code</dt>
    <dd>{{ $package->tracking_code }}</dd>

    <dt>Reciever email</dt>
    <dd>{{ $package->reciever_mail or 'None given' }}</dd>

    <dt>Package description</dt>
    <dd>{{ $package->description or 'None given' }}</dd>
</dl>

<div class="containerblog col-md-6 col-md-offset-3">
    <div class="blogrol">
        {{ HTML::package_log('registration', $package->created_at, 'Deliver this package to a location nearby. We handle it further.') }}
        @foreach($logs as $log)
        @if($log->status)
        {{ HTML::package_log('arrived', $log->created_at, 'Package is scanned at our distribution center in ' . $log->location->city, $counter++) }}
        @else
        {{ HTML::package_log('road', $log->created_at,  'Your Package just left our distribution center in ' . $log->location->city) }}
        @endif
        @endforeach
        @if($package->status_code == 4)
        {{ HTML::package_log('recieved', $package->updated_at, 'Enjoy your stuff!') }}
        @endif
    </div>
    <div class="clear"></div>
</div>

<div class="pull-right">
    {{ link_to_action('HomeController@getTracking', 'Search Again') }}
</div>
@stop