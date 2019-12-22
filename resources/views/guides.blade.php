<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title> Guides | Iruna Global Stall</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow" >
    <meta name="description" content="Find about Iruna Stall on how it used to find, buy and sell items for free! In the Iruna Global Stall, you can post your items as a seller and search for items without the need for registration.">
    <meta name="keywords" content="Iruna, Stall, Global, iruna, stall, global, Iruna Online, buy, sell, trade, about, Kian Brose, Kumar, Polowis, terms, service, contact" >
    <meta name="hostname" content="irunastall.com" >
    <meta name='subject' content="About Iruna Global Stall">
    <meta name="author" content="Kian Brose" >
    <meta name='coverage' content='Worldwide'>
    <meta name='distribution' content='Global'>
    <meta name='rating' content='General'>
    <meta name='HandheldFriendly' content='True'>
    <meta name='MobileOptimized' content='320'>
    <meta name='target' content='all'>
    <meta name="apple-mobile-web-app-title" content="Guides | Iruna Global Stall">
    <meta name='apple-mobile-web-app-capable' content='yes'>
    <meta name='apple-touch-fullscreen' content='yes'>
    <meta name='apple-touch-fullscreen' content='yes'>
    <meta name='application-name' content="Iruna Global Stall">
    <link rel="apple-touch-icon" href="https://irunastall.com/img/iruna.jpg">
    <meta name="twitter:card" content="summary" >
    <meta name="twitter:title" content="Guides | Iruna Global Stall" >
    <meta name="twitter:description" content="Know about Iruna global stall. This is a platform to find, buy and sell items of Iruna online game. Account is not needed for searching for items" >
    <meta property="og:title" content="Iruna Stall">
    <meta property="og:type" content="website" >
    <meta property="og:description" content="Know about on how to find, buy and sell items for free on the Iruna Online Global Stall! In the Global Stall, you can post your items as a seller and search for items as a buyer. The stall is free to use and requires no account to search for items.">
    <meta property="og:image" content="https://irunastall.com/img/iruna.jpg">
    <meta property="og:url" content="https://irunastall.com" >
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="canonical" href="https://irunastall.com" >
    
    <link rel="manifest" href="manifest.json" >
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
		 (adsbygoogle = window.adsbygoogle || []).push({
			  google_ad_client: "ca-pub-8585623774913935",
			  enable_page_level_ads: true
		 });
	</script>
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
                    <h4>Guides</h4>
                    <hr>
                    <div>
						<p>Here you can find recently updated guides for each individual class in the game:</p>
                        <br>
                        <h4>Ninja guides:</h4>
                        <ul>
                            <li><a href="/guides/ninja1">Magic &amp; SK/Hybrid GuideMagic &amp; SK/Hybrid Guide</a></li>
                            <li><a href="/guides/ninja2">DoC Spam Ninja Guide (Post-Balance Patch)</a></li>
                        </ul>
                        <hr>
                        <h4>Samurai guides:</h4>
                        <ul>
                          <li><a href="/guides/samurai1">Autoskill Samurai Guide by Tamagu/Ymir</a></li>
                          <li><a href="/guides/samurai2">Samurai Guide</a></li>
                        </ul>
                        <hr>
                        <h4>Minstrel guides:</h4>
                        <ul>
                          <li><a href="/guides/ministrel1">NightinGal's Minstrel Guide [Updated~Post Patch]</a></li>
                        </ul>
                        <hr>
                        <h4>Alchemist guides:</h4>
                        <ul>
                          <li><a href="/guides/alchemist1">Alchemist Guide</a></li>
                        </ul>
                        <hr>
                        <h4>Monk guides:</h4>
                        <ul>
                          <li><a href="/guides/monk1">Complete Monk Guide</a></li>
                        </ul>
                        <hr>
                        <h4>Bishop guides:</h4>
                        <ul>
                          <li><a href="/guides/bishop1">Skyfallx's Mini Bishop Guide</a></li>
                        </ul>
                        <hr>
                        <h4>Servant guides:</h4>
                        <ul>
                          <li><a href="/guides/servant1">Short Servant Guide</a></li>
                        </ul>
                        <hr>
                        <h4>Enchanter guides:</h4>
                        <ul>
                          <li><a href="/guides/enchanter1">Enchanter Complete Guide</a></li>
                          <li><a href="/guides/enchanter2">Enchanter Gear Review</a></li>
                        </ul>
                        <hr>
                        <h4>High Wizard guides:</h4>
                        <ul>
                          <li><a href="/guides/hw1">Complete High Wizard Guide</a></li>
                        </ul>
                        <hr>
                        <h4>Necromancer guides:</h4>
                        <ul>
                          <li><a href="/guides/necro1">Updated Necromancer's Guide</a></li>
                        </ul>
                        <hr>
                        <h4>Assassin guides:</h4>
                        <ul>
                          <li><a href="/guides/assasin1">Complete Assassin Skill Database</a></li>
                          <li><a href="/guides/assasin2">Damage Backstab Assassin Full Stat Guide</a></li>
                        </ul>
                        <hr>
                        <h4>Sniper guides:</h4>
                        <ul>
                          <li><a href="/guides/sniper1">Simple Sniper Guide</a></li>
                        </ul>
                        <hr>
                        <h4>Gladiator guides:</h4>
                        <ul>
                          <li><a href="/guides/gladiator1">The Gladiator guide</a></li>
                        </ul>
                        <hr>
                        <h4>Paladin guides:</h4>
                        <ul>
                          <li><a href="/guides/paladin1">Pein's Paladin Guide! (Reworked by Krish)</a></li>
                        </ul>
                        <hr>
					</div>                 
                    <div class="row divider" role="separator" style="margin-top:20px;"></div>
                </div>
                <div></div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" id="cookieinfo"
    src="//cookieinfoscript.com/js/cookieinfo.min.js">
</script>
</body>

</html>
