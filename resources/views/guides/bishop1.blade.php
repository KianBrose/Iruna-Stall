<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title> Skyfallx's Mini Bishop Guide | Iruna Global Stall</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow" >
    <meta name="description" content="Find the recently updated guide about Bishop class on Iruna stall.">
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
    <meta name="apple-mobile-web-app-title" content="Guide Bishop | Iruna Global Stall">
    <meta name='apple-mobile-web-app-capable' content='yes'>
    <meta name='apple-touch-fullscreen' content='yes'>
    <meta name='apple-touch-fullscreen' content='yes'>
    <meta name='application-name' content="Iruna Global Stall">
    <link rel="apple-touch-icon" href="https://irunastall.com/img/iruna.jpg">
    <meta name="twitter:card" content="summary" >
    <meta name="twitter:title" content="Guide Bishop | Iruna Global Stall" >
    <meta name="twitter:description" content="Find the recently updated guide about Bishop class on Iruna stall" >
    <meta property="og:title" content="Iruna Stall">
    <meta property="og:type" content="website" >
    <meta property="og:description" content="Find the recently updated guide about Bishop class on Iruna stall">
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
                    <h4>Skyfallx's Mini Bishop Guide</h4>
                    <hr>
                    <div>
                        <article>

<div><br /><br /><span style="font-family: arial; font-size: medium;">Heyo guys!</span><br /><br /><br />Let me introduce myself. My IGN is Skyfallx and I'm a lvl 345 Bishop who loves this class due to its support skills and its solo capabilities. I like to try out new sets to make this class even more interesting. Especially the ones that you can use to solo with. If you ever see me ingame don't hesitate to say hi. Most of the time I do random things or ignite at&nbsp;bw, <br /><strong>I always create a group chat in conversation section when I'm online. Join and ask me anything you want!&nbsp;<br /><br /></strong><strong><span style="font-size: large;"><br /></span></strong><strong>Few reasons why you should become bishop:&nbsp;</strong><br />1. You like to support. Well you'd be the main reason why parties even work.<br />2. You wanna level fast with or without party.<br />3. You wanna solo because you don't wanna be party dependent all the time.<br />4. You want to have some useful buffs, a great AOE which only requires like 200 DEX to spam, 3 different kinds of heal and overall awesome skills.<br />5. You wanna earn some spina and meet some new people. Bishops are always needed in parties.<br />6. You wanna impress people with your solo capabilities because they think that bishops can't solo anything.<br />7. You don't wanna spend your spina on vaccines. Bright Heal cures all ailments.<br /><br /><em><br /><strong>My YouTube channel: <a href="https://www.youtube.com/channel/UCAzbWKd_fq5eCXLQ51m6BtQ" target="_blank" rel="nofollow noopener">www.youtube.com/channel/UCAzbWKd_fq5eCXLQ51m6BtQ</a><br />I take requests with pleasure. If you have some good ideas for my next video whether it's killing x boss or an educational video just pm me or comment on any video.</strong><br /><br /><br /></em>My current bishop equipment:<br /><a href="https://youtu.be/m15z6BgpJpQ" target="_blank" rel="nofollow noopener">youtu.be/m15z6BgpJpQ</a><br /><br /><br /><br />
<div style="text-align: center;"><u style="font-weight: bold; font-size: xx-large;"><span style="font-family: verdana;">Stats</span></u></div>
<br /><span style="font-size: small;">The most common stats that almost every Bishop uses is <strong>INT/DEX/VIT.<br /><br /></strong></span><strong>INT</strong> is the main stats since it adds MATK, MDEF, MaxMP.<br /><br /><strong>DEX</strong> gives more SSPD which is very important for nemesis. I'd recommend you to get at least 200 DEX at lvl 180. If you have low DEX it takes years to cast nemesis but you can use cast time-% equips etc. It also shortens skill delay of certain skills. ( Note: 255 DEX= -1s )&nbsp;<br /><br /><strong>VIT</strong> is for more DEF and overall survivability. You should get at least around 170 VIT if you use Struggler because it adds MATK based on VIT and it caps ~170 VIT. Btw 170-200 VIT is already enough because your skills Faith, Job Master, Divine Bless and Revelation give you a quite good MaxHP boost.<br /><br /><br />If you wanna go full support type the stats can also be INT/VIT/DEX but please for Almas' sake don't go support type. That's probably the most boring thing in Iruna.<br /><br /><br />
<div style="text-align: center;"><span style="font-family: verdana; font-weight: bold; font-size: xx-large;"><u>Skills</u></span><br /><span style="font-size: small;"><br /><span style="font-family: arial;"><strong>The different colors indicate the type of skill:<br /></strong></span><strong><span style="color: #960cc2;">Passive,&nbsp;</span><span style="color: #34e911;">Heal</span><span style="color: #0a0a0a;">,</span><span style="color: #ec24d4;">Buff</span><span style="color: #0a0a0a;">,</span><span style="color: #1f97db;">Attack</span></strong></span><br />
<div style="font-family: verdana;"><span style="font-size: 13.3333px;"><span style="font-size: 13.3333px;"><br /><br /></span></span>
<table style="font-weight: bold;">
<tbody>
<tr>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-family: arial; font-size: medium;">Skill</span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-family: arial; font-size: medium;">Description</span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-family: arial; font-size: medium;">Requirements</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 9px;"><span style="color: #960cc2; font-family: arial; font-size: small;">Faith</span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal;">Increases in religious faith. <br />MaxHP increases. <br /></span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal;"><br />Lv1 Apprentice Cleric ( MaxHP +300 )</span><br /><span style="font-weight: normal;"><br />Lv2 Cleric ( MaxHP +500)<br /><br /></span><span style="font-weight: normal;">Lv3 Apprentice Bishop ( MaxHP +700 )<br /></span><span style="font-weight: normal;"><br />Lv4 Item 260, Kreya ( MaxHP +900 )<br /><br /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 9px;"><span style="color: #960cc2; font-family: arial; font-size: small;">Capacity</span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal;"><br />Acquire knowledge to control a large amount of magic. <br />MaxMP increases<br /><br /><br /></span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal; font-family: arial;">Lv1 Apprentice Bishop<br /><br />Lv2 Bishop ( MaxMP about +20% )<br /><br /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 9px;"><span style="color: #960cc2; font-family: arial;">Physical</span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal; font-family: arial;"><br />A skill of enhancing resistance. <br />Resistance to ailments increases.<br /><br /><br /></span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-family: arial;"><span style="font-weight: 400;">Lv 1 Bishop</span></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 9px;"><span style="color: #960cc2; font-family: arial;">Aegis</span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-family: arial;"><span style="font-weight: 400;"><br />A sacred charm that gives high magic defense. <br />Reduces magic damage.<br /><br /></span></span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal;"><br /><br />Lv1 Apprentice Cleric ( Magic R+30% for 3 mins)<br /><br />Lv2 Cleric ( Magic R+40% for 4 mins )<br /><br />Lv3 Bishop ( Magic R+50% for 5 mins )<br /><br /></span><br /><br /></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 9px;"><span style="color: #960cc2; font-family: arial;">Job Master</span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal;">Proof of mastering Bishop. <br />Profession bonus increases.</span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal; font-family: arial;"><br />Lv1 Quest 280, Eldan <br />( INT+6, DEX+3, VIT+3 )<br /><br /><br /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 9px;"><span style="color: #960cc2; font-family: arial;">Judgement</span></td>
<td style="border: 1px solid #000000; padding: 9px;"><br /><span style="font-weight: normal;">Increase/Decrease Punish. <br />Use Punish to increase the damage of certain skills and heal effects.<br /><br /></span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal;">Lv1 Quest 320, Eldan<br /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 9px;"><span style="color: #34e911; font-family: arial;">Heal</span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal;">Recovers the target's HP. </span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal;"><br />Lv1 Apprentice Cleric<br /><br />Lv2 Cleric <br /><br />Lv3 Bishop<br /></span><br /><br /></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 9px;"><span style="color: #34e911; font-family: arial;">Kreis Heal</span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal;"><br />Refills HP of anyone in the range of the magic. <br /><br /></span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-size: 13.3333px; font-weight: 400;">Lv1 Cleric <br /><br /></span><span style="font-size: 13.3333px; font-weight: 400;">Lv2 Quest 110, Kleya</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 9px;"><span style="color: #34e911; font-family: arial;">Bright Heal</span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal; font-family: arial;"><br />Heal with stronger magic. <br />Heal a player HP and cure a status ailment<br /><br /></span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal;">Lv1 Quest 260, Lograth</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 9px;"><span style="color: #ec24d4; font-family: arial;">Risparmio</span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal;"><br />A magic to manage tiredness. <br />Reduce MP cost of PT members'. Auto recovery increases a bit. <br /></span><br /><br /></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal;"><br />Lv1 Quest 200, Port Spargas <br />( MP cost -30% for 4 mins ) <br /><br />Lv2 Item 280, Kreya <br />( MP cost-40% for 5 mins )<br /></span><br /><br /></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-family: arial;"><span style="color: #ec24d4;">Priere</span></span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal; font-family: arial;"><br />MATK&amp;MaxMP increase by prayer. <br />Has effect on PT members around you. <br /><br /><br /></span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal; font-family: arial;"><br />Lv1 Bishop <br />( MATK+8% and MaxMP+8% for 3 mins )<br /><br />Lv2 Quest 160, Port Spargas <br />( MATK+12% and MaxMP+12% for 4 mins )<br /><br />Lv3 Item 200, Eryldan Desert <br />( MATK+16% and MaxMP+16% for 5 mins )<br /><br />Lv4 Quest 260, Lograth <br />( MATK+20% and MaxMP+20% for 6 mins )<br /><br /><br /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 9px;"><span style="color: #ec24d4; font-family: arial;">Sanctuary</span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal;"><br />Reduce range and area attack taken. <br />Has no effect if you are the direct target.<br /></span><br /><br /></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal;"><br />Lv1 Quest 180, Port Spargas <br />( for 5 mins, consumes 10% of your MaxHP )<br /><br />Lv2 Item 240, Lograth <br />( for 5 mins, consumes 10% of MaxHP )<br /><br />Lv3 Item 300, Kreya <br />( for 5 mins, consumes 10% of MaxHP )<br /></span><br /><br /></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 9px;"><span style="color: #ec24d4; font-family: arial;">Quick</span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal; font-family: arial;"><br />A magic to shorten delay. <br />Shortens the PT members' Skill delay. Auto MP recovery will be lowered. <br /><br /><br /></span></td>
<td style="border: 1px solid #000000; padding: 9px;"><br /><span style="font-weight: normal;">Lv1 Quest 240, Drafbourg <br />( Skill Delay -1.5s for 90s )<br /><br />Lv2 Quest 300, Eldan <br />( Skill Delay -2s for 90s )<br /><br /></span><br /><br /><br /></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 9px;"><span style="color: #ec24d4; font-family: arial;">Bless</span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal; font-family: arial;"><br />Recovers target's HP/MP depending on their natural recovery amount for a period of time.<br /><br /><br /></span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal; font-family: arial;"><br />Lv1 Apprentice Cleric ( every 3s for 3 mins )<br /><br />Lv2 Cleric ( every 3s for 4 mins )<br /><br /><br /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 9px;"><span style="color: #ec24d4; font-family: arial;">Divine Bless</span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal;"><br />Refills HP/MP and raised all stats for everyone in the PT for a limited time.<br /></span><br /><br /></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal; font-family: arial;"><br />Lv1 Apprentice Bishop <br />( All stats+2, recovery every 3s for 5 mins )<br /><br />Lv2 Item 200, Drafbourg <br />( All stats+3, recovery every 3s for 6 mins )<br /><br /><br /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 9px;"><span style="color: #ec24d4; font-family: arial;">Resurrection</span></td>
<td style="border: 1px solid #000000; padding: 9px;"><br /><span style="font-weight: normal;">Holy magic that resurrects you once for a limited time.<br /></span><br /><br /></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal;"><br />Lv1 Apprentice Bishop <br />( recover 30% of MaxHP upon death, 5mins )<br /><br />Lv2 Quest 220 Drafbourg <br />( recover 50% of MaxHP upon death, 10mins)<br /><br />Lv3 Item 260, Kreya <br />( recover 70% of MaxHP upon death, 15 mins)<br /><br /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 9px;"><span style="color: #ec24d4; font-family: arial;">Revelation</span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal; font-family: arial;"><br />A magic to arouse latent ability. <br />Consume much HP using it on you. Double a target's job bonus. <br /><br /><br /></span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal; font-family: arial;"><br />Lv1 Quest 220, Spargas <br />( consumes 50% of MaxHP, can't be used if your current HP is &lt;50% )<br /><br /><br /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 9px;"><span style="color: #1f97db; font-family: arial; font-size: small;">Holy Light</span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal;"><br />A light-element magic attack<br /></span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal;"><br />Lv1 Quest 100, Saterica<br /><br />Lv2 Quest 160, Elban<br /></span><br /><br /></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 9px;"><span style="color: #1f97db; font-family: arial;">Lichter</span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal;"><br />Deal Meele damage to a target. <br />Chance of changing enemy element to Dark. Invalid on bosses.<br /></span><br /><br /></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal;">Lv1 Quest 170, Elban</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 9px;"><span style="color: #1f97db;">Nemesis</span></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal;"><br /><br />Great Magic of divine justice. <br />Attack and put enemies on ailments. Lower success rate on Bosses. <br /><br /></span><br /><br /></td>
<td style="border: 1px solid #000000; padding: 9px;"><span style="font-weight: normal;">Lv1 Quest 180, Port Spargas<br /></span><br /><br /></td>
</tr>
</tbody>
</table>
</div>
<br /><br /><br /><br /><br /><u><span style="font-family: verdana; font-size: x-large;">Judgement<br /></span></u><br /><br />
<div style="text-align: left;">
<div style="text-align: center;"><strong style="font-size: small;">What does this skill do?</strong></div>
<div style="text-align: center;"><span style="font-size: 10pt;">As the description says it increases the damage of certain skills and heal effects. The skills Judgement increases are Nemesis, Holy Light and Bright Heal. </span></div>
<div style="text-align: center;"><span style="font-size: 10pt;">If you use Nemesis or Holy Light on a target, you build up Punish, up to 100% which is shown in your buff list.<br />T</span><span style="font-size: 10pt;">he more Punish you have the better is the effect ( more damage, higher heal ).&nbsp;</span></div>
</div>
<div style="text-align: left;"><br />
<table style="text-align: center;">
<tbody>
<tr>
<td style="border: 1px solid #000000; padding: 7px;"><strong>Skill&nbsp;</strong></td>
<td style="border: 1px solid #000000; padding: 7px;"><strong>Increase Punish?</strong></td>
<td style="border: 1px solid #000000; padding: 7px;"><strong>Decrease Punish?</strong></td>
<td style="border: 1px solid #000000; padding: 7px;"><strong>How much?</strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 7px;">Nemesis</td>
<td style="border: 1px solid #000000; padding: 7px;">x</td>
<td style="border: 1px solid #000000; padding: 7px;">random, more than 20%</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 7px;">Holy Light</td>
<td style="border: 1px solid #000000; padding: 7px;">x</td>
<td style="border: 1px solid #000000; padding: 7px;">+10%, if you kill the target with that skill, it adds 15% instead&nbsp;</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 7px;">Bright Heal</td>
<td style="text-align: center; border: 1px solid #000000; padding: 7px;">x</td>
<td style="border: 1px solid #000000; padding: 7px;">-20%</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 7px;">Resurrection</td>
<td style="border: 1px solid #000000; padding: 7px;">x</td>
<td style="border: 1px solid #000000; padding: 7px;">Punish drop to 0%</td>
</tr>
</tbody>
</table>
<div style="text-align: center;">If you leave the map or die, your Punish will drop to 0%.<br /><br /><br /></div>
</div>
<div style="text-align: center;"><span style="font-family: verdana;"><span style="font-family: verdana;"><u style="font-size: x-large;">Balance Update</u><br /></span></span>
<div style="text-align: left;"><span style="font-size: small;"><span style="font-size: small;"><br /><br /></span></span>
<div style="text-align: center;">As of 11th July 2018, Asobimo adjusted a few skills regarding damage calculation, status ailments, etc. Bishops are negatively affected when it comes to being an important PT member, yet powerful changes have been made in terms of damage output. With that said, Asobimo has tried to make Bishops become more independent from Parties and more effective in soloing.</div>
<div style="text-align: center;"><span style="background-color: transparent; font-size: 13px;"><span style="background-color: transparent; font-size: 13px;"><br /></span></span>
<table>
<tbody>
<tr>
<td style="border: 1px solid #000000; padding: 7px;"><strong>Skill</strong></td>
<td style="border: 1px solid #000000; padding: 7px;"><strong>Before adjustments</strong></td>
<td style="border: 1px solid #000000; padding: 7px;"><strong>After adjustments</strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 7px;">Nemesis</td>
<td style="border: 1px solid #000000; padding: 7px;"><br />Damage cut on bosses<br /><br /></td>
<td style="border: 1px solid #000000; padding: 7px;">The damage decrease against bosses is removed.</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 7px;">Aegis</td>
<td style="border: 1px solid #000000; padding: 7px;"><br />Active skill<br />Affecting all PT members and other players<br /><br /></td>
<td style="border: 1px solid #000000; padding: 7px;">This skill is changed to a passive skill.</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 7px;">Resurrection</td>
<td style="border: 1px solid #000000; padding: 7px;">Spammable skill without restriction<br />Reduces Punish by 15%</td>
<td style="border: 1px solid #000000; padding: 7px;"><br />You become unable to revive for 30 seconds when using this skill.<br />If Punish is 1 or more, it becomes 0 when using this skill.<br />&nbsp;The ''no revive'' effect is shortened depending on the amount of Punish you currently have.<br />The ''no revive'' effect will disappear when leaving map or logging out.<br /><br /></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 7px;">Sanctuary</td>
<td style="border: 1px solid #000000; padding: 7px;"><br />Reduces range and area attack taken depending on Lv<br /><br /></td>
<td style="border: 1px solid #000000; padding: 7px;">Boost on Range cut depending on the level is removed. <br /><br /></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 7px;">Bright Heal</td>
<td style="border: 1px solid #000000; padding: 7px;"><br />Removes one random status ailment<br /><br /></td>
<td style="border: 1px solid #000000; padding: 7px;"><br />Removed one status ailment ( Poison, Paralysis or Blind ) with the shortest duration.<br />If the durations are the same, the priority becomes poison &gt; paralysis &gt; blind.<br /><br /><br /></td>
</tr>
</tbody>
</table>
<span style="background-color: transparent; font-size: 13px;"><br />&nbsp;<br /><br /></span></div>
</div>
</div>
</div>
<div style="text-align: center;"><u><strong><span style="font-family: verdana; font-size: xx-large;">Sets</span><br /></strong></u><span style="font-size: 10pt;">( Thanks to Shori&gt;.&lt; for this ) </span><em style="font-size: 10pt;"><u><strong><span style="font-size: xx-large;"><br /></span></strong></u></em></div>
<div style="text-align: center;"><span style="font-size: 10pt;"><strong>Click on the title to see the description.</strong></span></div>
<div><br /><br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">Damage Set</span></strong></span></div>
<div data-tag="spoiler">This set is mainly use when lvling. Priority is light magic up and matk for dealing maximum nemesis damage.<br />Bag priority: high. Keep them in your bag, always, unless you are planning to not do any lvling.<br /><br />Rant: not much to say about set, it's the butter of your bread ( nemesis )</div>
<hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">Counter Set</span></strong></span></div>
<div data-tag="spoiler">This set is used for soloing mq, due to nemesis damage cut on bosses. It is recommend to have decent vit/hp when using this set as the autoskills can only process when you receive damage. Not recommend to have high evasion as misses will not proc the autoskill.<br />Bag priority: Low. Carry it only when you're doing mq or solo.<br /><br />Rant: thank god tyranul created his counter enchanter else we bishops probably would still be stuck with holy light for mqing. This set is AWESOME as it lets you solo most of your mq easily with only spamming heal.</div>
<hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">Heal Set</span></strong></span></div>
<div data-tag="spoiler"><strong><br /></strong>This set is mainly used for boss farming, IF your tank is a high hp character such as paladin, enchanter or gladiator. It is recommended to have mix mp recovery xtal or equips in it if your bless are unable to support the mp used when spamming heal.<br />Bag priority: Medium. Carry only when you are planning to party up for bosses or rare mob farming.<br /><br />Rant: Please, for the sake of everything that is holy, try to keep your tank hp above 80% at all times unless you're too busy healing the dps.</div>
<hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">Negate Damage Set</span></strong></span></div>
<div data-tag="spoiler">This set is a situational set as it is only used if you are soloing mq and ran into high defense/ barrier boss. Same with counter set, it is recommended to have high vit.<br />Bag priority: extremely low. Only carry if you are going to fight high defense bosses solo.<br /><br />Rant: this set allow you to solo some bosses that can't be killed with counter gear when mq-ing. Mainly bosses with barrier or high defense such as ushlith and ziddu. It's not a needed set but it still nice to have at hand.</div>
<hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">Skill Delay Set</span></strong></span></div>
<div data-tag="spoiler">This set mainly used is if you party up with low health tank and other low health classes such as ninja or sniper. Due to the low health of pt member it is possible to sustain them with this set even though heal amount is low.<br />Bag priority: Medium. When planning to farm boss, always carry this along the heal set as you won't know what kind of pt you may end up with.<br /><br />Rant: heal ninja only when they die, but this does not apply to your dps members (unless they are ninja too). Keep your dps alive cuz dead dps = longer boss fight<br /><br /></div>
<hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">Range+ Set</span></strong></span></div>
<div data-tag="spoiler">This set mainly used is for party wipe out with you as the only member remaining. The equips will increase the range of your heal, allowing you to stay further away from the boss when reviving your party, minimizing your chance to cause aggro. Choose carefully which member to revive, the one further away from boss should be prioritize.<br />Bag priority: low. Carry only when you know you are going to fight tough bosses that may wipe out your party.<br /><br />Rant: stay as far away from the boss as possible when healing. Tell which member you plan to revive in chat so they can be ready to ran away from the boss as soon as they are up.</div>
<hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">MP Cost Set</span></strong></span></div>
<div data-tag="spoiler">This set allows you to spam your skills that only cost 1 MP. It's useful since most of the bosses delete or eat your MP and you just simply need one more tick of your bless and then you can spam again. Moreover, you don't have to wait for your MP healer to heal your MP. Combine this set with MP cost-% and skill delay as you don't need high heal. <br />Bag priority: Medium. Carry only when you wanna farm or if you know that the boss deletes your MP. Carry this along with Skill delay set.&nbsp;<br /><br />Rant: Overall better than skill delay set since you can spam your skills without worrying about your MP. If you have Minstrel in your party that casts Dream Song ( reduces your skills' MP cost to 1 ) this set isn't necessary to use due to low heal.</div>
<hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">Dual Blow/Auto Set</span></strong></span></div>
<div data-tag="spoiler">This set is used for soloing bosses. Basically it's like the opposite of Counter set. Instead of dealing damage by taking damage you have to attack to proc your autoskills. High DEX ( maybe evasion too ) is necessary for this set because if you have low DEX ( = low hit rate ) your attacks only miss which means your autoskills won't proc. Use equipments and xtals with "magic attack chance by attack" and Autoskill+% ( e.g. ☆Autoskill or any equipments that have Autoskill+% ) and Attack speed ( more auto attacks = more procs = more damage ). Alternatively you can get Dual Blow ( Pet Skill ) which allows you to attack twice in a short time frame. Or get High Cycle ( Pet Skill ) for max ASPD.<br />Bag priority: Low. Carry only when you wanna farm some bosses.<br /><br />Rant: Another great way to farm bosses without depending much on other people.&nbsp;</div>
<hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">Snead Claw Set</span></strong></span></div>
<div data-tag="spoiler">This set is next to Counter Set and Auto Set another great way to solo bosses. You make use of Snead Claw which deals additional damage by attack. Its additional&nbsp;damage is half of your current MP. It might be the only set to better use other stats than the common INT/DEX/VIT ( maybe you can also use those stats, probably yes ). This makes you more of a solo type. Combine this set with MaxMP+%/INT+ ( get your MP as high as possible ), Attack speed and Autoskill ( more auto attacks = more procs = more damage ). You can also use Dual Blow ( Pet skill ).&nbsp;<br /><br />Bag priority: High if you decide to use this as your main set. It basically replaces Damage Set. Otherwise carry only when you wanna solo.&nbsp;</div>
<br /><span style="color: #e61929;"><br /></span><strong><span style="color: #e61929;">Note: You don't need every set. Focus on Damage Set/Snead Claw Set and Skill Delay Set. These are the most important ones. The other ones are helpful but not necessary if you don't wanna spend much spina/time to farm.<br /></span><br /></strong><br />
<div style="text-align: center;"><span style="font-family: arial;"><strong style="font-size: xx-large;"><em><u>Equipment</u></em></strong></span></div>
<br />
<div style="text-align: center;"><strong style="font-size: 10pt;">Click on the title to see the description.<br />The different colors indicate the set that a certain equipment is mainly used for:<br /><span style="color: #1f97db;">Damage Set</span><span style="color: #0a0a0a;">, </span><span style="color: #631fdb;">Counter Set</span><span style="color: #0a0a0a;">, </span><span style="color: #ec24d4;">Support Set</span><span style="color: #0a0a0a;">, </span><span style="color: #f0bc18;">Dual Blow Set</span><span style="color: #0a0a0a;">, </span><span style="color: #34e911;">Snead Claw Set</span><br /><br /><br /></strong></div>
<u><strong><em><span style="font-size: x-large;"><br />Weapon<br /></span></em></strong></u><br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="color: #1f97db; font-family: arial; font-size: medium;">Princely Rod, Queen Rod, Empress Rod, Caterina Rod</span></strong></span></div>
<div data-tag="spoiler"><strong>Princely Rod<br /></strong>ATK: 100-110-115<br />Stats: Light Element, INT+4<br />From: Grecia<br /><br /><strong>Queen Rod<br /></strong>ATK: 120-135<br />Stats: INT+5, MATK+4%, Light Element<br />From: Kleya City<br />Materials: <span style="color: #08b108;">1&times; Princely Rod ( Grecia )<br /> 1&times; Golden Scale ( Aurumteus )<br /> 1&times; Orichalcum ( Sauro )<br /> 1&times; Azoth ( False Grecia/Schlingel )<br /></span><br /><strong>Empress Rod<br /></strong>ATK: 140-155<br />Stats: INT+5, MATK+8%, Light Element ( Hidden: Range+1 )<br />From: Port Spargas<br />Materials: <span style="color: #08b108;">1&times; Queen Rod ( Upgrade of Princely Rod )<br /> 50&times; Adamantite ( Coregrum/Raid Box A )&nbsp;<br /> 25&times; Broken Rod ( Gankaku )<br /> 1&times; ◇Grecia ( Grecia )&nbsp;<br /></span><br /><strong>Caterina Rod<br /></strong>ATK: 220-235<br />Stats: INT+15, MATK+20%, Light Element, Small Light magic up by Lv <br />( Hidden: Range+1 )<br />From: Capital city Eldan<br />Materials: <span style="color: #08b108;">1&times; Empress Rod ( Upgrade of Queen Rod )&nbsp;<br /> 1&times; Sanidine ( Ciel )&nbsp;<br /> 8&times; Orichalcum ( Sauro )<br /> 15&times; Gold Wheel ( Yarde )&nbsp;<br /></span></div>
<hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="color: #1f97db; font-size: medium;">Solve Rod, Solve Rod+, Resolve Rod</span></strong></span></div>
<div data-tag="spoiler"><strong>Solve Rod</strong><br />ATK: 155-165-170<br />Stats: MATK+5%, Skill delay -0.5s, Heal Recovery +3%<br />From: Bossheit<br /><br /><strong>Solve Rod+</strong><br />ATK: 165-180<br />Stats: MATK+7%, Skill delay -0.5s, Heal Recovery +4%<br />From: Fort Bailune<br />Materials:<span style="color: #08b108;"> 1&times; Solve Rod ( Bossheit )<br /> 2&times; Dark Crysta ( Sianas 1 )<br /> 2&times; Old Magic Manual ( Wargvel )<br /> 1&times; High Mythril ( Blacksmith )</span><br /><br /><strong>Resolve Rod </strong><br />ATK: 205-220<br />Stats: MATK+10%, Skill Delay -0.7s, Heal Recovery +5%<br />From: Kreya City<br />Materials:<span style="color: #08b108;"> 1&times; Solve Rod+ ( Upgrade of Solve Rod )&nbsp;<br /> 1&times; Lake Dragon Horn ( Larkas )<br /> 10&times; Velocity Pill ( Gimnula )<br /> 10&times; Old Book ( Aldo )&nbsp;<br /><br /></span></div>
<hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="color: #1979e6; font-size: medium;">Resty Rod, Restos Rod, Lespolt Rod</span></strong></span></div>
<div data-tag="spoiler"><strong>Resty Rod</strong><br />ATK: 178-188-193<br />Stats: MATK+10%, Skill delay +0.5s, MATK up chance by defense, Hate rise -20%<br />From: Beelzedam<br /><br /><strong>Restos Rod</strong><br />ATK: 213-228<br />Stats: MATK+10%, Light&amp;Dark magic +3%, Skill Delay +0.5s, Hate Rise -24%, MATK up chance by defense<br />From: Kreya City<br />Materials: <span style="color: #08b108;">1&times; Resty Rod ( Beelzedam )<br /> 2&times; Shiny Insect Wing ( White Ant? )<br /> 20&times; Natural Resin ( Pigmo )<br /> 7&times; Small Brood Pouch ( Waralue )</span><br /><br /><strong>Lespolt Rod</strong><br />ATK: 274-288<br />Stats: MATK+15%, INT+5, Skill delay +1s, Light&amp;Dark magic +6%, Hate rise -28%, MATK up chance by defense<br />From: Deeos Village<br />Materials:<span style="color: #08b108;"> 1&times; Restos Rod ( Upgrade of Resty Rod )</span><br /><span style="color: #08b108;"> 1&times; Water Spirit Silk Robe ( Minela 1 )</span><br /><span style="color: #08b108;"> 10&times; Perennial Ice ( Spike Feet )&nbsp;</span><br /><span style="color: #08b108;"> 30&times; Blue Petal ( Petafee )</span><span style="color: #960cc2;"><strong><br /></strong></span></div>
<hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="color: #1f97db; font-size: medium;">Forbidden Book Vol.4</span></strong></span></div>
<div data-tag="spoiler">ATK: 207-213<br />Stats: MATK+9%, Cast defense +30%, Heal Recovery -30%, Spell burst +5% ( Hidden: 2 DEX = 1 MATK ) <br />From: Anniversary Event<br /><br /></div>
<hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="color: #1f97db; font-size: medium;">Megistus Rod</span></strong></span></div>
<div data-tag="spoiler">ATK: 205-220<br />Stats: MaxHP+1000, Cast defense +25%, <br />MATK&amp;Cast time up by Lv <br />From: Production <br /><br /></div>
<hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="color: #1f97db; font-size: medium;">Esprimere, Esprimere II, Esprimere III</span></strong></span></div>
<div data-tag="spoiler"><strong>Esprimere</strong><br />ATK: 30-35<br />Stats: Magic +50<br />From: Mermaid Event<br /><br /><strong>Esprimere II</strong><br />ATK:&nbsp;<br />Stats:&nbsp;Magic +100, INT+3, Skill delay -0.5s, Neutral Magic+5%<br />From: Capital City Elban<br />Materials: <span style="color: #08b108;">1&times; Esprimere ( Mermaid Event )<br /> 1&times; Dragon Eye ( Dark Dragon Finster )<br /> 5&times; Amethyst ( Tri-Tail )<br /> 15&times; Damascus Steel ( Mining )</span><br /><br /><strong>Esprimere III</strong><br />ATK:<br />Stats: MATK+10% if Lv&gt;199, Magic+150,<br />INT+6, Skill Delay -1s, Neutral magic+10% <br />From: Fort Bailune<br />Materials: <span style="color: #08b108;">1&times; Esprimere II ( Upgrade of Esprimere )<br /> 1&times; Dragon Orb ( Guevol )<br /> 3&times; High Mythril ( Blacksmith )<br /> 10&times; Rose Aura ( Timoria )</span><span style="color: #960cc2;"><strong><br /></strong></span></div>
<hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="color: #1f97db; font-size: medium;">Tellas Rod</span></strong></span></div>
<div data-tag="spoiler">ATK: 264-274-279<br />Stats: Magic Pierce -10%, Skill delay -1s, MATK+14%, All magic +12%, MP cost cut by Lv. MP heal in low HP<br />From: Malti</div>
<hr /><br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="color: #1f97db; font-size: medium;">Staff of Dawn</span></strong></span></div>
<div data-tag="spoiler">ATK: 292-307-322<br />Stats: Light magic +10%, MATK+20%, Meele R +9%, Skill delay -1sec, Magic attack chance by defense<br />From: Production</div>
<hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="color: #ec24d4; font-size: medium;">Heal Staff</span></strong></span></div>
<div data-tag="spoiler">ATK: 120-135<br />Stats: Heal Recovery +30%, Skill Delay -1s<br />From: Production</div>
<br /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="color: #ec24d4; font-size: medium;">Violaceum, Violakrile, Violafar</span></strong></span></div>
<div data-tag="spoiler"><strong>Violaceum</strong><br />ATK: 156-166-171<br />Stats: Accurate rate +5%, Hate rise -15%, Skill delay -1s<br />From: Tarante<br /><br /><strong>Violakrile</strong><br />ATK: 166-181<br />Stats: Accurate rate +6%, Hate rise -20%, Skill delay -1.2s<br />From: Port Spargas&nbsp;<br />Materials: <span style="color: #08b108;">1&times; Violaceum ( Tarante )<br /> 1&times; Zirconium ( Mezzaluna )<br /> 12&times; Dark Bead ( Raid Box )<br /> 10&times; Tarante Claw ( Tarante )</span><br /><br /><strong>Violafar</strong><br />ATK: 186-201<br />Stats: Accuracy rate +8%, Hate rise -25%, Skill Delay -1.4s <br />From: Pilaneza city<br />Materials:<span style="color: #08b108;"> 1&times; Violakrile ( Upgrade of Violaceum )<br /> 1&times; Purple Crystal Shard ( Ushilth )<br /> 6&times; Wild Ornament ( Chaos Art )<br /> 12&times; Fine Beak ( Utka )</span></div>
<hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="color: #ec24d4; font-size: medium;">Priest Staff, Bishop Scepter, Archbishop Scepter, Cardinal Staff</span></strong></span></div>
<div data-tag="spoiler"><strong>Priest Staff</strong><br />ATK: 120-130-135<br />Stats: Heal recovery +10%, MP cost -10%<br />From: Leopard<br /><br /><strong>Bishop Scepter</strong><br />ATK: 130-145<br />Stats: MATK+5%, Heal recovery +10%, MP cost -10%<br />From: Capital City Elban<br />Materials: <span style="color: #08b108;">1&times; Priest Staff ( Leopard )<br /> 30&times; Glowing Wing ( Meanae )<br /> 15&times; Light Bead ( Mimic [ Eternity Maze ] )<br /> 4&times; Light Crystal ( Plazuda )</span><br /><br /><strong>Archbishop Scepter</strong><br />ATK: 210-225<br />Stats: MATK+15%, Heal Recovery +20%, MP cost -10%, Adds Heal recovery +10% for Bishop<br />From: Capital city Eldan<br />Materials:<span style="color: #08b108;"> 1&times; Bishop Scepter ( Upgrade of Priest Staff )</span><br /><span style="color: #08b108;"> 4&times; Afterglow of Mandala ( Maelriel )</span><br /><span style="color: #08b108;"> 10&times; Gold Armor Bit ( Mamonea )&nbsp;</span><br /><span style="color: #08b108;"> 10&times; Fluorite ( Calbo )&nbsp;<br /><br /></span><strong>Cardinal Staff</strong><br /> ATK: 244-259<br />Stats: MATK+18%, Heal Recovery +22%, MP cost -13%, Adds INT+5 and Heal recovery for Bishop<br />From: Aqruf Town<br />Materials: <span style="color: #08b108;">1x Archbishop Scepter ( Upgrade of Bishop Scepter )<br /></span><span style="color: #08b108;">5x Bright Spear Fragment ( Raguel )<br /></span><span style="color: #08b108;">15x Pretty Feather ( Vanipp )<br /></span><span style="color: #08b108;">&nbsp;20x Broken Hammer ( EXB-1129 )</span><br /><br /></div>
<hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Freesia Rod, Freesia Rod II</span></strong></span></div>
<div data-tag="spoiler"><strong>Freesia Rod</strong><br />ATK: 245-249<br />Stats: MATK+15%, Autoskill+5%, MaxHP+10%, Water Magic +14%, Fire magic -14%, Magic counter chance<br />From: Xmas Event<br /><br /><strong>Freesia Rod II</strong><br />ATK:265-280(?)<br />Stats: MATK+16%. Autoskill+7%, MaxHP+12%, Water magic +15%, Fire magic -15%, Magic counter chance<br />From: Xmas Event<br />Materials: <span style="color: #08b108;">1x Freesia Bead </span>( You need to collect 60 Snow Tear Crystal ( dropped by Spool and&nbsp;White Whale in Xmas Event )&nbsp;and exchange them to Kijimu Lottery to get 1 Bead )<br /><strong><span style="color: #960cc2;"><br />Used for Counter Set<br /></span></strong></div>
<hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Boss Claymore, Hexe Espada, Hexe Espada, Dia Espada, Dia Espada</span></strong></span></div>
<div data-tag="spoiler"><strong>Boss Claymore</strong><br />ATK: 152-162-167<br />Stats: ( Hidden: Crt damage+2%, 1/10 of damage reflected )<br />From: Boss Colon<br /><br /><strong>Hexe Espada</strong><br />ATK: 135-150<br />Stats: No damage to Neutral, Magic Sword<br />From: Wibo City<br />Materials: <span style="color: #08b108;">1&times; Boss Claymore ( Boss Colon )<br /> 10&times; Gold Fragment ( Leopard )<br /> 10&times; Predator Mane ( Wizaleon )<br /> 3&times; Hihiirokane ( Blacksmith )</span><br /><br /><strong>Hexe Espada</strong><br />ATK: 140-155<br />Stats: No damage to Neutral, Magic attack chance, Magic Sword<br />From: Kleya City<br />Materials: <span style="color: #08b108;">1&times; Hexe Espada ( Upgrade of Hexe Espada )&nbsp;<br /> 20&times; Soft Iron ( Goeurl )<br /> 5&times; Heavy Blade ( Spector )<br /> 2&times; Azoth ( Schlingel )<br /></span><br /><strong>Dia Espada&nbsp;</strong><br />ATK: 165-180<br />Stats: Neutral damage +10%, Magic attack chance, -50% damage to Neutral, Magic Sword&nbsp;<br />From: Port Spargas<br />Materials: <span style="color: #08b108;">1&times; Hexe Espada ( Upgrade of Hexe Espada )<br /> 1&times; Cobalt ( Metalbrow )<br /> 10&times; Killing Stone ( Shojo )<br /> 5&times; Iron Material ( Kyon )<br /></span><br /><strong>Dia Espada</strong>&nbsp;<br />ATK: 195-210<br />Stats: MATK+5%, Neutral magic +20%, Magic attack chance, Magic Sword<br />From: Pilaneza City<br />Materials: <span style="color: #08b108;">1&times; Dia Espada ( Upgrade of Hexe Espada )<br /> 1&times; Silvery Blade ( Thothras )<br /> 10&times; Gleaming Feather ( Oracro )<br /> 80&times; Cracked Mage Ore ( Locochiro )<br /></span><span style="color: #960cc2;"><strong><br />Used for Dual Blow/Auto Set<br /></strong></span></div>
<hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Lumikening, Giblekening</span></strong></span></div>
<div data-tag="spoiler"><strong>Lumikening</strong><br />ATK: 200-208&nbsp;<br />Stats: ASPD+10%, MATK+6%, Magic attack chance by attack, Magic Sword<br />From: Quest from Mea, Saterica City&nbsp;<br />Slay: <span style="color: #08b108;">50&times; Moss Ball<br /> 50&times; Solemnity<br /> 1&times; Death Chills</span><br /><strong><br />Giblekening</strong><br />ATK: 250-258&nbsp;<br />Stats: Magic Sword, ASPD+20%, MATK+6%, , Magic attack chance by attack, Small ATK&amp;MATK up by Lv<br />From: Quest from Blacksmith, Underground Bailune&nbsp;<br />Materials: <span style="color: #08b108;">1&times; Lumikening ( Quest )<br /> 20&times; Snow Crystal ( Yukinodo )<br /> 20&times; Magic Armor Bit ( Turret )<br /> 10&times; Luminous Thread ( Pavate )</span><br /><span style="color: #960cc2;"><strong>Used for Dual Blow/Auto Set<br /></strong></span></div>
<hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Jupiter</span></strong></span></div>
<div data-tag="spoiler">ATK: 205-220<br />Stats: MaxHP+25%, MATK+5%, Critical R +30%, Magic attack chance by attack, Wind element<br />From: Production<br /><br /><strong><span style="color: #960cc2;">Used for Dual Blow/Auto Set<br /></span></strong></div>
<hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Dim Sword</span></strong></span></div>
<div data-tag="spoiler">ATK: 235-245<br />Stats: All stats +5, Magic Sword ( Hidden: Magic attack chance by attack )&nbsp;<br />From: Anniversary Event<br /><br /><strong><span style="color: #960cc2;">Used for Dual Blow/Auto Set<br /></span></strong></div>
<hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Pramia, Pramia+</span></strong></span></div>
<div data-tag="spoiler"><strong>Pramia</strong><br />ATK: 134-144-149<br />Stats: MATK+5%, Critical damage -10%, Critical rate +30, Magic R -10%, Magic attack chance by attack<br />From: Ifrit<br /><strong><br />Pramia+<br /></strong>ATK: 154-169<br />Stats: MATK+6%, Critical Damage -9%, Critical rate +30, Magic R -10%,<br />Magic attack chance by attack&nbsp;<br />From: Kreya City<br />Materials: <span style="color: #08b108;">1&times; Pramia ( Ifrit )<br /> 1&times; Prophet's Evil Eye ( Dajarte )<br /> 1&times; Wolf Claw ( Aleek )<br /> 1&times; Devil Tear ( Emicle )</span><br /><span style="color: #960cc2;"><strong><br /><span style="font-size: small;">Used for Dual Blow/Auto Set<br /></span></strong></span></div>
<hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Snead Claw</span></strong></span></div>
<div data-tag="spoiler">ATK: 253-260<br />Stats: Magic R -20%, Melee+20% to Neutral, Critical damage +15%, MaxMP+23%, Additional attack chance<br />From: Minela 2<br /><br /><span style="color: #960cc2;"><strong>Used for Snead Claw Set<br /></strong></span></div>
<hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Mortal Dagger</span></strong></span></div>
<div data-tag="spoiler">ATK: 271-285<br />Stats: MATK+14%, Magic R +4%, Cast time -15%, C. defense +10%, Skill delay -0.5s, Magic counter chance by defense <br />From: Production&nbsp;<br /><strong><span style="color: #960cc2;"><br />Used for Counter Set</span></strong></div>
<hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Judgement, Judgement II, Judgement III</span></strong></span></div>
<div data-tag="spoiler"><strong>Judgement</strong><br />ATK: 170-180-185<br />Stats: MaxMP+8%, MATK+5%, Magic R -20%, CRT+10, Counter chance by defense&nbsp;<br />From: Blacksmith Fort Bailune<br />Materials:<span style="color: #08b108;"> 1&times; Earth Crystal ( Eldas )&nbsp;<br /> 2&times; Species Tear ( Specia )<br /> 2&times; Flame Crystal ( Flammel )<br /></span><br /><strong>Judgement II</strong><br />ATK: 170-177<br />Stats: MaxMP+12%, MATK+7%, Magic R -15%, CRT+15, Counter chance by defense&nbsp;<br />From: Lograth City<br />Materials:<span style="color: #08b108;"> 1&times; Judgement ( Blacksmith )<br /> 2&times; Zazel Claw ( Zazel )<br /> 4&times; Sharp Talon ( Ghost )<br /> 32&times; Bear Fang ( Moss Bear )<br /></span><br /><strong>Judgement III</strong><br />ATK: 277<br />Stats: CRT+18, Magic Pierce +12%, MaxMP+15%, MATK+12%, Autoskill+5%, Magic R -10%, Melee counter chance<br />From: Reoctove<br />Materials: <span style="color: #08b108;">1&times; Judgement II ( Upgrade of Judgement<br /> 10&times; Lava Clot ( Merario )<br /> 25&times; Long Tusk ( Shivuchi )<br /> 60&times; Blade-like Claw ( Cianshi )<br /><br /></span><strong><span style="color: #960cc2;">Used for Dual Blow/Auto Set </span></strong></div>
<br /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Lucanivent, Lucani Tuela</span></strong></span></div>
<div data-tag="spoiler"><strong>Lucanivent</strong><br />ATK: 250-260-265<br />Stats: ATK&amp;MATK-9%, Critical up, Melee+100, Additional attack chance by attack, Melee Pierce +10%<br />From: Zolte<br /><br /><strong>Lucani Tuela</strong><br />ATK: 275-290<br />Stats: ATK&amp;MATK-8%, Melee+200, Autoskill+5%, Critical up, Melee pierce +18%, Additional attack chance<br />From: Reoctove<br />Materials: <span style="color: #08b108;"> 1&times; Lucanivent ( Zolte )<br /> 1&times; Bird Dragon Leg ( Anis )<br /> 5&times; Tear of Fortina ( Lumpulmo )<br /> 15&times; Purification Water ( Clio )<br /></span><strong style="color: #960cc2;">Used for Dual Blow/Auto Set</strong></div>
<br /><br /><br /><span style="text-decoration: underline; font-weight: bold; font-style: italic; font-size: xx-large;">Armor</span><br /><br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Cleric Robe</span></strong></span></div>
<div data-tag="spoiler">DEF: 8-14<br />Stats: Magic counter chance by defense, MATK+5%, Heal Recovery +10%, Skill Delay -0.5s <br />From: Production <br /><span style="color: #960cc2;"><strong><br />Used for Damage Set, Combine this equipment with Medic Pouch</strong></span></div>
<br /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Struggler</span></strong></span></div>
<div data-tag="spoiler"><strong>Struggler</strong><br />DEF: 10-15-16<br />Stats: Spell burst +10%, Magic pierce +15%, Magic R +10% ( Hidden: MATK up by VIT )<br />From: Leviam<br /><strong><span style="color: #0a0a0a;"><br />Struggler&nbsp;</span></strong><br />DEF: 15-21<br />Stats: Spell Burst +10%, Magic Pierce +17%, INT+5, MATK+3%, Magic R +13% ( Hidden: MATK up by VIT )<br />From: Ioleu City<br />Materials: <span style="color: #08b108;">1&times; Struggler ( Leviam )</span><br /><span style="color: #08b108;"> 5&times; Spear Knight Rag ( Rua II )</span><br /><span style="color: #08b108;"> 20&times; Long Fin ( Raopia )&nbsp;</span><br /><span style="color: #08b108;"> 15&times; Thin Cloth ( Arbent )</span><br /><strong><span style="color: #960cc2;"><br />Used for Damage set, can be used for Counter Set ( that's what I do )&nbsp;</span></strong></div>
<br /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Emido</span></strong></span></div>
<div data-tag="spoiler"><strong>Emido</strong><br />DEF: 10-13<br />Stats: MATK+12%, Autoskill+5%, Absolute evasion +5%, Spell burst +10%, Magic R -25% )<br />From: Kreya Blacksmith<br />Materials: <span style="color: #08b108;">1&times; Jet Black Feather ( Barbad )<br /> 2&times; Prophet's Evil Eye ( Dajarte )<br /> 4&times; High Mythril ( Blacksmith )&nbsp;<br /></span><strong><br />Emido&nbsp;</strong><br />DEF: 12-15<br />Stats: MATK+14%, Absolute Evasion +7%, Autoskill+8%, Spell burst +10%, Cast time -20%, Magic R -25% <br />From: Maios<br />Materials: <span style="color: #08b108;">1&times; Emido ( Kreya Blacksmith )<br /> 1&times; Knight Soul Fragment ( Enina I )<br /> 5&times; Evil Plume ( Belial )<br /> 10&times; Prophet's Cloth ( Dajarte )&nbsp;</span><br /><strong><span style="color: #960cc2;"><br />Used for Dual Blow/Auto Set</span></strong></div>
<br /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Exelis</span></strong></span></div>
<div data-tag="spoiler"><strong>Exelis</strong><br />DEF: 6-11-12<br />Stats: ATK+3%, MATK+3%, Evasion+5%, Magic R +10%<br />From: Schlingel<br /><br /><strong>Exelis</strong><br />DEF: 6-12<br />Stats: ATK+3%, MATK+3%, Evasion+5%, Magic R +12%, Skill delay -1s&nbsp;<br />From: Port Spargas<br />Materials: <span style="color: #08b108;">1&times; Exelis ( Schlingel )<br /> 1&times; Hihiirokane ( Blacksmith )<br /> 1&times; Titanium ( Altadora )<br /> 1&times; ◇ Metalbrow ( Metalbrow )&nbsp;</span><br /><strong><span style="color: #0a0a0a;"><br />Exelis&nbsp;</span></strong><br />DEF: 6-12<br />Stats: ATK+3%, MATK+3%, Evasion+10%, Magic R +12%, Skill Delay -1.5s<br />From: Pilaneza City<br />Materials: <span style="color: #08b108;">1&times; Exelis ( Upgrade of Exelis )<br /> 2&times; Premium Silk ( Morbeelzem )<br /> 2&times; Chaser Cross ( Pursuer )<br /> 2&times; Empty Powersphere ( Spheretet )</span><br /><br /><strong><span style="color: #960cc2;">Used for Skill Delay Set</span></strong></div>
<br /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Tentacion</span></strong></span></div>
<div data-tag="spoiler">DEF: 6-9<br />Stats: ATK&amp;MATK-6%, Absolute Evasion +10%, Magic R +12%, Skill Delay -2s <br />From: Anniversary Event <br /><br /><span style="color: #960cc2;"><strong>Used for Skill Delay Set</strong></span></div>
<br /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Dragon Mail</span></strong></span></div>
<div data-tag="spoiler"><strong>Dragon Mail</strong><br />DEF: 13-18-19<br />Stats: ATK+5%, MATK+6%, Critical rate +5%, Melee&amp;Magic R +4%, Absolute accuracy +10%<br />From: Beelzenom<br /><br /><strong>Dragon Mail</strong><br />DEF: 14-20<br />Stats: ATK+7%, MATK+8%, Critical rate +10, Melee&amp;Magic R +4%, Absolute accuracy +15%<br />From: Sateria City<br />Materials: <span style="color: #08b108;">1&times; Dragon Mail ( Beelzenom )<br /> 1&times; Lake Dragon Horn ( Larkas )<br /> 20&times; Flexible Shell ( Jekto )<br /> 40&times; Apatite ( Emicle )</span><br /><br /><strong>Dragon Mail</strong><br />DEF: 18-24<br />Stats: ATK+9%, Autoskill+5%, Crt rate +15, Crt damage +8%, Melee&amp;Magic R +6%, Absolute accuracy +15%, MATK+10% ( Hidden: INT+10 )&nbsp;<br />From: Reoctove<br />Materials: <span style="color: #08b108;">1&times; Dragon Mail ( Upgrade of Dragon Mail )<br /> 1&times; ◇Beelzenom ( Beelzenom )<br /> 6&times; Sakimori no Ryu Scale ( Sakimori no Ryu )<br /> 60&times; Thick Though Fur ( Mob Piteco )</span><br /><strong><span style="color: #960cc2;"><br />Used for Snead Claw Set</span></strong></div>
<br /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Dark Priest Robe</span></strong></span></div>
<div data-tag="spoiler"><strong>Dark Priest Robe </strong><br />DEF: 8-13-14 <br />Stats: MATK+4% MDEF+10% Autoskill+3% Magic R +5%<br />From: Dark Dragon Finster<br /><strong><br />Dark Priest Robe</strong><br />DEF: 8-14 <br />Stats: MATK+4%, MDEF+15%, Magic R +5%, Magic counter chance by defense, Autoskills+4%<br /><br />From: Port Spargas<br />Materials: <span style="color: #08b108;">1x Dark Priest Robe ( Dark Dragon Finster )<br /> 5x&nbsp;Puffy Pelt ( Jakow )<br /> 10x Cotton&nbsp;( Ittan-Momen ) <br /> 20x Red Pill ( Fire Cat )<br /><br /></span><span style="color: #0a0a0a;"><strong>Dark Priest Robe</strong><br />DEF: 9-15 <br />Stats: MATK+5%, MDEF+20%, Magic R +5%, Magic counter chance by defense, Autoskill+5%<br /><br />From: Capital City Eldan<br />Materials: </span><span style="color: #08b108;">1x Dark Priest Robe&nbsp;( Upgrade of Dark Priest Robe )<br /> 1x Torn Apron ( Maelriel )<br /> 7x Hard Shell&nbsp;( Antortoise )<br /> 15x Dark Bead ( Raid Box )<br /><br /></span><span style="color: #960cc2;"><strong>Used for Counter set<br /></strong><br /><strong><br /></strong></span></div>
<br /><span style="text-decoration: underline; font-weight: bold; font-style: italic; font-size: xx-large;"><strong>Additional Gear</strong></span><br /><strong><span style="color: #e61929;"><br />If you don't have any idea which Additional Gear you can use for Damage Set: It doesn't really matter. The common ones White Maid Headdress, Itiance, Ecarlate and Light Bulb deal the exact same damage. The only noticeable difference is the price. If you use Nemesis multiple times you'll realize that&nbsp;its damage is pretty random&nbsp;but still it has its range. Just stick to one of the add gear mentioned above. </span></strong><br /><br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">White Maid Headdress</span></strong></span></div>
<div data-tag="spoiler">DEF:17-22-23<br />Stats: Autoskill+6%, ASPD+10%, As INT&amp;DEX increase... ( Light magic up? )<br />From: Exusia&nbsp;Gewalt<br /><br /><strong>White Maid Headdress</strong><br />DEF: 20-26<br />Stats: Autoskill+9%, ASPD+10%, MaxHP&amp;MaxMP+5%, As INT&amp;DEX increase... ( Light magic up)<br />From: Aqruf Town<br />Materials: <span style="color: #08b108;">1x White Maid Headdress<br /></span><span style="color: #08b108;">5x Grace Silk ( Echidna )<br /></span><span style="color: #08b108;">15x</span>&nbsp;<span style="color: #08b108;">Spirit Silk ( Fire Element )<br /></span><span style="color: #08b108;">20x Moist Mane ( Hippo Camp )</span><br /><br /><strong><span style="color: #960cc2;">Used for Damage Set</span></strong></div>
<br /><br /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Itiance</span></strong></span></div>
<div data-tag="spoiler"><strong>Itiance</strong><br />DEF: 12-17<br />Stats: Magic evasion +5%, Ailment R +10%, Heal recovery +2%, Evasion+10%, MATK+8%<br />From: Seele Zauga II<br /><strong><br />Itiance&nbsp;</strong><br />DEF: 13-18<br />Stats: Magic evasion +10%, Ailment R +10%, Heal recovery +4%, Light Magic +2%, Evasion&amp;MATK+10%, Dark R +2% <br />From: Underground Bailune<br />Materials: <span style="color: #08b108;">1&times; Itiance ( Seele Zauga II )<br /> 1&times; White Ice Snake Scale ( Cheltil )<br /> 15&times; White Petal ( Flotortoise )<br /> 30&times; Turbid Crystal ( Beton )<br /><br /></span>Itiance<br />DEF: 16<br />Stats: MATK+12%, Heal recovery +6%, Evasion +15%, Ailment R +12%, Magic evasion +15%, Light magic +4%, Dark R +4%<br />From: Aqruf Town<br />Materials: <span style="color: #08b108;">1x Itiance ( Upgrade of Itiance )<br /></span><span style="color: #08b108;"> 30x Angel Flannel ( Solonia )<br /> 1x Goddess Feather ( Gatekeeper )<br /> 5x Light Bead ( Mimic )</span><br /><br /><strong><span style="color: #960cc2;">Used for Damage Set</span></strong></div>
<br /><br /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Ecarlate</span></strong></span></div>
<div data-tag="spoiler">DEF: 12-18<br />Stats: Meele R -25%, MATK up by 50% of INT, MaxMP up by Lv<br />From: Production<br /><strong><span style="color: #960cc2;"><br />Used for Damage Set</span></strong></div>
<br /><br /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Medic Pouch</span></strong></span></div>
<div data-tag="spoiler">DEF: 6-11<br />Stats: Additional effect with some armors, Heal recovery&amp;Meele R +5%, Skill Delay -0.5s<br />From: Production<br /><strong><span style="color: #960cc2;"><br />Used for Damage Set</span></strong></div>
<br /><br /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Viola</span></strong></span></div>
<div data-tag="spoiler">DEF:<br />Stats: MATK+9%, Heal recovery+10%, Cast time +50%, Magic counter chance by defense<br />From: Raid Box A&nbsp;<br /><strong><span style="color: #960cc2;"><br />Used for Damage Set and Counter Set</span></strong></div>
<br /><br /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Snow Earmuff</span></strong></span></div>
<div data-tag="spoiler">DEF: 20-23<br />Stats: MATK+6%, Delay -1s, Heal Recovery +15%, Magic R +5%, Magic counter by defense, MDEF up by Lv during Xmas <br />From: Xmas Event<br /><br /><strong><span style="color: #960cc2;">Used for Skill Delay Set, Heal Set and Counter Set</span></strong></div>
<br /><br /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Montol Colliet</span></strong></span></div>
<div data-tag="spoiler"><strong>Montol Colliet</strong><br />DEF: 1-6-7<br />Stats: ASPD+10%, Cast time -10%, Adds Delay -1s if Lv&gt;239<br />From: Carapate<br /><strong><br />Montol Colliet&nbsp;</strong><br />DEF: 2-8<br />Stats: ASPD+20%, Cast time -15%, KO time -1s, Paralysis time -1s, adds Skill Delay -1.2s if Lv&gt;260 <br />From: Underground Bailune<br />Materials: <span style="color: #08b108;">1&times; Montol Colliet ( Carapate )<br /> 1&times; Distorted Iron ( Behemoth )<br /> 1&times; Werewolf Claw ( Cerbera )<br /> 5&times; Big Screw ( Jacbos )</span><br /><br /><strong><span style="color: #960cc2;">Used for Skill Delay Set</span></strong></div>
<br /><br /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Crown Hat</span></strong></span></div>
<div data-tag="spoiler">DEF: 10-12<br />Stats: Skill delay -1s, Adds Skill delay -0.5s if DEX&gt;249, Meele&amp;Magic R -30%<br />From: Petafee<br /><strong><span style="color: #960cc2;"><br />Used for Skill Delay Set</span></strong>&nbsp;</div>
<br /><br /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Miselatis</span></strong></span></div>
<div data-tag="spoiler">DEF: 16-21-22<br />Stats: Heal reward+1000&amp;+1%, DEX+5, Auto recovery+15%, Cast time-10%, Delay-1s if INT&gt;249<br />From: Geleena<br /><br /><strong><span style="color: #960cc2;">Used for Skill Delay Set</span></strong></div>
<br /><br /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Spirit Plume</span></strong></span></div>
<div data-tag="spoiler">DEF: 10-13<br />Stats: Delay -1s, MP cost -20%, All magic+4%, Meele R-100%<br />From: Tarna<br /><strong><span style="color: #960cc2;"><br />Used for 1MP Cost Set and Skill Delay Set</span></strong></div>
<br /><br /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Hydrangea Hat</span></strong></span></div>
<div data-tag="spoiler">DEF: 10-12<br />Stats: MP cost -50%, Delay -0.5s, MATK-20%, Magic counter chance by defense, Adds MATK+10% in June.<br />From: Kijimu ( Rainy Wedding Event )<br /><strong><span style="color: #960cc2;"><br />Used for 1MP Cost Set</span></strong></div>
<br /><br /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Clematis</span></strong></span></div>
<div data-tag="spoiler">DEF: 18-23<br />Stats: MATK+5%, Skill delay -1.5s, Cast time -20%, MP cost +50% if Lv&lt;301<br />From: Jusal<br /><br /><strong><span style="color: #960cc2;">Used for Skill Delay Set, not recommend for people &lt;301</span></strong></div>
<br /><br /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Evil Dragon Wings</span></strong></span></div>
<div data-tag="spoiler">DEF: 0-3<br />Stats: Skill delay -2s<br />From: Raudy<br /><strong><span style="color: #960cc2;"><br />Used for Skill Delay Set</span></strong></div>
<br /><br /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Blue Epaulette</span></strong></span></div>
<div data-tag="spoiler">DEF: 18-24<br />Stats: MATK+8%, MaxMP+5%, Skill Delay -1s, Counter chance by defense<br />From: Production<br /><strong><span style="color: #960cc2;"><br />Used for Counter Set</span></strong></div>
<br /><br /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Magia Hood</span></strong></span></div>
<div data-tag="spoiler"><strong>Magia Hood</strong><br />DEF: 9-12<br />Stats: MaxHP&amp;MP up by Lv, Magia attack chance by attack, MP cost -10%<br />From: Licosaro<br /><br /><strong>Magia Hood&nbsp;</strong><br />DEF: 13-15<br />Stats: MaxHP&amp;MP up by Lv, Magic attack chance by attack, MP cost -15%<br />From: Capital city Eldan<br />Materials: <span style="color: #08b108;">1&times; Magia Hood ( Licosaro )<br /> 5&times; Bead Crystal ( Beelzed )<br /> 5&times; Stretch Fabric ( Zolte )</span><br /><span style="color: #08b108;"> 60&times; Transparent Liquid ( Fap )&nbsp;</span><br /><br /><strong><span style="color: #960cc2;">Used for Dual Blow/Auto Set</span></strong></div>
<br /><br /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Spin Shield</span></strong></span></div>
<div data-tag="spoiler">DEF: 8-11<br />Stats: VIT+5, MATK+7%, Autoskill+8%, Critical damage +20%, Evasion-30%, Critical damage down by STR<br />From: Cherose<br /><strong><span style="color: #960cc2;"><br />Used for Dual Blow/Auto Set</span></strong></div>
<br /><br /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Booster</span></strong></span></div>
<div data-tag="spoiler"><strong>Booster</strong><br />DEF: 10-15-16<br />Stats: ATK+2%, Evasion+10, MaxHP-6%<br />From: Matar<br /><br /><strong>Booster</strong><br />DEF: 11-17<br />Stats: ATK+2%, Evasion+25, MaxHP-3%, ATK up by AGI<br />From: Port Spargas&nbsp;<br />Materials: <span style="color: #08b108;">1&times; Booster ( Matar )&nbsp;<br /> 1&times; Zirconium ( Mezzaluna )<br /> 99&times; Hematite ( Mining )<br /> 10&times; Wrougth Iron ( Blacksmith )&nbsp;</span><br /><br /><strong>Booster&nbsp;<br /></strong>DEF: 12-18<br />Stats:&nbsp;ATK+3%, Evasion +25, Max HP -3%, ATK up by AGI (&nbsp;(Hidden: When attacking, ATK shortening during 2 seconds interval, 30% chance of critical damage reduction by 1.05 )<br />From: Capital City Eldan&nbsp;<br />Materials: <span style="color: #08b108;">1&times; Booster ( Upgrade of Booster )&nbsp;<br /> 1&times; Guard Dragon Jewel ( Aufsea )<br /> 20&times; Gold Metal Bit ( Misenus )<br /> 40&times; Cracked Chain ( Nisarma )</span><br /><strong><span style="color: #960cc2;"><br />Used for Dual Blow/Auto Set</span></strong></div>
<br /><br /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Cataract Helm</span></strong></span></div>
<div data-tag="spoiler">DEF: 16-22<br />Stats: ATK&amp;MATK+5%, Heal received+10%, Magic attack chance by attack ( Hidden: Water magic+10% )&nbsp;<br />From: Production&nbsp;<br /><br /><span style="color: #960cc2;"><strong>Used for Dual Blow/Auto Set<br /></strong></span></div>
<br /><br /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Farfalla</span></strong></span></div>
<div data-tag="spoiler"><strong>Farfalla<br /></strong>DEF: 13-18-19<br />Stats: INT+7, Magic R +9%, Small MP recovery by defense&nbsp;<br />From: Grand Lizard<br /><br /><strong>Farfalla</strong><br />DEF: 16<br />Stats: INT+10, Magic R +12%, Small MP recovery by defense, MDEF up by AGI&nbsp;<br />From: Ioleu Village<br />Materials: <span style="color: #08b108;">1&times; Farfalla ( Grand Lizard )<br /> 1&times; Spirit Bead ( Enina II )<br /> 5&times; Bristle Mane ( Pureza )<br /> 60&times; Thin Tail ( Aldo )&nbsp;</span><br /><br /><strong><span style="color: #960cc2;">Used for Snead Claw Set<br /></span></strong></div>
<br /><br /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Ardour Cachenez</span></strong></span></div>
<div data-tag="spoiler">DEF: 10-16<br />Stats: INT+10, MP Cost -30%, Ailment R +10%, Skill delay -2s, Item delay +1s, MP heal by defense in low HP<br />From: Production<br /><strong><span style="color: #960cc2;"><br />Used&nbsp;for Snead Claw Set or Skill Delay Set<br /></span></strong></div>
<br /><br /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Sieger Plate</span></strong></span></div>
<div data-tag="spoiler">DEF: 24-30<br />Stats: VIT+24, INT+18, Melee&amp;Magic R +10%, Damage cut +5% during Stun. Ailment R +10%<br />From: Production<br /><br /><span style="color: #960cc2;"><strong>Used for Snead Claw Set<br /></strong></span></div>
<br /><br /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Taenia Beret</span></strong></span></div>
<div data-tag="spoiler">DEF: 21-24<br />Stats: MATK+14%, MP cost -18%, KO&nbsp;time +1 sec, Skill delay -1sec, Damage cut -10% during stun.<br />From: Espadon&nbsp;<br /><br /><span style="color: #960cc2;"><strong>Used for Damage Set<br /></strong></span></div>
<br /><br /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Sage Hat</span></strong></span></div>
<div data-tag="spoiler"><strong>Sage Hat</strong><br />DEF: 10-14<br />Stats: Fire&amp;Water&amp;Wind&amp;Earth magic +5%, Skill delay -0.5sec<br />From: Crescent<br /><br /><strong>Sage Hat </strong><br />DEF: 17-19<br />Stats: MATK+9%, Autoskill+5%, Range cut +15%. Fire&amp;Water&amp;Wind&amp;Earth magic +9%, Skill delay -0.5sec<br />From: Maios<br />Materials:<span style="color: #08b108;">1x Sage Hat ( Crescent )<br /> 1x ◇Crescent ( Crescent )<br /> 30x Fallen Angel Barrette ( Meligia )<br /> 30x Ivory White Rag ( Dominites ) <br /><br /></span><span style="color: #960cc2;"><strong>Used for Dual Blow/Auto Set<br /></strong><br /></span></div>
<br /><br /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">Light Bulb</span></strong></span></div>
<div data-tag="spoiler">DEF: 10-12<br />Stats: Light magic +10%, Dark R +10%, INT+12, Cast defense +10%, Melee R -5% <br />From: Demmel Owl<br /><strong><span style="color: #960cc2;"><br />Used for Damage Set<br /></span></strong></div>
<br /><br /><span style="font-size: xx-large;"><u><br /><strong>Special Equipment</strong></u></span><br /><br /><strong>Medical Ring</strong><br />Stats: Heal recovery +8%, Heal reward down<br />From: Megaroche<br /><br /><strong><span style="color: #960cc2;">Used for Heal Set</span></strong>&nbsp;<br /><br /><hr /><strong><br />Magical Ring </strong><br />Stats: MATK+5%, MaxHP-40%, Adds MaxHP+50% if Lv&gt;199<br />From: Masked Soldier<br /><strong><span style="color: #960cc2;"><br />Used for Damage Set</span></strong><br /><br /><hr /><strong><br />Argent Ring</strong><br />Stats: DEX&amp;INT+10, Skill Delay -0.5s <br />From: Azgob<br /><br /><strong><span style="color: #960cc2;">Used for Skill Delay Set</span></strong><br /><br /><hr /><br /><strong>Luster Ring </strong><br />Stats: Light R+5%, MP cost -10%, Magic counter chance by defense, Small Light magic up by INT<br />From: Gold Rocker<br /><br /><span style="color: #960cc2;"><strong>Used for Damage Set</strong></span>&nbsp;<br /><br /><hr /><br /><strong>Orichal Bangle</strong>&nbsp;<br />Stats: ATK+100, MATK+150, Autoskill+1%<br />From: Production&nbsp;<br /><br /><strong><span style="color: #960cc2;">Used for Damage Set&nbsp;</span></strong><br /><br /><hr /><br /><strong>Wise Man's Ring</strong><br />Stats: MaxMP+10%, Adds MaxMP+10% &amp; MATK+5% if INT&gt;299<br />From: Colitecs<br /><strong><span style="color: #960cc2;"><br />Used for Damage Set<br /></span></strong><br /><hr /><br /><strong>Ring of Light</strong><br /><span style="font-size: small;">Stats: Adds Light element. Light magic damage up. Light R+6%<br />From: Production&nbsp;<br /><strong><span style="color: #960cc2;"><br />Used for Damage Set<br /><br /></span></strong></span><hr /><u><br /></u><strong>Gaiety Ring</strong><br />Stats: MP cost +25%, Small MATK&amp;Autoskill up by INT if Lv&gt;199 ( INT&gt;400 = Autoskill+10% )<br />From: Wrath Chilo<br /><strong><span style="color: #960cc2;"><br />Used for Counter Set<br /></span></strong><br /><hr /><br /><strong>Coral Hairpin&nbsp;<br /></strong>Stats: MDEF+100, MDEF+10%, Water R +5%, Magic counter chance by defense&nbsp;<br />From: Colabol<br /><strong><span style="color: #960cc2;"><br />Used for Counter Set<br /></span></strong><br /><br /><hr /><br /><strong>Shellfish Ring<br /></strong>Stats: MP cost -15%, Water magic +5%<br />From: Pagras <br /><br /><strong><span style="color: #960cc2;">Used for Counter Set</span></strong><br /><br /><hr /><br /><strong>Javali Bangle</strong><br />Stats: Absolute evasion +4%, Meele Pierce +2%, Chance of reducing attack intervals by attack <br />From: Javali<br /><br /><strong><span style="color: #960cc2;">Used for Dual Blow/Auto Set</span></strong><br /><br /><hr /><br /><strong>Gaiety Ring</strong><br />Stats: MP cost +25%, Small MATK&amp;Autoskill up by INT if Lv&gt;199<br />( INT&gt;400 = Autoskill+10% )&nbsp;<br />From: Wrath Chilo<br /><strong><span style="color: #960cc2;"><br />Used for Dual Blow/Auto Set</span></strong><br /><br /><hr /><br /><strong>Ring of Fall</strong><br />Stats: Dark R+10%, Light R -10%, Magic attack chance by attack, MaxMP+10% <br />From: Enina II<br /><br /><strong><span style="color: #960cc2;">Used for Dual Blow/Auto Set<br /><br /></span></strong><hr /><br /><strong>Pex Earring&nbsp;</strong><br />Stats: Small ATK up by STR, Magic R -30%, Additional attack chance by attack&nbsp;<br />From:<br /><strong><span style="color: #960cc2;"><br />Used for Snead Claw Set<br /><br /></span></strong><hr /><br /><strong>Ring of Tide</strong>&nbsp;<br />Stats: Water R +5%, MaxHP +2000, VIT+1 for Warrior type. MaxMP +1000, INT+1 for Mage type.<br />From: Lumpulmo<br /><br /><strong><span style="color: #960cc2;">Used for Snead Claw Set</span></strong><br /><br /><hr /><br /><strong>Orichal Ring&nbsp;</strong><br /> Stats: MaxMP+1000, INT10<br />From: Production<br /><br /><strong><span style="color: #960cc2;">Used for Snead Claw Set<br /><br /></span></strong><hr /><br /><strong>Brille Earrings</strong>&nbsp;<br />Stats: Light magic +5%, Hate rise -5%, MP cost -5%, Heal recovery +5% if Bishop.<br />From:&nbsp;<br /><strong><span style="color: #960cc2;"><br />Used for Damage Set</span></strong>&nbsp;<br /><br /><hr /><br /><strong>Ice Crystal Necklace&nbsp;</strong><br />Stats: Water magic +10%, Melee+10% to Fire, Delay-0.5s, Ailment R -100%, Magic counter chance&nbsp;<br />From: Quest ( Deeos Merchant, Lv requirement: 290, mq must be after Malti )&nbsp;<br /><strong><span style="color: #960cc2;"><br />Used for Counter Set<br /><br /></span></strong><hr /><br /><strong>Light God's Ring</strong><br />Stats: Light element, additional Light magic up, Light R +8%<br />From:<br /><strong><span style="color: #960cc2;"><br />Used for Damage Set&nbsp;<br /><br /><br /></span>Note: You can also use any slotted special and put the xtal you want.</strong><br /><br /><br />Check out<br /><a href="http://iruna-online.proboards.com/thread/60/list-upgradable-equipments-drops" target="_blank" rel="noopener norewrite">iruna-online.proboards.com/thread/60/list-upgradable-equipments-drops</a><br />for more information<br /><br /><br /><br /><u><strong><em><span style="font-size: xx-large;">Crystas</span></em></strong></u><br /><strong><br /></strong><strong><span style="color: #0a0a0a;">◇Gerust</span></strong> ( MATK+15%, Skill Delay +1s,<br />Adds MATK +5% on Weapons )<br /><strong><span style="color: #960cc2;"><br />Used for Damage Set&nbsp;</span></strong><br /><br /><hr /><strong><span style="color: #0a0a0a;"><br />◇Isurugi Statue</span></strong> ( MATK+15%, MP cost +50%, Adds MP cost -25% and MATK-3% <br />on Weapons )<br /><br /><strong><span style="color: #960cc2;">Used for Damage set</span></strong><br /><br /><hr /><strong><span style="color: #0a0a0a;"><br />◇Fiona</span></strong>( Magic pierce +3%, MaxMP+10%, Adds MATK+14% and Delay -0.3s on Weapons )<br /><br /><strong><span style="color: #960cc2;">Used for Damage Set or Counter Set ( recommend for Counter )<br /></span></strong><br /><hr /><br /><strong>◇Roarmeria</strong> ( Heal recovery +5% )<br /><strong><span style="color: #960cc2;"><br />Used for Heal Set</span></strong><br /><br /><hr /><strong><br />◇Unicorn</strong> ( Heal recovery +3%, MATK+6% )<br /><span style="color: #960cc2;"><strong><br />Used for Heal Set</strong></span><br /><br /><hr /><strong><br />◇False Grecia</strong> ( MATK+10%, MP cost+30% )<br /><strong><span style="color: #960cc2;"><br />Used for Damage Set</span></strong><br /><br /><hr /><br /><strong>◇Moldus</strong> ( DEX+1, Adds MATK+7% on Armors, double effect if DEX&gt;199 )<br /><strong><span style="color: #960cc2;"><br />Used for Damage Set</span></strong><br /><br /><hr /><br /><strong><span style="color: #0a0a0a;">◇Medona</span></strong> ( MATK +6%, Skill Delay -0.1s, Cast Time -15%, MaxHP&amp;MP -8%, adds MATK+10% on Armors )<br /><strong><span style="color: #960cc2;"><br />Used for Damage Set</span></strong><br /><br /><hr /><strong><br />◇Grail </strong>( Heal Recovery +3%, MATK +3%, Adds Heal Recovery +7% on Additional ) <br /><br /><strong><span style="color: #960cc2;">Used for Heal Set</span></strong><br /><br /><hr /><strong><span style="color: #0a0a0a;"><br />◇Ushilth</span></strong> ( Spell burst +1%, Skill Delay -0.2s, adds Skill delay -0.3s and MATK+12% on Additional )<br /><strong><span style="color: #960cc2;"><br />Used for Damage Set, Counter Set, Heal Set or Skill Delay Set</span></strong><br /><br /><hr /><strong><br />◇Grecia II </strong>( MATK +16%, MP cost +15%, HP -3% )<br /><span style="color: #960cc2;"><strong><br />Used for Damage Set</strong></span><br /><br /><hr /><br /><strong>◇Dunkelis</strong> ( MATK +13%, MP natural recovery -20% )<br /><br /><span style="color: #960cc2;"><strong>Used for Damage Set<br /><br /></strong></span><hr /><br /><strong>◇Tarna</strong> ( MATK +10%, Magic +100, Adds MATK +5% and Magic +400 on Additional )<br /><br /><span style="color: #960cc2;"><strong>Used for Damage Set</strong></span><br /><br /><hr /><span style="color: #0a0a0a;"><br /></span><strong><span style="color: #0a0a0a;">◇Mezzaluna</span></strong> ( MATK+15%, MaxMP-40%, adds MaxMP+40% on Special )<br /><br /><strong><span style="color: #960cc2;">Used for Damage Set</span></strong><br /><br /><hr /><strong><span style="color: #0a0a0a;"><br />◇Metalbrow</span></strong> ( Skill Delay -0.6s, ATK -10%, MATK-10% )<br /><strong><span style="color: #960cc2;"><br />Used for Skill Delay Set</span></strong><br /><br /><hr /><br /><strong><span style="color: #0a0a0a;">◇Kagan</span></strong> ( MaxMP+10%, MP cost-15%, Adds Skill delay -0.5s on Weapons )<br /><br /><strong><span style="color: #960cc2;">Used for 1MP Cost Set</span></strong><br /><br /><hr /><br /><strong>◇Rossam</strong> ( MP cost -20%, Item Delay -0.1s )<br /><strong><span style="color: #960cc2;"><br />Used for 1MP Cost Set</span></strong><br /><br /><hr /><br /><strong>◇Thrift III </strong>( MP cost-15% )&nbsp;<br /><br /><strong><span style="color: #960cc2;">Used for 1MP Cost Set</span></strong><br /><br /><hr /><strong><span style="color: #0a0a0a;"><br />◆Spell Boost</span></strong> ( MATK+40% for a limited time, +100% MP usage, -20% when activated )<br /><strong><span style="color: #960cc2;"><br />Used for Damage Set</span></strong><br /><br /><hr /><strong><span style="color: #0a0a0a;"><br />◇Sofys</span></strong> ( Magic counter chance by defense ( consumes autoskill )) <span style="color: #f7db4d;">Light</span><br /><br /><strong><span style="color: #960cc2;">Used for Counter Set</span></strong><br /><br /><hr /><strong><span style="color: #0a0a0a;"><br />◇Anubites</span></strong> ( Magic counter chance by defense ( consumes autoskill )) Dark<br /><strong><span style="color: #960cc2;"><br />Used for Counter Set</span></strong><br /><br /><hr /><br /><strong><span style="color: #0a0a0a;">◇Minela</span></strong> ( Meele +3% to Water, Water magic +3%, Magic counter chance by defense ( consumes autoskill )) <span style="color: #1929e6;">Water</span><br /><strong><span style="color: #960cc2;"><br />Used for Counter Set</span></strong><br /><br /><hr /><strong><br />◇Dajarte</strong> ( Magic R -11%, Magic evasion -11%, ATK+11%, Put dark magic attack on the equipment ( consumes autoskill )) Dark<br /><strong><span style="color: #960cc2;"><br />Used for Dual Blow/Auto Set</span></strong><br /><br /><hr /><br /><strong>◇Ifrit</strong> ( Adds Fire element magic attack ( Consumes autoskill )) <span style="color: #e61929;">Fire</span><br /><br /><strong><span style="color: #960cc2;">Used for Dual Blow/Auto Set<br /></span></strong><br /><hr /><strong><br />◇Leviathan</strong> ( Adds Water magic on equipment ( Consumes autoskill )) <span style="color: #1929e6;">Water</span><br /><strong><span style="color: #960cc2;"><br />Used for Dual Blow/Auto Set</span></strong><br /><br /><hr /><strong><br />◇Pole</strong> ( INT+5, Autoskill+3%, Adds Spell burst+10% and Autoskill+2% on Additional )<br /><br /><strong><span style="color: #960cc2;">Used for Dual Blow/Auto Set</span></strong><br /><br /><hr /><br /><strong>◇Jahoel</strong> ( Absolute evasion +3%, Autoskill +3%, Adds Autoskill +3% on Special )&nbsp;<br /><br /><strong><span style="color: #960cc2;">Used for Dual Blow/Auto Set<br /><br /></span></strong><hr /><br /><strong>◇INT+7</strong><br /><br /><strong><span style="color: #960cc2;">Used for Snead Claw Set</span></strong><br /><br /><hr /><br /><strong>◇Seele Zauga II </strong>( MaxMP+30%, Melee R -10%, Magic R -10% )<br /><br /><strong><span style="color: #960cc2;">Used for Snead Claw Set<br /><br /></span></strong><hr /><br /><strong>◇Agira Jarma </strong>( MATK+12%, Cast defense+5%, Adds MATK+8%, INT+5 on Special )<br /><br /><strong><span style="color: #960cc2;">Used for Damage Set<br /><br /></span></strong><hr /><br /><strong>◇Dunkelis II </strong>( MATK+15%, Magic Pierce+5%. Adds MATK+5%, Magic up by Lv, Magic Pierce on Additional. )<br /><br /><strong><span style="color: #960cc2;">Used for Damage Set </span></strong><br /><br /><br /><br />Check out&nbsp;<br /><a href="http://irunaonline.boards.net/thread/8801/list-most-xtals" target="_blank" rel="noopener norewrite">irunaonline.boards.net/thread/8801/list-most-xtals</a><br />for more information&nbsp;<br /><br /><br /><br /><br /><u><strong><em><span style="font-size: xx-large;">Abilities</span></em></strong></u><br /><br /><strong>Click on the title to see the description.<br /></strong><br /><br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">☆Magic</span></strong></span></div>
<div data-tag="spoiler">Lv1: MATK +10, MaxMP-1% <br />Lv2: MATK +12, MaxMP-2% <br />Lv3: MATK +16, MaxMP-3% <br />Lv4: MATK +22, MaxMP-4% <br />Lv5: MATK +30, MaxMP-5%</div>
<hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">☆Intelligence</span></strong></span></div>
<div data-tag="spoiler">Lv1: INT +1 <br />Lv2: INT +2 <br />Lv3: INT +3 <br />Lv4: INT +4 <br />Lv5: INT +5</div>
<hr /><br /><strong><span style="color: #0a0a0a;">☆Spell burst</span></strong> ( Spell burst rate +?% )<br /><br /><br /><hr /><br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">☆HP</span></strong></span></div>
<div data-tag="spoiler">Lv1: MaxHP +280 <br />Lv2: MaxHP +440 <br />Lv3: MaxHP +600 <br />Lv4: MaxHP +760 <br />Lv5: MaxHP +920</div>
<hr /><br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">☆Quick Cool</span></strong></span></div>
<div data-tag="spoiler">Lv1: skill delay 0.6s, ATK&amp;MATK-5% <br />Lv2: skill delay 0.6s, ATK&amp;MATK-4% <br />Lv3: skill delay 0.6s, ATK&amp;MATK-3% <br />Lv4: skill delay 0.6s, ATK&amp;MATK-2% <br />Lv5: skill delay 0.6s, ATK&amp;MATK-1%</div>
<hr /><br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">☆Heal</span></strong></span></div>
<div data-tag="spoiler">Lv1: Heal Recovery +1%<br />Lv2: Heal Recovery +2%<br />Lv3: Heal Recovery +3%<br />Lv4: Heal Recovery +4%<br />Lv5: Heal Recovery +5%</div>
<hr /><br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">☆MP Cost</span></strong></span></div>
<div data-tag="spoiler">Lv1: MP Consumption -2% <br />Lv2: MP Consumption -4% <br />Lv3: MP Consumption -6% <br />Lv4: MP Consumption -8% <br />Lv5: MP Consumption -10%</div>
<hr /><br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">☆Autoskill</span></strong></span></div>
<div data-tag="spoiler">Lv1: Auto skill +1%<br />Lv2: Auto skill +2%<br />Lv3: Auto skill +3%<br />Lv4: Auto skill +4%<br />Lv5: Auto skill +5%</div>
<hr /><br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: medium;">☆Wild Dance</span></strong></span></div>
<div data-tag="spoiler">Lv1: ASPD +10%, crit -10 <br />Lv2: ASPD +10%, crit -8 <br />Lv3: ASPD +10%, crit -6 <br />Lv4: ASPD +10%, crit -4 <br />Lv5: ASPD +10%, crit -2</div>
<br /><br /><br />Check out<br /><a href="http://irunaonline.boards.net/thread/173/ability" target="_blank" rel="noopener norewrite">irunaonline.boards.net/thread/173/ability</a><br />for more information<br /><br /><br /><br /><u><br /><br /><strong><em><span style="font-size: xx-large;">AL Crysta</span></em></strong></u><br /><span style="color: #1929e6;">Blue</span>/<span style="color: #19e642;">Green</span><br /><br /><strong>▲Zazel</strong> ( ATK +15, ATK+2%, MATK +30, MATK+2% )<br /><br /><hr /><br /><strong>▲Bergen</strong> ( MATK+3%, Magic Evasion + 2%, ATK -3% )<br /><br /><hr /><br /><strong>▲Ouvel</strong> ( ATK+6%, MATK+6%, MaxHP -10%, MaxMP -10% )<br /><br /><hr /><br /><strong>▲Biflog</strong> ( Meele+ 5% to Light, Light Magic+ 5% )<br /><br /><hr /><strong><span style="color: #0a0a0a;"><br />▲Enina II </span></strong>( Meele10% to Light, Light Magic + 10% )<br /><br /><hr /><br /><strong>▲Parazaia</strong> ( MATK +20, MATK+3%, MP Natural Recovery +5% )<br /><br /><hr /><br /><strong><span style="color: #0a0a0a;">▲Cheltil</span></strong> ( Skill Delay -1s, Item delay +0.5s )<br /><br /><hr /><br /><strong><span style="color: #0a0a0a;">▲Maelriel</span></strong> ( ASPD +10%, Cast Time - 10%, Delay -0.5s ) <br /><br /><hr /><strong><br />▲Gate Guard </strong>( Heal Recovery+10%, Hate Rise+5% )<br /><br /><hr /><br /><strong><span style="color: #0a0a0a;">▲Douin</span></strong> ( MATK+2%, Meele R+2%, Heal Recovery+5% )<br /><br /><hr /><strong><br />▲Death Chils </strong>( Hate rise -25% )&nbsp;<br /><br /><hr /><br /><strong>▲Jusal</strong> ( MATK+4%, Water magic +4%, Cast time -4% ) <br /><br /><hr /><br /><strong>▲Sauro II</strong> ( Melee+3% to all elements, all magic+3%, Delay -0.5s, Autoskill+2% )<br /><strong><u><span style="font-size: large;"><br /><br /><em>For Counter and/or&nbsp;Dual Blow</em></span></u></strong><br /><span style="color: #e61929;">Red</span>/<span style="color: #1929e6;">Blue </span><span style="color: #0a0a0a;">or </span><span style="color: #1929e6;">Blue</span><span style="color: #0a0a0a;">/</span><span style="color: #08b108;">Green</span><br /><br /><strong>▲Altan</strong> ( MaxHP+1000, Autoskill+1%, Rate cut+5% )<br /><br /><hr /><strong><br />▲Larkas</strong> ( MaxMP+500, Autoskill+1%, Range cut+5% ) <br /><br /><hr /><br /><strong><span style="color: #0a0a0a;">▲Dym</span></strong>( Meele to Water +10%, Water magic +10% ) or <strong>▲Meelis </strong>( Meele to Water +5%, Water magic +5% )<br /><br />and other elemental ALs such as <strong>▲Theru II</strong> ( Earth ) and<strong> ▲Rua II </strong>( Fire ) <br /><br /><hr /><strong><br />▲Halios </strong>( Autoskill+5%, Hate rise +20%, ASPD+20% )<br /><br /><br /><br />Check out&nbsp;<br /><a href="http://irunaonline.boards.net/thread/9427/ai-crystal-drop?page=" target="_blank" rel="noopener norewrite">irunaonline.boards.net/thread/9427/ai-crystal-drop?page=</a><br />for more information&nbsp;<br /><strong><br /></strong><u><u><br /><strong><br /></strong></u></u>
<div style="text-align: center;"><u style="font-size: 10pt;"><span style="font-family: verdana; font-size: xx-large;"><strong>Tips &amp; Tricks</strong></span></u></div>
<strong><br /><br /></strong><br /><br /><strong>&bull;Turn on Display Damage!</strong><br />( Settings&gt;System&gt;Display Damage&gt;Party Only/All )<br />That allows&nbsp;you to see if non tanker in pt lost their resurrection buff due to AOE and how much damage the tank takes. If it causes too much lag then don't use it. <br /><strong><br />&bull;Focus on damage and spam set!</strong><br />I know counter set and dual blow are pretty cool but focus on your damage set first since it helps you to level and spam set for farming. <br /><br /><strong>&bull;Get at least -7s Skill Delay gears!</strong><br />It's good if you can spam resurrection without Quick skill. Many bosses can debuff and your MP might be not enough to cast Quick so basically you and your PT are pretty much dead. Not really haha<br /><br /><strong>&bull;Try out some new sets!</strong><br />I highly recommend getting a set for Counter. That allows you to farm some bosses and solo MQ.<br /><br /><strong>&bull;Stay cool!</strong><br />Hey if everyone dies in your PT don't blame yourself, it just happened. Don't forget to rebuff then.&nbsp;If someone says rude things to you just ignore them. Being bishop isn't as easy as it seems like. <br /><strong><br />&bull;Can't find PT?&nbsp;<br /></strong> If you can't find any PT just keep in mind there are a lot of places to grind alone. <br />Here's a useful list of some one-shot mobs: <a href="http://irunaonline.boards.net/thread/26390/leveling-guide-shot-mobs" target="_blank" rel="noopener norewrite">irunaonline.boards.net/thread/26390/leveling-guide-shot-mobs</a><br /><br /><br /><br />Check out <a href="http://iruna-online.wikiwiki.jp" target="_blank" rel="nofollow noopener">iruna-online.wikiwiki.jp</a><br />for more information<br /><strong><br /><br /></strong><br />Thanks for reading! I try to constantly update this. If you want me to add something just let me know in the comment section below. <br /><br /><br />Credits to: Scream!, bikini, Variz, Shiori&gt;.&lt;, rais, Han Solo, Kazu, Plagueis, pingrek, lenon, ricmoon, Tamagu, &hearts;Pixie, spazze<strong><br /></strong></div>
</div>
</article>
                        <hr>
                        <p>Author: <a href="http://irunaonline.boards.net/user/4282">Skyfall</a></p>
					</div>
                    <div class="row divider" role="separator" style="margin-top:20px;"></div>
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
