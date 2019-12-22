<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Iruna Global Stall | Iruna Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow" >
    <meta name="description" content="Iruna Stall is a platform to find, buy and sell items for free! In the Iruna Global Stall, you can post your items as a seller and search for items as a buyer. The stall is free to use and requires no account to search for items.">
    <meta name="keywords" content="Iruna, Stall, Global, iruna, stall, global, Iruna Online, buy, sell, trade, Iruna enchanter skills, Iruna struggler, Iruna monk, Iruna online classes, samurai, ninja, leveling, dragon, crystal, quest, Toram online" >
    <meta name="hostname" content="irunastall.com" >
    <meta name='subject' content="Iruna Global Stall">
    <meta name="author" content="Kian Brose" >
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
    <meta name="twitter:description" content="Iruna global stall is platform to find, buy and sell items of Iruna online game. Account is not needed for searching for items" >
    <meta property="og:title" content="Iruna Stall">
    <meta property="og:type" content="website" >
    <meta property="og:description" content="Find, buy and sell items for free on the Iruna Online Global Stall! In the Global Stall, you can post your items as a seller and search for items as a buyer. The stall is free to use and requires no account to search for items.">
    <meta property="og:image" content="https://irunastall.com/img/iruna.jpg">
    <meta property="og:url" content="https://irunastall.com" >
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="canonical" href="https://irunastall.com" >
    
    <!-- manifest for PWA -->
    <link rel="manifest" href="manifest.json" >
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="css/style.css" rel="stylesheet">
	
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
                                <a class="dropdown-item" href="/account">Settings</a>
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
                    <h4>Welcome!</h4>
                    <hr>
					
					<form class="form-inline" name="form1" id="form1" action="/search" method="GET">
						@csrf
					  <div class="form-group mb-2" style="width:80%">
						<label for="search" class="sr-only">Item name</label>
						<input type="text" class="form-control ui-autocomplete-input" id="search"  name="search" placeholder="Item/Ability name" autocomplete="off" style="width:98%">
					  </div>
					  <button type="submit" class="btn btn-primary mb-2" name="search_button" id="search_button" value="Search" style="width:20%">Search</button>
					</form>
                    @error('searcherror')
                    <div style="color:red">{{$message}}</div>
                    <br>
                    @enderror
                    <div class="row divider" role="separator" ></div>
					<br>
                    <p style="font-size: 14px;">Welcome to our Iruna Global Stall</p>
					<p style="font-size: 14px;">Enter the item name and press search</p>
					<form class="form-inline" name="form1" id="form1" action="/search" method="GET">
							<button type="submit" class="btn btn-primary mb-2" name="search_button" id="search_button" value="Search" style="width:100%">Browse all items</button>
					</form>
                    <form class="form-inline" name="form1" id="form1" action="/guides" method="GET">
							<button type="submit" class="btn btn-primary mb-2" value="Search" style="width:100%">View Guides</button>
					</form>
                    <form class="form-inline" name="form1" id="form1" action="/scammers" method="GET">
							<button type="submit" class="btn btn-primary mb-2" value="Search" style="width:100%">View Scammer List</button>
					</form>
                    <form class="form-inline" name="form1" id="form1" action="/tutorial" method="GET">
							<button type="submit" class="btn btn-primary mb-2" value="Search" style="width:100%; background-color: green; ">Iruna stall tutorial</button>
					</form>
                    <hr>
                    <h3>2019-12-22 Iruna Stall Update 1.5</h3>
                    <p>Fixed some minor display issues for mobile devices, an "Add" button has been added to user profiles for the upcomming Chat feature (not implemented/working yet). The following new category searches have been added: @add @adds @additional @gear @gears @spec @specs, @special @specials @body @armor @armors @bodies</p>
                    <hr>
                    <h3>2019-12-06 Iruna Stall Update 1.17</h3>
                    <p>We renamed the account page to "Settings" which can now be found under the name when loggin in</p>
					<hr>
					<h3>2019-12-06 Iruna Stall Update 1.15</h3>
					<p>We apologise for the error when adding items, it's fixed now.<br> You can now display all items within a category by searching for @equipment or @xtal ...<br>Full list: @equip @equipment @al @alcrystas @xtal @crystas @relic @reliccrystas @item @items @material @add @adds @additional @gear @gears @spec @specs @special @specials @body @armor @armors @bodies</p>
                    <hr>
                    <h3>2019-12-06 Iruna Stall Update 1.12</h3>
                    <p>The <a href="/guides">guides section</a> has been added with the permission of Ryu! More guides shall be updated soon</p>
                    <hr>
                    <h3>2019-12-06 Iruna Stall Update 1.1</h3>
                    <p>You can now enter prices with K / M / B as shortcuts! Example: 100K 100k 100M 100M 100B 100b</p><br><p>This feature works both in add item and in view my items page!</p>
                    <hr>
                    <h3>2019-12-06 Iruna Stall Update 1.02</h3>
                    <p>The AL Crystal section now has <span style="color:#ff0000;">C</span><span style="color:#ff7f00;">o</span><span style="color:#ff0000;">l</span><span style="color:#00ff00;">o</span><span style="color:#00ffff;">r</span> text!</p>
                    <hr>
                    <h3>2019-12-06 Iruna Stall Update 1.01</h3>
                    <p>Here are the latest features we added:</p>
                    <ul>
                      <li>You can now search for Abilities inside equipment! Note that the name of the ability has to be added manually, our autocomplete only works for items</li>
                      <li>We have added a brand new <a href="/tutorial"><b>Tutorial</b></a> page for all new users!</li>
                    </ul>
                    <p>We plan on adding the following features soon:</p>
                    <ul>
                        <li>We are currently working on changing the color of the AL Crystal name to the correct color</li>
                        <li>We are trying to implement a system so that sellers can enter K / M / B instead of full numeric values, but this might take a while</li>
                        <li>We are working on a "Request item" page where buyers can request what they want</li>
                    </ul>
                    <hr>
                    <div class="row divider" role="separator" style="margin-top:20px;"></div>
                </div>
                <div></div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"   integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="   crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"   integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="   crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" id="cookieinfo"
    src="//cookieinfoscript.com/js/cookieinfo.min.js">
	</script>
    <script>
        $(document).ready(function() {
            
        $( "#search" ).autocomplete({
       
        source: function(request, response) {
            $.ajax({
            url: "{{secure_url('api/searchitem')}}",
            data: {
                    term : request.term
             },
            dataType: "json",
            success: function(data){
               var resp = $.map(data,function(obj){
                    return obj.name;
               }); 
 
               response(resp);
            }
        });
    },
    minLength: 3
 });
});
        </script>
</body>

</html>
