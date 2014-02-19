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
<h3 class="panel-title">Package log: {{ $package->tracking_code }}</h3>
<!--<div class="panel panel-default">
    <div class="panel-heading">

    </div>
    <div class="panel-body">-->
<div class="containerblog col-md-6 col-md-offset-3">
    <div class="blogrol">
        <article>
            <div class="date">
                <span class="glyphicon glyphicon-tag"></span>
            </div>
            <div class="arrow-left"></div>
            <div class="articleblock">
                <small class="pull-right">Monday 1 January 2014 08:21</small>
                <h3>Registration</h3>
                <p>
                    The package is registrated in our system.
                </p>
            </div>
        </article>
        <article>
            <div class="date">
                <span class="glyphicon glyphicon-send"></span>
            </div>
            <div class="arrow-left"></div>
            <div class="articleblock">
                <small class="pull-right">Monday 1 January 2014 08:21</small>
                <h3>Picked up</h3>
                <p>
                    The package is picked up.
                </p>
            </div>
        </article>
        <article>
            <div class="date">
                <span class="glyphicon glyphicon-road"></span>
            </div>
            <div class="arrow-left"></div>
            <div class="articleblock">
                <small class="pull-right">Monday 1 January 2014 08:21</small>
                <h3>On the road</h3>
                <p>
                    The package is on the road.
                </p>
            </div>
        </article>
        <article>
            <div class="date">
                <span class="glyphicon glyphicon-inbox"></span>
            </div>
            <div class="arrow-left"></div>
            <div class="articleblock">
                <small class="pull-right">Monday 1 January 2014 08:21</small>
                <h3>Arrived in Antwerp</h3>
                <p>
                    Package is arrived at the distribution center in Antwerp.
                </p>
            </div>
        </article>
        <article>
            <div class="date">
                <span class="glyphicon glyphicon-road"></span>
            </div>
            <div class="arrow-left"></div>
            <div class="articleblock">
                <small class="pull-right">Monday 1 January 2014 08:21</small>
                <h3>On the road</h3>
                <p>
                    Package is on the road.
                </p>
            </div>
        </article>
        <article>
            <div class="date">
                <span class="glyphicon glyphicon-inbox"></span>
            </div>
            <div class="arrow-left"></div>
            <div class="articleblock">
                <small class="pull-right">Monday 1 January 2014 08:21</small>
                <h3>Arrived in Brussels </h3>
                <p>
                    Package is arrived at the distribution center in Brussels.
                </p>
            </div>
        </article>
        <article>
            <div class="date">
                <span class="glyphicon glyphicon-road"></span>
            </div>
            <div class="arrow-left"></div>
            <div class="articleblock">
                <small class="pull-right">Monday 1 January 2014 08:21</small>
                <h3>On the road</h3>
                <p>
                    Package is on the road.
                </p>
            </div>
        </article>
        <article>
            <div class="date">
                <span class="glyphicon glyphicon-ok"></span>
            </div>
            <div class="arrow-left"></div>
            <div class="articleblock">
                <small class="pull-right">Monday 1 January 2014 08:21</small>
                <h3>Arrived on destination</h3>
                <p>
                    Package is on the destination.
                </p>
            </div>
        </article>
    </div>
    <div class="clear"></div>
</div>

   <!-- </div>
</div>
-->

<div class="pull-right">
    {{ link_to_action('UserPackageController@index', 'Return to dashboard') }}
</div>
@stop