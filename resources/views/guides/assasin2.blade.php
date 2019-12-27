<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title> Damage Backstab Assassin Full Stat Guide | Iruna Global Stall</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow" >
    <meta name="description" content="Find the recently updated guide about Assassin class on Iruna stall">
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
    <meta name="apple-mobile-web-app-title" content="Guide Assassin | Iruna Global Stall">
    <meta name='apple-mobile-web-app-capable' content='yes'>
    <meta name='apple-touch-fullscreen' content='yes'>
    <meta name='apple-touch-fullscreen' content='yes'>
    <meta name='application-name' content="Iruna Global Stall">
    <link rel="apple-touch-icon" href="https://irunastall.com/img/iruna.jpg">
    <meta name="twitter:card" content="summary" >
    <meta name="twitter:title" content="Guide Asssassin | Iruna Global Stall" >
    <meta name="twitter:description" content="Find the recently updated guide about Assassin class on Iruna stall" >
    <meta property="og:title" content="Iruna Stall">
    <meta property="og:type" content="website" >
    <meta property="og:description" content="Find the recently updated guide about Assassin class on Iruna stall">
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
                    <h4>Damage Backstab Assassin Full Stat Guide</h4>
                    <hr>
                    <div>
                        <article>
<div>
<div style="text-align: center;">
<span style="font-size: medium;"><span style="text-align: left;">This is a guide of the information I know and have learned from others about the details of the normal 6 stats of the Backstab Assassin. Everything in this guide assumes that you are a full assassin, know how to backstab, knows the basics of Apostolia, and use a Throwing Weapon. </span></span></div>
<br /><span style="color: #af0000;"><span style="font-size: large;">Pros and Cons of a Backstab Assassin</span></span><br /><span style="font-size: medium;"><span style="color: #23bb35;">Pros! </span><br />Very High Damage <br />Very Fast Damage <br />Semi-alright Evasion <br />Super Ultra Mega Fast Sick Boss Farms <br />One of, if not THE best dps in Iruna </span><br /><span style="color: #9e2525; font-size: medium;"><br />Cons!</span><span style="font-size: medium;"><br />Very Low HP and MP <br />Slow regular mob farm <br />Very expensive </span><br /><br />Sources: The general consensus of the Assassin community and my personal experience.<br /><span style="color: #af0000;"><br /><span style="font-size: large;">What a Backstab Assassin Really Is</span></span><span style="font-size: medium;"><br />A guild member said I should put a personal touch into this guide, so I shall. Basically, we are the damage class that cannot tank. In my opinion, a backstab assassin is in its own league of difficulty. It takes a bit of aim to gauge if your angle to the rear end of your enemy is within the backstab range. It also takes a bit of timing skill to hit mobs that constantly shift around at different intervals. It takes even more timing and positioning skill when the enemy is aggressively facing you, and not dead, making you run around it before its next attack. It gets even harder when you realize that all ninjas like to call themselves tanks, but they can&rsquo;t hold aggro, so you eventually learn to hit mobs while they are turning in circles between your party members. Thanks, every grind spot party ever. You die a lot, cry a lot, and half of Iruna thinks you&rsquo;re just the old version of ninjas ever since they got Silent Kill while the other half thinks you&rsquo;re super over powered. This is usually what I do. If you want a full description of anyone else&rsquo;s experience with a backstab assassin, go ask someone else. </span><br /><br />Source: Me. <br /><br /><span style="color: #af0000;"><span style="font-size: large;">Basic Stats and Parameters</span></span><br /><span style="font-size: medium;">ATK depends on the equipped weapon type and the amount of STR, INT, and DEX. For example, STR is +3 ATK when equipped with a sword. Throwing weapons are neither bows, rods, nor swords. Parameters still have the same effect for Deathblow users, but the build requires a whole nother guide. Nail or Claw users should find a different guide to begin with. </span><br /><br /><span style="font-size: medium;">1 STR: +2 ATK<br />1 INT: +2 ATK, +4 MaxMP, +4 MATK, +3 MDEF<br />1 VIT: +111 MaxHP, +1.5 DEF, +0.25 MDEF, - 1 Poison Dmg<br />1 AGI: + 1 EVA, +1.8 ASPD<br />1 DEX: +1 ATK, +0.5 MATK, +1 HIT, +0.8 CSPD, -0.025 sec Skill Delay (20 DEX = -0.5 sec Skill Delay)<br />1 CRT: +0.1% Critical Rate beyond base of 5%. </span><br /><br /><span style="color: #af0000;"><span style="font-size: large;">Extra Stats of the Assassin Skills</span></span><br /><span style="font-size: medium;">These are not based on the skills given during the Assassin class change, but all relevant skills of a backstab assassin. I did not include the location and character level for all the skill quests, but there are already multiple pages on the topic. This guide isn&rsquo;t about your skills, so if you want full details on those quests, look elsewhere.</span><span style="font-size: large;"><br /></span><br /><span style="font-size: medium;">Assassin Class Stats:<br /> Given passively at the change to become an Assassin.<br /> +? STR/+4 INT/+4 VIT/+12 AGI/+10 DEX/+14 CRT<br /><br /><span style="color: #000aff;">Actives:</span><br />Evasion</span><br /><span style="font-size: large;"> Lv 3: 5 min/+32 AGI/96 MP</span><br /><span style="font-size: large;"> Lv 4: 6 min/+40 AGI/120 MP</span><br /><span style="font-size: large;"> Lv 5: 7 min/+48 AGI/144 MP</span><br /><br /><span style="font-size: medium;">Invisible<br /> Lv 1: 5 min/Hate growth rate -5%/Evasion +10%/48 MP<br /> Lv 2: 6 min/Hate growth rate -8%/Evasion +15%/72 MP<br /> Lv 3: 7 min/Hate growth rate -5%/Evasion +20%/96 MP<br /> Lv 4: 8 min/Hate growth rate -?/Evasion +?/? MP</span><span style="font-size: medium;"><br /><br />Darkness <br /> Lv 1: 5 min/1.5x dmg to Light ele, 1.2x to all other ele besides Dark/88 MP<br /><br />Backstab</span><br /><span style="font-size: medium;">Lv 1: 3.5x Dmg from behind/100 MP<br /> Lv 2: 5.5x Dmg from behind/140 MP<br /><br />Execute<br />Lv 1: 5 min/Critical Damage +5%/CRT +10/48 MP<br /> Lv 2: 6 min/Critical Damage +7%/CRT +20/60 MP</span><br /><br /><span style="font-size: medium;">Deathblow: <br />Lv 1: Damage up by current MP pool/10 sec buff of double eva/All MP<br />Lv 2: 1.2x the Lv 1 damage/10 sec buff of double eva/All MP</span><br /><br /><span style="font-size: medium;">Shadow Walk:<br /> Lv 1: 30 sec/Doubles eva<br /> Lv 2: 60 sec/Doubles eva<br /> Lv 3: 90 sec/Doubles eva</span><br /><br /><span style="font-size: medium;">Hawkeye:<br /> Lv 2: 4 min/+15 DEX/+15% Critical Damage/96 MP</span><br /><br /><span style="font-size: medium;">Serum<br /> Poison nullifying buff<br /> Lv 2: 4 min/48 MP<br /></span><br /><span style="font-size: medium;">Impetus<br /> Lv 1: 3 min/112 MP<br /><br />Protection<br /> Lv 2: 4 min/+30 DEF/30 MP<br /><br /><span style="color: #20a5b8;">Passives:</span><br />Bow Mastery:<br /> Lv 1: +25 ATK/+2 Bow Range<br /> Lv 2: +? ATK/+3 Bow Range<br /><br />Survival:<br /> Lv 1: +10 natural HP Recovery/+10 natural MP Recovery<br /><br />Double Attack<br /> Lv 3: 1.6x normal dmg<br /><br />Battle Mastery<br /> Lv 3: +20 ATK<br /><br />Defense<br /> Lv 3: +9 Defense<br /><br />Throw Mastery:<br /> Lv1: +?ATK/+1 Range<br /> Lv2: +?ATK/+2 Range<br /> Lv3: +?ATK/+? Range<br /><br />Illusion <br /> Lv2: Chance of evading magic attacks by INT<br /> Lv3: Better Chance of evading magic attacks by INT<br /><br />Skia<br /> Counterattack damage is = Critical Damage<br /> Lv1: Chance of a counterattack when evading<br /> Lv2: Better Chance of a counterattack when evading<br /><br />Sicarius<br /> Lv1: Extra 2-3x damage with backstab if enemy HP is 95% or above. Sicarius ALWAYS activates with 2-3x damage once you have it. <br /> Stun requirements: 75 STR and 150 INT (225 total) OR a total of 307 INT and STR combined with one or the other not reaching their requirement. <br /> Stun chances: 5-10% on regular mobs. 100% on bosses IF stun requirements are met, and character level is equal to or greater than boss level. 60% on bosses IF stun requirements are met, and character level is less than boss level. <br /><br />Job Mastery<br /> Lv1: Proof that you&rsquo;re an official assassin at level 280. Increase in status. <br /></span><br /><span style="color: #af0000;"><span style="font-size: large;">The Base of Damage (INT and STR)</span></span><span style="font-size: medium;"><br />256 is the regular max for stats, and 173 is the current cap for apostolia stats. <br /><br />INT:<br />Max INT adds about 512 ATK, 1024 MP, and 768 MDEF. <br />Overcapped INT is maxed at 429 stat points, giving a total 858 ATK, 1716 MP, and 1287 MDEF. <br />INT gives high defense against magical mobs, the base mp pool for our skills, and more than half of our base damage. STR may seem more important, but we use throwing weapons and a variety of skills and buffs, many of which are INT based. Try to always max INT first, and definitely by 140. <br />Priority: Highest - 1st Stat<br /><br />STR:<br />Max STR adds about 512 ATK. <br />Overcapped STR gives a total 858 ATK at max. <br />STR is worth less than INT, but is the only other stats that equals INT in ATK. Overcap STR with any extra stat points that do not fit INT or CRT. STR should reach 300+ in the end, but will never reach 429 due to the limit of stat points. <br /><br />Priority: Medium - 3rd/4th Stat<br /></span><br /><span style="color: #af0000; font-size: large;">The Multiplier of Damage (CRT)</span><br /><span style="font-size: medium;">CRT:<br />CRT is critical damage and critical rate. Critical rate affects our rate of double backstab, and critical damage raises our backstab damage, as well as our counter on evasion damage. <br />Max CRT gives a 33% critical rate for double backstab, our version of a critical attack, meaning that all of our backstabs will have a 33% to do double backstab damage. For example, if you hit 15k usually, a double backstab with make a flash across the map and you will hit 30k. Critical rate (for regular attacks!) is 95% at the most, and lineally raises for regular attacks and spell burst, meaning that 256 CRT gives 95% critical rate for everybody else besides us. We get 33% at 256 CRT. I once said something about raising some double backstab rate. Well I was probably wrong. Nobody read that. Anyway, hit that 33% and then add CRT for damage.&nbsp;<br />Priority: High - 2nd Stat<br /></span><br /><span style="color: #af0000; font-size: large;">The Speed of Damage (DEX)</span><br /><span style="font-size: medium;">DEX:</span><br /><span style="font-size: medium;">DEX is CSPD and Skill Delay, a tiny bit of ATK and MATK. Cast speed is not important, since all of our skills are insta-cast. Backstab has about 6 seconds of skill delay. The lowest delay time for any skill is 1 sec, just enough time for the bar to flash by. Every 20 DEX is -0.5 seconds of Delay. If I said anything about Hawkeye adding DEX and being an assassin giving enough DEX to -0.5 seconds of skill delay, I got corrected. I swore they did. But I guess not.&nbsp;<br /><br /></span><span style="font-size: medium;">Calculate your needed DEX by subtracting the total -SD on your final ideal gear set (you&rsquo;re building for the end-game.) from 5.0, with 1 sec delay the lowest any SD goes. Divide the remaining SD by 0.5 to find the amount of delay chunks; each chunk is 0.5 seconds of skill delay. Multiply the number of chunks by 20 to find the total DEX you need to cover your remaining SD. <br /><br />From what everybody has been saying, 245 DEX is what we should need without gear. (And without a Cheltil. I forget I have that on.) So if you're super paranoid, you can always just subtract from 245 DEX. Better safe than sorry.&nbsp;</span><br /><span style="font-size: medium;">(Skill Delay does not actually come in chunks. It&rsquo;s just easier to calculate approximately how much DEX you need this way.)</span><br /><span style="font-size: medium;">Priority: Low - 3rd/4th Stat</span><br /><span style="color: #af0000;"><br /><span style="font-size: large;">Other Semi-Useful Stats</span></span><br /><span style="font-size: medium;">AGI:<br />Adds Eva and Attack Speed. AGI is good for an auto-attack build, or for better evasion. Each Eva is added with a small percentage of itself dependent of Invisible level. If you have Invisible 3 and 100 Eva, you actually have 120 Eva by buffing it. Shadow Walk doubles your current Eva, and Death Blow has an effect which nearly doubles that. AGI is not the most popular because assassins at max levels survive fine at 900+ Eva without it.&nbsp;</span><br /><span style="font-size: medium;"><br />VIT: <br />Nobody really uses this. We naturally have Eva, so at least AGI seems logical. Nothing we have gives us VIT based boosts in status or gear. Even at full VIT we don&rsquo;t make a mediocre tank. Just get some Light Green Eggs if you die too much. Not that they keep your buffs or anything, but hey, poison damage is still damage amiright.</span><br /><br /><span style="font-size: medium;">A wonderful Flarius thread about builds with AGI<br /><a href="http://irunaonline.boards.net/thread/951/backstab-assassin" target="_blank" rel="noopener norewrite">irunaonline.boards.net/thread/951/backstab-assassin</a><br /></span><br /><span style="color: #af0000; font-size: large;">TL;DR</span><br style="font-size: 13.3333px;" /><span style="font-size: medium;"><br />Max INT<br />Max CRT<br />145 DEX<br />Rest into STR<br /></span><br /><span style="font-size: medium;">Most of this is my own experience and knowledge from talking to other assassins in the game. In my opinion, I have been one for too long. Then again, no such thing as being an assassin for too long. The ? is the stuff I didn&rsquo;t know, looked online, and still could not find. Do tell me if you have found info on some of those details. I&rsquo;m not too familiar with the Deathblow build, nor do I think its dps is half as good as Backstab. (I'm wrong by the way, like I usually am.)<br /><br />I think a poison set would be epic. The damage has been changed to now be capped at 100K, from the original 30K. (Thanks Kefkarot for pointing that out.) Good thing no other sins noticed since we rarely use it. Poison worked well for me during MQ when I was solely doing quests and not buying good gears. It&rsquo;s pretty much the assassin version of hit-and-run kiting. I do have venom fist, and I only use it when I can&rsquo;t backstab, like when a yarde is stuck in the stupid hill where the leeches stand.&nbsp;</span><span style="font-size: medium;"><br /><br />Link to a Youtube Video of iKelly (NOT ME! Video credits go to the video&rsquo;s creator!) with a Deathblow build. I don't even know this person, but they are cool:<br /><br /><a href="https://www.youtube.com/watch?v=YMsDqCbU40Q&nbsp;" target="_blank" rel="nofollow noopener">www.youtube.com/watch?v=YMsDqCbU40Q&nbsp;</a><br /><br />Tell me if there was anything I missed or made errors on. I didn't go into Apostolia special stats because this was meant to be a full Backstab only Stats reference for new Sins who don't know their way around, and old sins who want to try different combinations. Thanks for reading!&nbsp;(づ￣ &sup3;￣)づ Yes yes, everybody knows this lame old info already, but at least you can find this lame old info on the front page of the assassin threads now.&nbsp;<br /></span></div>
</article>
                        <hr>
                        <p>Author: <a href="http://irunaonline.boards.net/user/8320">Ravitox</a></p>
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
