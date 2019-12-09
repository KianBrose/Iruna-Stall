<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title> Autoskill Samurai Guide | Iruna Global Stall</title>
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
                    <h4>Autoskill Samurai Guide by Tamagu/Ymir</h4>
                    <hr>
                    <div>
                        <article>

<div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Hello everyone, welcome to my simple guide on Autoskill Samurai&nbsp;ଘ(੭ˊ꒳ˋ)੭✧!&nbsp;As I have just started playing as a Samurai recently, you will definitely find loopholes and flaws in this guide. It is also my first time attempting to write a guide, so please feel free to point out mistakes and give constructive criticism. (❁&acute;▽`❁)*✲ﾟ*</span></div>
<div style="text-align: justify;"><span style="color: #e619a4; font-size: medium;"><strong>Changing Class</strong></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">I recommend switching to Samurai at lv240, at the very least. Any lower than that, you will find yourself unable to enjoy playing this class due to insufficient stat points and thus it makes you </span><span style="font-size: 10pt; text-decoration: line-through;">die all the time</span><span style="font-size: 10pt;"> rather squishy and it will take you forever to grind and level up. Additionally, most of the useful skills that you will need will only be available to you once you are at lv240. For more information on Samurai's skills, click&nbsp;<a href="http://irunaonline.boards.net/thread/4279/samurai-skills-list" target="_blank" rel="noopener norewrite">here</a>!</span></div>
<div style="text-align: justify;"><br /><br /></div>
<div style="text-align: justify;"><strong><span style="color: #e619a4; font-size: medium;">Stats</span></strong></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">STR&gt;AGI&gt;DEX&gt;VIT&gt;CRT</span></div>
<div style="text-align: justify;"><strong style="font-weight: bold; font-size: 10pt;">STR </strong><span style="font-size: 10pt;">raises your attack. It should be prioritized at all times.&nbsp;</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">1 STR = ATK+3</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><strong>AGI </strong></span><span style="font-size: 10pt;">adds attack although lesser than STR, and helps with evasion. It adds survivability due to evasion.</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">1 AGI = ATK+1</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><strong>DEX </strong></span><span style="font-size: 10pt;">helps with skill delay reduction for when you want to use Issen and also adds attack for swords. Overall a good stat to add once you've capped STR and AGI.</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><strong>VIT </strong></span><span style="font-size: 10pt;">adds HP and survivability and thus, you will have a better chance of surviving if you get stunned during boss fights or for when you can't evade magic attacks.</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><strong>CRT </strong></span><span style="font-size: 10pt;">ensures that you will CRT on every attack. You will no longer need CRT later on in-game but as of now, it is safe to at least add a minimum amount of 50 CRT. You can stop adding stat points to CRT once you've reached 70 or 80, provided you use the Absolute Clarity buff to ensure a 90% CRT rate.&nbsp;</span></div>
<div style="text-align: justify;"><br /><span style="color: #e619a4; font-size: medium;"><strong><br />How It Works</strong></span><br /><span style="font-size: small;">90% of the time your Samurai will be depending on auto-attacks instead of skills. However, you will either be using Shippu Jinrai and/or with Dual Blow (Pet Skill) for a more efficient grind/farm session. Optionally, you can also use Issen (alongside Round Up) to do one-shot grind/farm at lower leveled mobs.</span></div>
<div style="text-align: left;"><strong><span style="color: #e619a4; font-size: medium;">Equipment</span></strong></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">All the equipment listed are available in-game as of now. Future upgrades/equipment will be added when it gets implemented.<br /><br /></span></div>
<div style="text-align: justify;"><strong><span style="color: #e67319; font-size: medium;">Swords</span></strong></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><strong>For auto-attacking:</strong></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><u>Muramasa</u></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">ATK: 205-220</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Stats: Critical Damage+14%, skill delay-0.5 seconds, ASPD-200%</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><strong>For the occasional Issen:</strong></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><u>Air Strum II</u> (Upgrade of Air Strum)</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">ATK: 279-289</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Stats: Physical to non-attribute+20%, ATK+5%, skill delay-1.2 seconds, item delay-0.5 seconds, range+1<br /><br /><u>Legacy of Will (II)</u>&nbsp;(Upgrade of Legacy of Will)<br />ATK:&nbsp;278-293<br />Stats: ATK +18%, MaxHP &amp; MaxMP +15%, Accuracy +15%, Evasion +20%, Melee through +18%, Item recovery +15%, ATK is a little increase in AGI</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><u>Futsu no Mitama</u></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">ATK: 260-275</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Stats: ATK +8%, Delay -0.5 sec, All elements</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><strong>For breaking barriers:</strong></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><u>Kloff Pillar</u></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">ATK: 255-264&nbsp;</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Stats: Melee through +5%, ASPD -20%, ATK +16%, Flame element, Small ATK up by VIT, Additional attack chance</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><strong>For MP set:</strong></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><u>Dim Sword IV</u> (Upgrade of Dim Sword III)</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">ATK: 235-245</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Stats: Magic Sword, all stats+5. Hidden: When attacking, chance of magic attack</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><u>El Avenir</u> (Upgrade of Avenir)</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">ATK: 274-285</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Stats: INT+7, MaxHP+3000, Accuracy+30, magic through +12%, Melee R +16%</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><u>Any 2s sword</u></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Both slots will be slotted with either INT+7 or Seele Zauga II</span></div>
<div style="text-align: justify;"><strong><span style="color: #e67319; font-size: medium;">Armor</span></strong></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><u>Ira Upgrade</u> (Strengthened 1)</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Stats: ATK +14%, Magic evasion +7%, Critical rate +20%, Autoskill +8%, Critical damage +5%, Melee R -25%<br /><br /><u>Schwermer Upgrade</u> (Strengthened 1)<br />Stats: Critical damage +14%, Autoskills +4%, VIT +7, when skill delay -0.4 sec defense, counterattack with probability (at the time of counterattack triggered, disable the damage)<br /><br /><u>Ultimi Re-up</u> (Strengthened 2)<br />Stats:&nbsp;ATK +12%, MATK +16%, Improved Critical, delay -1 sec, Accuracy +100, Absolute evasion +10%, Melee +600<br /><br /></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><u>Exelis Re-up</u>&nbsp;(Strengthened 2)</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Stats: ATK +3%, MATK +3%, Evasion +10%, Magic R +12%, Skill delay -1.5 sec</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><strong>For MP set:</strong></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><u>Shushiwa Armor Re-up</u>&nbsp;(Strengthened 2)</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Stats: MATK +7%, DEX +10, INT +9, MP cost -15%, Skill delay -1.5 sec with Throwing<br /><br /><u>Tunic Re-up</u> (Strengthened 2)<br />Stats:&nbsp;MATK +5%, MaxMP +15%, Auto MP recovery +40%, MDEF +12%<br /><br /><u>Dragon Mail Re-up</u> (Strengthened 2)<br />Stats: ATK +9%, MATK +10%, Critical rate +15, Critical damage +8%, Melee and Magic R +6%, Absolute accuracy +15%, Autoskills +5%, Hidden: INT+10</span></div>
<div style="text-align: justify;"><strong><span style="color: #e67319; font-size: medium;">Additional</span></strong></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><u>Huge Cherry Blossom Upgrade</u></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Stats: Heal reward &amp; Item recovery +10%, HP absorb chance, MaxHP +12%, MaxMP -8%, ASPD -10%<br /><br /><u>Monty Beret</u><br />Stats: ATK +8%, Skill delay -1 sec, Absolute accuracy +7%, Item recovery +25%, Melee and Magic R +8%, ATK up by DEX</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><u>Daiginjo [Holiday] Upgrade</u></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Stats: Accuracy -30%, Hate rise +30%, Critical rate -70%, Autoskill +12%, Critical damage +22%<br /><u><br />Arelta Upgrade</u><br />Auto MP recovery +20%, MaxHP +15%, ATK &amp; MATK +7%, Absolute &amp; Magic evasion +6%, Crt rate +20, Skill delay -1 sec</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><strong>For MP Set:</strong></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><u>Farfalla Upgrade</u></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Stats: INT +10, Magic R +12%, MDEF up by AGI, Small MP recovery chance by defense<br /><br /><u>Libersona</u><br />Stats: 4 elements, Cast time -15%, INT+10<br /><br /><u>Witch Eyepatch</u><br />Stats:&nbsp;MaxMP +30%, Skill delay +0.5 sec, Evasion +5%, Autoskill +3%, Magic counter chance by defense<br /><br /><u>Sieger Plate</u><br />Stats:&nbsp;VIT +24, INT +18, Melee &amp; Magic R +10%, Damage cut +5% during Stun, Ailment R +10%</span></div>
<div style="text-align: justify;"><strong><span style="color: #e67319; font-size: medium;">Special</span></strong></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><u>Myrica Wristlet</u></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Stats: VIT up based on 50% of Lv with Swords, Neutral R +5%</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><u>Ring of Rush</u></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Stats: DEX &amp; Accuracy &amp; Critical rate greatly decreases, Great ATK up by Lv</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><u>Atleta Ring</u></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Stats: ATK +7%, Accuracy -30%, Chance of HP cost by attack</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><u>Knight Gauntlet</u></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Stats: MaxHP +15% during the sword equipped, VIT even ATK is a little increase</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><strong>For MP set:</strong></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><u>Orichal Ring</u></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Stats: MaxMP +1000 INT +10<br /><br /><u>Argent Ring</u><br />Stats: INT &amp; DEX +10, Skill delay -0.5 sec<br /><br /></span></div>
<div style="text-align: justify;"><strong><span style="color: #e619a4; font-size: medium;">Crysta</span></strong></div>
<div style="text-align: justify;"><u><span style="font-size: small;">Weapon</span></u></div>
<ul style="list-style-type: disc;">
<li>
<div style="text-align: justify;"><span style="font-size: small;"><strong>Pulis</strong>: Item delay -0.2 sec, Melee +200, Adds Melee +300, Delay -0.5 sec, Atk +5% on Weapons</span></div>
</li>
<li><span style="font-size: small;"><strong>Oritius</strong>: ATK +9%, Auto HP recovery -20%</span></li>
<li><span style="font-size: small;"><strong>Ziddu</strong>: Autoskill +3%, Adds Hate rise -5%, ATK +5% on Weapons<br /><br /><u>Elemental</u><br /></span></li>
<li><span style="font-size: small;"><strong>Aurumteus</strong>:&nbsp;Melee +10% to Wind<br /></span></li>
<li><span style="font-size: small;"><strong>Argyros</strong>:&nbsp;Melee +10% to Dark<br /></span></li>
<li><span style="font-size: small;"><strong>Sturm</strong>:&nbsp;Melee +10% to Water<br /></span></li>
<li><span style="font-size: small;"><strong>Halios</strong>:&nbsp;Melee +10% to Light<br /></span></li>
<li><span style="font-size: small;"><strong>Vatendeth</strong>:&nbsp;Melee +10% to Earth<br /></span></li>
<li><span style="font-size: small;"><strong>Eisen</strong>: Melee +10% to Fire<br /></span></li>
<li><span style="font-size: small;"><strong>Scorpia</strong>:&nbsp;Melee +10% to Neutral</span></li>
</ul>
<span style="font-family: arial;"><span style="font-family: arial;"><span style="font-size: small;"><br /></span></span></span>
<div style="text-align: justify;"><u><span style="font-size: small;">Armor</span></u></div>
<ul style="list-style-type: disc;">
<li>
<div style="text-align: justify;"><span style="font-size: small;"><strong>Dorry</strong>: ATK +6%, Rate cut -10%, Adds ATK +6% and Melee +300 on Armor</span></div>
</li>
<li><span style="font-size: small;"><strong>Iniliba</strong>: Damage cut chance by defense, ATK &amp; MATK+10% on Armor (Consumes autoskill)</span></li>
<li><span style="font-size: small;"><strong>Magonza</strong>: Melee +200, Magic R -10%, Adds ATK +9% and Magic R +10% on Armor<br /></span></li>
<li><span style="font-size: small;"><strong>Dajarte</strong>: Magic R -11%, Magic evasion -11%, Attack +11%, Put dark magic attack on the equipment. (Consumes autoskill)<br /><br /></span></li>
</ul>
<div style="text-align: justify;"><span style="font-size: small;"><u>Additional</u><br /></span></div>
<ul style="list-style-type: disc;">
<li>
<div style="text-align: justify;"><span style="font-size: small;"><strong>Raton</strong>: Critical damage +14%, MP cost +10% And when equipped with additional, further ATK +6%<br /></span></div>
</li>
<li><span style="font-size: small;"><strong>Vida</strong>: ATK +4%, Hate rise +15%, Adds ATK +8% and Hate rise -15% on Additional<span style="font-size: 13px; background-color: transparent;"><br /></span></span></li>
<li><span style="font-size: small;"><span style="font-size: 13px; background-color: transparent;"><strong>Pole</strong>:&nbsp;INT +5, Autoskill, +3%, Adds Spell burst +10% and Autoskill +2% on Additional<br /></span></span></li>
<li><span style="font-size: small;"><span style="font-size: 13px; background-color: transparent;"><strong>Rudolf</strong>: When equipped in additional, MaxHP +15%, Hate rise +10%, MaxMP -20%, Autoskills +5%, Range +1<br /><br /><u>Elemental</u></span></span></li>
</ul>
<div>
<ul style="list-style-type: disc;">
<li><strong>Sakimori no Ryu</strong>: When equipped with the physical +5%, Autoskill trigger +1% added to the earth attribute, more Earth attribute physical +10%</li>
<li><strong>Nero</strong>:&nbsp;When equipped with the physical +5%, Autoskill trigger +1% added to the Light elements, and more physical in Light element +10%</li>
<li><strong>Thothras</strong>:&nbsp;When equipped with the physical +5%, Autoskill trigger +1% added to the non-attribute, further non-attribute physical +10%</li>
<li><strong>Pursuer</strong>:&nbsp;Melee +5% to Wind, Adds 10% more on Additional, Autoskill +1%</li>
<li><strong>Niapa</strong>: Melee +5% to Dark, Adds 10% more on Additional, Autoskill +1%</li>
<li><strong>Celawinos</strong>:&nbsp;Melee +5% to Water, Autoskill +1%, Adds Melee +10% to Water on Additional</li>
<li><strong>Captain Beelzem</strong>:&nbsp;Melee +5% to Fire, Adds 10% more on Additional, Autoskill +1%</li>
</ul>
</div>
<div style="text-align: justify;"><u><span style="font-size: small;">Special</span></u></div>
<div style="text-align: justify;">
<ul>
<li><span style="font-size: small;"><strong>Warrior of Light</strong>: ATK +10%, Magic R -10%, Adds twice attack chance on Special. (Consumes autoskill)</span></li>
</ul>
<div><span style="font-size: 13.3333px;"><span style="font-size: 13.3333px;"><br /><u>For MP set</u><br /></span></span>
<ul style="list-style-type: disc;">
<li><strong>INT+7</strong></li>
<li><strong>Seele Zauga II</strong>:&nbsp;MaxMP +30%, Melee R -10%, Magic R -10%</li>
</ul>
</div>
<div><span style="font-size: 13.3333px;"><br /><br /></span></div>
</div>
<div style="text-align: justify;"><span style="color: #e619a4; font-size: medium;"><strong>Abilities</strong></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">☆Autoskill Lv1-5, to increase your autoskill %</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">☆Technique, if you have low CRT rate and/or using Daiginjo</span></div>
<div style="text-align: justify;"><br /><br /></div>
<div style="text-align: justify;"><strong><span style="color: #e619a4; font-size: medium;">AL Crysta</span></strong></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">▲Mamonea</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Stats: Critical damage +5%, Critical rate +10%, Magic R -10%</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">▲Cheltil</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Stats: Skill delay -1 sec, Item delay +0.5 sec</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">▲Maelriel</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Stats: ASPD +10%, Delay -0.5 sec, Cast time -10%</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">▲Shelk</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Stats: AGI +5, Evasion +15%, Absolute-Magic evasion +5%, When evaded counterattack rate +5%<br /><br />▲Sauro II<br />Stats: Melee+3% to all elements, All magic+3%, Delay-0.5sec, Autoskill+2%</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">▲Larkas</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Stats: MaxMP +500, Autoskill +1%, Range cut +5%</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">▲Leviam</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Stats: MaxMP +10%, Magic R +10%, Magic evasion +5%, Cast defense +5%</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">▲Altan</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Stats: MaxHP +1000, Autoskill +1%, Rate cut +5%</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">▲Muscle</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Stats: ATK +10, ATK +3%, Auto HP recovery +25%<br /><br />▲Malti<br />Stats: Rate cut +10%, Melee pierce +10%, Ailment R +5%</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><strong>Your Al Crysta should be lined up as follows (Max Autoskill):<br /><br /><img style="max-width: 100%;" src="http://s32.postimg.org/6u8u5b5qt/Screenshot_2016_06_13_22_37_11.png" alt="" /><br /><br /></strong></span></div>
<div style="text-align: justify;"><strong><span style="color: #e619a4; font-size: medium;">Pet Skills</span></strong></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Optional pet skills that you will want/need in order to expand your capabilities as a Samurai.</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><strong>Dual Blow</strong>: Generate an attack that is twice your normal damage</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><strong>Hide Attack (Passive)</strong>: Critical rate is 100% when your hate value is zero</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><strong>Quick Turn</strong>: Your evasion temporarily increases</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><strong>All-around</strong>: Increase your resistance and attack to all elements</span></div>
<div style="text-align: justify;"><strong style="font-size: 10pt;">Life Charge</strong><span style="font-size: 10pt;">: Recover your HP by 10% each second. When triggered, your DEF decreases and you cannot move</span><br /><br /><br /><strong><span style="color: #e619a4; font-size: medium;">Tips ☆ヾ(*&acute;・&forall;・)ﾉ</span></strong><br /><span style="font-size: 10pt;">● If you are low on funds, you should first focus on completing your Autoskill set. Get an MP set once you've reached lv220 to ensure you have sufficient Shippu time when grinding/farming</span><span style="font-size: 10pt;">. <br /><br /></span><span style="font-size: 10pt;">● Carry a least 3 stacks of MP pots at all times for efficient grinding/farming. This is because you do not have much Max MP and your MP will burn out quick as you need to keep your buffs up.</span></div>
<div style="text-align: justify;"><br /><br /></div>
<div style="text-align: justify;"><span style="font-size: medium;"><span style="color: #e619a4;"><strong>Leveling</strong></span><strong><span style="color: #e619a4;">&nbsp;Areas</span></strong></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">1. <u>High hp mobs</u> (Using Shippu/auto-attacking) for party or solo players.<br /></span><span style="font-size: 10pt;"><br /><strong>High Ents</strong><br />Nearest Town: Drafbourg</span><span style="font-size: 10pt;"><br /></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Recommended Level: 180 and above<br />Pros/Cons: Occasional poison<br /><br /><img style="max-width: 100%;" src="http://s31.postimg.org/t8k4jrl7f/Screenshot_2016_06_13_20_58_52.png" alt="" /><br /></span><span style="font-size: 10pt;"><br /><strong>Megaroche</strong><br />Nearest Town: Drafbourg</span><span style="font-size: 10pt;"><br /></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Recommended Level: 190 and above<br /><br /><img style="max-width: 100%;" src="http://s32.postimg.org/u079pdt5h/Screenshot_2016_06_13_20_46_44.png" alt="" /><br /><br /></span><span style="font-size: 13.3333px;"><strong>Balor</strong></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Nearest Town: Kreldan Church Street/Drafbourg<br />Recommended Level: 200 and above<br /><br /><img style="max-width: 100%;" src="http://s31.postimg.org/arxiyb57f/Screenshot_2016_06_13_21_25_35.png" alt="" /><br /></span><span style="font-size: 13.3333px; background-color: transparent;"><br /><strong>Nommar</strong></span><span style="font-size: 10pt;"><br /></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Nearest Town: Pilaneza City<br />Recommended Level: 210 and above<br />Pros/Cons: Occasional stun, but you can collect Dirty Gear for the EXP quest at the same time<br /><br /><img style="max-width: 100%;" src="http://s31.postimg.org/qx2tnd7kr/Screenshot_2016_06_13_21_28_58.png" alt="" /><br /></span><span style="font-size: 13.3333px; background-color: transparent;"><br /><strong>Baum Warrior</strong></span><span style="font-size: 10pt;"><br /></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Nearest Town: Sateria City<br />Recommended Level: 230 and above<br />Pros/Cons: Occasional poison<br /><br /><img style="max-width: 100%;" src="http://s31.postimg.org/7l09zxfob/Screenshot_2016_06_13_21_07_50.png" alt="" /><br /></span><strong style="font-size: 13.3333px; background-color: transparent;"><br />Yarde</strong><span style="font-size: 10pt;"><br /></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Nearest Town: Underground Bailune<br />Recommended Level: 240 and above<br />Pros/Cons: Instant death attack<br /><br /><img style="max-width: 100%;" src="http://s32.postimg.org/kenfv0mol/Screenshot_2016_06_13_21_01_46.png" alt="" /><br /></span><span style="font-size: 13.3333px; background-color: transparent;"><br /><strong>Third Eyes</strong></span><span style="font-size: 10pt;"><br /></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">Nearest Town: Maios<br />Recommended Level: 270 and above<br /><br /><img style="max-width: 100%;" src="http://s31.postimg.org/fhzwzia3f/Screenshot_2016_06_13_21_34_02.png" alt="" /><br /></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;">2. <u>One-shot mobs</u> (Using Issen with Round Up, for when you&rsquo;re bored of auto-attacking) for solo players.</span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><br /><strong>Shiki-Oni</strong><br />Nearest Town: Kakeula City<br />Recommended Level: 200 and above<br /><br /><img style="max-width: 100%;" src="http://s32.postimg.org/n5fu48kb9/Screenshot_2016_06_13_22_52_47.png" alt="" /><br /><br /></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><strong>Pincer</strong><br />Nearest Town: Capital City Eldan<br />Recommended Level: 270 and above<br /><br /><img style="max-width: 100%;" src="http://s31.postimg.org/mau2m868r/Screenshot_2016_06_13_22_48_45.png" alt="" /><br /><br /></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><strong>Magic Soldiers<br /></strong>Nearest Town: Underground Bailune<br />Recommended Level: 270 and above<br /><br /><img style="max-width: 100%;" src="http://s31.postimg.org/oqd1xqduj/Screenshot_2016_06_13_22_45_41.png" alt="" /><br /><br /></span></div>
<div style="text-align: justify;"><span style="font-size: 10pt;"><strong>Jacbos</strong><br />Nearest Town: Underground Bailune<br />Recommended Level: 280 and above<br /><br /><img style="max-width: 100%;" src="http://s32.postimg.org/ktimtxrrp/Screenshot_2016_06_13_21_05_30.png" alt="" /><br /><br /></span></div>
<div style="text-align: justify;"><strong style="font-size: 10pt;">Petafee &amp; Lux Mushroom</strong><br /><span style="font-size: 10pt;">Nearest Town: </span>Maios<br /><span style="font-size: 10pt;">Recommended Level: 290 and above</span><br /><br /><span style="font-size: 10pt;"><img style="max-width: 100%;" src="http://s32.postimg.org/5q4yo9cr9/Screenshot_2016_06_13_22_39_28.png" alt="" /></span><br /><br /><br /></div>
<div style="text-align: justify;"><span style="color: #e619a4;"><strong><span style="font-size: medium;">Videos</span><br /></strong></span><span style="font-size: 10pt;">Linked below are some videos of Samurai(s). Feel free to ask me to add your videos about Autoskill Samurai here!</span><span style="font-size: small;"><br /><br /><a href="https://www.youtube.com/watch?v=DKe4ebiOWeg" target="_blank" rel="nofollow noopener">Samurai Solo AOE Grind<br /><br /></a><a href="https://www.youtube.com/watch?v=jEH2pv-GS3Q" target="_blank" rel="nofollow noopener">Samurai Grind using Shippu &amp; Issen<br /><br /></a></span><a href="https://www.youtube.com/watch?v=ae6trlbya6w" target="_blank" rel="nofollow noopener"><span style="font-size: small;">Samurai Kloff Pillar Autoskill Test</span><br /><br /></a><hr /><a href="https://www.youtube.com/watch?v=ae6trlbya6w" target="_blank" rel="nofollow noopener"><strong><br /></strong></a><strong>Thank you for reading my guide!<br />Any questions feel free to ask in this thread. (Please don't quote the original post)</strong><br /><br /><br />Special thanks to <a title="@schneit" href="/user/630">Almas</a> for guiding and teaching me &amp;&nbsp;<a title="@mishiko" href="/user/1389">Mahouko</a> for being <span style="text-decoration: line-through;">the #1 boss</span> a huge inspiration&nbsp;&deg;˖ ✧◝(○ ヮ ○)◜✧˖ &deg;<br />Also thanks to <a style="color: #1979e6;" title="@kyoakuna" href="/user/2174">Ryukengan</a><a style="color: #e619d6;" title="@asteg" href="/user/1537">asteg</a><a title="@jebat" href="/user/5676">Roronoa</a><a title="@id" href="/user/2560">Cerulean</a> for helping improve the guide!<br /><br /><br />Written on: 13 June 2016<br />Last Updated: 06 February 2017</div>
</div>
</article>
                        <hr>
                        <p>Author: <a href="http://irunaonline.boards.net/user/2045">Ｔａｍａｇｕ</a></p>
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
