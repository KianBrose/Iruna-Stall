<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title> Samurai Guide | Iruna Global Stall</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow" >
    <meta name="description" content="Find the recently updated guide about Samurai class on Iruna stall ">
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
    <meta name="apple-mobile-web-app-title" content="Guide Samurai | Iruna Global Stall">
    <meta name='apple-mobile-web-app-capable' content='yes'>
    <meta name='apple-touch-fullscreen' content='yes'>
    <meta name='apple-touch-fullscreen' content='yes'>
    <meta name='application-name' content="Iruna Global Stall">
    <link rel="apple-touch-icon" href="https://irunastall.com/img/iruna.jpg">
    <meta name="twitter:card" content="summary" >
    <meta name="twitter:title" content="Guide Samurai | Iruna Global Stall" >
    <meta name="twitter:description" content="Find the recently updated guide about Samurai class on Iruna stall " >
    <meta property="og:title" content="Iruna Stall">
    <meta property="og:type" content="website" >
    <meta property="og:description" content="Find the recently updated guide about Samurai class on Iruna stall ">
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
                    <h4>Samurai Guide</h4>
                    <hr>
                    <div>
                        <article>

<div>
<div align="center"><br /><img style="max-width: 100%;" src="http://i172.photobucket.com/albums/w40/maryroll3/imageedit_1_9152716267_zpsvd8vqvds.png" alt="Samurai Guide" /><br /><img style="max-width: 100%;" src="http://i172.photobucket.com/albums/w40/maryroll3/imageedit_1_4960584793_zpsd3eev7nb.png" alt="" /></div>
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://i172.photobucket.com/albums/w40/maryroll3/imageedit_1_7066850870_zps65twvlba.png" alt="" /></span></div>
<div data-tag="spoiler"><span style="font-family: 'comic sans ms'; font-size: small;"><u><strong><span style="color: #740404;">VIT&gt;DEX&gt;AGI&gt;STR</span><br /></strong></u></span><span style="color: #0c0c0c; font-family: 'comic sans ms'; font-size: small;">-This is most common and recommended build for Samurai. (TANKER) They uses special swords.<br />-Survivability: Very High<br />-Damage: Very High <br />-Weakness: Fragile against mostly blindness because the amount of cri damage reduced. *Use of finishing stoke without supernatural 95% chance of degrading weapon. Week against magic sometimes.<br />-Strengths: High Critical, great solo class <br />-Points of stats: Vit 2 atk points, dex 1 atk and matk point, agi 1 atk and eva point, str 1 atk points. <br />-Changing class: lvl220-240 recommend (lvl 100 required)</span><br /><u><br /><strong><span style="color: #740404;">STR&gt;AGI&gt;DEX&gt;CRI&gt;VIT</span></strong></u><br /><span style="color: #0c0c0c; font-family: 'comic sans ms'; font-size: small;">-This is PURE DAMEGE samurai build. They uses normal swords<br />-Survivability: normal/medium<br />-Damage: super high <br />-Weakness: Fragile against mostly blindness because the amount of cri damage reduced. *Use of finishing stoke without supernatural 95% chance of degrading weapon. Week against magic sometimes. <br />-Strengths: Very High Critical <br />-Points of stats: str 2 atk points, 1 atk, matk point, and hit point, agi 1 atk and eva point, vit increase hp <br />-Changing class: lvl 220-240 recommend (lvl 100 required)</span><br /><br /><strong><span style="color: #740404;"><u>INT&gt;DEX&gt;AGI&gt;CRI</u><br /></span></strong><span style="color: #0c0c0c; font-family: 'comic sans ms'; font-size: small;">-This build is very rare. They use Magic swords. (SUPPORTER/TANKER)<br />-Survivability: medium/high <br />-Damage: normal/high<br />-Weakness: *Use of finishing stoke without supernatural 95% chance of degrading weapon. <br />-Strengths: Resilient to magic<br />-Points of stats: ?<br />-Changing class:lv 220-240 recommended (lvl 100 required)</span></div>
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://i172.photobucket.com/albums/w40/maryroll3/imageedit_1_6359207466_zpsmumnbxjc.png" alt="" /></span></div>
<div data-tag="spoiler"><br /><span style="font-family: 'comic sans ms'; font-size: small;"><strong>+Katana Mastery/Sword Training</strong>: Increase the critical damage when equipped with a sword. Attack rate will have lowest value which mean that ASPD will not increase more than 80. <br /><span style="color: #e64700;">-Lv1</span>~ Job Change Automatically when you change job<br /><span style="color: #ef0000;">-Lv2</span>~Job Change at lv220. You can get the skill from Matif (in draf and cost 3m) With this you critical dmg will increase 55% <span style="color: #f14c0c;">Not</span><span style="color: #f14c0c;">Released</span>&nbsp;<br /><br /><strong>+Parry/Ukenagashi</strong>: This will defend you without stoping the attack from enemy and it will also decrease DMG received while attacking back.<br /><span style="color: #e64700;">-Lv1</span>~Job Change Automatically when you change job<br /><span style="color: #ef0000;">-Lv2</span>~Job Change at lv260. You can get the skill from Ryube in Minaula City&nbsp;<br /><br /><strong>+Issen</strong>: Attack enemy with sharp swing and it will give high dmg than normal atk. There will be also critical dmg<br /><br /><u>Here formula</u>:&nbsp;SLv2: critical damage * 2.75 + fixed value (Lv * 6) SLv3: critical damage * 3 + fixed value (Lv * 7) <br />※ part of the critical damage * n is rare to damage 1 (Not rare with low lv mobs)<br /><br /><span style="color: #e64700;">-Lv1</span>~Job Change Automatically when you change job<br /><span style="color: #ef0000;">-Lv2</span>~Job Change at lv200. You can take quest from Ryuan in Kakeula City<br /><span style="color: #857c7c;">-Lv3</span>~Job Change at lv 220. You can take quest from Suishin in Minaula City&nbsp;<span style="color: #f14c0c;">Not Released</span><br /><br /><strong>+Tsubame gaeshi</strong>:It will allow you to fight back (reflect). Skill fail if hit by a magic attack CRT Damage is reflected, and sometimes can stun the enemy with counteratk<br /><span style="color: #e64700;">-Lv1</span>~Job Change Automatically when you change job<br /><em>*only at 30sec <br /></em><br /><strong>+Finishing Stroke</strong>:Powerful deathblow/Dmg, it is increase power based on <br /><span style="color: #740404;">-Lv1</span>~Job Change Automatically when you change job<br /><br /><em>*if you use if without supernatural your refining value will decrease for example +9 to +8 or +4 to +3<br /></em><br /><strong>+Absoute Clarity</strong>: Critical increase according to the level and can&rsquo;t exceed max stats lv<br /><span style="color: #e64700;">-Lv1</span>~Job Change Automatically when you change job only for 2 min<br /><span style="color: #ef0000;">-Lv2</span>~Job change at lv140, you can take quest from suigetsu at minulala city. For 4 min only<br /><br /><strong>+Grand Majesty</strong>:Provoke enemy and increase your attack when target by enemy<br /><span style="color: #740404;">-Lv1</span>~Job Change Automatically when you change job for 1 min <br /><span style="color: #ef0000;">-Lv2</span>~Job change at lv 140, you can take quest from suigetsu from Minaula city<br /><em>*Efffect atk+20%<br /></em><br /><strong>+Supernautral</strong>:Physical power and critical damage is increased.The enemy will target you for the remainder of the battle. Last 6min <br /><span style="color: #740404;">-Lv1</span>~Job Change at lv 160, you can take quest from suigetsu at lv260 from Minaula city <br /><span style="color: #ef0000;">-Lv2</span>~Job Change at lv 240, you can buy skill from Delma in lograth city cost 3m <span style="color: #f14c0c;">NOT RELEASED YET</span><br /><span style="color: #857c7c;">-Lv3</span>~Job change at lv260, you can buy skill from rube in Minaula city <span style="color: #f14c0c;">NOT&nbsp;RELEASED YET</span><br /><u>Here Formula</u>: (Physical power + [(Lv-1 + STR + AGI) * 3] critical damage + 11%) <br /><em>*30 sec Exhaustion after you use finishing stroke<br /></em><br /><strong>+Insight</strong>:Increases physical penetration and melee and physical power is also increased slightly.<br /><span style="color: #e64700;">-Lv1</span>~Change job at lv180 by taking quest from ryuan in Kakeula<br /><span style="color: #ef0000;">-Lv2</span>~Change job at lv280. You can buy skill from Ruybe at Minaula city (effect:physical penetration + 20% physical power +200)<br /><br /><strong>+Mental Clarity</strong>:Temporarily delay taking HP damage,Wears off after a short time, requiting previous damage and Item delay increases<br /><span style="color: #e64700;">-Lv1</span>~Change job at lv 220 and take quest from Ryuan at Kakeula city<br /><br /><strong>+Swoop/Round up</strong>: attack multiple at the same time at a time.Make your attack an AoE and limited to enemies already targeted.<br /><span style="color: #e64700;">-Lv1</span>~Change job at lv240. The book/skilll drop by shadow swordsman in trail hall. Book called slayer tech I <br /><em>*Effect MP consumption MP to the effect time of 10 minutes??<br /></em><u>Here Formula</u>: Mp consumption = maximum MP * 0.05 the number of target??<br /><br /><strong>+Innocent</strong>: Reduce dmg <br /><span style="color: #e64700;">-lv1</span>~Job change at lv240 by taking quest from susishin in Minaula city<br /><em>*Decrease Katana Mystery/Katanatamashi by 30%<br /></em><br /><strong>+Zenshin/Residual Heart</strong>:Reduce magic physical damage taken and Increase length of Tsubame Gaeshi skill.<br /><span style="color: #e64700;">-Lv1</span>~Job Change at lv240. You can buy skills from delma from logarth city. Take 1min <br /><br /><strong>+Thunder Blast/Shippu</strong>:Reduce magic physical damage taken. Increase length of Tsubame Gaeshi. Able to attack faster <br /><span style="color: #e64700;">-Lv1</span>~Job change at lv220. You can buy skill from matif in draf <br /></span><em><span style="font-family: 'comic sans ms'; font-size: small;">**The time for shippu will depend on you int/mp. Here some example, if you use edel hood and ring then you shippu will be 30-40sec. Same happen if you get limited break from bishop or some mp up skills idk name. MaxMP. For every 150MP, 1 sec is added.</span><br /></em><br /><br /></div>
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://i172.photobucket.com/albums/w40/maryroll3/imageedit_2_7430008076_zpsdtddwuby.png" alt="Samurai Equipment" /></span></div>
<div data-tag="spoiler">Note: Equipment in<strong><span style="color: #9a3f3f; font-size: medium;">bold</span></strong>&nbsp;are recommended equips. Other can be significant too<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://i172.photobucket.com/albums/w40/maryroll3/imageedit_1_2270495202_zpszdjcu3oz.png" alt="weapons" /></span></div>
<div data-tag="spoiler"><span style="color: #261c6f;"><strong><em><u>Special Swords <br /></u></em></strong></span>
<table>
<tbody>
<tr>
<td style="border: 1px solid #000; padding: 3px;"><strong><span style="color: #020202; font-family: 'comic sans ms';">Name</span></strong></td>
<td style="border: 1px solid #000; padding: 3px;"><strong><span style="color: #020202; font-family: 'comic sans ms';">Atk range</span></strong></td>
<td style="border: 1px solid #000; padding: 3px;"><strong><span style="color: #020202; font-family: 'comic sans ms';">Weapon Status&nbsp;</span></strong></td>
<td style="border: 1px solid #000; padding: 3px;"><strong><span style="color: #020202; font-family: 'comic sans ms';">Hidden Effect/detail</span></strong></td>
</tr>
<tr>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Wound Transfer</span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">165-180</span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Reflect +5%, DEF up by DEX, MaxHP +15%, Special Sword </span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">&nbsp;-</span></td>
</tr>
<tr>
<td style="border: 1px solid #000; padding: 3px;"><strong><span style="color: #9a3f3f; font-family: 'comic sans ms';">Wound Transfer II</span></strong></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">225-240</span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Reflect +10%, DEF up by DEX, MaxHP +17%, Special Sword <br /></span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">-</span></td>
</tr>
<tr>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Katzbalger<br /></span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">165-176</span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Special Sword, VIT +10, Evasion -12%</span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Range+1</span></td>
</tr>
<tr>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Katzbalger II<br /></span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">175-186 <br /></span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Special Sword, VIT +12, Evasion -14%, Neutral Resistance +5%, Damage Cut +5%<br /></span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">-</span></td>
</tr>
<tr>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Heavy board sword</span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">150-160</span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Special Sword, Max HP +500<br /></span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">-</span></td>
</tr>
<tr>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Battered Weapon</span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">10-?</span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Special Sword, Critical Rate -100% <br /></span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">-</span></td>
</tr>
<tr>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Ama No habirkir</span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">170-185?</span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Special Sword, MDEF up by Lv, Absolute Accuracy +25%, Magic Resistance +5%. When defending, chance of afflicting 9,999 damage to enemy if above Lv139. </span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">-</span></td>
</tr>
<tr>
<td style="border: 1px solid #000; padding: 3px;"><strong><span style="color: #9a3f3f; font-family: 'comic sans ms';">Ama No harbakiki II</span></strong></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">210-220?</span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Special Sword, MDEF up by Lv, Absolute Accuracy +25%, Magic Resistance +7%. When defending, chance of afflicting 9,999 damage to enemy if above Lv139.<br /></span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">-</span></td>
</tr>
<tr>
<td style="border: 1px solid #000; padding: 3px;"><span style="font-family: 'comic sans ms';"><span style="color: #9a3f3f;"><strong>Ama No harbakiki III</strong></span><br /></span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="font-size: 13.3333px;"><span style="color: #020202; font-family: 'comic sans ms';">268-270</span></span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">at the time if special sword magic resistance + 8% absolute hit + 25% abnormal resistance + 10% MDEF increase Lv140 more than about 2.5 times the Lv defense ... (at the time of defense, the damage amount reflected by the probability ※ upper limit damage 9999 Until)<br /></span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Not released</span></td>
</tr>
<tr>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #9a3f3f; font-family: 'comic sans ms';"><strong>Izuminkami&nbsp;</strong></span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">180-195?</span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Special Sword, STR +10, ATK +5%, MaxHP +10%, Critical Rate -10% <br /></span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">-</span></td>
</tr>
<tr>
<td style="border: 1px solid #000; padding: 3px;"><strong><span style="color: #9a3f3f; font-family: 'comic sans ms';">Izuminokami II</span></strong></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">266-281?</span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Special sword STR + 10 ATK + 10% critical rate of -5% MaxHP + 15% rate relief + 5% skill delay -1 seconds<br /></span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Not released</span></td>
</tr>
<tr>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Mercurius</span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">220-230</span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">special sword ATK + 5% physical resistance + 5% skill delay -1 seconds water attribute<br /></span></td>
<td style="border: 1px solid #000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">-</span></td>
</tr>
</tbody>
</table>
<br /><span style="color: #261c6f;"><strong><em><u>Normal Swords</u></em></strong></span><br />
<table>
<tbody>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="color: #020202; font-family: 'comic sans ms'; font-size: small;">Name </span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="color: #020202; font-family: 'comic sans ms'; font-size: small;">Atk range</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="color: #020202; font-family: 'comic sans ms'; font-size: small;">Weapon stats</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="color: #020202; font-family: 'comic sans ms'; font-size: small;">Hidden effect&nbsp;</span></strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #9a3f3f; font-family: 'comic sans ms'; font-size: small;"><strong>Black Lacque II</strong></span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms'; font-size: small;">262-270</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms'; font-size: small;">Critical Damage +20%. If DEX is less than 300, ASPD will become the minimum<br /></span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms'; font-size: small;">-</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms'; font-size: small;">Tirufingu<br /></span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms'; font-size: small;">191-197</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms'; font-size: small;"> -100% recovery rate +100 critical nature<br /></span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms'; font-size: small;"> When exhausted, 10% of maximum MP MP ~ 20% recovery ※ a little<br /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="color: #9a3f3f; font-family: 'comic sans ms'; font-size: small;">Kotetsu<br /></span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms'; font-size: small;">Critical Damage+17%, Counter Evasion+2%, ASPD at lowest if STR&lt;300. Additional attack by chance.<br /></span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms'; font-size: small;">-</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="color: #9a3f3f; font-family: 'comic sans ms'; font-size: small;">Element swords</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms'; font-size: small;">190-205<br /></span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms'; font-size: small;">Sakuya-Hime - Fire element, STR+2, Crit Dmg+5%, Skill Delay -0.5sec, ASPD -100%<br />Seoritsu-Hime - Water element, INT+2, Crit Dmg+5%, Skill Delay -0.5sec, ASPD -100%<br />Kukuri-Hime- Earth element, VIT+2, Crit Dmg+5%, Skill Delay -0.5sec, ASPD -100%<br />Shinatsu-Hime - Wind element, AGI+2, crit dmg+5%, Skill Delay -0.5sec, ASPD -100%<br />Tsukuyomi - Dark element, DEX+2, crit dmg+5%, Skill Delay -0.5sec, ASPD -100%<br />Shitateru-Hime- Light element, CRT+2, crit dmg+5%, Skill Delay -0.5sec, ASPD -100%<br /></span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms'; font-size: small;">-</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms'; font-size: small;">Masamane</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms'; font-size: small;">203-218</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms'; font-size: small;">Critical damage+7% Neutral resistant+5% ASPD-200%<br /></span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms'; font-size: small;">When attacking, chance of additional attack ※ Consumes MP<br /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #9a3f3f; font-family: 'comic sans ms'; font-size: small;"><strong>Muramasa</strong></span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms'; font-size: small;">205-220</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms'; font-size: small;">Critical Damage+14% skill delay -0.5 seconds ASPD-200% <br /></span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms'; font-size: small;">When attacking, chance of additional attack ※ Consumes MP</span><br /><br /></td>
</tr>
</tbody>
</table>
<br /><br /><span style="color: #261c6f;"><strong><em><u>Magic Swords<br /></u></em></strong></span>
<table>
<tbody>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';"><strong>Name</strong></span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';"><strong>Atk Range</strong></span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';"><strong>Weapon Stats</strong></span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';"><strong>Hidden Effect</strong></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Laevatein</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">-</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">MATK+5%, Melee R+5%, Accuracy+10%, Magic Attack Chance, Magic Sword </span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">-</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Dia Espada</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">165-180</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Magic Sword,　Neutral +10%, Magic Attack Chance, Half Damage to Neutral<br /></span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">-</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Niente<br /></span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">200-207</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">When the magic sword magic power is increasing attack in Lv, magic attack with probability<br />, fire, water and wind-place attribute physical -10%<br /></span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">-</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #9a3f3f; font-family: 'comic sans ms';"><strong>Sinbad III</strong></span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">246-256</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Magic Sword, AGI +24, Attack +5%, Magic Absolute Avoidance, Probability of avoid rate increase<br /></span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">-</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #9a3f3f; font-family: 'comic sans ms';"><strong>Dim Sword IV</strong></span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">235-245</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Magic Sword, All stats +5<br /></span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">When attacking, chance of magic attack</span></td>
</tr>
</tbody>
</table>
</div>
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://i172.photobucket.com/albums/w40/maryroll3/imageedit_2_7178040117_zpskcrc8so7.png" alt="" /></span></div>
<div data-tag="spoiler">
<table>
<tbody>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="color: #020202; font-family: 'comic sans ms';">Additional Equips</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="color: #020202; font-family: 'comic sans ms';">Stats</span></strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #9a3f3f; font-family: 'comic sans ms';"><strong>Huge Cherry Blossom Up</strong></span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">MaxHP +12%, Heal Received +10%, Ailment Resistance +25%, Item Recovery +10%, MaxMP-8%, ASPD -10%. When attacking, chance of absorbing the damage you deal as HP.<br /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #9a3f3f; font-family: 'comic sans ms';"><strong>Scalpello<br /></strong></span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Skill Delay -0.5 second, ATK +7%<br /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Barbarotita up</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">ATK +7%, Accuracy -15%, Skill delay -1 second, Stun time -1sec <br /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Passion Robe</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Water R-12%, CRT up based on Lv, ATK up by 25% of STR Hidden status: ATK+Lv/4</span></td>
</tr>
</tbody>
</table>
</div>
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://i172.photobucket.com/albums/w40/maryroll3/imageedit_1_8784449506_zpschxz433c.png" alt="" /></span></div>
<div data-tag="spoiler">
<table>
<tbody>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';"><strong>Armor</strong>&nbsp;</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="color: #020202; font-family: 'comic sans ms';">Stats</span></strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Ultimi</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">MATK +6%, Physical Power +100, Accuracy +50, Absolute Evasion +5%, skill delay -0.5 seconds, improved critical, always slotted <br /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Ultimi up</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">ATK +3% MATK +10%, CRT up, Delay -0.5 Seconds, Melee +300, Accuracy +100, Absolute Evasion +7% <br /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Hulam neme<br /></span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">MATK+5% DEX+10, Magic pierce +10%; MaxHP+1000, Skill delay -1sec<br /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-family: 'comic sans ms';"><strong><span style="color: #9a3f3f;">Schmermer</span></strong><br /></span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">critical damage + 12% auto skills + 3% VIT + 5 when the defense, counterattack with a probability of (at the time of counterattack triggered, disable the damage)<br /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #9a3f3f; font-family: 'comic sans ms';"><strong>Schmermer up</strong></span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-family: 'comic sans ms';">DEF: 17-23 critical damage + 14% auto skills + 4% VIT + 7 when skill delay -0.4 seconds defense, counterattack with probability (at the time of counterattack triggered, disable the damage)</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #9a3f3f; font-family: 'comic sans ms';"><strong>Ira</strong></span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">+5% avoidance 20 ATK +12% magic skill +5% -25% resistance auto physical critical rate +20<br /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">╠═Ira up DEF: 12-15 ATK: 20 ATK + 14% magic around + 7% critical rate + 20% auto skills triggered + 8% critical damage + 5% physical resistance -25% <br />╠═Ira re up DEF: 15-18 ATK: 25 ATK + 16% magic around + 10% critical rate + 25% auto skills triggered + 10% critical damage + 7% physical power + 1% physical resistance -25% (hidden correction: MaxMP +?) <br /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Licht Up</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Melee ; Magic R +7%, Delay -0.5 seconds, Skill delay cut chance by defense, DEF&amp;MDEF up based on Lv (DEF increase= Lv x 0.5, MDEF increase = Lv x 1.2)<br /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Dmail re up</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">ATK+9%, MATK+10%, Critical Rate +15, Critical Damage +8%, Physical and Magic Resistance +6%, Absolute Accuracy +15%, Auto Skill Trigger +5%, Hidden: INT+10 (Hidden performance: defending, physical counterattack counterattack upon activation, disable the damage with a probability)<br /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Shirioto up</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">ATK +3%, VIT +4, AGI +3, Item Recovery +20%, Critical Rate +12 when equipped with a sword<br /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #9a3f3f; font-family: 'comic sans ms';"><strong>Exe III</strong></span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">ATK +3%, MATK +3%, Evasion +10%, Magic Resistance +12%, -1.5 Second Skill delay<br /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-family: 'comic sans ms';"><span style="color: #9a3f3f;">Amateur</span><br /></span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';"> ATK +8%, Magic R +5%, Delay -0.5 second, Range cut +12%<br /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Dunkleheit up</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">ATK+3%, MATK+5%, Reflect +4%, Critical rate+15, Critical damage+5%</span></td>
</tr>
</tbody>
</table>
</div>
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://i172.photobucket.com/albums/w40/maryroll3/imageedit_2_7855657402_zpskdboeeu3.png" alt="" /></span></div>
<div data-tag="spoiler">
<table>
<tbody>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="color: #020202; font-family: 'comic sans ms';">Name</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="color: #020202; font-family: 'comic sans ms';">Stats</span></strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="color: #9a3f3f; font-family: 'comic sans ms';">Knight Gauntlet <br /></span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">ATK+30, ATK up by VIT (1/4 of VIT), MaxHP +15% <br /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="color: #9a3f3f; font-family: 'comic sans ms';">Myrica Wristlet <br /></span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">VIT up by 50% of level. Neutral R +5% with swords <br /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">Atleta Ring<br /></span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="color: #020202; font-family: 'comic sans ms';">ATK +7%, Hit -30%, Chance of HP loss per hi</span>t</td>
</tr>
</tbody>
</table>
</div>
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://i172.photobucket.com/albums/w40/maryroll3/imageedit_1_5679068386_zpsnc7tbcye.png" alt="" /></span></div>
<div data-tag="spoiler">
<table>
<tbody>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-family: 'comic sans ms';">Weapon</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-family: 'comic sans ms';">◇ Oritius : ATK +9%, HP natural recovery -20% <br /><strong>◇ <span style="color: #9a3f3f;">Pulis</span></strong> : Item Delay -0.2 seconds, Physical Power +200. When equipped to weapon, ATK +5%, Physical Power +300, and Delay -0.5 seconds.<br />◇ Plazuda : ATK +5%, ATK +3% when equipped to a weapon<br /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-family: 'comic sans ms';">Armor</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-family: 'comic sans ms';">◇ <strong><span style="color: #9a3f3f;">Dajarte</span></strong> : Magic R -11%, Magic evasion -11%, ATK+11%, Put dark magic attack on the equipment. (Consumes autoskill)<br />◇ Minenaga : Crit Damage +5%, Crit Damage +5% when equipped to an armor<br />◇ Magonza : Melee+200, Magic R-10%. adds atk+9% and magic R+10% on Armor <br />◇ Dorry : Atk 6% rate cut -10% Additional 6% atk and melee +300 if on Armor&nbsp;<br /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-family: 'comic sans ms';">Special</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-family: 'comic sans ms';">◇ <span style="color: #9a3f3f;"><strong>Warrior of Light</strong></span>: ATK +10%, Magic Resistance -10%. When equipped to special equipment, chance of double attack. (Consumes auto skill) <br />◇ Ganei : ATK +10%, MaxHP -30%, MaxHP +30% when equipped to a special equipment(Note when xtal is equipped to special eq, it does NOT add maxhp+30% even the xtal itself claims this, it just equals from -30 to 0)<br /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-family: 'comic sans ms';">Additional&nbsp;</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-family: 'comic sans ms';">◇ <strong><span style="color: #9a3f3f;">Raton</span></strong> : Critical Damage +14%, Mp Cost +10%, Adds Atk+6% on Additional Gear<br />◇ Vida : atk+4% hate rise+15%, adds atk+8% hate rise-15% on addgear.</span></td>
</tr>
</tbody>
</table>
</div>
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://i172.photobucket.com/albums/w40/maryroll3/imageedit_1_7913998849_zpsze2xfvmb.png" alt="" /></span></div>
<div data-tag="spoiler"><span style="font-family: 'comic sans ms';"><strong><span style="color: #521109;">Hp/MP Recovery<br /></span></strong>☆Hp: hp+280 (+160 hp as level increase)<br />☆Vitality: VIT+1&nbsp;<br />☆ Regenerate:+3 MP natural recovery, +2 HP natural recovery (+3 MP NR &amp; +2HP NR as level increase<br />☆Agility/:AGI+1<br /><strong><span style="color: #521109;">Skil Delay &amp; Item Delay<br /></span></strong>☆Quick Cool:skill delay 0.6 seconds, ATK &middot; MATK-5% (+1<br />☆Quick Use:Item recovery -5%, Seconds delay -0.5 (Item recovery -1% as level increase)<br /><span style="color: #521109;"><strong>Magic&nbsp;Samuari</strong><br /></span>☆Magic Defense: MDEF+30 (increase per level)<br />☆Intelligence: INT+1&nbsp;<br />☆ Fixed magic:Fixed Magic Damage +25 (+25 as level increase)<br /><strong><span style="color: #521109;">Resistance</span></strong><br />☆Automatic:Autoskill+1%<br />☆Technique:Critical rate +5 (+5 as level increase)<br />☆Fixed Melee:Fixed physical damage +25 (+25 as level increase)<br />☆ Rate Cut:Rate cut +1% (increase per level)<br /><span style="color: #521109;"><strong>Healing</strong><br /></span>☆Pharmacy :Increase Heal recovery<br /><strong><span style="color: #521109;">Attack</span><br /></strong>☆Strength: Str+1<br />☆Dexterity: Dex+1</span></div>
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://i172.photobucket.com/albums/w40/maryroll3/imageedit_2_2024350799_zpspaw8z7bu.png" alt="" /></span></div>
<div data-tag="spoiler"><span style="color: #020202; font-family: 'comic sans ms';">▲Muscle(ATK + 10 ATK + 3% HP Natural Recovery + 25%)<br />▲Altan(HP + 1000 Auto Skill + 1% Range Cut + 5%)<br />▲Larkas(MaxMP+500 AutoSkill+1% Range Cut+5%)<br />▲Aufsea(When Exhaustion, Remarks to Recover The HP 10% Ignite Will Fire: Ignite Activate Possible Only When The Effect Exerted)<br />▲Mamonea(Critical Damage + 5% Critical Rate + 10% Magic Resistance -10%)<br />▲Chelti(Skill Delay -1, Item delay +0.5)<br />▲Fallen Angel Merijia(Items Delay -1, Skill Delay +0.5)</span></div>
</div>
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://i172.photobucket.com/albums/w40/maryroll3/imageedit_1_9064487162_zps50dhrmxa.png" alt="Leveling Tips" /></span></div>
<div data-tag="spoiler"><br /><span style="font-family: 'comic sans ms';">⚔After finishing mq you should reach about 230-220 level (MQ EXP: 414,746,5230). After doing you mq it be good idea to level up till 240 and then change job to samurai , if you are not in rush have fun with struggle.&nbsp;<br />⚔Spend whole day at grinding and you&nbsp;gain at least 1-2 lv.<br />⚔It fun and easy to level up by farming bosses, as ouvel, There chance of getting spina plus you won&rsquo;t get bored.<br /><br />⚔Quests:<br /><br />⚔Mobs for leveling:<br /><br /><strong>-Megaroches</strong> (MATK): <br />EXP: 149600 &middot; 151055 <br />HP: 527,000 <br /><br /><strong>-Balor</strong>(245-247)(MATK): <br />EXP: 99930-101528<br /><br /><strong>-Yarde</strong> (275-276): Recommended <br />EXP: 325421 &middot; 327740 <br />HP: about 847,750 <br /><br /><strong>-Nommar</strong> (247 -249)(Stun): Def=0 <br />EXP: 85277 &middot; 85949 <br /><br /><strong>-GateKeeper</strong><br />EXP: 11280 &middot; 11370</span></div>
</div>
</article>
                        <hr>
                        <p>Author: <a href="http://irunaonline.boards.net/user/3597">Mary</a></p>
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
