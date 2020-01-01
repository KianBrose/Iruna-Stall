<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow"/>
    <meta name='coverage' content='Worldwide'>
    <meta name='distribution' content='Global'>
    <meta name='rating' content='General'>
    <meta name='HandheldFriendly' content='True'>
    <meta name='MobileOptimized' content='320'>
    <meta name='target' content='all'>
    <meta name="apple-mobile-web-app-title" content="Iruna Global Stall">
    <meta name='apple-mobile-web-app-capable' content='yes'>
    <meta name='apple-touch-fullscreen' content='yes'>
    <meta name='apple-touch-fullscreen' content='yes'>
    <meta name='application-name' content="Iruna Global Stall">
    <link rel="apple-touch-icon" href="https://irunastall.com/img/iruna.jpg">
    <meta name="twitter:card" content="summary" >
    <meta name="twitter:title" content="Iruna Global Stall" >
    <meta name="twitter:description" content="{{$item->name}} is an item for sell on Iruna Global Stall" >
    <meta property="og:image" content="https://irunastall.com/img/iruna.jpg">
    <meta property="og:title" content="Iruna Stall">
    <meta property="og:description" content="{{$item->name}} is an item for sell on Iruna Global Stall">
	<meta name="description" content="{{$item->name}} is an item for sell on Iruna Global Stall."/>
    <meta name="keywords" content="Iruna, Stall, Global, iruna, stall, global"/>
    <meta name="hostname" content="irunastall.com"/>
    <title>{{$item->name}} | Irune Global stall</title>
       
    <!-- manifest for PWA -->
    <link rel="manifest" href="manifest.json" >
    <script src="js/serviceLoader.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('css/mainprofile.css') }}" rel="stylesheet">
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/user/{{ auth()->user()->user_id }}">Profile</a>
                                    <a class="dropdown-item" href="/account">Settings</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.prevenh6efault();
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
                        <h4>Item's details</h4>
                        <hr>
                        @if($item->category == 'xtal')
                        <div class="row divider" role="separator" ></div>
                        <h6>Name: {{$item->name }} </h6>
                        <br>
                        <h6>Price: {{ number_format($item->price)}} </h6>
                        <br>
                        <h6>Quantity: {{number_format($item->quantity)}}</h6>
                        <br>
                        <h6>Posted at: {{date_format($item->created_at, "d/m/Y")}}</h6>
                        <h6>Seller: <a href="/user/{{ $item->owner_id}}">{{ $item->contact }}</a></h6>

                        @elseif($item->category == 'equipment')
                        <h6>Name: {{$item->name}}</h6>
                        <h6>ATK: {{$item->atk}}</h6>
                        <h6>DEF: {{$item->def}}</h6>
                        <br>
                        <h6>Price: {{ number_format($item->price) }}</h6>
                    <h6> Refinement: +{{$item->refinement}}</h6>
                        @if ($item->slots == 0)
										<h6>Slot 1: No slot</h6>
										<h6>Slot 2: No slot</h6>
									@elseif ($item->slots == 1)
										@if ($item->slot1 == null)
											<h6>Slot 1: Empty slot</h6>
											<h6 >Slot 2: No slot</h6>
										@else
											<h6>Slot 1: {{ $item->slot1 }}</h6>
											<h6 >Slot 2: No slot</h6>
										@endif
									@elseif ($item->slots == 2)
										@if ($item->slot1 != null)
											@if ($item->slot2 != null)
												<h6>Slot 1: {{ $item->slot1 }}</h6>
												<h6>Slot 2: {{ $item->slot2 }}</h6>
											@else
												<h6>Slot 1: {{ $item->slot1 }}</h6>
												<h6>Slot 2: Empty slot</h6>
											@endif
										@elseif ($item->slot1 == null)
											@if ($item->slot2 == null)
												<h6>Slot 1: Empty slot</h6>
												<h6>Slot 2: Empty slot</h6>
											@else
												<h6>Slot 1: Empty slot</h6>
												<h6>Slot 2: {{ $item->slot2 }}</h6>
											@endif
										@endif
									@endif
									@if ($item->ability == null)
										<h6>Ability : None</h6>
									@else
                                        <h6>Ability: {{ $item->ability }}</h6>
                                        <h6> Ability's level: {{$item->ability_level}}</h6>
                                    @endif
                                <h6>Seller: <a href="/user/{{ $item->owner_id}}">{{ $item->contact }}</a></h6>

                            @elseif($item->category == 'item')
                                <h6>Name: {{$item->name }} </h6>
                            <br>
                            <h6>Price: {{ number_format($item->price)}} </h6>
                            <br>
                            <h6>Quantity: {{number_format($item->quantity)}}</h6>
                            <br>
                            <h6>Posted at: {{date_format($item->created_at, "d/m/Y")}}</h6>
                            <h6>Seller: <a href="/user/{{ $item->owner_id}}">{{ $item->contact }}</a></h6>

                            @elseif($item->category == 'ai')
                                <h6>Name: {{$item->name }} </h6>
                                <br>
                                <h6>Price: {{ number_format($item->price)}} </h6>
                                <br>
                                <h6>Color: {{$item->color}}</h6>
                                <h6>Quantity: {{number_format($item->quantity)}}</h6>
                                <br>
                                <h6>Posted at: {{date_format($item->created_at, "d/m/Y")}}</h6>
                                <h6>Seller: <a href="/user/{{ $item->owner_id}}">{{ $item->contact }}</a></h6>

                            @elseif($item->category == 'relic')
                                <h6>Name: {{$item->name }} </h6>
                                <br>
                                <h6>Price: {{ number_format($item->price)}} </h6>
                                <br>
                                <h6>Quantity: {{number_format($item->quantity)}}</h6>
                                <br>
                                <h6>Posted at: {{date_format($item->created_at, "d/m/Y")}}</h6>
                                <h6>Seller: <a href="/user/{{ $item->owner_id}}">{{ $item->contact }}</a></h6>
                            
                            @endif

                    </div>
                </div>
            </div>
    </div>
    
<script type="text/javascript" id="cookieinfo"
    src="//cookieinfoscript.com/js/cookieinfo.min.js">
</script>
</body>
</html>
