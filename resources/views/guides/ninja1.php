<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title> Magic &amp; SK/Hybrid Guide | Iruna Global Stall</title>
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
                             <a class="nav-link" href="/account">Account</a>
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
                    <h4>Magic &amp; SK/Hybrid Ninja Guide</h4>
                    <hr>

                    <div>
						<table>
                            <tr>
							<div class="message"><font face="times new roman" size="3">First of all, <a rel="norewrite" href="http://irunaonline.boards.net/thread/2639/magic-ninja-guide" target="_blank">Reborner's guide</a>, even if a bit outdated now, is well made and full of truths o.o)/&nbsp;<br>Although, I'd want to make something more theoric, with detailed informations about skills and gameplays...and stuff &gt;.&gt;<br><br></font><div style="text-align:center;"><font face="times new roman"><u style="color:rgb(255, 0, 0);font-weight:bold;"><font size="6">About "Magic" ninja</font></u><br></font><div style="text-align:left;"><font face="times new roman" size="3"><br><div style="text-align:center;">What's the purpose of this? Well, being magic ninja at first meant to use the <b><u>magic</u></b> skills ninjas are given.&nbsp;</div><div style="text-align:center;">Nowadays, some people may refer to "magic" ninja as the "Silent Killing"-focused ones, which isn't really right because SK is <b><u>not</u></b>&nbsp;a magic skill, but isn't totally wrong either since a regular magic ninja using a Throwing weapon will have decent SK damages, and that still being a magic ninja after Lv300 is pretty rare (and not advised damages-wise, even with Phantom Flame highering magic, without the Lv340 skills)<br>Although, the Lv340 skills might separate these three or four type of ninjas more clearly: Physical focused, SK focused, Magic focused.<br>And of course, Hybrid ones. Which is (I think) the first purpose of Ninjas.</div></font></div></div><div class="spoiler_header"><a href="javascript:void(0);" onclick="$('#spoiler6905159').toggle();if ($('#spoiler6905159').is(':visible')) $(this).text('SPOILER: Click to hide');else $(this).text('SPOILER: Click to show');" style="display: none;">SPOILER: Click to show</a><span class="sptitle" style="cursor: pointer;" onclick="changespoil(this)"><div style="text-align:center;"><span style="font-size:10pt;"></span><font face="times new roman" color="#0029ff" size="7"><b><u>BUILDS</u></b></font><font style="font-size:10pt;" face="times new roman"><font size="7"></font></font></div></span></div><div class="spoiler" id="spoiler6905159" data-tag="spoiler"><font face="times new roman"><div style="text-align:center;"><font size="3">"&gt;"&nbsp;means "then"&nbsp;<br>"<b>/</b>"&nbsp;means the choice or order is up to you</font><u style="color:rgb(185, 25, 230);"><b><br><font size="5">Magic ninja builds (Throwing/Staff)</font></b></u></div></font><div align="center" style="text-align:left;"><font face="times new roman"><font color="ff0000" size="4"><br><u>INT&gt;DEX&gt;VIT </u>(for Struggler)<u>&gt;BL/GR,</u> then <u>CRT</u> or <u>VIT</u> or <u>AGI</u><br></font></font><span style="font-family:&quot;font-size:medium;"><font size="3">Probably the most effective of all the magic builds, as in the one giving the most MATK.</font></span><font face="times new roman"><font color="ff0000" size="4"><u><br></u></font></font></div><div align="center"><div style="text-align:left;"><font size="3" face="times new roman">Good survivability as well. Depending on your lvl and stat points, can also deal decent physical damages. <br>Although, if you don't care about it, you can drop the CRT for more VIT or EXP special stats.<br><table><tbody><tr><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><b>MATK</b></td><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><b><span><font color="#fafe09">★★★★★</font></span></b></td></tr><tr><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><b>ATK</b></td><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><b><font color="#fafe09">★★</font><br></b></td></tr><tr><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><b>Critical damages</b></td><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><font style="font-weight:bold;" color="#fafe09">★☆</font><br></td></tr><tr><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><b>Survivability</b></td><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><font color="#fafe09" style="font-weight:bold;">★★★☆</font></td></tr></tbody></table></font></div><font size="3" face="times new roman"><div style="text-align:left;"><br></div></font><div align="center"><font face="times new roman" size="3" color="ff0000"><b><u></u></b></font></div><div style="text-align:center;"><div style="text-align:left;"><span style="color:rgb(255, 0, 0);font-family:&quot;"><font size="4"><u>INT&gt;DEX&gt;AGI/VIT&gt;GL</u><br></font></span></div><font face="times new roman"><div style="text-align:left;"><font size="3">A build focused on both magic skills and evasion. The use of AGI can be associated with Magic Amp too, but this means less ATK (Staff vs Throw).<br>This build loses a bit of firepower but is <b>much</b> safer. High evasion is easily attainable as well as high HPs.<br><table><tbody><tr><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><b>MATK</b></td><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><font color="#fafe09">★★★★☆</font></td></tr><tr><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><b>ATK</b></td><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><font color="#fafe09">★☆</font></td></tr><tr><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><b>Critical damages</b></td><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><font color="#fafe09">★</font></td></tr><tr><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><b>Survivability</b></td><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><font color="#fafe09">★★★★★</font></td></tr></tbody></table><br></font></div><div style="text-align:left;"><br><div style="text-align:center;"><b><u><font size="5" color="#b919e6">Hybrid and SK ninja builds (Throwing)</font></u></b></div></div></font></div><div style="text-align:center;"><font face="times new roman"><div style="text-align:left;"><font size="4"><br></font></div><div style="text-align:left;"><br><font color="#ff0000" size="4"><u>INT&gt;CRT&gt;Minimum VIT for Struggler&gt;DEX,</u> then <u>GR/BL</u></font><br><font size="3">The use of VIT, additionally to Struggler's extra MATK, makes this build safer thanks to HP pool and Utsusemi. Build giving the most SK damages.</font><br><table><tbody><tr><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><b><font size="3">MATK</font></b></td><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><font size="3" color="#fafe09">★★★★</font></td></tr><tr><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><b><font size="3">ATK</font></b></td><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><font size="3" color="#fafe09">★☆</font></td></tr><tr><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><b><font size="3">Critical damages</font></b></td><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><font size="3" color="#fafe09">★★★★</font></td></tr><tr><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><b><font size="3">Survivability</font></b></td><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><font size="3"><font color="#fafe09">★★★</font><br></font></td></tr></tbody></table><div style="text-align:left;"><font size="4"><u style="color:rgb(255, 0, 0);"><br>INT&gt;DEX/CRT,</u><span style="color:rgb(255, 0, 0);"> then </span><span style="color:rgb(255, 0, 0);"><u>GR/BL</u>&nbsp;or </span><span style="color:rgb(255, 0, 0);"><u>STR</u></span></font><br><font size="3" color="#000000"> Provides ATK, MATK, Delay and crt damages. <br>You can get great damages with all of your skills, although none can be <i>totally</i> maxed out.<br>Adding STR or Line Boosts only depends on you, your equipments and gameplay.<br></font><table><tbody><tr><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><b><font size="3">MATK</font></b></td><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><font size="3" color="#fafe09">★★★</font></td></tr><tr><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><b><font size="3">ATK</font></b></td><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><font color="#fafe09" size="3">★★☆</font></td></tr><tr><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><b><font size="3">Critical damages</font></b></td><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><font size="3" color="#fafe09">★★★★☆</font></td></tr><tr><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><b><font size="3">Survivability</font></b></td><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><font size="3"><font color="#fafe09">★★</font><br></font></td></tr></tbody></table></div><br><font color="#ff0000" size="4"><u>INT&gt;CRT&gt;STR</u>, then <u>DEX</u> or <u>GR/RD/BL</u></font><br><font size="3">This build is focused on DoC but can also deal good damages with the other skills, thanks to Throwing weapons' versatile stats.</font></div><font size="3"><div style="text-align:left;">With right equipments and sets, SK damages won't get heavily affected (This means no Spin shield: CRT dmg down by STR.)<br>Delay equipments are needed.<table><tbody><tr><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><b><font size="3">MATK</font></b></td><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><font color="#fafe09">★☆</font></td></tr><tr><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><b><font size="3">ATK</font></b></td><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><font color="#fafe09">★★★☆</font></td></tr><tr><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><b><font size="3">Critical damages</font></b></td><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><font color="#fafe09">★★★★★</font></td></tr><tr><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><b><font size="3">Survivability</font></b></td><td style="border:1px solid rgb(0, 0, 0);padding:3px;"><font color="#fafe09">★★</font></td></tr></tbody></table></div></font></font></div></div></div><div class="spoiler_header"><a href="javascript:void(0);" style="display: none;">SPOILER: Click to show</a><span class="sptitle" style="cursor: pointer;">
                            </tr>
                        </table>
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
