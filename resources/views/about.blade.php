<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title> About | Iruna Global Stall</title>
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
    <meta name="apple-mobile-web-app-title" content="About | Iruna Global Stall">
    <meta name='apple-mobile-web-app-capable' content='yes'>
    <meta name='apple-touch-fullscreen' content='yes'>
    <meta name='apple-touch-fullscreen' content='yes'>
    <meta name='application-name' content="Iruna Global Stall">
    <link rel="apple-touch-icon" href="https://irunastall.com/img/iruna.jpg">
    <meta name="twitter:card" content="summary" >
    <meta name="twitter:title" content="About | Iruna Global Stall" >
    <meta name="twitter:description" content="Know about Iruna global stall. This is a platform to find, buy and sell items of Iruna online game. Account is not needed for searching for items" >
    <meta property="og:title" content="Iruna Stall">
    <meta property="og:type" content="website" >
    <meta property="og:description" content="Know about on how to find, buy and sell items for free on the Iruna Online Global Stall! In the Global Stall, you can post your items as a seller and search for items as a buyer. The stall is free to use and requires no account to search for items.">
    <meta property="og:image" content="https://irunastall.com/img/iruna.jpg">
    <meta property="og:url" content="https://irunastall.com" >
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="canonical" href="https://irunastall.com" >
    
    <link rel="manifest" href="manifest.json" >
    <script src="js/serviceLoader.js"></script>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
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
@include('layouts.navbar')

    <div class="container">
        <div class="row" >
            <div class="col-md-7 offset-md-3" >

                <div style="height: auto !important;">
		    		<br>
                    <h4>About</h4>
                    <hr>

                    <div>
						<p>The Iruna Online Global Stall is a project developed by kumars_gaming#9072, Polowis#4441 and Kian#4093 that aims to facilitate the process of buying and selling items from the game Iruna Online. On this website, you can search for items stored on our database or post items as a seller.<br>Iruna Global Stall is in no way endorsed or affiliated to Iruna or Asobimo. The name Iruna and all of it’s assets belong to ASOBIMO.</p>
                        <h6>We are accepting donations to keep this project alive here: <a href="https://paypal.me/kianbrosebrito">https://paypal.me/kianbrosebrito</a></h6>
                        
						<h3><b>Contact/Suggestions</b></h3>
						<p>Contact K¹#8224 on discord if you have any difficulties, problems or suggestions about our site. If you wish to talk to us directly please join the Iruna online discord using the following link: https://discord.gg/NH75NqA </p>
			            <br>
                        
			            <h3><b>Terms of Service</b></h3>
						<p>By signing up to our service, you agree that you are 14 years old or older and let us store information such as email, passwords, usernames and email addresses so we can provide you with the best possible experience. <br> <br>
                        We reserve the right to delete and modify your information without notice. This would only happen in rare occasions where your account is believed to be related to fraudulent activity. <br> <br>
                        You are not allowed to create multiple accounts. Anyone having created multiple accounts will have all of the duplicate accounts permanently terminated without notice when discovered. <br> <br>
                        When posting an item in our “Add Items” page, you are not allowed to enter a “fake price” to make your post appear higher than others on the search rankings. Anyone discovered doing this activity will have their post removed and their account heavily penalized. <br> <br>
                        You are not allowed to have over 4 posts of the same item (at the exception of equipment) since we have a quantity system set in place, simply put your available quantity all into one item. <br><br>
                        If you have been scammed and have proof of fraudulent activity, please send us an email with proof so we can review it and add it to the scammer page. <br>
                        <br>
                        <b>We do not take responsibility for any loss of funds, be it digital currency of real money that may be caused by scammers. </b>
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
