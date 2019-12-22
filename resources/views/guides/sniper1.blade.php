<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title> Simple Sniper Guide | Iruna Global Stall</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow" >
    <meta name="description" content="Find the recently updated guide about Sniper class on Iruna stall ">
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
    <meta name="apple-mobile-web-app-title" content="Sniper Guide | Iruna Global Stall">
    <meta name='apple-mobile-web-app-capable' content='yes'>
    <meta name='apple-touch-fullscreen' content='yes'>
    <meta name='apple-touch-fullscreen' content='yes'>
    <meta name='application-name' content="Iruna Global Stall">
    <link rel="apple-touch-icon" href="https://irunastall.com/img/iruna.jpg">
    <meta name="twitter:card" content="summary" >
    <meta name="twitter:title" content="Sniper Guide | Iruna Global Stall" >
    <meta name="twitter:description" content="Find the recently updated guide about Sniper class on Iruna stall" >
    <meta property="og:title" content="Iruna Stall">
    <meta property="og:type" content="website" >
    <meta property="og:description" content="Find the recently updated guide about Sniper class on Iruna stall ">
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
                    <h4>Simple Sniper Guide</h4>
                    <hr>
                    <div>
                        <article>
<div>
<div align="center">
<div style="text-align: center;"><span style="font-family: 'comic sans ms';"><br /><span style="color: #e619b5; font-size: small;">This guide is still just from my own personal experience as a Sniper so please bear with me <img src="//storage.proboards.com/forum/images/smiley/tongue.png" alt=":P" /><br />Of course, with the experience gained and the help of all my friends and guildmates as well as all the info I've read here in forum and in <a href="http://iruna-online.wikiwiki.jp/" target="_blank" rel="nofollow noopener">Iruna JP Senki</a>. <a href="http://www.iruna-online.info/" target="_blank" rel="nofollow noopener">Iruna Online Info</a>&nbsp;is also a big help for this one.&nbsp;Corrections and opinions are still welcome, for the continuous update of this thread </span></span><img src="//storage.proboards.com/forum/images/smiley/smiley.png" alt=":)" /><span style="font-family: 'comic sans ms';"><span style="font-family: 'comic sans ms';"><br /><br /><br /></span></span>
<div><a style="display: none;">SPOILER: Click to show</a><span style="cursor: pointer;">So what is a Sniper and how to become one?</span></div>
<div data-tag="spoiler">Snipers is one of the two <strong>3rd tier profession/job</strong> that comes from the <strong>Hunter class</strong>, along with <strong>Assassin</strong>. We are the <strong>range/support type of class</strong> that uses <strong>bows</strong>, capable of <strong>dealing high amount of damage </strong>(Single target or Area of Effect)&nbsp;to enemies, can <strong>deal status ailments</strong> to targets and is able to <strong>cure a number of status</strong> as well.<br /><br />I can still proudly say that Sniper is one of the<strong> best DPS class </strong>in game, and now, we are the <strong>King and Queen of AOE</strong> :3<br />But we still used to be under the category of one of the <strong>hardest class</strong> to make. Squishy, low HP/MP, no heal (except for the new <strong>Restoration</strong> skill or by using <strong>Veltria</strong>), and still the class discrimination, and so on.<br /><br />This is not a <strong>newbie-friendly class</strong>. I wont also recommend even to experienced players because of the difficulty. Although its more easier to level a Sniper nowadays because of more contents and resources, compared to what we have before, still, lots of patience, hardwork and determination is what you needed in order to be a good Sniper :3<br /><br /><br /><strong><span style="color: #19e6de;">Apprentice Warrior</span></strong><br /><strong>Where:</strong> NPC Varuna at Fort Bailune<br /><strong>Condition:</strong><br />Lv 10+<br /><br /><strong><span style="color: #19e6de;">Warrior</span></strong><br /><strong>Where:</strong> NPC Varuna at Fort Bailune<br /><strong>Condition:</strong><br />Lv 20+<br />Apprentice Warrior<br /><span style="color: #19e6de;"><br /></span><strong><span style="color: #19e6de;">Apprentice Hunter</span><br /></strong><strong>Where:</strong> NPC Varuna at Fort Bailune<br /><strong>Condition: <br /></strong>Lv 50+<br />Warrior<br />Battle Mastery Skill must be Lv 3<br />Defense Skill must be Lv 3<br /><br /><strong><span style="color: #19e6de;">Hunter</span></strong><br /><strong>Where:</strong> NPC Varuna at Fort Bailune<br /><strong>Condition:</strong><br />Lv 70+<br />Apprentice Hunter<br /><br /><strong><span style="color: #19e6de;">Apprentice Sniper</span>&nbsp;</strong><br /><strong>Where:</strong> NPC Varuna at Fort Bailune<br /><strong>Condition:<br /></strong>Lv 120+<br />Arrow Rain Skill must be Lv 2<br />Venom Attack Skill must be Lv 2<br />Impetus Skill must be Lv 1<br /><br /><strong><span style="color: #19e6de;">Sniper</span></strong><br /><strong>Where:</strong> NPC Varuna at Fort Bailune<br /><strong>Condition:<br /></strong>Lv 140+<br /><br /><br /></div>
</div>
</div>
<hr style="text-align: center;" />
<div style="text-align: center;"><strong style="font-size: 10pt;"><span style="color: #ff0000; font-family: 'comic sans ms'; font-size: xx-large;">BUILD</span></strong></div>
<hr style="text-align: center;" />
<div style="text-align: center;"><span style="font-size: 10pt;"><span style="font-family: 'comic sans ms';">Just like the rest of the other classes, Snipers have different stats depending on your gameplay or how you want it to be or what equips you are using.</span></span></div>
<div style="text-align: center;"><strong style="font-size: 10pt;"><span style="color: #ff0000; font-family: 'comic sans ms'; font-size: large;"><u>ARROW RAIN &gt; AREA RAIN/CROSSFIRE BUILD</u></span></strong></div>
<div style="text-align: center;"><span style="font-family: 'comic sans ms';"><br /><br /><span style="font-family: 'comic sans ms';"><span style="font-size: 10pt;">The 1st one and the most common is the&nbsp;</span></span><span style="font-size: 10pt; color: #ff0000;"><strong><span style="font-size: medium;">DEX = STR = CRT</span></strong></span><span style="font-size: 10pt;"> build that focus primarily on getting the highest damage possible. They used normal bows and/or elemental bows and mostly depends on spamming their skills (Arrow Rain/Area Rain/Crossfire) to finished their enemies.</span></span></div>
<div style="text-align: center;"><span style="font-family: 'comic sans ms';"><span style="font-size: 10pt;"><br />Using any normal bows: </span><strong style="font-size: 10pt;">for every 1 STR or 1 DEX, you will get +2 ATK on stats.</strong></span></div>
<div style="text-align: center;"><span style="font-family: 'comic sans ms';"><span style="font-size: 10pt;">Quite known as the </span><strong style="font-size: 10pt;">Arrow Rain build if you are below Lv 260</strong><span style="font-size: 10pt;">, and/or the </span><strong style="font-size: 10pt;">AR/CF build for Lv 260 and above</strong><span style="font-size: 10pt;">. This build is also quite hard to level, and consumes a lots of HP/MP pots. Snipers below 260 are not very much welcome to leveling parties, so my advice is to build your own party if you cant find one.</span></span></div>
<div style="text-align: center;"><span style="font-family: 'comic sans ms';"><span style="font-size: 10pt;">Make sure to </span><strong style="font-size: 10pt;">max your DEX first</strong><span style="font-size: 10pt;">, as it gives ATK, HIT for accuracy and skill delay. I forgot how much skill delay it adds when your DEX is 256 ( maybe 1-2 seconds skill delay :3 ). </span><strong style="font-size: 10pt;">After DEX, max your STR followed by CRIT. </strong><span style="font-size: 10pt;">Upon </span><strong style="font-size: 10pt;">unlocking Apostolia</strong><span style="font-size: 10pt;">, just follow the same routine until you MAX all three of them, </span><strong style="font-size: 10pt;">DEX STR and CRIT</strong><span style="font-size: 10pt;">.</span></span></div>
<div style="text-align: center;"><span style="font-family: 'comic sans ms';"><span style="font-size: 10pt;">One very important thing to learn in able to increase your survival rate while leveling is the use of the term</span><span style="font-size: medium;"><span style="color: #ff2900;">"<strong>Kiting</strong>",&nbsp;</span></span><span style="font-size: 10pt;">or the shoot and run method, where you need to </span><strong style="font-size: 10pt;">distance yourself </strong><span style="font-size: 10pt;">from the target before using Arrow Rain, then </span><strong style="font-size: 10pt;">run back again</strong><span style="font-size: 10pt;"> before as your target moves towards to you, </span><strong style="font-size: 10pt;">until it dies</strong><span style="font-size: 10pt;">. The use of</span><strong style="font-size: 10pt;"><span style="color: #ff0000; font-size: medium;"> Freeze Skill </span></strong><span style="font-size: 10pt;">is very effective while doing so, as it lowers the speed and defense of the target when it became </span><strong style="font-size: 10pt;">under Frozen status</strong><span style="font-size: 10pt;">.</span></span></div>
<div style="text-align: center;"><span style="font-family: 'comic sans ms';"><br /><br /></span></div>
<div style="text-align: center;"><strong style="font-size: 10pt;"><span style="color: #ff0000; font-family: 'comic sans ms'; font-size: large;"><u>AUTO ATTACK/SPECIAL BOW BUILD</u></span></strong></div>
<div style="text-align: center;"><span style="font-family: 'comic sans ms';"><br /><br /></span></div>
<div style="text-align: center;"><span style="font-family: 'comic sans ms';"><span style="font-size: 10pt;">The second one is </span><strong style="font-size: 10pt;"><span style="font-size: medium;"><span style="color: #ff0000;">AGI = CRIT &gt; DEX/STR</span></span></strong><span style="font-size: 10pt;">build. This one focus on using auto attack or the normal attack, and the use of Fast Shot skill. They used Special Bow skills, and/or maybe elemental bows as well. (</span><strong style="font-size: 10pt;">I will let someone who plays using this build to discuss more about this as I'm not familiar or used on this build anymore <img src="//storage.proboards.com/forum/images/smiley/tongue.png" alt=":P" /></strong><span style="font-size: 10pt;">)</span></span></div>
<hr style="text-align: center;" />
<div style="text-align: center;"><strong style="font-size: 10pt;"><span style="font-size: large;">NOTE!!!</span></strong></div>
<div style="text-align: center;"><span style="font-size: 10pt;">You have the choice of adding some points on your </span><strong style="font-size: 10pt;">VIT</strong><span style="font-size: 10pt;"> as Snipers is a </span><strong style="font-size: 10pt;">very squishy class</strong><span style="font-size: 10pt;">. 20 or more VIT depending on you. You can also add points on AGI for more aspd and evasion (and also for the upcoming skills). Meanwhile, </span><strong style="font-size: 10pt;">never ever add</strong><strong style="font-size: 10pt;">points on your INT</strong><span style="font-size: 10pt;"> because as for me, its useless and </span><strong style="font-size: 10pt;">a waste of status points</strong><span style="font-size: 10pt;">. You only got +4 MP for every 1 INT added, by which if you think MP is a problem, then just use more MP pots to quickly replenish it. And also,</span><strong style="font-size: 10pt;"> never ever add points on INT or on VIT because you will get -1 ATK for every INT or VIT if you are using Special Bows!!!&nbsp;</strong></div>
<div style="text-align: center;"><hr /><br /><br /></div>
<hr style="text-align: center;" />
<div style="text-align: center;"><span style="font-family: 'comic sans ms';"><strong><span style="color: #ff2900; font-size: xx-large;">LEVELING</span></strong><br /></span><hr /><span style="font-family: 'comic sans ms';"><br /><br />As I mentioned above, leveling a Sniper is really really hard regardless of which build you made. But that is before when there is still no Megaroches or High Ents. Naga quest is the best exp quest back then, I leveled my sniper there from 120 up to 180+. <br />But newer players dont even know who or where it is <img src="//storage.proboards.com/forum/images/smiley/tongue.png" alt=":P" /><br /><br />Leveling up to 260+ nowadays can be done in a day or two, by finishing all the main quests, but I won&rsquo;t really do it I where you, but it&rsquo;s your choice. You can be a level 260+ within a week, but you can&rsquo;t call yourself strong enough, coz you might don&rsquo;t even know much about the game yet, so I suggest, just take it slow, take your time to enjoy the game, explore the Iruna world, and make friends. :3<br /><br />At lvl 240, now that we have our very own AOE skills &lt;3 , Area Rain + Crossfire combo, leveling from here to cap is much less harder than before :3 Just go to Pilaneza City, take the dirty gear Quest from the Merchant NPC, then go to Xelytis map and kill Nommars. They are slow compare to megas, so we can spam them with AOE skills while Kiting of course.&nbsp;<br /><br />I won&rsquo;t detailed much how to level up your character, there is a lot of threads here in forum about grinding/leveling so better check them out.<br /><br /><br /><br />As for the best grind spot? Just find a certain mobs that you can easily kill and that gives decent exp over time. And as for me, these is where I leveled before :3 <br /><br />1. <strong>Tarante near Elban City</strong> is a good spot. Be sure that you are of the same level as Tarante, Lvl 149 or else, you will die in an instant as those spiders are aggressive. <br />Recommended Level: 150+ <br /><br />2. <strong>Megaroche at Drafbourg City</strong>&nbsp;&ndash; everybody knows them, and everybody is welcome here.  <br />Recommended Level: 140+ <br /><br />3. <strong>Neknotts/High Ents/Ugly Mantis</strong> &ndash; they are good exp mobs but can still kill you in 1-2 hits. If your AR damage is 20K+ on them, and you can kill them in 1 hit, you are good to go here. Except the High Ents, on which, if you can find a party here, much better. <br />Recommended Level: 180+ up to 240 <br /><br />4. <strong>Nommars near Pilaneza city,</strong> Once you have your Crossfire, killing Nommars within a few seconds is easy (need proper CF set). So can solo them faster than most pt's there. They have more or less 330k HP and gives 250k+ exp solo on non tickets, and make sure to save the Dirty Gears they drop as uncommon for an additional EXP quest in Pilaneza City merchant. Nommars are Fire Element mobs, so better be using Water Elemental Bow like Icicle Bow for maximum damage <br />Recommended Level: 240+ <br /><br />5. <strong>Baum Warriors at Sateria City</strong>. The new leveling spot mostly for AOE parties. Getting a pt is still hard, they can be taken solo if well equip, but with pt is the best here. Baum Warriors are Earth elements, so Hellfire Bow, which is a Fire element, is much better to use here. <br />Recommended Level: 240+ <br /><br />6. <strong>Yarde near Underground Bailune City</strong>. It is a Light Elemental mobs with more or less 820k HP and gives 325k exp for non tickets users like me. Use Dark elemental bows like Centipede II or Dragon Paler for more damage. Its very hard to solo because of its long range attack. Kiting isnt good either, so the best way to level here is to form a PT. <br />Recommended Level: 240+ <br /><br />7. <strong>Third Eyes near Maios Village</strong> is the most recent exp mobs. AOE parties is still the best party here, and Snipers are welcome here, but of course, finding a good pt takes time. They are Neutral element mobs so make sure to use Amaterasu or Plandra bows to your advantage. They have more HP than Yarde, melee attackers who also walks fast so forget about soloing because its much faster with a pt. Still you can solo them with the use of Freeze Arrow + Kiting :3<br />Recommended Level: 260+<br /><br />Also, there are<strong> more new mobs in some new maps</strong> that also <strong>gives decent EXP over time</strong>, just like the Shadow Archer in Trial Hall, near Kreya City. You just need to explore things, grind new mobs for a change, as long as you can kill them easily before they kill you <br /><br />Make sure you <strong>carry a few stacks of HP/MP pots always</strong>. As you always depend on MP for the skills. <br /><br /><strong>Chipped mage ore</strong>, an uncommon drop from Lukochiro, map before Drafbourg City, gives MP for a certain period of time. <br /><strong><br />Cursed evil eyes</strong>, drops from Medusa, gives 1kmp and a stun <img src="//storage.proboards.com/forum/images/smiley/tongue.png" alt=":P" /> well its really useful, the stun is only for 3-4 secs. <br /><br /><strong>Salt </strong>are pretty much easy to get nowadays, you can buy them at 80k per stack or just farm them in Mt. Ochikubo, near Kakuela City. <br /><br /></span></div>
<div style="text-align: center;"><span style="font-family: 'comic sans ms';">Even <strong>Remagic L/XL </strong>are common nowadays its easier to acquire them. And there are alot more options for MP pots that comes from Production cooking such as<strong> Yogurt (HP/MP +500)</strong> and <strong>Scrambled Eggs (1500MP)</strong></span><br /><br /><br /></div>
</div>
</article>
                        <hr>
                        <p>Author: <a href="http://irunaonline.boards.net/user/113">jahleel07</a></p>
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
