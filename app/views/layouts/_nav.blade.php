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
        <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Quick Menu <b class="caret"></b></a>
            <ul class="dropdown-menu">
                @if(Auth::user()->getPermission() >= 1)
                <li>
                    {{ link_to_action('SupportController@index', 'Control Panel') }}
                </li>
                @else
                    <li>
                        {{ link_to_action('PackageController@index', 'Dashboard') }}
                    </li>
                    <li>
                        {{ link_to_action('PackageController@create', 'Create Package') }}
                    </li>
                @endif

                <li class="divider"></li>
                <li>
                    {{ link_to_action('SessionsController@destroy', 'Logout') }}
                </li>
            </ul>
        </li>
    @endif
</ul>