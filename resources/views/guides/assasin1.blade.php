<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title> Complete Assassin Skill Database | Iruna Global Stall</title>
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
    <meta name="apple-mobile-web-app-title" content="Guide Ninja | Iruna Global Stall">
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
                    <h4>Complete Assassin Skill Database</h4>
                    <hr>
                    <div>
                        <article>
<div><span style="color: #e6c719;"><span style="font-size: large;">Introduction</span></span><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler"><br />Why should you make an assassin?<br /><br />Here's a gif showing an assassin soloing iruna's anniversary team g: hard bosses - under 20 seconds.<br /><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler"><img style="max-width: 100%;" src="https://i.imgur.com/w8KgKbO.gif" /></div>
<br /><span style="font-size: medium;">Not very impressed? What if I told you *<em>puts on matrix-sunglasses</em>* that <span style="color: #ee0909;">he is using </span><strong><span style="color: #b619e6;">full NS equips</span></strong><span style="color: #ee0909;">, with </span><strong><span style="color: #1979e6;">NO apos crystas</span></strong><span style="color: #ee0909;"> and </span><strong><span style="color: #1add3e;">NO relic crystas</span></strong>?</span><br /><br />You'll be the judge!<br /><br />
<div>
<div><strong>Weapon</strong>: Uroboros II+9 NS<br /><strong>Armor</strong>: B.o.o non-upped NS<br /><strong>Addgear</strong>: Monty beret non-upped NS<br /><strong>Spec</strong>: D.s.s NS</div>
</div>
<br />If you have an assassin, you'll be making a ton of money farming TGH - what can you get over there? Vatendeth AL, Halios AL, dunk II crysta!<br /><br />....Yeah, I can see you drooling already. Read on!</div>
<br /><br /><span style="font-size: large;">Version Control</span><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler"><br />18-Mar-2019: Added guide.<br />20-Mar-2019: Completed guide with skills desc updated till 340.<br />03-May-2019: Coupla refining here n' there<br />09-Aug-2019: Added in brainwashing gif mechanism @ Introduction page<br />10-Oct-2019: Updated some skill descriptions to the more detailed infodesc as shown in-game when you prompt the npc for more information about it; as well as some skill quests npc corrections<br />06-Nov-2019: Updated some skills, Venomous Dance/Shadow Mist/Sicarius/Deathblow. Added throwing weapons recommendations</div>
<br /><br /><span style="font-size: large;"><span style="font-family: 'comic sans ms';">Description</span></span><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler"><br />Assassins are renowned for being a fragile, but heavy-hitting DPS that has high evasion for their survivability. <br /><br />After the massive game rebalancing, their magic evasion are greatly nerfed - making them more fragile. Nevertheless, they still provide strong solid damage support in parties.</div>
<br /><br /><span style="font-size: large;"><span style="font-family: 'comic sans ms';">Stat Build</span></span><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler"><br /><u>The Meta Build - Pure DPS</u><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler"><br />Int=Crt=Str; Rest of stats either into APOS (RD/GD) or Dex<br /><br />This build shines as it builds onto the empire of what assassins are famed for - their DPS. As we move onto Episode 6 territories, bosses have higher and higher HP and Resistance that greatly drop farm time in parties. Some bosses like Joshuca even requires a 2 DPS 1 tank 1 heal set-up in order to farm quickly.<br /><br />Due to their skills giving assassins high evasion, there may not be a need for assassins to add agi at all. This pure damage build however, makes assassins fragile, hence a piece of equipment like e.g. Sieger plate is necessary for them to get enough hp to sustain the occasional AOE attack made by bosses.</div>
<br /><br /><u>The Solo Build - Mix of Survival and DPS</u><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler"><br />Although this has a much lower DPS output than the damage build, the player's survivability strengthens with this build. Furthermore, the new array of Lv340 skills seem to lend support to this build somewhat well.<br /><br />To sum up, with irunaEN becoming more and more of a "solo" RPG these days, this build seems to become more attractive esp when you keep dying to bosses.<br /><br /><u>Stat build:</u><br /><br />INT: <strong>MAX</strong><br />CRT: <strong>MAX</strong><br />STR: <strong>75</strong><br />AGI: <strong>256</strong><br />VIT: Rest (should be around <strong>278</strong> @ Lv375 with all apos stats capped @ Lv187)<br /><br />Int and Crt are the fundamentals to be maxed for an assassin. Int is to provide more DMG and MP for an assassin to utilize his skills, with CRT pushing the DMG-multiplier up for his skills damage (increase in critical damage of skills greatly)<br /><br />Str is placed at minimally 75 to allow sicarius to proc.<br /><br />Agi is capped at 256 primarily because of the mechanics of how evasion works. We all know that evasion caps out at 95% dodge rate. But that only applies when your agi is minimally at 256. If your agi is 1, your evasion cap would be at 80%. Estimated evasion with 256 agi, along with full assassin evasion buffs, should be around 2.1~2.2k (can dodge almost any boss in irunaEN)<br /><br />VIT is added - occasionally, a boss may inflict critical, magical damage that you cannot dodge. (Nerfed illusion, yep) Or perhaps the rare 5% failed evasion dodge rate, yeetz. This serves as a vanguard to protect you from death.<br /><br />The issue with this mainly is the damage factor - the stun / assault time from sicarius may not be 10s due to inadequate str (of course, you can balance this out with lesser vit and higher str...adjusting until it hits the 10s then stopping), but what you're seeking for in this build is survivability rather than DPS.<br /><br />For more extra information you would like to get about this, please refer to Flarius's thread listed in the 'Others' section. [Lone Wolf Assassin Guide]</div>
</div>
<br /><br /><span style="font-size: large;"><span style="font-family: 'comic sans ms';">Equipments</span></span><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler"><br /><u>Essential gear for sins:</u><br />Post 1: <a href="http://irunaonline.boards.net/post/249483" target="_blank" rel="noopener norewrite">irunaonline.boards.net/post/249483</a><br />Post 2: <a href="http://irunaonline.boards.net/post/249505" target="_blank" rel="noopener norewrite">irunaonline.boards.net/post/249505</a><br /><br />TLDR: For Fire/Water/Earth/Wind elements, you can either use (1) Wicktrace or (2) the 4 elemental Mirror Throws. For Light/Dark the best currently is Uroboros2.<br /><br /><u>Resistance gear for sins:</u><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler"><br />Weapon - Mirror throw SRE / Sauro 2 - 10% Phy and Mag resistance, 10% Rate cut<br />Armor - Bellow of Order / Inilba - 23% Phy and Mag resistance<br />Addgr - Sieger Plate / Inilba - 20% Phy and Mag resistance<br />Spec - Specia Blessed Stone / 2 Inilba - 20% Phy res and Mag resistance<br /><br />A mirror throw SRE is generally the best resist throw that you can get, having various bonuses so difficult to find on other throws that benefit your survival greatly. Put in a Sauro2 in it - the +15% ATK is tempting, but don't forget bout the bonus +20% HP and MP you'd get from it too.<br /><br />No question about which is the best resistance armor - BOO with inilba is always occupying that throne.<br /><br />Additional gear is a little trickier - you could get a Lucioscudo, but it's difficult to obtain on a new assassin, plus it reduces your melee damage badly.<br /><br />The next best tradable item would be a sieger plate - it provides imperative HP and Resistance boosts which greatly increases an assassin's survivability. Not to mention that it has a high base defense stat as well! FYI: A Wolf pup chapeau is on par with a sieger - it nearly provides the same stats - you can look into it too if you want to try something as good as it! Note: If you require SD badly, you can substitute sieger with Monty: it has -SD and Phy/Magic Res which can help you out! (Not to mention +ATK% and ATK up by Dex bonus)<br /><br />Update: there are some additions of various equips that possess effects as great as Lucioscudo. To see more about this, see the link: <a href="http://irunaonline.boards.net/post/252022" target="_blank" rel="noopener norewrite">irunaonline.boards.net/post/252022</a><br /><br />SBS is the only 2S Spec we'll all get upon entering ep6 - it's crucial for assassins to obtain in order to hit cap resistance.<br /><br /><strong>The total sum of resistance on the equips above is: 73% Phy res, 73% Mag res, 10% Rate cut.</strong><br /><br /><u>Abilities</u><br />A focus on rate cut here will help greatly in bosses - most of them after ep 4 have hp reduction % attacks.<br /><br />Lv5 + Lv4 + Lv3 + Lv2 = 56% RC<br /><br />P/N: No info on how to obtain Lv1 RC on throwing - go ahead with QC/QU on throwing instead!<br /><br />Total resistance accumulated thus far: 73% Phy/Mag resist, 66% RC.<br /><br /><u>AL Crysta:</u><br /><br />The goal of these would be to build onto the resistance attained by your equips, capping em out to ensure you can outlive anything.<br /><br />Leviam - (10% Magic resist)<br />Vatendeth - (10% Physical and Magic resist)<br />Irai - (10% Physical resist)<br />Vulschem - (10% Rate cut)<br />Malti - (10% Rate cut)<br /><br />The first thing you would have noticed when looking at the AL listed may probably be: where's Shelk?<br /><br />Shelk AL is famous for his AGI+5, <em>+15% evasion</em>, +5% abs and mag evasion and counter dodge +5% listing - but normally people go for it because they needed more evasion. With your total evasion peaking 2.1k, I feel these are redundant in exchange for more necessity items such as rate cut for an assassin. Hence opting in RC ALs instead.<br /><br />
<div>
<div><strong><em>Did you know?</em></strong><br /><br />Maxing out GR stats (100) gives you 180 evasion! This amount is pure evasion added to your base - it can be multiplied further with evasion% equips!</div>
</div>
<br /><br /><strong>Resistance accumulated so far: 93% Phy res, 93% Mag res, 86% Rate cut</strong><br /><br /><u>There are several improvements to this you can build on if you have the time and spina, such as:</u><br />- SR to get 95 def, thus being able to remove out inilba to add in Wizard, saving some slots to customize more <strong>Item Delay</strong> into the gearset/AL<br />- swapping in gashadororo for more RC into Addgr, swapping out irai/leviam for more QC/Item Delay AL<br />- your goal should be 95% Phy/Magic resist and 95% Rate cut, along with 1s BS/ item delay intervals.<br />- <strong>Note that I did not include much SD into this build at all</strong>, so if you must have SD to spam BS, you would need some QC / Cheltil / Maelriel and so on. You can even drop some points in VIT/CRT to put into dex to help you get the 1s bs agenda.</div>
<br />For more extra information on BS gears or AGI type solo gear, please refer to Ravitox's (BS) or Flarius's (AGI-type auto) thread listed in the 'Others' section for equipment recommendations.</div>
<br /><br /><span style="font-size: large;"><span style="font-family: 'comic sans ms';">Skills</span></span><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler"><br />In this repository, I'm only listing the skills you get as an apprentice assassin and assassin.<br /><br /><strong>Backstab</strong><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler"><img style="max-width: 100%;" src="https://i.ibb.co/sVG3bfH/backstab.png" /><br />
<div>
<div>A punishing surprise attack. Use it on a rear-facing enemy for several times more damage.</div>
</div>
<br />SLv1 MP100: (Lv140) Obtained during Full Assassin class change<br />SLv2 MP140: (Lv160) Quest @ King Elban<br /><br /><span style="font-family: georgia;">Backstab teleporting in action</span><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler"><img style="max-width: 100%;" src="https://media.giphy.com/media/5WhcEgz9iWrqzHCGrO/giphy.gif" /></div>
<br />P/N: The critical damage dealt for SLv1: Enemy's back - 3.5x, Enemy's side - 1.8x, Enemy's front - 0.5x<br /><br />P/N2: The critical damage dealt for SLv2: Enemy's back - 6x, Enemy's side - 2.3x, Enemy's front - 0.5x<br /><br />P/N3: Sometimes, a white flash will appear on the screen with your damage being x2. This is being referred to as a 'double' BS. The rate of this happening depends on your CRT stat. 256 CRT will give a 33% chance of it occurring.<br /><br />P/N4: After the rebalance, whenever there is ample enough space behind the enemy, backstab will insta-teleport you to the enemy's back.<br /><br />P/N5: For queries about skill delay for backstab, please check out other threads listed in the 'Others' section below.<br /><br />P/N6: Skilled players are able to 'abuse' this auto-teleporting feature by making the boss constantly '<em>run after you</em>' as you bs-teleport here and there. ※doesn't work for bosses that deal ranged attacks, or in small restricted party fields such as ignatz/GK/ouvel</div>
<br /><br /><strong>Darkness</strong><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler"><img style="max-width: 100%;" src="https://i.ibb.co/vBLRTyh/darkness.png" /><br />
<div>
<div>Adds dark power to attacks, raising ATK against light element.</div>
</div>
<br />SLv1 MP88: (Lv120) Obtained during Apprentice Assassin class change (5 mins)<br /><br />P/N: A single-target type casting buff, usable on any targets.<br /><br />P/N2: Damage increase is 1.5x to Assassin classes, 1.2x to other classes<br /><br />P/N3: Buff displayed is [Dark Element]</div>
<br /><br /><strong>Throw Mastery</strong><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler">
<div>
<div>(Passive) Boosts ATK and range when wielding throwing weapons.</div>
</div>
<br />SLv1: (Lv120) Obtained during Apprentice Assassin class change (Atk+?, Throwing Range +1)<br />SLv2: (Lv140) Obtained during Full Assassin class change (Further Atk+?, Throwing Range +2)<br />SLv3: (Lv260) Obtained via Item usage [How to Throw 3], Kreya City, Sitara (Further Atk+50, Throwing Range +?)<br /><br />P/N: This skill is useful mainly to increase your throwing distance (aka: BS skill usage distance from enemy, not so near the bosses to avoid some of their ranged att!)</div>
<br /><br /><strong>Illusion</strong><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler">
<div>
<div>(Passive) Chance of evading magic attacks from foes.</div>
</div>
<br />SLv1: (Lv120) Obtained during Apprentice Assassin class change<br />SLv2: (Lv140) Obtained during Full Assassin class change<br />SLv3: (Lv220) Quest @ Drafbourg: Immigrant Ward, Matif<br /><br />P/N: After obtaining Illusion 3, Skia will passively proc on all evaded magic attacks as well.<br /><br />P/N2: The rebalance nerfed Illusion's proc rate - it used to increase based on the amount of INT and AGI that you have. Now, it's being set to a fixed amount - the estimated rate should be 40-50% (? need more confirmation)</div>
<br /><br /><strong>Invisible</strong><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler"><img style="max-width: 100%;" src="https://i.ibb.co/jkB9Gtk/invisible.png" /><br />
<div>
<div>Become unlikely to be attacked. Reduce a target's hate up rate. Increase the evasion rate.</div>
</div>
<br />SLv1 MP48: (Lv120) Obtained during Apprentice Assassin class change (Hate increase -5%, AVD +10%, 5 mins)<br />SLv2 MP72: (Lv200) Obtained via Item usage [How to Hide 2], Drafbourg: Immigrant Ward, Matif (Hate increase -8%, AVD +15%, 6 mins)<br />SLV3 MP96: (Lv260) Obtained via Item usage [How to Hide 3], Kreya City, Sitara (Hate increase -?%, AVD +20%, 7 mins)<br />SLv4 MP120: (Lv300) Quest @ King Eldan (Hate increase -?%, AVD +25%, 8 mins)<br /><br />P/N: This skill gives a buff called [Hate], and is quite essential in boss runs where you can decrease hate levels of support members. It can be even used to remove bosses' [Hate] debuffs. This skill can be very nifty in lengthy boss runs where the hate level is sometimes so out-of-control that the tank have difficulty maintaining aggro.<br /><br />P/N2: For SLv4, the increase in EVA that I've checked with my assassin tallies to 24.9357326% actually, let's just round it up to 25% <img style="max-width: 100%;" src="//storage.proboards.com/forum/images/smiley/sick.png" alt="(puke)" />.<br /><br />P/N3: In later episodes (5-6++), the gameplay shifts towards more of co-operative teamwork play, which means that this skill is what stands you out against other DPS classes - you can aid other supports or DPS in your PT greatly with this, even more so if the other DPS class survives on EVA too!<br /><br />P/N4: I believe Paladin's would get more damage when this skill is casted on the rest of the pt (Hate easier to accumulate on his side, therefore increasing Rage Force)</div>
<br /><br /><strong>Execute</strong><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler"><img style="max-width: 100%;" src="https://i.ibb.co/QPhWbvP/execute.png" /><br />
<div>
<div>Increase critical damage. CRT increases more for Throwing.</div>
</div>
<br />SLv1 MP48: (Lv140) Obtained during Full Assassin class change (Critical damage +5%. When using throwing, CRT +10 as well. 5 mins)<br />SLV2 MP60: (Lv180) Quest @ Port Spargas, Levia (Critical damage +7%. When using throwing, CRT +20 as well. 6 mins)<br /><br />P/N: This skill appears on party logs as well even though it only affects yourself. Strange.<br /><br />P/N2: Buff displayed is [Special Attack]</div>
<br /><br /><strong>Evasion</strong><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler"><img style="max-width: 100%;" src="https://i.ibb.co/GFVLtcR/evasion.png" /><br />
<div>
<div>Improves your reaction time and AGI for a period of time.</div>
</div>
<br />SLv3 MP96: (Lv140) Obtained during Full Assassin class change (AGI +32, 5 mins)<br />SLv4 MP120: (Lv200) Obtained via Item usage [Agility Manual 4], Eryldan Desert, Filely (AGI +40, 6 mins)<br />SLv5 MP144: (Lv280) Obtained via Item usage [Agility Manual 5], Kreya City, Sitara (AGI +48, 7 mins)<br /><br />P/N: Buff displayed is [Agility]<br /><br />P/N2: Well, this is a free +48 agi that counts into Evasion Rate+% equips or buffs - who doesn't like it?! The best damage negation is a MISS, and what other better way to do that by giving them a boost to their base AGI? <br /><br />P/N3: Some people get a boost in damage from this as well, so it's good to cast on them if you can. (Claw, Special Bow, Special Claw, Special Throwing wielding characters, Samurais)</div>
<br /><br /><strong>Shadow Walk</strong><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler"><img style="max-width: 100%;" src="https://i.ibb.co/QX260rV/shadowwalk.png" /><br />
<div>
<div>Greatly increase your evasion skills.<br />It's less effective when used against adversaries who can see you.</div>
</div>
<br />SLv1 MP50: (Lv180) Quest @ Port Spargas, Levia (Eva+100%, 30 sec)<br />SLv2 MP50: (Lv220) Quest @ Port Spargas, Levia (Eva+100%, 60 sec)<br />SLv3 MP50: (Lv320) Quest @ King Eldan (Eva+100%, 90 sec)<br /><br />P/N: When used in sight of an enemy, -20% hp and shorten the duration time to 10/20/30 seconds respectively.<br /><br />P/N2: The skill grants a buff called [Evasion Rate], the Eva+100% effect includes eva given by equips/crysta/AL/skills.<br /><br />P/N3: The rebalance greatly nerfed this skill - in the past, this would double your Magic Evasion, but now it just increases your Evasion.<br /><br />P/N4: This skill appears on party logs as well even though it only affects yourself. Oh well.<br /><br />P/N5: 90seconds is actually pretty ample - given how normally you run through boss runs &lt;10seconds.</div>
<br /><br /><strong>Skia</strong><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler">
<div>
<div>(Passive) Chance of counterattack when evading melee attacks.</div>
</div>
<br />SLv1: (Lv200) Quest @ Port Spargas, Levia<br />SLv2: (Lv260) Quest @ Lograth City, Delma<br /><br />P/N: This skill activates at a set chance (around 60%?) whenever you dodge an attack. After unlocking Illusion3, Skia activates on magic damage dodging as well.<br /><br />P/N2: It counters a critical attack back to the enemy. This damage relates to your normal attack damage.<br /><br />P/N3: This skill can be switched 'OFF' in settings. <br /><br />P/N4: Sometimes you would want to switch this off during solo boss farming sessions - you try to land a Sicarius-BS to stun the boss, but the boss astonishingly hits you faster than you can throw out your skill, causing Skia to proc if it MISS, thus causing the boss' HP to be &lt;95%, resulting it into not being stunned, and if the boss is not stunned with you around as a DPS (note: fragile) sin... <img style="max-width: 100%;" src="//storage.proboards.com/forum/images/smiley/squint.png" alt=";-|" /></div>
<br /><br /><strong>Deathblow</strong><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler"><img style="max-width: 100%;" src="https://i.ibb.co/NNdRpy7/deathblow.png" /><br />
<div>
<div>A single, all-out strike that uses all remaining MP to boost its power.</div>
</div>
<br />SLv1 AllOfYourCurrentMP: (Lv160) Quest @ Port Spargas, Levia<br />SLv2 AllOfYourCurrentMP: (Lv240) Obtained via Item usage [Assassin's Secret 2], Lograth City, Delma<br />SLv3 AllOfYourCurrentMP: (Lv300) Obtained via Item usage [Assassin's Move 3], Kreya City, Sitara<br /><br />P/N: The skill's damage depends on the mp consumed - based on &yen;Riku&yen;'s youtube video, a 24k mp deathblow deals 240k on Sauro Lv400.<br /><br />P/N2: This skill provides you with a [Special Status] buff, for 10 seconds.<br /><br />P/N3: My calculations show that during [Special Status] buff, you gain an additional +95% of your <strong>base</strong> evasion, unaffected by skills that add AGI/EVA and the like. (95.3727506%, to be exact.) <em>I'm suspecting that this skill adds a flat amount of evasion that correlates with your level (e.g lv370, +370 evasion that is unaffected by any multipliers like SW), but I lack an explanation of 19 extra EVA stat to do so (Job Correction+Job Master only gives up to 16 EVA extra, if we discount this off, there's an extra 3 EVA given by DB. Either that or the data for Job Correction/Master is incorrect)</em><br /><br />P/N4: This stacks with Shadow Walk. A Lv370 naked Assassin with 1 Agi and Empty Apos/No Relic status, he gets a total of 1.5k evasion with SW+DB skills in effect. With SW+DB+Eva5+Invis4, it's a whooping 1818 evasion. Throw in the evasion you'd get from equips, crysta, Al, and apos lines.... you'll definitely hit 2k++ evasion at lv375, all with 1 agi. <img style="max-width: 100%;" src="//storage.proboards.com/forum/images/smiley/dead.png" alt="x_x" /><br /><br />P/N5: When using Shadow Walk during the [Special Status] buff interval, your HP will not drop. Skill duration will still be decreased however. Given how low assassin's HP naturally are, I normally would just use SW and consume a HP potion, instead of using up all of my MP to just prevent the -20% HP <img style="max-width: 100%;" src="//storage.proboards.com/forum/images/smiley/squint.png" alt=";-|" /><br /><br />Update: It's suspected that DB also provides you with absolute and magic evasion. Although there's no way to confirm how much it is, the dodge rate is significantly higher with it however.</div>
<br /><br /><strong>Hate Shift</strong><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler"><img style="max-width: 100%;" src="https://i.ibb.co/Bq0CrZc/hateshift.png" /><br />
<div>
<div>Shift the hate to another player. The hate value you have will be moved a little to the target.</div>
</div>
<br />SLv1 MP164 (Lv210) Quest @ Capital City Saterica, Curonne<br /><br />P/N: Using this skill on a target person will move a teeny tiny amount of your current hate towards him. Only works when he is in your party.<br /><br />P/N2: The red heal effect is kind of cool-looking, but otherwise it's useless AF.</div>
<br /><br /><strong>Sicarius</strong><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler">
<div>
<div>(Passive) Assassinate enemies. Boost Backstab used behind enemies. Enemy HP has to be more than 95%.</div>
</div>
<br />SLv1: (Lv260) Quest @ Drafbourg: Immigrant Ward, Matif<br /><br />Summary: Ensures that your backstabs on a monster with &gt;95%HP will be a guaranteed double backstab. Stun may be applied, up to 10 seconds at MAX.<br /><br />P/N: If your Str is &gt;=75 and your Int is &gt;=150, with the combined total of both being &gt;= 300, there is a <em>possibility</em> to inflict a stun status.<br /><br />P/N2: The stun can go up to a maximum of 10 seconds, which can be increased depending on your total combined stats. To see more detailed explanation about this, check the 'Others' section<br /><br />P/N3: The chance of stun being applied is divided into 2 categories- on <strong>bosses</strong> and on <strong>normal monsters</strong>. <br /><br />Regarding the stun-rate on bosses, as long as its an EP1~3 boss type, with your level above the boss itself, it is guaranteed to proc. Naturally, if your level is inadequate, it will not occur. Bosses above that (ep4++) have a slightly tweaked mechanism. If your level is over the boss's level, stun success is capped at roughly 90% probability (tested on telon). If your level is under the boss's level, stun success will be drastically lowered (10%~30%..?) but yes, it might happen. Some bosses are immune to stun no matter what.<br /><br />Rare monsters count as a boss. High HP monsters like megaroches, yardes, third Eyes or moss golems do not count as a boss. Event bosses differ on the stun probability rate - e.g Lv50 Ideaus always gets stunned (following ep1~3 boss rules), but a Lv350 Mr Oritius may not. (following ep4++ boss rules)<br /><br />On the other hand, for normal monsters, it has a roughly 10% probability of stun proc-ing.<br /><br />This is probably the main reason why assassins prefer to farm low-level bosses in solo. 10 seconds is enough for an assassin to farm all ep-3 and under bosses, with the exception of the stunlord Ouvel.<br /><br />P/N4: Whether or not the stun works, you will <strong>always</strong> be granted an [Assault] buff, so long as the target is a boss type. This buff falls into the [Possible to be dispelled category]. This means that some bosses cannot dispel it off (remove all continuous effects), like Nuitram or Dunkelis, but some other bosses can. (e.g Shelk) Coincidentally falls in place with Ep3&lt; and EP4&gt; boss divide for Sicarius stun.<br /><br />P/N4.5: I'm predicting that in the future, this "limit" on stunning will be raised, as our level caps increases and so on. (e.g levelcap 400, with Lv360 skills out, probably will be a EP4&lt; and Ep5&gt; boss divide.) Either that or a Sicarius SLv2<br /><br />P/N5: During [Assault], you gain a +10% Atk, +25% Critical Damage, +20% Melee pierce, Hate increase -?% as well as having your backstabs always proc-ing double BS.<br /><br />P/N6: The Sicarius damage will be slightly higher than your double backstab damage, with the screen momentarily fading black when it activates. (Opposite of double backstabs flashing 'white' when it procs)<br /><br />P/N7: Repeatedly activates whenever the monster's HP is above 95%. This condition is abused with the introduction of Venomous Dance. See more below at VD's description.</div>
<br /><br /><strong>Venom Fist</strong><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler"><img style="max-width: 100%;" src="https://i.ibb.co/4TDtWbc/venomfist.png" /><br />
<div>
<div>Inflict more poison on a foe. Increase the poison damage on the target everytime you use this skill.</div>
</div>
<br />SLv1 MP70: (Lv 260) Quest @ Lograth City, Delma<br /><br />P/N: Poison cap damage is 100k, this is boostable with equips.<br /><br />P/N2: This doubles your current poison damage on a monster - e.g 1st poison tick 6k, 2nd tick 12k, 3rd 24k, and so on.<br /><br />P/N3: The poison effect on bosses goes away with 0 hate or if you're dead.<br /><br />P/N4: This skill also gives you a 5 seconds buff called [Poison Blade]. This is mainly for other skills later on, Phantom Step/ Venomous Dance.<br /><br />P/N5: This skill requires you to be within close range to use it - it inflicts around roughly white or critical damage x3 on a target enemy.</div>
<br /><br /><strong>Job Master</strong><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler">
<div>
<div>(Passive) A proof of mastering Assassin. Boost Job Bonus.</div>
</div>
<br />SLv1: (Lv280) Quest @ King Eldan<br /><br />P/N: Str +3, Agi+3, Crt+6<br /><br />P/N2: It's good to get this, extra stats always helps. I believe this also translates to: atk+6, eva+3, crit damage +3%</div>
<br /><br /><strong>Shadow Mist</strong><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler"><img style="max-width: 100%;" src="https://i.ibb.co/nfdyTLr/shadowmist.png" /><br />
<div>
<div>Take a distance like mist while cutting an enemy. Power rises when target is Poisoned.</div>
</div>
<br />SLv1 MP120 (Lv320) Obtained via Item usage [Shadow Mist 1], Kreya City, Sitara<br /><br /><span style="font-family: georgia;">Shadow Mist in action</span><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler"><img style="max-width: 100%;" src="https://media.giphy.com/media/5t3Mqo9X6RySdLquCR/giphy.gif" /></div>
<br />P/N: If the target is not poisoned, it deals white or critical damage x5.<br /><br />P/N2: If the target is poisoned, it deals white or critical damage x8.5.<br /><br />P/N3: The damage dealt seems to be dependent on the mob's maxHP as well.<br /><br />P/N4: This skill applies a 20 second [Recast] debuff on you, after it expires, this skill can be used again.<br /><br />P/N5: The skills knocks you back a short distance - enough to rethrow another Phantom Step without the use of Venom Fist.<br /><br />P/N6: My opinion of this skill that it's not really very useful to be used ATM...unless it ignores defense of monsters/ drops off a huge chunk of your hate, it might be useful... let me know if you have any idea what it does! <br /><br />Update1: Please note of Ravitox's opinion on SMist's usage at: <a href="http://irunaonline.boards.net/post/246789" target="_blank" rel="noopener norewrite">irunaonline.boards.net/post/246789</a><br /><br />Update2: Meh, it doesn't drop off your hate levels in a bossfight...this skill is more suited for poison build players where it would benefit them better.</div>
<br /><br /><strong>Phantom Step</strong><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler"><img style="max-width: 100%;" src="https://i.ibb.co/SPtvV6m/phantomstep.png" /><br />
<div>
<div>Spin behind an enemy and bind their position momentarily.<br />Usable from close-range when status has Poison Blade.<br />Stocks Venom Blade when used.</div>
</div>
<br />SLv1 MP120 (Lv340) Quest @ King Elban<br /><br /><span style="font-family: georgia;">Phantom Step in action</span><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler"><img style="max-width: 100%;" src="https://media.giphy.com/media/6CB9SvaOcd0zHJK7YG/giphy.gif" /></div>
<br />P/N: Using this skill will teleport you to the enemy's back, with your subsequent <strong>backstab damage</strong> x1.5 with it being guaranteed a Double BS. In essence, the damage will be a (<em>Double BS dmg</em> x 1.5).<br /><br />P/N2: How much exactly does a PS-BS damage output % deal, when compared to a normal BS?<br /><br />BS -&gt; 66.6% chance to do (6x critical damage) | 33.3% chance to do (12x critical damage)<br />PS-BS -&gt; 100% chance to do (18x critical damage)<br /><br /><span style="font-family: georgia;">Phantom Step-Backstab <strong>VS</strong> Backstab <strong>VS</strong> Double Backstab</span><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler"><img style="max-width: 100%;" src="https://i.ibb.co/yPCG6B2/BS-chart.png" /></div>
Kind of typo-ed a lil' there, Dbl BS rate is 33% instead.<br /><br />P/N3: Everytime you use this skill, you will stock a Venom Blade count, you can see it right under your level on the top left hand corner of the screen. The maximum number of Venom Blades you can stock is 5 - they don't do anything except acts as a pre-requisite for the utilization of another skill of Assassins, <em>Venomous Dance</em>. Even if you die, the VB count still remains.<br /><br />P/N4: You cannot use PS when you are near an enemy. You only are able to use the skill when you are at a far-off enough distance from the target enemy. A rough gauge of the minimum PS distance, would be the maximum distance of you being able to use Backstab on a target enemy.<br /><br />P/N5: In order to use PS at close range of the target enemy, you would need to have the [Poison Blade] buff in effect. To obtain that buff, you would need to use Venom Fist at least once. After using a PS, the [Poison Blade] buff will disappear - be it you used PS in close range or not. Hence in order to repeatedly close-range PS a target, you would need to repeat a pattern here: PS-VF-PS-VF and so on.<br /><br />P/N6: PS also have a chance to poison the enemy. (around 3k poison ticks for me on kijimu?) It's roughly about 60% chance, and this poison damage can be increased with VF.<br /><br />P/N7: Whenever PS is used on a target enemy, it will be afflicted with a [Back-Facing-You-Always] status for 5 seconds. During this duration, its rear is....faced towards you, lol. <br />Sometimes due to map space constraints( only in boss maps), you'd see that it still faces you and yee (1) won't be teleported behind him (2) or the boss won't "float" towards your behind. However, any backstab you throw on the boss, even when he "faces" you will still be counted as a rear-backstab when this buff is on him. <br />A good example of a boss that is like that is joschua. Due to the stone spike pillars that restricts map space, you'd see this situation occurring repetitively.<br /><br /><span style="font-family: georgia;">Back-facing-you-always status</span><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler"><img style="max-width: 100%;" src="https://i.ibb.co/7NKqbYF/PS-1.png" /></div>
<br />P/N8: If you use PS on a target enemy when its back is against an unteleportable terrain, a funny situation would occur: the monster 'floats' towards you <img style="max-width: 100%;" src="//storage.proboards.com/forum/images/smiley/squint.png" alt=";-|" /><br /><br />P/N9: PS does increase the duration of the poison already afflicted on a target enemy (by chance, ?%) and it increases the poison damage as well (half as effective as Venom Fist usage)<br /><br />P/N10: If you change maps, the Venom Blade stocks you are holding will all vanish.<br /><br />P/N11: If you used PS on a monster but didn't kill it/ didn't use BS to kill it, your 1.5x accumulated BS dmg (as well as double bs guarantee) will retain, even if you switch maps<br /><br />P/N12: Sometimes PS's effect of increasing in BS damage is good for bypassing certain boss barriers. Try it and find out! (e.g Inilba)</div>
<br /><br /><strong>Venomous Dance</strong><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler"><img style="max-width: 100%;" src="https://i.ibb.co/RbrFzx6/venomousdance.png" /><br />
<div>
<div>Consumes 5 Venom Blades to activate.<br />Deal damage and gain Assault.<br />Chance to inflict stun.</div>
</div>
<br />SLv1 MP240 (Lv340) Quest @ King Elban<br /><br /><span style="font-family: georgia;">Venomous Dance in action</span><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler"><img style="max-width: 100%;" src="https://media.giphy.com/media/MVhlkCXVOCpBvwkJdQ/giphy.gif" /></div>
<br />P/N: To use this skill, you must have 5 'stocks' of Poison Blade ready. Upon usage of this skill, all 5 stocks will be consumed. You'll have to re-do all of the PS actions to get back another 5 stocks to re-use VD.<br /><br />P/N2: This skill deals [(white or critical damage x7.5) + (current poisoned dmg tick x3)].<br /><br />P/N3: It also inflicts a stun status with a probability on the enemy. On bosses, if they are lower level than you, the stun rate is 100%. If they are above your level, stun will not be applied. The duration for the stun is the same as sicarius - 10 seconds at max. (Some bosses are immune to stun no matter what)<br /><br />P/N4: Whether or not the stun procs, it grants you an [Assault] buff - strangely enough, the duration for it is 8 seconds for me (441 str and 441 int). Perhaps a higher level of stats would be needed (?)<br /><br />P/N5: With the introduction of VD, so long as the boss is a lower level than you, you can technically have a 20second stun duration on it.<br /><br />(1) First, you need to have an equipment set that gives you an extremely lowered att. Equips that -Att%, -Melee to Element% or No Damage to X element works well here. I recommend using a non-throwing weapon so that the passive boosts you have will not work. Multiple QC1 work like a godsend here.)<br /><br />(2) Use Backstab on the boss. Sicarius will activate, stunning the boss. Now, assuming the stun duration is 10sec (max amt), you have 10 seconds to repeat the action series of 5 PS - building up 5 stocks of Poison Blades. <em>Just use PS and walk back a distance and reuse it. Do not use VF - you don't want excess damage on the boss monster.</em><br /><br />(3) Wear back your normal Damage set and throw a BS on the boss. Another 10s stun will re-appear. Sicarius will still activate because the boss hp is at &gt;95%. (Because you wore extremely crappy eq armor with -%Att and stuff). Now go crazy and spam yer BS. Before the stun duration on boss expires, throw out VD and celebrate - another 10s stun. Wack boss again.<br /><br />The only disadvantage about this is the MP consumption issue, but otherwise...anything under EP3, there's nothing you can't farm! (Ep4 and above...RIP <img style="max-width: 100%;" src="//storage.proboards.com/forum/images/smiley/sick.png" alt="(puke)" />)<br /><br /><em>Truth be told...not much boss &lt; ep 4 requires you to spend that much effort to kill it, normally a single 10s assault duration is enough for you to kill it.</em><br /><br />P/N6: The stun requirements for this skill hints to us that '<em>level whaling</em>' is encouraged by the game devs. (No surprise, people have to buy exp books or full tix to re-grind again and again) If you are Lv401, technically there aren't any boss that wouldn't be stunned by this. But to hit Lv401, you would need to refrain from doing MQ until you are at least Lv380 or Lv385 base, then start clearing MQ from start to finish. In short, if you are an assassin that has cleared his MQ and is already capped level at Lv375 (max cap right now), you are at a disadvantage. Now...imagine there are a crowd of Lv401 assassins farming Daily Raid bosses... <img style="max-width: 100%;" src="//storage.proboards.com/forum/images/smiley/sick.png" alt="(puke)" /><img style="max-width: 100%;" src="//storage.proboards.com/forum/images/smiley/sick.png" alt="(puke)" /><br /><br />Update: Based on my various testing, it seems like even when you're overcapped beyond the boss's level, venomous dance still doesn't guarantee you a 100% stun on all bosses. Oh well.</div>
</div>
<br /><br /><span style="font-size: large;"><span style="font-family: 'comic sans ms';">Special Mentions</span></span><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler"><br /><a style="color: #ff0000;" title="@ravitox" href="/user/8320">Ravitox</a> for his guide referencing, as well some of his quotes of wisdom throughout the assassin threads I referenced here.<br /><a title="@flarius" href="/user/6">Flarius</a> for his guide referencing<br /><a title="@lildragonknt" href="/user/10027">Kijimu Party</a> for his site referencing<br /><a style="color: #32e619;" title="@yazmat" href="/user/3017">Yazmat</a> for his FB content skills referencing<br /><a title="@crazyman" href="/user/10835">Done~with~forums</a> for motivating me to create this thread<br />&yen;Riku&yen; for referring to his Deathblow vids<br />The Iruna JP Wiki (<em><a href="https://wikiwiki.jp/iruna-online" target="_blank" rel="nofollow noopener">wikiwiki.jp/iruna-online</a></em>) for their site referencing</div>
<br /><br /><span style="font-size: large;"><span style="font-family: 'comic sans ms';">Others</span></span><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler"><br />Various useful guides in the Assassin section that are still relevant today (2019)<br /><br /><a href="http://irunaonline.boards.net/thread/26526/damage-backstab-assassin-full-guide" target="_blank" rel="noopener norewrite">Damage Backstab Assassin Full Stat Guide</a><br /><a href="http://irunaonline.boards.net/thread/7453/guide-sicarius" target="_blank" rel="noopener norewrite">Guide: Sicarius</a><br /><a href="http://irunaonline.boards.net/thread/1555/lone-wolf-solo-assassin-breakthru" target="_blank" rel="noopener norewrite">Lone Wolf Assassin Breakthrough (Agi Stat Sins)</a><br /><a href="http://irunaonline.boards.net/thread/28279/ideal-backstab-gear-set" target="_blank" rel="noopener norewrite">The Ideal Backstab Gear Set</a><br /><a href="http://irunaonline.boards.net/thread/30256/skills-phantom-shadow-venom-dance" target="_blank" rel="noopener norewrite">Assassin Lv320, 340 Skills</a><br /><a href="http://irunaonline.boards.net/thread/30403/backstab-delay" target="_blank" rel="noopener norewrite">About Backstab Delay</a><br /><a href="http://irunaonline.boards.net/thread/30091/skills" target="_blank" rel="noopener norewrite">Where to get Hate Shift</a></div>
</div>
</article>
                        <hr>
                        <p>Author: <a href="http://irunaonline.boards.net/user/365">godofafro</a></p>
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
