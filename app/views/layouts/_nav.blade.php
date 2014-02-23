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
            <a href="{{ action('PackageController@index') }}">Dashboard <span class="caret"></span></a>
        </li>
    @endif
</ul>