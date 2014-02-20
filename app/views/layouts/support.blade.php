<!DOCTYPE html>
<html ng-app>
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
    {{ HTML::style('assets/css/admin.css') }}
    <script>
        var URL = {
            'base' : '{{ URL::to('/') }}',
            'current' : '{{ URL::current() }}',
            'full' : '{{ URL::full() }}'
        };
    </script>
</head>
<body>
<header>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="logo" href="#">
                    {{ HTML::image('assets/img/logo.png', 'Pack And Track') }}
                </a>
            </div>
            <div class="collapse navbar-collapse pull-right">
                <ul class="nav navbar-nav">
                    <li><a href="#">Dashboard <b class="caret"></b></a></li>
                    <li id="profile">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">sascha.dens@telenet.be <b class="caret"></b></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                            <li class="username">
                                <a>
                                    <div class="text-center">

                                        <p>Welcome, Sascha</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Profile Settings <span class="glyphicon glyphicon-wrench"></span></a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Help</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a href="http://ds-dev.be/logout" role="menuitem" tabindex="-1">Sign Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
    <div class="jumbotron"></div>
</header>

<div class="content">
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

<!-- scripts -->
{{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js') }}
{{ HTML::script('//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js') }}
@yield('scripts')
{{ HTML::script('assets/js/main.js') }}

</body>
</html>