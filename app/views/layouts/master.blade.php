<!doctype html>
<html lang="nl" @yield('html-tag')>
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Pack And Track ')</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')

    <!-- stylesheets -->
    {{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css') }}
    {{ HTML::style('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css') }}
    @yield('styles')
    {{ HTML::style('assets/css/main.css?v=1') }}
</head>
<body>

    <header class="navbar navbar-packtrack navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-content">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="{{ action('HomeController@index') }}">
                    {{ HTML::image('assets/img/logo.png', 'Pack And Track') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-content">
                <ul class="nav navbar-nav" role="navigation">
                    <li class="{{ set_active('/') }}">
                        {{ link_to_action('HomeController@index', 'Home') }}
                    </li>
                    <li class="{{ set_active('locations') }}">
                        {{ link_to_action('HomeController@getLocations', 'Locations') }}
                    </li>
                    <li class="{{ set_active('tracking') }}">
                        {{ link_to_action('HomeController@getTracking', 'Track Pack') }}
                    </li>
                    <li class="{{ set_active('contact') }}">
                        {{ link_to_action('HomeController@contact', 'Contact Us') }}
                    </li>
                    <li class="{{ set_active('about') }}">
                        {{ link_to_action('HomeController@about', 'About Us') }}
                    </li>
                </ul>

                {{-- Dynamic View --}}
                @include('layouts._nav')
            </div>
        </div>
    </header>

    <div class="jumbotron {{ set_header() }}">
        <div class="container">
            <h2 class="bigEntrance">Track your pack!</h2>
        </div>
    </div>

    <div id="content">
        <div class="container">
            @if(Session::get('success'))
            <div class="alert alert-success fade in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>Success:</strong> {{ Session::get('success') }}
            </div>
            @endif

            @if(Session::get('errors'))
            <div class="alert alert-danger fade in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <ul>
                    @foreach ($errors->all('<li>:message</li>') as $error)
                    {{ $error }}
                    @endforeach
                </ul>
            </div>
            @endif

            @yield('content')
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    {{ HTML::image('assets/img/thomasmore.png', 'Pack And Track') }}
                </div>
                <div class="col-md-3">

                </div>
                <div class="col-md-3">

                </div>
                <div class="col-md-3">

                </div>
            </div>
        </div>
        <hr/>
        <section id="copyright" class="text-center">
            <small>PACK AND TRACK, 2014</small>
        </section>
    </footer>

    <!-- scripts -->
    {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js') }}
    {{ HTML::script('//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js') }}
    @yield('scripts')
</body>
</html>