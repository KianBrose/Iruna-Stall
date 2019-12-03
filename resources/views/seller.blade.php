<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow"/>
    <meta property="og:image" content="https://irunastall.com/img/iruna.jpg">
    <meta property="og:title" content="Iruna Stall">
    <meta property="og:description" content="Find, buy and sell items for free on the Iruna Online Global Stall! In the Global Stall, you can post your items as a seller and search for items as a buyer. The stall is free to use and requires no account to search for items.">
	<meta name="description" content="Find, buy and sell items for free on the Iruna Online Global Stall! In the Global Stall, you can post your items as a seller and search for items as a buyer. The stall is free to use and requires no account to search for items."/>
    <meta name="keywords" content="Iruna, Stall, Global, iruna, stall, global"/>
    <meta name="hostname" content="irunastall.com"/>
    <meta name="user" content="{{ $user->name }}"/>
    
    <title>Iruna Global Stall</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/util.css') }}" rel="stylesheet">
</head>

<body>
        
<div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Iruna Global Stall
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
		    <ul class="navbar-nav ml-auto">
		    	<li class="nav-item">
                             <a class="nav-link" href="/account">Account</a>
                        </li>
			<li class="nav-item">
                             <a class="nav-link" href="/additem">Add item</a>
                        </li>
			<li class="nav-item">
                             <a class="nav-link" href="/viewitem">View my items</a>
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
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
    </div>
    <div class="container">
        <div class="row" >
            <div class="col-md-7 offset-md-3" >

                <div style="height: auto !important;">
		    	<br>
                    <h4>Seller's Profile</h4>
                    <hr>
                    <div class="row divider" role="separator" ></div>
                    <h6>Username: {{ $user->name }}</h6>
					<h6>Date registered: {{ $user->created_at }} </h6>
					<br>
					<h4>Contact</h4>
					<hr>
					<div class="row divider" role="separator" ></div>
					<h6>Facebook: {{$user->facebook }} </h6>
					<h6>Discord: {{$user->discord }} </h6>
					<h6>Whatsapp: </h6>
					<br>
					<h4>Seller's items</h4>
					<hr>
					<div class="row divider" role="separator" ></div>
                    <h3>Equipment</h3>
                    <hr>
                    <br>
                    <div>
                        <div>
                            <table>
                                <thead>
                                    <tr class="table100-head">
                                        <th class="equipment">Name</th>
                                        <th class="equipment">ATK</th>
                                        <th class="equipment">DEF</th>
                                        <th class="equipment">Refinement</th>
                                        <th class="equipment">Slots</th>
                                        <th class="equipment">Slot 1</th>
                                        <th class="equipment">Slot 2</th>
                                        <th class="equipment">Ability</th>
                                        <th class="equipment">Ability Lv</th>
                                        <th class="equipment">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="equipment">Name</td>
                                        <td class="equipment">ATK</td>
                                        <td class="equipment">DEF</td>
                                        <td class="equipment">Refinement</td>
                                        <td class="equipment">Slots</td>
                                        <td class="equipment">Slot 1</td>
                                        <td class="equipment">Slot 2</td>
                                        <td class="equipment">Ability</td>
                                        <td class="equipment">Ability Lv</td>
                                        <td class="equipment">Price</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
				    </div>
                    <br>
                    <h3>Materials</h3>
                    <hr>
                    <br>
                    <div>
                        <div>
                            <table>
                                <thead>
                                    <tr class="table100-head">
                                        <th class="materials">Name</th>
                                        <th class="materials">QTY</th>
                                        <th class="materials">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="materials">Name</td>
                                        <td class="materials">QTY</td>
                                        <td class="materials">Price</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
				    </div>
                    <br>
                    <h3>Xtals</h3>
                    <hr>
                    <br>
                    <div>
                        <div>
                            <table>
                                <thead>
                                    <tr class="table100-head">
                                        <th class="xtals">Name</th>
                                        <th class="xtals">QTY</th>
                                        <th class="xtals">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="xtals">Name</td>
                                        <td class="xtals">QTY</td>
                                        <td class="xtals">Price</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
				    </div>
                    <br>
                    <h3>AL's</h3>
                    <hr>
                    <br>
                    <div>
                        <div>
                            <table>
                                <thead>
                                    <tr class="table100-head">
                                        <th class="materials">Name</th>
                                        <th class="materials">QTY</th>
                                        <th class="materials">Color</th>
                                        <th class="materials">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="materials">Name</td>
                                        <td class="materials">QTY</td>
                                        <td class="materials">Color</td>
                                        <td class="materials">Price</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
				    </div>
                    <br>
                    <h3>Relics</h3>
                    <hr>
                    <br>
                    <div>
                        <div>
                            <table>
                                <thead>
                                    <tr class="table100-head">
                                        <th class="relics">Name</th>
                                        <th class="relics">QTY</th>
                                        <th class="relics">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="relics">Name</td>
                                        <td class="relics">QTY</td>
                                        <td class="relics">Price</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
				    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" id="cookieinfo"
    src="//cookieinfoscript.com/js/cookieinfo.min.js">
</script>
</body>

</html>
