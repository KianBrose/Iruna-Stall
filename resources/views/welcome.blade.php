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
    <script src="js/serviceLoader.js"></script>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/donationsbar.css')}}" rel="stylesheet">
</head>

<body>
        
@include('layouts.navbar')

    <div class="container">
        <div class="row" >
            <div class="col-md-7 offset-md-3" >

                <div style="height: auto !important;">
		    <br>
                    <h4>Welcome!</h4>
                    <hr>
					
					<form class="form-inline" name="form1" id="form5" action="/search" method="GET">
						@csrf
					  <div class="form-group mb-2" style="width:80%">
						<label for="search" class="sr-only">Item name</label>
						<input type="text" class="form-control ui-autocomplete-input" id="search"  name="search" placeholder="Item/Ability name" autocomplete="off" style="width:98%">
					  </div>
					  <button type="submit" class="btn btn-primary mb-2" name="search_button" id="search_button1" value="Search" style="width:20%">Search</button>
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
							<button type="submit" class="btn btn-primary mb-2" name="search_button" id="search_button2" value="Search" style="width:100%">Browse all items</button>
					</form>
                    <form class="form-inline" name="form1" id="form3" action="/scammers" method="GET">
							<button type="submit" class="btn btn-primary mb-2" value="Search" style="width:100%">View Scammer List</button>
					</form>
                    <form class="form-inline" name="form1" id="form4" action="/tutorial" method="GET">
							<button type="submit" class="btn btn-primary mb-2" value="Search" style="width:100%; background-color: green; ">Iruna stall tutorial</button>
					</form>
					<hr>
					<p style="color:red;"><b>We need your help to keep this website alive and ad-free!</b><br>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_donations" />
					<input type="hidden" name="business" value="opencore0@gmail.com" />
					<input type="hidden" name="item_name" value="Please donate so that we can keep the Iruna Stall project alive!" />
					<input type="hidden" name="currency_code" value="USD" />
					<input type="image" src="https://www.paypalobjects.com/en_US/SE/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
					<img alt="" border="0" src="https://www.paypal.com/en_SE/i/scr/pixel.gif" width="1" height="1" />
					</form>
                    <hr>
                    <div>
                    <div id=countdown-wrap>
                      <div id="glass">
                        <div id="progress">
                        </div>
                      </div>
                    </div>
                    <span style="float: left; font-size: 14px; font-weight: 800;">$0</span>
                    <span style="float: right; font-size: 14px; font-weight: 800;">$15</span>
                    <p style="text-align: center; font-size: 14px; font-weight: 800;">Feb 2020</p>
                    <h4>Special thanks to our supporter!</h4>
                    <h6>Note: We recieve slightly less than you donate due to fees</h6>
                    <!--
                    <ul>
                      <li><b>Akairi</b> - 4.43$</li>
                      <li><b>Espurr</b> - 1.12$</li>
                    </ul>  -->
                    <hr>
                    <h3>2020-02-01 Iruna Stall Update 2.3</h3>
                    <p>UPDATE: We are currently working on making a Wiki section for the irunastall with all items in the game! We will also work on making a detailed map of every single EP in iruna!</p>
                    <hr>
                    <h3>2020-01-13 Iruna Stall Update 2.21</h3>
                    <p>The Seller profiles now have Color AL crystals.<br>Empty contact options will no longer be displayed.</p>
					<hr>
                    <h3>2020-01-05 Iruna Stall Update 2.2</h3>
                    <p>New Iruna Stall banner!</p>
                    <hr>
                    <h3>2020-01-02 Iruna Stall Update 2.1</h3>
                    <p>You can now see the amount of new messages from any page on the site! Will be adding notifications soon!</p>
                    <hr>
                    <h3>2020-01-01 Iruna Stall Update 2.0</h3>
                    <p><b>CHRISTMAS UPDATE 2020</b><br>We now have a functioning chat feature! Check it out <a href="/private">here</a> or click on a user's profile to send them a message! (We are working on notifications and adding the chat to the navbar)</p>
                    <hr>
                    <h3>2019-12-27 Iruna Stall Update 1.51</h3>
                    <p>Removed Guides due to SEO issues</p>
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
