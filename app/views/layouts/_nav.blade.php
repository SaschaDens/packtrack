<ul class="nav navbar-nav navbar-right">
    @if(!Auth::check())
        {{-- Not Logged in --}}
        <li class="{{ set_active('register') }}">
            {{ link_to_action('UsersController@index', 'Sign Up') }}
        </li>
        <li class="{{ set_active('login') }}">
            {{ link_to_action('SessionsController@create', 'Sign In') }}
        </li>
    @else
        {{-- Logged in --}}
        <li class="{{ set_active('dashboard') }}">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
            {{-- <a href="{{ action('PackageController@index') }}">Dashboard <span class="caret"></span></a> --}}
            <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </li>
    @endif
</ul>