<header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top" id="menu">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <span style="font-family: Arial Black; font-size: 10px;" id="white">
                        {{ strtoupper(config('app.name', 'santonamedia')) }}
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" id="white" href="{{route('admin.posts.index')}}">POSTS</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" id="white" href="{{route('admin.categories.index')}}">CATEGORIES</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" id="white" href="{{route('contactus.contacts')}}">CONTACTS</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" id="white" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" id="white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <span id="cwhite">{{ Auth::user()->name }}</span> <span class="caret" id="cwhite"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
    </nav>
</header>