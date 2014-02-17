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
    <!--
        <div class="log">
            <div class="road">
                <span class="glyphicon glyphicon-road"></span>
            </div>
            <div class="timeline"></div>
            <img src="/assets/img/corner.png" class="corner" alt="corner" />
            <div class="description">
                <h4>Wednesday 12 februari</h4>
                <p>Packet is arrived at Brussel</p>

            </div>
        </div>

        <div class="log">
            <div class="road">
                <span class="glyphicon glyphicon-road"></span>
            </div>
            <img src="/assets/img/corner.png" class="corner" alt="corner" />
            <div class="description">
                Some Text
            </div>

        </div>

    -->
        <div class="containerblog">
            <div class="blogrol">
                <article>
                    <div class="date">
                        <p>Jan</p>
                        <p>01</p>
                    </div>
                    <h1>This is an article1</h1>

                    <p>
                        Arrived in Brussel
                    </p>
                </article>
                <article>
                    <div class="date">
                        <p>Feb</p>
                        <p>12</p>
                    </div>
                    <h1>This is an article2</h1>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ornare dapibus tincidunt. Vestibulum
                        vitae
                        sapien quis odio viverra dapibus eu a purus. Class aptent taciti sociosqu ad litora torquent per
                        conubia
                        nostra, per inceptos himenaeos. Suspendisse enim tellus, hendrerit ac volutpat eu, elementum quis
                        lacus.
                        Etiam eu nibh et leo commodo pulvinar. Ut eu tellus et lorem dapibus sagittis sed at dui. Vestibulum
                        aliquet
                        risus ut odio mattis accumsan. Nunc blandit ultrices volutpat. Fusce non metus nulla, condimentum
                        vestibulum
                        arcu. Nam at lacinia justo. Ut et erat vitae diam dapibus consequat in eu libero. Vivamus eros
                        risus,
                        tincidunt nec fringilla ac, egestas in purus.
                    </p>
                </article>
                <article>
                    <div class="date">
                        <p>Apr</p>
                        <p>15</p>
                    </div>
                    <h1>This is an article3</h1>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ornare dapibus tincidunt. Vestibulum
                        vitae
                        sapien quis odio viverra dapibus eu a purus. Class aptent taciti sociosqu ad litora torquent per
                        conubia
                        nostra, per inceptos himenaeos. Suspendisse enim tellus, hendrerit ac volutpat eu, elementum quis
                        lacus.
                        Etiam eu nibh et leo commodo pulvinar. Ut eu tellus et lorem dapibus sagittis sed at dui. Vestibulum
                        aliquet
                        risus ut odio mattis accumsan. Nunc blandit ultrices volutpat. Fusce non metus nulla, condimentum
                        vestibulum
                        arcu. Nam at lacinia justo. Ut et erat vitae diam dapibus consequat in eu libero. Vivamus eros
                        risus,
                        tincidunt nec fringilla ac, egestas in purus.
                    </p>
                </article>
                <article>
                    <div class="date">
                        <p>May</p>

                        <p>26</p>
                    </div>
                    <h1>This is an article4</h1>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ornare dapibus tincidunt. Vestibulum
                        vitae
                        sapien quis odio viverra dapibus eu a purus. Class aptent taciti sociosqu ad litora torquent per
                        conubia
                        nostra, per inceptos himenaeos. Suspendisse enim tellus, hendrerit ac volutpat eu, elementum quis
                        lacus.
                        Etiam eu nibh et leo commodo pulvinar. Ut eu tellus et lorem dapibus sagittis sed at dui. Vestibulum
                        aliquet
                        risus ut odio mattis accumsan. Nunc blandit ultrices volutpat. Fusce non metus nulla, condimentum
                        vestibulum
                        arcu. Nam at lacinia justo. Ut et erat vitae diam dapibus consequat in eu libero. Vivamus eros
                        risus,
                        tincidunt nec fringilla ac, egestas in purus.
                    </p>
                </article>
            </div>
            <div class="clear"></div>
        </div>

    </div>
</div>

<div class="pull-right">
    {{ link_to_action('PackageController@index', 'Return to dashboard') }}
</div>
@stop