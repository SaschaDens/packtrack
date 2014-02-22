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
    {{ HTML::style('assets/css/main-new.css') }}
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

                <a class="navbar-brand" href="#">
                    {{ HTML::image('assets/img/logo_neww.png', 'Pack And Track') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-content">
                <ul class="nav navbar-nav" role="navigation">
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">About</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Sign Up</a></li>
                    <li><a href="#">Sign In</a></li>
                </ul>
            </div>
        </div>
    </header>

    <div class="jumbotron" style="background: url(assets/img/about1.jpg) top center no-repeat;">
        <div class="container">
            <h2 class="bigEntrance">Track your pack!</h2>
        </div>
    </div>

    ERRORS EN SUCCESS HIER NOG

    <div id="content">
        <div class="container">
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
            <small>COPYRIGHT 2014 PACK AND TRACK.</small>
        </section>
    </footer>

    <!-- scripts -->
    {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js') }}
    {{ HTML::script('//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js') }}
    @yield('scripts')
    {{ HTML::script('assets/js/main.js') }}
</body>
</html>