@extends('layouts.master')

@section('content')
<h2>Show package</h2>
<div class="row">
    <div class="col-md-6">
        <dl class="dl-horizontal">
            <dt>Address</dt>
            <dd>{{ $package->address }}</dd>

            <dt></dt>
            <dd>{{ $package->postal_code . ' ' . $package->city }}</dd>

            <dt>Country</dt>
            <dd>{{ $package->country }}</dd>

            <dt>Tracking Code</dt>
            <dd>{{ $package->tracking_code }}</dd>

            <dt>Reciever email</dt>
            <dd>{{ $package->reciever_mail or 'None given' }}</dd>

            <dt>Package description</dt>
            <dd>{{ $package->description or 'None given' }}</dd>
        </dl>
    </div>
    <div class="col-md-6">
        {{-- http://www.barcodes4.me/apidocumentation --}}
        <img src="https://chart.googleapis.com/chart?cht=qr&chs=140x140&chl={{ $package->tracking_code }}" alt={{ $package->tracking_code }} />
        <img src="http://www.barcodes4.me/barcode/c128a/{{ $package->tracking_code }}.png?width=250&height=100&istextdrawn=1" alt={{ $package->tracking_code }} />
    </div>
</div>
<br/>
<div class="clearfix"></div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Package log: {{ $package->tracking_code }}</h3>
    </div>
    <div class="panel-body">
        <ul class="list-group">
            <li class="list-group-item">{{ $package->created_at }}: Package registered to service</li>
            <li class="list-group-item">More coming here</li>
        </ul>
    </div>
</div>

<div class="pull-right">
    {{ link_to_action('PackageController@index', 'Return to dashboard') }}
</div>
@stop