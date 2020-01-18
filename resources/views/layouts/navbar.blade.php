<div id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            
            <a class="navbar-brand" href="{{ url('/') }}" style="width:200px;">
                    <img alt="Iruna Stall" src="{{asset('img/bannerIS.png')}}" style="width:70%; height:70%">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                         
                    </li>
        <li class="nav-item">
                         <a class="nav-link" href="/additem">Add item</a>
                    </li>
        <li class="nav-item">
                         <a class="nav-link" href="/viewitem">View my items</a>
                    </li>
        <li class="nav-item">
                         <a class="nav-link" href="/scammers">Scammer list</a>
                    </li>
        <li class="nav-item">
                         <a class="nav-link" href="/about">About</a>
                    </li>
        </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown notification">
                            @if($message->count() >= 1)
                        <span class="badge" style="font-weight: 900;">{{$message->count()}}</span>
                            @endif
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/user/{{ auth()->user()->user_id }}">Profile</a>
                            <a class="dropdown-item" href="/account">Settings</a>
                            <a href="/private" class="dropdown-item">
                              <span>Messages</span>
                              @if($message->count() >= 1)
                            <span style="color: red; font-weight: 900;">{{$message->count()}}</span>
                            @endif
                            </a>
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
</div>