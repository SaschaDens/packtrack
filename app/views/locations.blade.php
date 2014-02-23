@extends('layouts.master')

@section('title', 'Locations')

@section('content')
    <h1>Find a delivery spot <small>Drop it at on of our location points and we will do the rest</small></h1>
    <div class="row">
        <div class="col-md-2">
            <div id="controls"></div>
        </div>
        <div class="col-md-10">
            <div id="gmap" style="width: 100%; height: 600px"></div>
        </div>
    </div>
@stop

@section('scripts')
    {{ HTML::script('https://maps.googleapis.com/maps/api/js?key=AIzaSyBXpdZ1klzTuFAmTTHYclJe2n_hkaBOpbU&sensor=true') }}
    {{ HTML::script('assets/js/vendor/maplace.min.js') }}
    <script type="text/javascript">
        (function(){
            var jqxhr = $.getJSON( "{{ action('ApiController@getLocations') }}", function(data) {
                var Locations = [];
                $.each( data.Locations, function( key, val ) {
                    var obj = {
                        lat: val.lat,
                        lon: val.long,
                        title: val.city,
                        zoom: 14
                    };
                    Locations.push(obj);
                });

                new Maplace({
                    locations: Locations,
                    map_div: '#gmap',
                    controls_type: 'list',
                    controls_on_map: false
                }).Load();
            });
        })();
    </script>
@stop