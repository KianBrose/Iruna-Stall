<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Iruna Global Stall</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
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
                    <h4>About</h4>
                    <hr>

                    <div>
						<p>The Iruna Online Global Stall is a project developed by Kumar, Polowis and KB that aims to facilitate the process of buying and selling items from the game Iruna Online. On this website, you can search for items stored on our database or post items as a seller.<br>Iruna Global Stall is in no way endorsed or affiliated to Iruna or Asobimo. The name Iruna and all of it’s assets belong to ASOBIMO.</p>
                        
						<h3><b>Contact/Suggestions</b></h3>
						<p>Contact us at contact@irunastall.com if you have any difficulties, problems or suggestions about our site. If you wish to talk to us directly please join the Iruna online discord using the following link: https://discord.gg/NH75NqA </p>
			            <br>
                        
			            <h3><b>Terms of Service</b></h3>
						<p>By signing up to our service, you agree to let us store information such as email, passwords, usernames and email addresses so we can provide you with the best possible experience. <br>
                        We reserve the right to delete and modify your information without notice. This would only happen in rare occasions where your account is believed to be related to fraudulent activity. <br>
                        You are not allowed to create multiple accounts. Anyone having created multiple accounts will have all of the duplicate accounts permanently terminated without notice when discovered. <br>
                        When posting an item in our “Add Items” page, you are not allowed to enter a “fake price” to make your post appear higher than others on the search rankings. Anyone discovered doing this activity will have their post removed and their account heavily penalized. <br>
                        You are not allowed to have over 4 posts of the same item (at the exception of equipment) since we have a quantity system set in place, simply put your available quantity all into one item. <br>
                        If you have been scammed and have proof of fraudulent activity, please send us an email with proof so we can review it and add it to the scammer page. <br>
                        <b>We do not take responsibility for any loss of funds, be it digital currency of real money that may be caused by scammers. </b><br>
                        Please refer to our “Trusted Midmans” page to get options on different midmans that we offer.<br>
                        Inactive accounts will be automatically terminated after 3 months of inactivity. Posts will be automatically removed 1 month after they get posted.</p>
                        <br>
                        
                        <h3><b>Privacy Policy</b></h3>
                        <p>We do not sell, distribute or share any information about our users to any 3rd parties. We store information about our users such as email, hashed passwords, ip addresses and usernames so we can provide our service. <br>
                        You have access to your data at all times and can delete it all anytime by going to the “Account” page and deleting all of your data. </p>
					</div>
                    <div class="row divider" role="separator" style="margin-top:20px;"></div>
                </div>
                <div></div>
            </div>
            <div class="col-md-2">
                <div>

                    <h4>&nbsp;</h4>
                    <hr>


                    <div>
                        <h5>Useful Links</h5></div>
                    <ul class="decoration_none" style="font-size: 12px;">
                        <li><a href="http://iruna-online.com/">Official Iruna Website</a></li>
                        <li><a href="http://irunaonline.boards.net/">Iruna Boards Forum</a></li>
                        <li><a href="http://iruna-online.weebly.com/">Iruna Weebly</a></li>
                        <li><a href="https://wikiwiki.jp/iruna-online/">Iruna JP Wiki</a></li>
                    </ul>
                    <br>

                </div>
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
