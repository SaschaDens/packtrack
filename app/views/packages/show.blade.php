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

        <div class="log">
            <div class="road">
                <span class="glyphicon glyphicon-road"></span>
            </div>
            <div class="timeline"></div>
            <div class="description">
                <h4>Wednesday 12 februari</h4>
                <p>Packet is arrived at Brussel</p>

            </div>
        </div>

        <div class="log">
            <div class="road">
                <span class="glyphicon glyphicon-road"></span>
            </div>
            <div class="description">
                Some Text
            </div>

        </div>

<!--
        <table border="1">
            <tr>
                <td class="tabledaytime">
                    <span class="day">

                    </span>
                    <span class="time">

                    </span>
                </td>
                <td class="road">
                    <div class="road">
                        <span class="glyphicon glyphicon-road"></span>
                    </div>
                </td>
                <td class="tabledescription">

                </td>
            </tr>
            <tr>

            </tr>
        </table>
        -->
    </div>
</div>

<div class="pull-right">
    {{ link_to_action('PackageController@index', 'Return to dashboard') }}
</div>
@stop