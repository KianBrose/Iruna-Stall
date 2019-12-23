<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title> Servant Guide | Iruna Global Stall</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow" >
    <meta name="description" content="Find the recently updated guide about Servant class on Iruna stall ">
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
    <meta name="apple-mobile-web-app-title" content="Guide Servant | Iruna Global Stall">
    <meta name='apple-mobile-web-app-capable' content='yes'>
    <meta name='apple-touch-fullscreen' content='yes'>
    <meta name='apple-touch-fullscreen' content='yes'>
    <meta name='application-name' content="Iruna Global Stall">
    <link rel="apple-touch-icon" href="https://irunastall.com/img/iruna.jpg">
    <meta name="twitter:card" content="summary" >
    <meta name="twitter:title" content="Guide Servant | Iruna Global Stall" >
    <meta name="twitter:description" content="Find the recently updated guide about Servant class on Iruna stall " >
    <meta property="og:title" content="Iruna Stall">
    <meta property="og:type" content="website" >
    <meta property="og:description" content="Find the recently updated guide about Servant class on Iruna stall ">
    <meta property="og:image" content="https://irunastall.com/img/iruna.jpg">
    <meta property="og:url" content="https://irunastall.com" >
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="canonical" href="https://irunastall.com" >
    
    <link rel="manifest" href="manifest.json" >
    <script src="js/serviceLoader.js"></script>
    
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
                    <h4>Servant Guide</h4>
                    <hr>
                    <div>
                        <article>
<div data-tag="spoiler">Often referred to as the "cute" class little do they know what is to come....More&nbsp;kawaiiness! Do not let it fool you tho it can heal as much as a bishop and can tank as well as beast knight and even solo bosses like Almas . For one day the servant will become the master!</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;">(っ◔◡◔)っ ☕Requirement ☕</span></div>
<div data-tag="spoiler">App Servant<br />Must be level 120<br />Must be a Cleric<br />Must have skill: Holy Light Lv1<br />Must have skill: Kreis Heal Lv2<br />Location: Capital City Elban <br />Npc: Riaty same map as the king she give you full class status as well</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;">(っ◔◡◔)っ ☕ Stats ☕</span></div>
<div data-tag="spoiler"><span style="font-size: medium;"><span style="color: green;">Int</span></span> for matk,mdef,mp<br /><span style="font-size: medium;"><span style="color: blue;">Dex</span></span> for cspd,sd,matk<br /><span style="font-size: medium;"><span style="color: #ff0000;">Vit</span></span> for def,hp,atk&nbsp;</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;">(っ◔◡◔)っ ☕ Skills ☕</span></div>
<div data-tag="spoiler"><span style="font-size: medium;"><span style="color: red;">Enrage</span>:</span> Increase hate from enemies,Recover targets hp,&nbsp;<br /><br />Lv 120 Enrage Lv1 - Class Change: App. Servant MP:30<br /><br />Lv 160 Enrage Lv2 - Npc:&nbsp;King Elban - Capital City Elban MP:45<br /><br />Lv 280 Enrage Lv3 - Npc: MP:60<br /><img style="max-width: 100%;" src="https://giphy.com/gifs/iruna-Mat6t8A6JsL21ADDl7" alt=" " /><br /><br /><br /><span style="color: blue; font-size: medium;">Soothe</span>: Decrease hate from enemies,Recover targets hp,<br /><br />Lv 120 Soothe Lv1 - Class Change: App. Servant MP:30<br /><br />Lv 180 Soothe Lv2 - Npc:&nbsp;Port spargas pub : Royal butterfly MP:45<br /><br />Lv 300 Soothe Lv3 - Npc: MP:60<br /><br /><br /><span style="font-size: medium;"><span style="color: #4bff0a;">M</span><span style="color: #5dea0d;">a</span><span style="color: #6fd511;">g</span><span style="color: #81c015;">i</span><span style="color: #93ac19;">c</span><span style="color: #b78220;">S</span><span style="color: #c96e24;">o</span><span style="color: #db5928;">u</span><span style="color: #ed442c;">l</span></span>: Raise the Hp&amp;Matk reduced by Soul Connection (PASSIVE)<br /><br />Lv 120 Magic Soul Lv1 - Class Change: App. Servant <br /><br />Lv 160 Magic Soul Lv2 - Npc: King Elban - Capital City Elban <br /><br />Lv 220 Magic Soul Lv3 - Npc:&nbsp;Matif - Draf<br /><br /><br /><span style="font-size: medium;"><span style="color: #ccffdf;">S</span><span style="color: #cfede1;">o</span><span style="color: #d2dbe3;">u</span><span style="color: #d5c9e6;">l</span><span style="color: #dca5eb;">C</span><span style="color: #df93ed;">o</span><span style="color: #e382f0;">n</span><span style="color: #e670f2;">n</span><span style="color: #e95ef5;">e</span><span style="color: #ed4cf7;">c</span><span style="color: #f03afa;">t</span></span>: Lend 1 player your stats. Stat given increase by skill lvl. The stat int will not be lent. Special stats such as exp,lines will not be lent. stats given will effect the gear of the player they are given too. HIDDEN when servant is in support form take 0 dmg chance from rate/range.<br /><br />Lv 120 Soul Connect Lv1 - Class Change: App. Servant MP:1<br /><br />Lv 180 Soul Connect Lv2 - Npc: Port spargas pub : Royal butterfly MP:2<br /><br />Lv 240 Soul Connect Lv3 - Npc:&nbsp;Matif - Draf MP:3<br /><br />Lv 340 Soul Connect Lv4 - Npc: MP:4<br /><br /><br /><span style="font-size: medium;">Sharp Eye</span>:Find targets element. Neutral element. mp cost based on max mp.&nbsp;<br /><br />Lv 140 Sharp Eye Lv1 - Class Change: Servant MP: Based on max mp<br /><br /><br /><span style="font-size: medium;"><span style="color: #f8ff2b;">S</span><span style="color: #f8fa29;">h</span><span style="color: #f8f628;">i</span><span style="color: #f9f227;">e</span><span style="color: #f9ee26;">l</span><span style="color: #faea24;">d</span><span style="color: #fbe222;">o</span><span style="color: #fbde21;">f</span><span style="color: #fcd61e;">L</span><span style="color: #fdd21d;">i</span><span style="color: #fdce1c;">g</span><span style="color: #feca1b;">h</span><span style="color: #fec61a;">t</span>&nbsp;</span>: Weak shield. reduce a lot of dmg when receiving dmg over your max hp (500HP)?<br /><br />&nbsp;Lv 140 Shield of Light Lv1 - Class Change: Servant MP:96<br /><br />&nbsp;<br /><span style="font-size: medium;">Highness Bless</span>: Large range. castes on all members(aoe). heals massive amount based on max hp . heals every 5 secs for 30 secs<br /><br />&nbsp;Lv 140 Highness Bless Lv1 - Class Change: Servant MP:64<br /><br /><br /><span style="font-size: medium;">Logical Insight</span> :Can see all members hate value (PASSIVE) only for boss fields<br /><br />Lv 140 Logical Insight Lv1 - Class Change: Servant <br /><br /><br /><span style="font-size: medium;">Sweep Bloom</span>: Aoe. larger then hw earthquake. effected by atk and matk more on the matk side.chance to blind. effected by hide atk,spell burst,yellow candy(360&deg;)<br /><br />Lv 140 Sweep Bloom Lv1 - Npc: King in elban MP:160<br /><br />Lv 240 Sweep Bloom Lv2 - Npc: MP:240 5x matk 3x atk = dmg(600 aspd for fast cast)<br /><br /><br /><br /><span style="font-size: medium;">Vitalize</span>: Increase pt members hp/mp(15% per lvl) with a base of 100 added. Resistance to melee and magic 10%(per lvl)<br /><br /><br />Lv 200 Vitalize Lv1 - Npc :&nbsp;Merchant - Eryldan Desert MP:200<br /><br /><br />Lv 260 Vitalize Lv2 - Npc: Levia - Lograth City's Pub MP:270<br /><br /><br /><br /><span style="font-size: medium;">Mirror Coat</span>: Creates 1 clone. can be used on others. will not stack<br /><br /><br />Lv 200 Mirror Coat Lv1 - Npc:&nbsp;Merchant - Eryldan Desert MP:100 <br /><br /><br /><br /><span style="font-size: medium;">Aura Espada</span>: Summon Servants magic sword. Auto skill by eva,def,atk. effected by spell burst,hide atk,shell break,yellow candy. no upper limit! Atk/Matk based.<br /><br /><br />Lv 220 Aura Espada Lv1 - Npc: Draf MP:400<br /><br />Lv 260 Aura Espada Lv2 - Npc: Lograth City's Pub MP:600<br /><br /><br /><span style="font-size: medium;">Ministerium</span> : Gain Heal power,skill delay(-1.5?) by lowering atk(not matk) for 30 secs. gain Exhaustion for 15 secs still lowering atk but half of the cost .<br /><br />Lv 240 Ministerium Lv1 - Npc: King Elban - Capital City Elban MP:24<br /><br /><br /><span style="font-size: medium;">Job Bonus</span> :Proof a servant is extremely prominent. Job bonus is improved. <br /><br />Lv 280 Job Bonus&nbsp;<br /><br /><br /><br /><span style="font-size: medium;">Servant Work</span>: increase the time consumables (only works on "food effect"buffs)<br /><br />Lv 280 Cooking Lv1 - Npc: MP:900&nbsp;<br /><br /><br /><span style="font-size: medium;">Bloom Manual</span>: using staff lets you have more then 2 tea skill at 1x (3 at once) if using other wep no effect (PASSIVE)&nbsp;<br /><br />Lv 300 Bloom Manual Lv1 - Npc:<br /><br /><br /><span style="font-size: medium;">Sweet tea</span>: Acts like a secondary bless to members within area. Based on servants Matk. range cut(20%)within area hp + range cut increase with mini<br /><br />Lv 300 Sweet tea Lv1 - Npc: MP:500<br /><br /><span style="font-size: medium;"><span style="color: #ff0000;">Crazy Tea party</span></span>: atk up based on base atk DEX&amp;STR +25(gives limit break buff)<br /><br />Lv 320 Crazy Tea party Lv1 - Npc: MP:500&nbsp;<br /><br /><br /><span style="color: blue; font-size: medium;">Calm Tea party</span>: matk up based on base matk DEX&amp;INT+25 (gives limit break buff)<br /><br />Lv 320 Calm Tea party Lv1 - Npc: MP:500<br /><br /><br /><span style="font-size: medium;">White Rabbit</span>: -2.5 skill delay,+20% aspd,-20% cspd, movement speed for servant 15%?<br /><br />Lv 340 Clock Rabbit Lv1 - Npc: MP:500</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;">(っ◔◡◔)っ ☕ Matk Set☕</span></div>
<div data-tag="spoiler"><span style="color: red;"><span style="font-size: x-large;"> Staffs</span><br /><br />Universe I<br />MATK +11%, Hate rise +10%, Spellburst +4%, Cast defense +10%, Melee R +5%, Magic R +5% matk up by lvl<br /><br />Universe II<br />MATK +16%, Hate rise +10%, Spell burst rate +7%, Cast defense +12%, Melee and Magic R +6%, Heal Reward +5% matk up by lvl<br /><br />Barotas<br />Small Magic pierce up by Lv if Lv &gt; 299. HP regen chance by defense, MATK +20%, Skill delay -1 sec<br /><br />Ambition<br />MATK +10%, Skill delay -1 sec HP regen by defence<br /><br />Tellas rod<br />Magic pierce -10% Skill delay -1 sec, MATK +14% All magic +12% MP cost cut by Lv. MP heal in low HP<br /><br />Tellas rod II<br />Magic pierce -10% Skill delay -1 sec, MATK +16% All magic +14%, MP cost cut by Lv, MP heal at low HP<br /><br />Crescent Moon III<br /> MATK +10% Cast Time -16% Spellburst +1%<br /><br />These are just to give you an idea its up to you in the end... Check out Kijimu Party website for more(&nbsp;<a href="http://www.iruna-online.info/" target="_blank" rel="nofollow noopener">www.iruna-online.info/</a> )</span><br /><br /><br /><br /><span style="color: purple;"><span style="font-size: x-large;"><span style="font-family: arial;"> Armor</span></span><br /><br /><br />Struggler&nbsp;<br />Spell burst +10%, Magic pierce +15%, Magic R +10%<br /><br />Struggler II<br />Spell burst +10%, Magic pierce +17% INT +5 Magic R +13% MATK +3%<br /><br />Struggler III<br />Spell burst rate + 10% Magic penetration + 19% INT + 8 Magic resistance + 15% MATK + 5%<br /><br />Altoshear III<br /> MATK +10%, Cast time -35%, Melee R +8%, Autoskill +8% Range cut +4%<br /><br />Dark Priest Robe IV<br />MATK +7%, MDEF +22%, Magic R +2%, Autoskill +6%, When defending, Magic counter chance by defense<br /><br />Emido III<br />MATK +16% Absolute evasion +10% Cast time -25% Autoskill +10% Spellburst +12% magic +1% Magic R -25% (this magic r negative wont hurt but it wont help as well)<br /><br />Heinrich Mail III<br />ATK +14%, MATK +14%, Melee pierce +6%, Magic pierce +6% Magic evasion +8% Heal reward +1000, Damage cut if HP is under 25% or lower<br /><br />These are just to give you an idea its up to you in the end... Check out Kijimu Party website for more( <a href="http://www.iruna-online.info/" target="_blank" rel="nofollow noopener">www.iruna-online.info/</a> )<br /></span><br /><br /><span style="color: #15c08f; font-family: arial; font-size: x-large;"><strong> Additional</strong></span><br /><br /><span style="color: #15c08f;">Angel ring<br />Light magic +3% MATK +15% Heal recovery +10% Magic attack chance by attack<br /><br />Arelta II<br /> Auto MP recovery +20%, MaxHP +15%, ATK +7%, MATK +7%, Absolute evasion +6%, Magic evasion +6%, Crt rate +20, Skill delay -1 sec<br /><br />Arelta III<br />ATK +9% MATK +9% Absolute Evasion +7% Magic Evasion +7% MaxHP +20% Auto MP Recovery +20% Critical rate +20 Skill Delay -1.2s<br /><br />Armaresteca<br /> MATK +7% Magic R +5% All magic +1% Absolute evasion +10% Auto MP recovery +20% <br /><br />Taenia Beret<br />MATK +14%, MP cost -18%, KO time +1 sec, Skill delay -1 sec, Damage cut -10% during stun.<br /><br />Fallen Angel Wing<br />MATK +20%, MaxMP +20%, Melee to Light +10%, Magic Attack Chance by Attack.<br /><br />These are just to give you an idea its up to you in the end... Check out Kijimu Party website for more( <a href="http://www.iruna-online.info/" target="_blank" rel="nofollow noopener">www.iruna-online.info/</a> )</span></div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;">(っ◔◡◔)っ ☕ La R&eacute;sistance☕</span></div>
<div data-tag="spoiler"><span style="color: red;"><span style="font-size: x-large;"> Weapons</span><br /><br /><br />Throat Knife(rod)<br />MATK +20% Cast defense +15% Hate Rise -10% Autoskill +10% Magic Evasion +5% Melee R +10% Magic R +10% Fire Magic +10% Neutral Magic +10% auto skills with 3 effects happens all in one 20%mp heal,Magic counter,Dmg reduction (I highly recommend this it helps for clone spam and espada dmg)<br /><br />Mortal Dagger(rod)<br />MATK +14% Magic R +4% Skill Delay -0.5s Cast Time -15% Cast defense +10% auto skill magic counter and recover 20% mp(cheaper version of t knife)<br /><br />Genius (sp sword)<br />MaxHP +30% Rate Cut +10% Melee &amp; Magic Res +15% (it can negate dmg lower then your max hp and if 2 negate autos happen you will get healed does not work on boss booms)<br /><br />Caliburn (m sword )<br />Light Element, MATK +15%, Melee R +10%, Magic R +10%, Magic Attack<br /><br />These are just to give you an idea its up to you in the end... Check out Kijimu Party website for more( <a href="http://www.iruna-online.info/" target="_blank" rel="nofollow noopener">www.iruna-online.info/</a> )</span><br /><br /><br /><br /><br /><br /><span style="color: purple;"><span style="font-size: x-large;"><span style="font-family: arial;"> Armor</span></span><br /><br /><br />Bellow of Order (boo)<br />Melee and Magic R +12%, ATK up by STR, MATK up by INT, Skill delay -1 sec, Damage cut chance by defense(1 per stat)<br /><br />Bellow of Order II<br />Melee&amp;Magic R +13%, Skill delay -1.2sec, ATK up by STR, MATK up by INT, Damage cut chance by defense(1.3 ish per stat)<br /><br />Dragon Mail 1-3<br />ATK +9%, MATK +10%, Critical rate +15, Critical damage +8%, Melee and Magic R +6%, Absolute accuracy +15%, Autoskill +5% negate like genius(this is last up)<br /><br />Black Plate II<br />INT +6, MP cost -8%, Rate cut +10%, Magic R +9%, Damage cut chance by defense<br /><br />Deceiver II<br />Critical rate -10%, MP cost -17%, MDEF +14%, Vit +10, MaxHP +16%, Rate cut +17% has some hidden stats but they kinda mehhhh<br /><br />These are just to give you an idea its up to you in the end... Check out Kijimu Party website for more( <a href="http://www.iruna-online.info/" target="_blank" rel="nofollow noopener">www.iruna-online.info/</a> )<br /></span><br /><br /><br /><span style="color: #15c08f; font-family: arial; font-size: x-large;"><strong> Additional</strong></span><span style="color: #15c08f;"><br /><br /><br />Lucioscudo II (x trade item from rare spawn but its really worth getting) <br />MDEF up by 50% of Lv. DEF up by Lv. Melee R +14%, Magic R +14% Range cut +5%, Rate cut +15%( has a auto skill but idk what it is I was so happy when I got it That i put an ini in it before i could test it xD)<br /><br />Sieger Plate <br />VIT +24, INT +18, Melee R +10%, Magic R +10%, Damage cut +5% during Stun. Ailment R +10%<br /><br />Heavy Plate III<br />VIT + 20 HP natural recovery +150 Neutral Resistance + 7% Rate Cut + 5% Melee Resistance + 4% Ailment Resistance + 9% DEF increased by 30% of level<br /><br />These are just to give you an idea its up to you in the end... Check out Kijimu Party website for more( <a href="http://www.iruna-online.info/" target="_blank" rel="nofollow noopener">www.iruna-online.info/</a> )</span></div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;">(っ◔◡◔)っ ☕Counter set</span></div>
<div data-tag="spoiler"><br /><span style="color: red;"><span style="font-size: x-large;"> Weapons&nbsp;</span><br /><br />Throat Knife(rod)<br />MATK +20% Cast defense +15% Hate Rise -10% Autoskill +10% Magic Evasion +5% Melee R +10% Magic R +10% Fire Magic +10% Neutral Magic +10% auto skills with 3 effects happens all in one 20%mp heal,Magic counter,Dmg reduction (I highly recommend this it helps for clone spam and espada dmg)<br /><br />Freesia Rod II<br />MATK +15%, Autoskill +5%, MaxHP +10%, Water magic +14%, Fire magic -14%, Magic Counter Chance( Has Higher Dmg Then T Knife Counters but I recomend T Knife Over F Rod)<br /><br />Mortal Dagger(rod)<br />MATK +14% Magic R +4% Skill Delay -0.5s Cast Time -15% Cast defense +10% auto skill magic counter and recover 20% mp(cheaper version of t knife)<br /><br /><br />Book Of Thunder<br />MATK +10%, Absolute evasion +5%, Magic counter chance by defense, Paralyze +2%, Thunder element&nbsp;<br /><br />These are just to give you an idea its up to you in the end... Check out Kijimu Party website for more( <a href="http://www.iruna-online.info/" target="_blank" rel="nofollow noopener">www.iruna-online.info/</a> )<br /></span><br /><br /><span style="color: purple;"><span style="font-size: x-large;"><span style="font-family: arial;"> Armor<br /></span></span><br /><br />Bellow of Order II<br />Melee&amp;Magic R +13%, Skill delay -1.2sec, ATK up by STR, MATK up by INT, Damage cut chance by defense(1.3 ish per stat)<br /><br />Struggler III<br />Spell burst rate + 10% Magic penetration + 19% INT + 8 Magic resistance + 15% MATK + 5%(boost counter dmg)<br /><br />Dark Priest Robe IV<br />MATK +7%, MDEF +22%, Magic R +2%, Autoskill +6%, When defending, Magic counter chance by def<br /><br />Clearic robe<br />magic counter chance by defense, MATK +5%, Heal recovery +10%, Skill delay -0.5 sec<br /><br />Sacred Robe<br />Light magic +10%, Heal recovery +20%, MATK +7%, Dark R +3%, Magic R +10%, Hate -10%, Magic counter chance on defense<br /><br />These are just to give you an idea its up to you in the end... Check out Kijimu Party website for more( <a href="http://www.iruna-online.info/" target="_blank" rel="nofollow noopener">www.iruna-online.info/</a> )</span><br /><br /><span style="color: #15c08f; font-family: arial;"><span style="font-weight: bold; font-size: x-large;"> Additional&nbsp;</span><br /><span style="font-size: small;"><br /><br />Snow Earmuffs<br />MATK +6% Heal recovery +15% delay -1 sec Magic R +5%, magic counterattack, When Christmas period with a probability, MDEF is little increase at Lv&nbsp;<br /><br />Witch Eyepatch S<br />MaxMP -30%, Skill delay -0.5 sec, Absolute evasion +5%, Autoskill +6%, Magic counter chance by defenseWitch Eyepatch S<br /><br />These are just to give you an idea its up to you in the end... Check out Kijimu Party website for more( <a href="http://www.iruna-online.info/" target="_blank" rel="nofollow noopener">www.iruna-online.info/</a> )&nbsp;</span></span></div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;">(っ◔◡◔)っ ☕Quest info☕</span></div>
<div data-tag="spoiler"><span style="color: #7a9fca;">Magic Soul (Level 1)I<br />Nama NPC : King Elban - Capital City Elban<br /><br />Objective&nbsp;<br />Monster: 30x Dryard ( Maze of Enzeits )<br /><br />Monster: 30x Mariquita ( Labilans Sector )<br /><br />Collect : 1x Sky Dragon Horn (Himmel, Maze of Enzeits)<br /><br />Collect : 15x Digestive Juice (Morray - Innebans Ruins )<br /><br />Collect : 30x Strange Spine ( Hallucigenia - Innebans Ruins )<br /></span><br /><br /><span style="color: #ff0303;">Enrage (Level 2)<br /><br />Nama NPC : King Elban - Capital City Elban<br /><br />Objective&nbsp;<br />Monster : 30x Owlbear (Inneban Ruins - Arah Gusanoth )<br /><br />Monster : 30x Cyclops (Maze of Enzeits - Arah Himmel )<br /><br />Collect : 1x PowerFull Engine (Altadora, Baustelle Sector)<br /><br />Collect : 15x Giant Fang (Malfil - Bizen forest sector - Arah Plazuda)<br /><br />Collect : 30x Broken Skull Rod ( Goblin - Bizen forest sector )<br /></span><br /><span style="color: #0f6ddb;"><br />Soothe (Level 2)<br /><br />Nama NPC : Port spargas pub : Royal butterfly<br /><br />Objective :<br /><br />Collect : 1x Mysterious Plume ( Plazuda - Bizen forest sector )<br /><br />Collect : 50x Ice Scale ( Raptor - Oof Plains )<br /><br />Collect : 50x Hard Bark ( Abete - Kilmy Highlands)<br /><br />Collect : 30x Blue Feather ( Sturm - Cave of Winds)<br /></span><br /><span style="color: #c66f15;"><br />Soul Connection (Level 2)<br /><br />Nama NPC : Port spargas pub : Royal butterfly<br /><br />Objective&nbsp;<br />Boss Fight : 1x Azimov ( Fort Slebinius )<br /><br />Boss Fight : 1x Garel ( Curiolto )<br /><br />Collect : 20x Rutile ( Hard Goblin- Fort Slebinius )<br /><br />Collect : 30x Sorrowfull eye ( Derun - Ifmolt Village)<br /></span><br /><span style="color: #81f32b;"><br />Aura Espada (Level 1)<br /><br />Nama NPC : King Elban - Capital City Elban<br /><br />Objective<br />Monster: 40x Lutor ( Frontline Base)<br /><br />Monster: 40x Aphmar ( Ruins Zamani <br />Collect : 50x Life Shard (Embryo - Maze Of Unberto to go there take the star quest from the king)<br /><br />Collect : 60x Spirit Shard (Elemental Spirit in Divine Tower)<br /></span><br /><br /><span style="color: #ed0eee;">Ministerum (Level 1)<br /><br />Nama NPC : King Elban - Capital City Elban<br /><br />Objective<br />Collect : 15x Bitter Nut (Goron - Kasoko Mountain)<br /><br />Collect : 15x Malachite ( Shiki-Oni- Mt. Ochikubo)<br /><br />Collect : 20x Torn Shide (Nozuchi - Mt. Ochikubo)<br /><br />Collect : 40x Smooth Scale ( Anomalocaris - Aselie Special District )</span></div>
<span style="color: #ed0eee;"><br /></span><hr /><hr /><hr />
<div><a style="display: none;"></a><span style="cursor: pointer;"><span style="font-size: medium;">(๑و&bull;̀&omega;&bull;́)و 🤺Styles</span></span></div>
<div data-tag="spoiler"><br /><span style="color: #0077ff;">Support:Bosses</span><br /><br />For a minstrel remember to give them a clone once in a while so you can focus on supporting the dps of the party.<br /><br />Dps members such as Assassin have low health I recommend giving them soul 30-60k hp most times<br /><br />For ninja make sure you keep agro off of it or the ninjas mp will eat up fast<br /><br />If the party all dies at 1x a quick way to heal them all is highness bless it has a very big range (you most-likely didn't die cause you took 0 dmg)<br /><br />If there is ench/glad in your party dont use Sol(Shield of light) any other time i recommend it every 10 secs or when you get a chance it could save the party from random rate dmg<br /><br />For hw/monk/ench give them aura espada (extra 300~500k) assault&nbsp;<br /><br /><br /><span style="color: #0077ff;">Tank:Bosses&nbsp;</span><br /><br />Enrage to gain hate( the hate from enrage is equal to pally guardian)<br /><br />clone pt members they wont lose mp when you are the target<br /><br />you will have about 30-60k hp and take 1-30k dmg giving you freedom to keep pt members alive while holding agro<br /><br />Make sure the boss is to your front and its back is faceing other pt members. This helps them not get hit by directional aoe hits</div>
<br /><br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><em><span style="font-family: Arial;"><span style="color: #ff0000;">A</span><span style="color: #ff2800;">d</span><span style="color: #ff5000;">v</span><span style="color: #ff7800;">a</span><span style="color: #ffa100;">n</span><span style="color: #ffc900;">c</span><span style="color: #fff100;">e</span><span style="color: #e4ff00;">d</span><span style="color: #93ff00;">A</span><span style="color: #6bff00;">u</span><span style="color: #43ff00;">t</span><span style="color: #1aff00;">o</span><span style="color: #00ff35;">B</span><span style="color: #00ff5d;">u</span><span style="color: #00ff86;">i</span><span style="color: #00ffae;">l</span><span style="color: #00ffd6;">d</span><span style="color: #00feff;">s</span><span style="color: #00aeff;">W</span><span style="color: #0086ff;">i</span><span style="color: #005dff;">t</span><span style="color: #0035ff;">h</span><span style="color: #1a00ff;">S</span><span style="color: #4300ff;">o</span><span style="color: #6b00ff;">m</span><span style="color: #9300ff;">e</span><span style="color: #e400ff;">S</span><span style="color: #ff00f1;">u</span><span style="color: #ff00c9;">p</span><span style="color: #ff00a1;">p</span><span style="color: #ff0078;">o</span><span style="color: #ff0050;">r</span><span style="color: #ff0028;">t</span></span></em></span></div>
<div data-tag="spoiler"><strong><span style="color: #ff0303;">I take no responsibility if you choose an advanced build and or modify it to your likeing&nbsp;</span></strong><br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><span style="color: #0376f8;">Magic bow/sword</span></span></div>
<div data-tag="spoiler">Stats<br />Int (matk/atk/mp)<br />Agi (aspd/eva)<br />Dex (matk/atk/sd)<br /><br />Most Popular&nbsp;Weps<br />Cortege (Sword)<br />Magic sword ATK&amp;MATK + 10% Range + 2 Magic auto(mana wave 10-30k dmg)Neutral magic +20%<br /><br />Hiereus II (Bow)<br />Magic Bow MATK +12% Evasion +10% Autoskill +9% Adds MATK +9% INT +10 Evasion +15% if AGI &gt; 299<br /><br />Xtals<br />Federico&nbsp;<br />Johel<br />Magic Atk Xtals<br />Dunk 2<br /><br />Armor&nbsp;<br />Strug<br />Boo<br /><br />Adds<br />Faw<br />Angel Ring&nbsp;<br /><br />Abi<br />Tech<br />Auto<br /><br />Al<br />Halios<br />Cordal<br />Advanture<br />Sauro2<br /><br />Keeping This Basic For Now But For A More In Depth&nbsp;<em><span style="font-family: Arial;"><span style="color: #ff0000;">M</span><span style="color: #d4002a;">a</span><span style="color: #aa0055;">k</span><span style="color: #7f007f;">i</span><span style="color: #5500aa;">n</span><span style="color: #2a00d4;">a</span><span style="color: #2a00d4;">Y</span><span style="color: #5500aa;">u</span><span style="color: #7f007f;">k</span><span style="color: #aa0055;">i</span><span style="color: #d4002a;"><br /></span></span></em> did a wonderful job<br /><br /><a href="http://irunaonline.boards.net/thread/28365/enchanter-gear-review" target="_blank" rel="noopener norewrite">irunaonline.boards.net/thread/28365/enchanter-gear-review</a></div>
<div><a style="display: none;"></a><span style="cursor: pointer;"><span style="color: #2cff00;">Physical and magical hybrid</span></span></div>
<div data-tag="spoiler"><br />Stats<br />Agi 200-350+<br />Vit 100-350<br />Int 200-350+<br />Crt 300<br />Str 200-350+<br />About lvl 320 this becomes effective<br /><br />Able to use magic and physical autos <br />Can change to struggler when a support is needed<br />Can effectively use all skills<br />Is well balance <br /><br /><br /><br /><br />Weapon<br /><br />Debbie's Talon<br />VIT +9 Critical damage +19% Skill Delay -1.0s Magic R -10% atk up by vit<br /><br />Armor<br /><br />Ultimi Iv<br />ATK +14% MATK +18% Critical rate +10 Critical damage +10% Skill Delay -1.0s Item Delay -1.0s Accuracy +100 Absolute Evasion +10% Melee +900<br /><br />Bellow of Order II<br />Melee&amp;Magic R +13%, Skill delay -1.2sec, ATK up by STR, MATK up by INT, Damage cut chance by defense(1.3 ish per stat)<br /><br />Country road<br />ATK&amp;MATK +10%, Delay - 0.5 sec, MP Cost -20%, Ailment R -30%, Hate rise -30%, Hate rise up by VIT<br /><br />Adds<br />Arelta III<br />ATK +9% MATK +9% Absolute Evasion +7% Magic Evasion +7% MaxHP +20% Auto MP Recovery +20% Critical rate +20 Skill Delay -1.2s<br /><br />Monty II<br />Melee R +8%, Magic R +8%, Skill delay -1.2 sec, Absolute accuracy +9%, ATK up by DEX, Item recovery +25%, ATK +9%<br /><br />Faw<br />MATK +20%, MaxMP +20%, Melee to Light +10%, Magic Attack Chance by Attack. <br /><br />Hcb<br />Vampire auto by atk<br /><br />Xtals<br />◇ Dajarte<br />Magic R -11%, Magic evasion -11%, Attack +11%, Put dark magic attack on the equipmen(Like Aura Espada Atk And Matk Effect Its Auto Dmg.)</div>
</div>
<br /><br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><span style="color: #7f007f;">My current Build</span></span></div>
<div data-tag="spoiler"><br />Stats<br />Int 350+<br />Dex 350+<br />Vit 350+<br />Blue100<br />Green 90+<br /><br />Matk 9.4k no soul/sb/other job buffs |60k heals|50k hp|30k mp|50-70k sweep<br /><br />Universe II+9◇Sauro II☆Intelligence Lv5 <br />Struggler III+9◇Fred<br />Fallen Angel Wing+9◇Dunkelis II☆Melee Defense Lv4<br />Bunny Ears◇Dark Santa☆Melee Defense Lv5(acc)<br />Specia's Blessed Stone◇Agira Jarma◇Agira Jarma<br /><br />Tank set 40k hp| 20k mp| dmg from moss golems 200-5k(5k when lethargic)<br /><br />Throat Knife+9◇Rogelio☆Fluency Lv3<br />Bellow of Order II+9@◇Iniliba☆Quick Cool Lv3<br />LucioscudoII+9◇Iniliba☆Quick Use Lv1<br />Bunny Ears◇Dark Santa☆Melee Defense Lv5(acc)<br />Catura Talisman◇Iniliba☆Vitality Lv1<br /><br />Auto Set 42k Hp|23k Mp|Aura 30-50k<br /><br />Cortege+9◇Frederico<br />StrugglerIII+9◇Fred<br />Fallen Angel Wing+9◇Dunkelis II☆Melee Defense Lv4<br />Bunny Ears◇Dark Santa☆Melee Defense Lv5(acc)<br />Festan Ring◇Jahoel☆Autoskill Lv1<br /><br />Wondering how I use a auto set with no agi?<br />I Use Pet Skils<br />Hyper cycle (Max Aspd)<br />Quick Turn (10%? Eva)<br />Dual Blow (Hits 2x )<br />My Dps Is About 1m Per 30 Secs<br /><br />What About Hit Rate?<br />1 Of My Al Page Is 6 Purple I Hazzz Maxzzz Crt Rate suckaaaas</div>
                            [/spoiler]</article></div>
                        <hr>
                        <p>Author: <a href="http://irunaonline.boards.net/user/10835">Done~with~forums</a></p>
					</div>
                    <div class="row divider" role="separator" style="margin-top:20px;"></div>
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
