<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title> Complete Guide | Iruna Global Stall</title>
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
    <meta name="apple-mobile-web-app-title" content="Guide Monk | Iruna Global Stall">
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
                    <h4>Complete Monk Guide</h4>
                    <hr>
                    <div>
                        <article>
<div>
<div align="center"><span style="font-size: x-large;"><strong>This is not MY guide, this is an Monk all in one guide that I created, completed and updated</strong></span><br /><br /><span style="font-size: large;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/27/17102706473184810.png" alt="" />Main Informations by <a title="@crazyket" href="/user/14">crazyket</a> (I think she doesn't have the time to update her guide) , Takarra, <a title="@caporal" href="/user/2293">caporal</a> , Royal, <a style="color: #32e619;" title="@manakhe" href="/user/182">ManaKhe</a> , <a title="@ahsan" href="/user/9499">'AhSaN'</a> and other players<br /></span></div>
<span style="font-size: large;"><br /><span style="font-family: georgia;"><strong>First of all,</strong> let me introduce myself : My IGN is <strong>caporal</strong> and i'm a lvl <strong>352&nbsp;</strong>High Wizard playing since beta.<br />I noticed that monks didn't have an <strong>updated</strong> guide, so I decided to create one. I have an monk lvl 260 don't worry. Of course I'm not a pro monk but I have some knowledge and a lot of information will not be from me, but maybe you.<br />As you may noticed, english isn't my main language, and I'm asking you to not judge this guide on this or criticize it if you find grammar mistakes, but you can help me with them in private. I'll do my best, thanks for reading.<br /></span></span><br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/27/171027064723597020.png" alt="" /></span></div>
<div data-tag="spoiler">
<div style="text-align: center;"><strong style="font-family: georgia;"><span style="font-size: x-large;">What is a Monk ?</span></strong></div>
<div style="text-align: center;">Monk is a melee class from the mage section. There are mainly two types of monks,&nbsp;</div>
<div style="text-align: center;">1)Claw Monk&nbsp;</div>
<div style="text-align: center;">2)Geo Monk</div>
<span style="font-size: large;"><span style="font-family: georgia;"><br /><strong>Claw Monk :</strong> They use claws and tend to play solo rather than in Party. They aren't tanks but they are alright tank with good gear.They attack faster than other classes and have a higher chance of breaking enemy shields. They are from Mage tree so they can heal other players.They might be weak if not enough MaxHP or EVA. They have good DPS and funny gameplay and in the future, they will be making combos *^*. They aren't usually accepted in Parties and they're the best for high Defense enemies.<br /><br /><br /><strong>Geo Monk :</strong> Geo Monks usually use throwing, rods or special claws and are Party reliant. They are pure DPS and they spam Geo Breaker so they deal the most Damage in terms of DPS. Since they have very high Damage, they lack of survivability. And often they need a Paladin or Bishop for survivability. Having a HW to freeze the enemy is a must for Geo Breaker Spammer Monks. They are mostly welcomed in parties but they don't have much chance of Proc-ing shell break, so they aren't best for High-DEF mobs.</span></span><br /><br /><br />description by <a title="@ahsan" href="/user/9499">'AhSaN'</a></div>
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/27/171027064708978922.png" alt="" /></span></div>
<div data-tag="spoiler">
<div align="center"><span style="color: #722644; font-family: georgia; font-size: x-large;"><strong>App. Monk</strong></span><span style="font-family: georgia;"><br /></span>
<ul style="list-style-type: disc;">
<li><span style="font-family: georgia;">Job ~ CLERIC</span></li>
<li><span style="font-family: georgia;">Lvl ~ 120</span></li>
<li><span style="font-family: georgia;">Required Skills ~ Holy Light Lv. 1 || Kreis Heal Lv. 2<br /></span></li>
</ul>
<span style="font-family: georgia;"><br /><span style="font-size: large;"><strong>Then</strong></span><br />Talk to Cleil at Presidential Office in Capital city of Saterica <br /><br /><span style="color: #722644; font-size: x-large;"><strong>Full Monk</strong></span><br /></span>
<ul style="list-style-type: disc;">
<li><span style="font-family: georgia;">Job ~ App Monk</span></li>
<li><span style="font-family: georgia;">Level ~ 140</span></li>
</ul>
<span style="font-family: georgia;"><br /><span style="font-size: large;"><strong>Then</strong></span><br />Talk to King Elbano at Palace in Capital City of Elban</span></div>
</div>
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/27/171027064709319766.png" alt="" /></span></div>
<div data-tag="spoiler"><br /><span style="font-size: large;"><strong>Pro : <br /></strong>- good dps<br />- Funny gameplay (especialy nail user) <br />- Can break ennemies shield<br />- Nice buffs<br /><br /><strong>Cons : <br /></strong>- Need a lot of stats point<br />- May be weak if not enough HP or eva<br />- Can be boring for geo spammer monks<br /></span></div>
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/27/171027064706471832.png" alt="" /></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new';"><br /><br /><span style="font-size: large;"><strong><span style="color: #69055d;">AGI</span></strong><br /></span><br /><strong>For base attack</strong><em>- claw - monks have claw mastery so you might want to use claw</em><br /><br /><strong>For EVA</strong><em>- monk are not a warrior class so they dont have much defense like warrior and we need more eva to avoid most of the attacks</em><br /><br /><strong>For ASPD</strong><em>- for any dps, maxing a weapon's ASPD is one of the priority to do</em><br /><br /><br /><br /><span style="color: #69055d; font-size: large;"><strong>STR</strong></span><br /><br /><strong>For base attack</strong><em>- second option to up after AGI/INT if &amp;amp;you want to have a high damage&amp;amp;</em><br /><br /><br /><span style="color: #69055d; font-size: large;"><strong>CRT</strong></span><br /><br /><strong>For damage</strong><em>- critical never miss and multiplies base attack based on CRT you have</em><br /><br /><strong>For Shell Break</strong><em>- shell break is a CRT dependent</em><br /><br /><br /><span style="color: #69055d; font-size: large;"><strong>VIT</strong></span><br /><br /><strong>For HP</strong><em>- tank and hybrid builds want more HP</em><br /><br /><strong>For DEF</strong><em>- DPS doesnt need def that much but tank monks do want it</em><br /><br /><br /><span style="color: #69055d; font-size: large;"><strong>INT<br /></strong></span><br /><strong>For MP</strong><em>- monks have a skill called rush which will reduce your MaxMP to 30% and monk's MP and will go decrease the moment you change job to app monk but you'll get an increase for HP</em><br /><br /><strong>For Chakra</strong><em>- monks have a skill called chakra which increase their damage from INT and not MATK</em><br /><br /><strong>For MATK</strong><em> - monk's heal will decrease the moment you change job too. Some&amp;amp;monk may want a nice heal for solo purpose and to reduce the use of pot and if you are the back up healer in the party</em><br /><br /><strong>For MDEF</strong><em>- magic attacks from mobs can not be evade in normal EVA&amp;amp;</em><br /><br /><strong>For base attack</strong><em>- some monks use magic swords and throwing weapon so max INT is a must especially to geobreaker spam builds</em><br /><br /><strong>For geobreaker</strong><em>- it reduce skill delay for geobreaker better than dex</em><br /><br /><span style="color: #69055d; font-size: large;"><strong><br />DEX</strong></span><br /><br /><strong>For base attack</strong><em>- adds damage for throwing weapon and magic sword 'cause not all monks use claws</em><br /><br /><strong>For CSPD</strong><em>- monks have a skills called bash and geobreaker which have cast delay that you wanna reduce<br /><br /></em><br /></span>
<div style="text-align: center;"><strong><span style="color: #028bff; font-size: xx-large;">SPECIAL STATS</span></strong></div>
<div style="text-align: center;"><strong style="font-size: 10pt;"><span style="font-size: x-large;">Depending on how you built your al crysta page :</span></strong></div>
<div style="text-align: center;"><strong><span style="font-size: large;">if you have yellow lines :&nbsp;</span></strong></div>
<div style="text-align: center;"><span style="font-size: 10pt;"><strong>RD and GR</strong> : will raise your ATK, physical damages and melee damage</span></div>
<div style="text-align: center;"><strong><span style="font-size: large;">if you have purple lines :</span></strong></div>
<div style="text-align: center;"><span style="font-size: 10pt;"><strong>RD and BL </strong>: will raise your critical rate and aspd</span></div>
<div style="text-align: center;">&nbsp;</div>
<div style="text-align: center;"><span style="font-size: large;"><strong>if you have red lines :</strong></span></div>
<div style="text-align: center;"><span style="font-size: 10pt;"><strong>RD</strong> : will raise your HP and DEF</span></div>
<div style="text-align: center;">&nbsp;</div>
<div style="text-align: center;"><strong><span style="font-size: large;">if you have green lines </span></strong><span style="font-size: 10pt;">:</span></div>
<div style="text-align: center;"><span style="font-size: 10pt;"><strong>GR</strong> : will raise your EVA</span></div>
<br /><span style="font-family: 'courier new';"><em><br /></em></span></div>
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/27/171027064727806364.png" alt="" /></span></div>
<div data-tag="spoiler"><em><u><span style="font-size: x-large;"><strong>Claw Monk</strong></span></u></em><br />[<strong>AGI / CRT/ INT</strong>]: This is the build for Chakra monk. Chakra is a skill that adds atk by INT. They can also heal more than other claw builds and have a better mdef. They need a lot of EVA to survive, or more Range when farming a boss in party with a tank. They use normal Claw.<br /><br />[<strong>AGI/ CRT / STR</strong>]: This is the pure damage claw build, They use Chakra because of the refinement value on weapon, They have the highest damage among all monk builds but kinda weak in terms of MDEF and healing. The reason about this build is adding more firepower.<br /><br />[<strong>AGI / CRT / VIT</strong>]: The build for those who prefer tank. Aggro set is then recommanded if you choose to be the tank in a party.<br /><br /><span style="font-size: x-large;"><u><em><strong>Monk Geo Spam:</strong></em></u></span><br />This type of monk are really appreciated in party anywhere. If nail monk are more balanced between survival and dps (50/50) , geo monk are 100% damage 0% survival. They also need a High Wizard with them to freeze the ennemy and maximize geobreak damage. L<br /><br />[<strong>INT / DEX / CRT</strong>]: This is the build for geo spam. <br /><br /><strong>[INT / CRT / STR] </strong>: Bigger geo damage but need a lot of equipment that reduce delay<br /><br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><span style="font-family: georgia; font-size: large;"><strong>☞ Geobreaker Skill Delay explanation by <a style="color: #32e619;" title="@manakhe" href="/user/182">ManaKhe</a></strong></span>☜</span></div>
<div data-tag="spoiler">
<div>
<div>People get confused with the talk about INT and passive skill delay bonuses and such associated with Geobreaker.<br /><br />Here is exactly what decreases skill delay on Geobreaker and by how much:<br /><br /><strong>If you are using a Throwing Weapon you get a passive -1 sec skill delay on Geo.</strong> Fuma Shuriken and other throwing that decrease skill delay will be added on top of this<br /><br /><strong>INT gives -.1 skill delay every 12 points<br />DEX gives -.1 skill delay every 16 points</strong><br /><br />Naturally you also get whatever skill delay you have from gear as well along with the delay buff from Bishop<br /><br />So this means two things with Geo builds. 1)You are using Throwing Weapons, as you can't pass up that passive -1 skill delay and 2)<strong>INT is by far the most important stat for Geo builds</strong> as it gives the highest amount of ATK by far(somewhere around 3.25-3.5 per point with Chakra 3) and the most skill delay<br /><br />However unless you get Quick Cool Abilities you will need to add a lot of DEX still as you will still need the skill delay even with stat release.</div>
</div>
</div>
<br /><br /></div>
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/27/171027064706981104.png" alt="" /></span></div>
<div data-tag="spoiler">This table is from Takarra, I can only copy paste it because it"s already perfect<br />
<div>
<div>
<table>
<tbody>
<tr>
<td style="border: 1px solid #000000; color: #ffffff; background-color: #599456;" colspan="7">
<div style="text-align: center;"><span style="font-size: 10pt;"><u><span style="color: #000000;"><strong>Claw Mastery</strong></span></u></span></div>
<div style="text-align: center;"><span style="font-size: 10pt;"><span style="color: #000000;">It increases ATK and Magical Resistance when a claw weapon is equipped. It is generally a Mastery Passive skill. It may suck for ATK, since the ATK boost isn't enough, but it's Magic R +% feature is great.</span></span></div>
</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Skill</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">P/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">MP</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Time</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Get</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;"><img src="http://i58.tinypic.com/119z2ub.png" width="30" />Info</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.1</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">P</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">App. Monk Job Change</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">ATK +?, Magic R +4%</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.2</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">P</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Monk Job Change</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">ATK +?, Magic R +9%</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.3</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">P</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">160</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Quest - King Elbano (Elban City)</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">ATK +10, Magic R +15%</td>
</tr>
<tr>
<td style="border: 1px solid #000000; background-color: #599456;" colspan="7">
<div style="text-align: center;"><span style="font-size: 10pt;"><strong><u>Boost HP</u></strong></span></div>
<div style="text-align: center;">MaxHP is increased. Monk isn't a warrior tree class, so they don't have much HP or DEF as any warrior tree class has. So they mostly need to rely on HP &amp; EVA. So this is a skill that boosts HP. It is a great Passsive skill if your MaxHP is high.</div>
</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Skill</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">P/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">MP</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Time</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Get</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;"><img style="color: #ffffff; font-size: 10pt; text-align: center; background-color: #599456;" src="http://i58.tinypic.com/119z2ub.png" width="30" /><span style="font-size: 10pt;">Info</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.1</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">P</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">App. Monk Job Change</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">MaxHP +10%</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.2</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">P</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">200</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Item - Filely (Eryldan Desert)</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">MaxHP +20%</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.3</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">P</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">260</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Item - Sitara (Kreya City)</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">MaxHP +??%</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #ffffff; background-color: #599456;" colspan="7">
<div style="text-align: center;"><span style="font-size: 10pt;"><u><span style="color: #000000;"><strong>Bash</strong></span></u></span></div>
<div style="text-align: center;"><span style="font-size: 10pt;"><span style="color: #000000;">Bash is a damaging skill which may stun the enemy. This skill is useful for Geo Breaker Monks, since it stuns the enemy &amp; Geo breakers need stun to deal x2 Damage. But the stun duration is short so i won't recommend it.</span></span></div>
</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Skill</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">P/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">MP</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Time</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Get</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;"><img src="http://i62.tinypic.com/sqgnlw.png" width="30" />Info</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.1</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">100</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">App. Monk Job Change</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.2</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">120</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Monk Job Change</td>
</tr>
<tr>
<td style="border: 1px solid #000000; background-color: #599456;" colspan="7">
<div style="color: #ffffff; text-align: center;"><span style="font-size: 10pt;"><u><span style="color: #000000;"><strong>Chakra</strong></span></u></span></div>
<div style="text-align: center;">Chakra is a buff that ups ATK by INT &amp; refinement value on weapon. When used, you receive "Attack Power" buff. The more INT you have, the more ATK it will give. Of course the attack boost is more depending on the level of the skill. It is very useful for Geo Monks and Chakra/Claw Monks. But they are also good for any class that uses both ATK &amp; MATK (or INT). It is useful for High Wizard (Head Crash &amp; other physical skills -note by <a title="@caporal" href="/user/2293">caporal</a> : lol who use this shitty skill ?-), Enchanter (Most Enchys use INT), Magic/SK Ninja, Servant, INT Sniper (Don't know what's that called). etc.</div>
</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Skill</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">P/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">MP</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Time</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Get</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;"><img src="http://i61.tinypic.com/2djz79e.png" width="30" />Info</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.1</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">88</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">5 min</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">App. Monk Job Change</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.2</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">152</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">6 min</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Monk Job Change</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.3</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">216</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">7 min</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">200</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Item - Matif (Drafbourg)</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.4</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">?</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">?</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">280</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Item - Sitara (Kreya City)</td>
</tr>
<tr>
<td style="border: 1px solid #000000; background-color: #599456;" colspan="7">
<div style="color: #ffffff; text-align: center;"><span style="font-size: 10pt;"><u><span style="color: #000000;"><strong>Shell break</strong></span></u></span></div>
<div style="text-align: center;">Chance to deal damage during normal attack. Damage is higher if Mob defense is higher. It is a skill that procs on normal attack. But proc-ing rate is more on Auto-Attack (Claw) Monks &amp; The rate is low for Geo Monks. That's why i said earlier that Claw Monks are best for High Defense Mobs. This passive skill can break through enemy shields, but when a Geo Monk procs Shell Break with Geo Breaker, it deals very high damage, but the chances are always low.</div>
</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Skill</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">P/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">MP</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Time</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Get</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;"><img src="http://i58.tinypic.com/119z2ub.png" width="30" />Info</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.1</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">P</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Monk Job Change</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.2</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">P</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">240</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Item - Levia (Lograth City)</td>
</tr>
<tr>
<td style="border: 1px solid #000000; background-color: #599456;" colspan="7">
<div style="text-align: center;"><span style="font-size: 10pt;"><span style="text-decoration: underline; font-weight: bold;">Rush</span></span></div>
<div style="text-align: center;">It cuts attack interval, means you'll be dealing damage very fast (Increases Swing Speed). But it cuts down MaxMP, Item Recovery &amp; CRT, so that might be a problem for Claw Monks. So they'll be lacking on MaxMP, but the Item recovery can be increased with Healing skill.<br />Skill delay +1.5sec during Rush</div>
</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Skil</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">P/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">MP</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Time</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Get</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;"><img src="http://i59.tinypic.com/eimv5l.png" width="30" />Info</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.1</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">360</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">1 min</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Monk Job Change</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">MaxMP -75%, item recovery -50%, ((CRT/40)+1)/100</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.2</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">405</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">1 min</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">200</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Quest - Levia (Port Spargas)</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">MaxMP -75%, item recovery -25%, ((CRT/80)+1)/100</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.3</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">450</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">1 min</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">260</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Quest - Levia (Lograth City)</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">MaxMP -75%, ((CRT/120)+1)/100</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.4</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">?</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">?</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">300</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Item - Sitara (Kreya City)</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">MaxMP &plusmn;?%, ((CRT/?)+1)/100</td>
</tr>
<tr>
<td style="border: 1px solid #000000; background-color: #599456;" colspan="7">
<div style="color: #ffffff; text-align: center;"><span style="font-size: 10pt;"><u><span style="color: #000000;"><strong>Lentus</strong></span></u></span></div>
<div style="text-align: center;">Revives the user if s/he dies while stunned. Receives some buffs after resurrection. After it is activated the user gets "Special Status" buff for 10 Seconds. It is a very useful skill and we may be best friends with ninjas because Ninjas dies when they hit stun, and here Monks will be immortal to a stunning boss (Maybe). But remember, you need to be stunned while dying!</div>
</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Skill</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">P/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">MP</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Time</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Get</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;"><img style="font-size: 10pt;" src="http://i58.tinypic.com/119z2ub.png" width="30" /><span style="font-size: 10pt;">Info</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.1</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">P</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">160</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Quest - Levia (Port Spargas)</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">ATK +10%, CRT Damage +10%, Absolute Evasion +10%, ASPD +100%, attack interval cut</td>
</tr>
<tr>
<td style="border: 1px solid #000000; background-color: #599456;" colspan="7">
<div style="color: #ffffff; text-align: center;"><span style="font-size: 10pt;"><u><span style="color: #000000;"><strong>Geobreaker (PT AoE)</strong></span></u></span></div>
<div style="text-align: center;">This is a Party Area of Effect damaging skill. There are Geo Spammers who spam geo breaker and also Normal Claw Monks that cannot spam Geo Breaker. Usually a Lv.1 Geo Breaker deals x3 Damage, Lv.2 deals x3.5 &amp; Lv.3 deals x4 damage on the mob. But the damage is further doubled if the mob is Frozen or Stunned. So a Geo Spammer Monk must need a HW to freeze the mob (or sniper) since Bash's stun duration isn't long.It causes Lethargic status ailment which reduces damage which is based in UP (TBC) It is the most powerful attacking skill for Monk.<br />12 INT = -0.1sec skill delay | 16 DEX&amp;= -0.1sec skill delay<br />Skill delay -1sec w/ throwing weapon or rod</div>
</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Skill</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">P/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">MP</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Time</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Get</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;"><span style="font-size: 10pt;"><img src="http://i57.tinypic.com/2dj9aug.png" width="30" /> Info</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.1</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">84</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">180</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Quest - Levia (Port Spargas)</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Normal damage x3</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.2</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">136</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">220</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Quest - Levia (Port Spargas)</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Normal damage x3.5</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.3</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">?</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">320</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Quest - King Elbano (Eldan City)</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Normal damage x4?</td>
</tr>
<tr>
<td style="text-align: center; border: 1px solid #000000; background-color: #599456;" colspan="7"><u style="font-weight: bold;">Lion Roar (Ambient AoE)</u><br />It is a MATK based AoE but it is an Ambient AoE. So when used you are the centere of the AoE. The skill range is low so you need mobs very near around you. This skill was mainly desined for targetting mobs since Geo Breaker is a PT AoE. Lion Roar isn't recommend AoE but the range can be extended by using Range+ equips. I mainly use it to provoke enemies &amp; finish them all with Geo Breaker.</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Skill</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">P/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">MP</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Time</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Get</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;"><img src="http://i57.tinypic.com/2lxcdw7.png" width="30" />Info</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.1</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">8</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Quest - Obligaus (Mt. Mithurna)</td>
</tr>
<tr>
<td style="border: 1px solid #000000; background-color: #599456;" colspan="7">
<div style="text-align: center;"><span style="font-size: 10pt;"><strong><u>Healing</u></strong></span></div>
<div style="text-align: center;">It increases Magic &amp; Item recovery for the entire party. It can increase the healing amount of any skill &amp; Item. It is very useful for Paladins, High Wizards, Bishops, Enchanters, Servants and any class that can heal. Also it's useful for any class which relies on Potions to survive. I think it's a useful skill indeed.</div>
</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Skill</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">P/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">MP</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Time</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Get</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;"><img src="http://i57.tinypic.com/2zyc5lf.png" width="30" />Info</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.1</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">100</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">180</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Quest - Levia (Port Spargas)</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.2</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">?</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">260</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Item - Sitara (Kreya City)</td>
</tr>
<tr>
<td style="border: 1px solid #000000; background-color: #599456;" colspan="7">
<div style="color: #ffffff; text-align: center;"><span style="font-size: 10pt;"><u><span style="color: #000000;"><strong>Brionac</strong></span></u></span></div>
<div style="text-align: center;">It is a skill that allows to proc shell break at will.It also causes ailments like Bleed, Fear, Dizzy, Burn etc. It is kinda useless for Claw Monks but very useful for Geo Breaker Monks because their SB proc-ing rate is low. However, after use, exhaustion is put into effect and MaxMP is reduced.</div>
</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Skill</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">P/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">MP</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Time</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Get</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;"><img src="http://i59.tinypic.com/11qin1i.png" width="30" />Info</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.1</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">125</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">220</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Quest - Matif (Drafbourg)</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Exhaustion = 20 sec</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.2</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">?</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">300</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Quest - King Elbano (Eldan City)</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Exhaustion = ? sec</td>
</tr>
<tr>
<td style="border: 1px solid #000000; background-color: #599456;" colspan="7">
<div style="color: #ffffff; text-align: center;"><span style="font-size: 10pt;"><u><span style="color: #000000;"><strong>Panacea</strong></span></u></span></div>
<div style="text-align: center;">It is a skill that cures Exhaustion. Exhaution can be pretty bad for some classes as it will reduce your damage. So with this buff you can cure exhaustion. When you give the buff to someone (or yourself) you will get "Exhaustion Nullification" buff and it will go off when the exhaustion is triggered and nullified (Like Bishop's Resurrection). It also has some disadvantage. When used on itself, chance of paralyzing for 10 seconds. But Paral. effect does not work on others (TBC).</div>
</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Skill</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">P/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">MP</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Time</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Get</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;"><img style="font-size: 10pt; text-align: center; background-color: #599456;" src="http://i57.tinypic.com/fkb6o9.png" width="30" />Info</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.1</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;"><span style="font-size: small;">100MP<br />+5% of&amp;MaxMP</span></td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">3 min</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">240</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Quest - Matif (Drafbourg)</td>
</tr>
<tr>
<td style="border: 1px solid #000000; background-color: #599456;" colspan="7">
<div style="text-align: center;"><u style="font-weight: bold;">Asura Aura</u><br />Raises ATK and DEF. Raises attack and defense, charging the fighting spirit. It is a very useful skill. It increases ATK so it'll allow us to fight with more damage. Also it raises DEF, so we will be taki f less damage from mobs. It is Monk's ultimate buff.</div>
</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Skill</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">P/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">MP</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Time</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Get</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;"><img src="http://i62.tinypic.com/27y7m1l.png" width="30" />Info</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.1</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">1000</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A?</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">260</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Quest - Levia (Lograth City)</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #ffffff; background-color: #599456;" colspan="7">
<div style="text-align: center;"><span style="font-size: 10pt;"><u><span style="color: #000000;"><strong>Job Mastery</strong></span></u></span></div>
<div style="text-align: center;"><span style="font-size: 10pt;"><span style="color: #000000;">Increase in status</span></span></div>
</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Skill</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">P/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">MP</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Time</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Get</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;"><img src="http://i58.tinypic.com/119z2ub.png" width="30" />Info</td>
</tr>
<tr>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Lv.1</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">P</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">N/A</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">280</td>
<td style="border: 1px solid #000000; color: #000000; background-color: #d6ebd5;">Quest - King Elbano (Eldan City)</td>
</tr>
</tbody>
</table>
<br /><br />Skill description by <a title="@ahsan" href="/user/9499">'AhSaN'</a><img style="max-width: 100%;" src="//storage.proboards.com/forum/images/smiley/smiley.png" alt=":)" /></div>
</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/28/171028010836757839.png" alt="" /></span></div>
<div data-tag="spoiler">
<div><a style="display: none;"></a><span style="cursor: pointer;"><span style="color: #e61942; font-family: georgia; font-size: x-large;">✯Brionac lv1</span></span></div>
<div data-tag="spoiler"><strong style="font-size: large;">Farm :</strong>
<ul style="list-style-type: circle;">
<li><strong><span style="font-size: small;">70 Living Water</span></strong>
<ul style="list-style-type: square;">
<li><span style="font-size: small;">common drop from Nereida in Eryldan desert</span></li>
</ul>
</li>
</ul>
<ul style="list-style-type: circle;">
<li><strong>30 Snapping Tail<br /></strong>
<ul style="list-style-type: square;">
<li>uncommon from Neknott (on the way to Magonza)</li>
</ul>
</li>
</ul>
<div><strong>Farm :</strong>
<ul style="list-style-type: circle;">
<li><strong>10 Lavendur Fur</strong>
<ul style="list-style-type: square;">
<li>uncommon from Lagos (rabbits on the way to Magonza near Drafbourg)</li>
</ul>
</li>
</ul>
</div>
<ul style="list-style-type: circle;">
<li><strong>1 Magonza Claw</strong>
<ul style="list-style-type: square;">
<li>common drop from Magonza (near Drafbourg)</li>
</ul>
</li>
</ul>
</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><span style="color: #e61942; font-family: georgia; font-size: x-large;">✯Brionac lv2</span></span></div>
<div data-tag="spoiler"><strong style="font-size: large;">Kill :</strong>
<ul style="list-style-type: circle;">
<li><strong><span style="font-size: small;">60 Ivy Colon</span></strong>
<ul style="list-style-type: square;">
<li><span style="font-size: small;">mob on the way to Behemoth (near Eldan)</span></li>
</ul>
</li>
</ul>
<ul style="list-style-type: circle;">
<li><strong>60 Greedevi<br /></strong>
<ul style="list-style-type: square;">
<li>mob on the way to Glabora (near Eldan)</li>
</ul>
</li>
</ul>
<div><strong>Farm :</strong>
<ul style="list-style-type: circle;">
<li><strong>1 Evil Dragon Spear Bit</strong>
<ul style="list-style-type: square;">
<li>uncommon from Leviam (after Sauro Village)</li>
</ul>
</li>
</ul>
</div>
<ul style="list-style-type: circle;">
<li><strong>10 Glowing Coal</strong>
<ul style="list-style-type: square;">
<li>uncommon from Calbo (chako looking like mob before Underground Bailune)</li>
</ul>
</li>
</ul>
</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><span style="color: #e61942; font-family: georgia; font-size: x-large;">✯Healing lv1</span></span></div>
<div data-tag="spoiler"><strong style="font-size: large;">Farm :</strong>
<ul style="list-style-type: circle;">
<li><strong><span style="font-size: small;">1 Scrap Iron</span></strong>
<ul style="list-style-type: square;">
<li><span style="font-size: small;">uncommon from Ganei (near Minaula)</span></li>
</ul>
</li>
</ul>
<ul style="list-style-type: circle;">
<li><strong>20 Iron Material<br /></strong>
<ul style="list-style-type: square;">
<li>uncommon from Kyon in the prison in Sparga on the way to Metalbrow</li>
</ul>
</li>
</ul>
<div><strong>Farm :</strong>
<ul style="list-style-type: circle;">
<li><strong>40 Jelly Steak</strong>
<ul style="list-style-type: square;">
<li>uncommon from Fluke (mob on the way to Simcracker near Spargas)</li>
</ul>
</li>
</ul>
</div>
<ul style="list-style-type: circle;">
<li><strong>40 Tasty Mushroom</strong>
<ul style="list-style-type: square;">
<li>uncommon from Fungus (mob before Kaise Pilz)</li>
</ul>
</li>
</ul>
</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><span style="color: #e61942; font-family: georgia; font-size: x-large;">✯Job Mastery lv1</span></span></div>
<div data-tag="spoiler"><strong style="font-size: large;">Kill :</strong>
<ul style="list-style-type: circle;">
<li><strong><span style="font-size: small;">60 Eslie</span></strong>
<ul style="list-style-type: square;">
<li><span style="font-size: small;">mob on the way to Barbad (near Sateria)</span></li>
</ul>
</li>
</ul>
<ul style="list-style-type: circle;">
<li><strong>60 Glew<br /></strong>
<ul style="list-style-type: square;">
<li>mob on the way to Bergen (near Sateria)</li>
</ul>
</li>
</ul>
<div><strong>Farm :</strong>
<ul style="list-style-type: circle;">
<li><strong>1 Wild Dragon Wing&amp;nbsp;</strong>
<ul style="list-style-type: square;">
<li>item from Wild Dragon Wilnes</li>
</ul>
</li>
</ul>
</div>
<ul style="list-style-type: circle;">
<li><strong>10 Hard Skin</strong>
<ul style="list-style-type: square;">
<li>uncommon from Kaimen (mob in the map au Baum Warriors)</li>
</ul>
</li>
</ul>
</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><span style="color: #e61942; font-family: georgia; font-size: x-large;">✯Geobreaker lv1</span></span></div>
<div data-tag="spoiler"><strong style="font-size: large;">Kill :</strong>
<ul style="list-style-type: circle;">
<li><strong><span style="font-size: small;">Jabek</span></strong>
<ul style="list-style-type: square;">
<li><span style="font-size: small;">the boss in industrial city (near Spargas)</span></li>
</ul>
</li>
</ul>
<ul style="list-style-type: circle;">
<li><strong>Azimov<br /></strong>
<ul style="list-style-type: square;">
<li>the boss next to epicenter (near Fort Bailune)</li>
</ul>
</li>
</ul>
<strong><span style="font-size: large;">Farm<br /></span></strong>
<ul style="list-style-type: circle;">
<li><strong>20 Rutile</strong>
<ul style="list-style-type: square;">
<li>uncommun from Hogume in Lograth Outskirts, Or glakire (on the way to Simcracker)</li>
</ul>
</li>
</ul>
<ul style="list-style-type: circle;">
<li><strong>50 Hard Bark</strong>
<ul style="list-style-type: square;">
<li>uncommon from Abete (tree mob like near Spargas)</li>
</ul>
</li>
</ul>
</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><span style="color: #e61942; font-family: georgia; font-size: x-large;">✯Geobreaker lv2</span></span></div>
<div data-tag="spoiler"><strong style="font-size: large;">Kill :</strong>
<ul style="list-style-type: circle;">
<li><strong><span style="font-size: small;">Flammel</span></strong>
<ul style="list-style-type: square;">
<li><span style="font-size: small;">god in divine tower floor 4</span></li>
</ul>
</li>
</ul>
<ul style="list-style-type: circle;">
<li><strong>40 Fire Spirit<br /></strong>
<ul style="list-style-type: square;">
<li>in divine tower</li>
</ul>
</li>
</ul>
<ul style="list-style-type: circle;">
<li><strong>40 Water Spirit</strong>
<ul style="list-style-type: square;">
<li>in divine tower</li>
</ul>
</li>
</ul>
<ul style="list-style-type: circle;">
<li><strong>40 Earth Spirit<br /></strong>
<ul style="list-style-type: square;">
<li>in divine tower</li>
</ul>
</li>
</ul>
<ul style="list-style-type: circle;">
<li><strong>40 Wind Spirit</strong>
<ul style="list-style-type: square;">
<li>in divine tower</li>
</ul>
</li>
</ul>
</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><span style="color: #e61942; font-family: georgia; font-size: x-large;">✯Geobreaker lv3</span></span></div>
<div data-tag="spoiler"><strong style="font-size: large;">Kill :</strong>
<ul style="list-style-type: circle;">
<li><strong><span style="font-size: small;">Jahoel</span></strong>
<ul style="list-style-type: square;">
<li><span style="font-size: small;">boss in Supreme Palace</span></li>
</ul>
</li>
</ul>
<ul style="list-style-type: circle;">
<li><strong>60 Trassi<br /></strong>
<ul style="list-style-type: square;">
<li>mob in Leelids field</li>
</ul>
</li>
</ul>
<div><strong><span style="font-size: large;">Farm :</span></strong>
<ul style="list-style-type: circle;">
<li><strong>30 Angel Flannel</strong>
<ul style="list-style-type: square;">
<li>item from solonia (in Fundamental Globe)</li>
</ul>
</li>
</ul>
</div>
<ul style="list-style-type: circle;">
<li><strong>10 Sharp Scythe</strong>
<ul style="list-style-type: square;">
<li>uncommon from Pendil (on the way to Enina)</li>
</ul>
</li>
</ul>
</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><span style="color: #e61942; font-family: georgia; font-size: x-large;">✯Rush lv2</span></span></div>
<div data-tag="spoiler"><strong><span style="font-size: large;">Farm :</span></strong>
<ul style="list-style-type: circle;">
<li><strong>50 Sharpened Bone <br /></strong>
<ul style="list-style-type: square;">
<li>common from Crisis (mob on the way to sianas near Spargas)</li>
</ul>
</li>
</ul>
<strong><span style="font-size: large;"><br />Kill :</span></strong>
<ul style="list-style-type: circle;">
<li><strong>Sianas</strong>
<ul style="list-style-type: square;">
<li>chapter 1 final boss</li>
</ul>
</li>
</ul>
<ul style="list-style-type: circle;">
<li><strong>50 Mechafrog</strong>
<ul style="list-style-type: square;">
<li>on the way to Mezzaluna (near Spargas)</li>
</ul>
</li>
<li><strong>25 Zlova</strong>
<ul style="list-style-type: square;">
<li>on the way to Sianas (near Spargas)</li>
</ul>
</li>
</ul>
</div>
<div><a style="display: none;"></a><span style="cursor: pointer;"><span style="color: #e61942; font-family: georgia; font-size: x-large;">✯Rush lv3</span></span></div>
<div data-tag="spoiler"><strong style="font-size: large;">Farm :</strong>
<ul style="list-style-type: circle;">
<li><strong><span style="font-size: small;">1 Forest Dragon Horn</span></strong>
<ul style="list-style-type: square;">
<li><span style="font-size: small;">common from Valtia (near Lograth)</span></li>
</ul>
</li>
</ul>
<ul style="list-style-type: circle;">
<li><strong>60 Unknown Fruit<br /></strong>
<ul style="list-style-type: square;">
<li>from Suspice (after lograth in&amp;nbsp;Regth Ravine)</li>
</ul>
</li>
</ul>
<strong><span style="font-size: large;"><br />Kill :</span></strong>
<ul style="list-style-type: circle;">
<li><strong>60 Pepel</strong>
<ul style="list-style-type: square;">
<li>on the way to Old Dragon Altian (near Lograth)</li>
</ul>
</li>
</ul>
<ul style="list-style-type: circle;">
<li><strong>60 Kincy</strong>
<ul style="list-style-type: square;">
<li>on the way to Rita (pnj) (near Lograth)</li>
</ul>
</li>
</ul>
</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><span style="color: #e61942; font-family: georgia; font-size: x-large;">✯Lentus</span></span></div>
<div data-tag="spoiler"><strong style="font-size: large;">Kill :</strong>
<ul style="list-style-type: circle;">
<li><strong><span style="font-size: small;">50 Kanone</span></strong>
<ul style="list-style-type: square;">
<li><span style="font-size: small;">on the way to Altadora (after Elban)</span></li>
</ul>
</li>
</ul>
<ul style="list-style-type: circle;">
<li><strong>50 Ippon-Datara<br /></strong>
<ul style="list-style-type: square;">
<li>in the map of Ganei (near Minaula)</li>
</ul>
</li>
</ul>
<ul style="list-style-type: circle;">
<li><strong>50 Kyon</strong>
<ul style="list-style-type: square;">
<li>on the way to Metalbrow (near Spargas)</li>
</ul>
</li>
</ul>
<ul style="list-style-type: circle;">
<li><strong>50 Middle Ninja</strong>
<ul style="list-style-type: square;">
<li>on the way to Genkaku (near Minaula)</li>
</ul>
</li>
</ul>
</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><span style="color: #e61942; font-family: georgia; font-size: x-large;">✯Claw Mastery lv3</span></span></div>
<div data-tag="spoiler"><strong><span style="font-size: large;">Farm :&nbsp;</span></strong>
<ul style="list-style-type: circle;">
<li><strong>15 Giant Fang&nbsp;</strong>
<ul style="list-style-type: square;">
<li>uncommon from Malfil (before Plazuda boss near Elban)</li>
</ul>
</li>
<li><strong>30 Spongy Hide&nbsp;</strong>
<ul style="list-style-type: square;">
<li>common from Album (before Tarante boss before Elban)</li>
</ul>
</li>
<li><strong>1 Light Crystal&nbsp;</strong>
<ul style="list-style-type: square;">
<li>common from Plazuda (near Elban)</li>
</ul>
</li>
</ul>
<strong><span style="font-size: large;">Kill :</span></strong>
<ul style="list-style-type: circle;">
<li><strong>30 Hallucigenia</strong>
<ul style="list-style-type: square;">
<li>on the way to Gusanoth (near Elban)</li>
</ul>
</li>
<li><strong>30 Meanae</strong>
<ul style="list-style-type: square;">
<li>on the way to Altadora (near Elban)</li>
</ul>
</li>
</ul>
</div>
<div><a style="display: none;"></a><span style="cursor: pointer;"><span style="font-family: georgia; font-size: x-large;">✯Asura Aura</span></span></div>
<div data-tag="spoiler"><strong><span style="font-size: large;">Farm :</span></strong>
<ul style="list-style-type: circle;">
<li><strong>1 Bright Morning Dew</strong>
<ul style="list-style-type: square;">
<li>Rare item of Solemnity (before Death Chill boss near Sateria)</li>
</ul>
</li>
<li><strong>10 Herderite</strong>
<ul style="list-style-type: square;">
<li>uncommon of Mono (before Zazel dongeon ? can't remember)</li>
</ul>
</li>
</ul>
<br /><span style="font-size: large;"><strong>Kill : </strong></span>
<ul style="list-style-type: circle;">
<li><strong>60 Pareld Bear</strong>
<ul style="list-style-type: square;">
<li>Near the Rita's house next to Lograth city</li>
</ul>
</li>
<li><strong>1 Death Chill</strong></li>
</ul>
</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><span style="font-family: georgia; font-size: x-large;">✯Panacea</span></span></div>
<div data-tag="spoiler"><br /><span style="font-size: medium;"><strong>Farm : </strong></span>
<ul style="list-style-type: circle;">
<li><strong>40 Avian Talon </strong>
<ul style="list-style-type: square;">
<li>Lague @living Forest (Somewhere near Krelden Church Street)</li>
<li>Pterus @kijiko Cirque (Near Dyuf Village)</li>
</ul>
</li>
<li><strong>20 Malachite</strong>
<ul style="list-style-type: square;">
<li>Shiki-Oni @mt. Ochikubo (Near Kakeula/ On the Way to Sakimori no Ryu)</li>
</ul>
</li>
</ul>
<span style="font-size: medium;"><strong>Kill : </strong></span>
<ul style="list-style-type: circle;">
<li><strong>60 Oltra</strong>
<ul style="list-style-type: square;">
<li>(High HP mob @ruined Abbey F1 or F3 which is on the way to Moldus (Closest town is Krelden Church Street)</li>
</ul>
</li>
<li><strong>60 Xemn</strong>
<ul style="list-style-type: square;">
<li>@fort Viota on the way to Morbeelzem (Closet town is Pilaneza)</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/27/171027064709410613.png" alt="" /></span></div>
<div data-tag="spoiler"><br /><span style="font-size: large;"><strong><span style="color: #045f5c;">No matter the build you choose, here are combo that you can use : </span></strong></span><span style="font-family: 'courier new';"><span style="color: #e61942; font-size: x-large;"><strong><br /></strong></span><br /><span style="font-size: medium;"><strong>MAX ATK</strong> = 6 yellow lines + 2 green lignes = <em>2 Red + 3 greeb</em><br /><br /><strong>MAX AUTOSKILL</strong> = 6 purple lines + 2 blue lines = <em>2 red + 3 blue<br /><br /></em><strong>MAX EVA</strong> = 8 green lines = <em>5 green<br /><br /></em><strong>MAX HP/DEF</strong> = 8 red lines = <em>5 red</em></span><br /><br /><span style="font-family: 'comic sans ms';"><strong><span style="font-size: x-large;">▲Recommended Al crysta ▲</span></strong></span><br /><br /><span style="font-size: large;"><strong>▲Barbad</strong></span><br />Range+1<br /><br /><span style="font-size: large;"><strong>▲Zazel</strong></span><br />ATK +15, ATK +2%, MATK +30, MATK +2%<br /><br /><strong><span style="font-size: large;">▲Altan</span></strong><br />HP +1000, Autoskill +1%, Range Cut +5%<br /><br /><span style="font-size: large;"><strong>▲Valtia</strong></span><br />ATK +3%, Absolute Eva +2%, MATK - 3%<br /><br /><span style="font-size: large;"><strong>▲Maelriel</strong></span><br />ASPD +10%, Cast Time - 10%, Delay -0.5 Second<br /><br /><span style="font-size: large;"><strong>▲Cerbera</strong></span><br />ASPD + 10% Absolute Eva+ 5% Magic Eva+ 5%<br /><br /><span style="font-size: large;"><strong>▲Mamonea</strong></span><br />Critical Damage + 5% Critical Rate + 10% Magic Resistance - 10%<br /><br /><span style="font-size: large;"><strong>▲Cheltil</strong></span><br />Skill Delay -1, Item delay +0.5<br /><br /><span style="font-size: large;"><strong>▲Leviam</strong></span><br />MaxMP + 10% Magic Resistance + 10% Magic Eva + 5% Cast Defense + 5%<br /><br /><span style="font-size: large;"><strong>▲Enina</strong></span><br />ATK &middot; MATK up by Lv, Absolute Eva - 10%, Magic Eva -10%<br />[ATK &middot; MATK + Lv &divide; 4]<br /><br /><span style="font-size: large;"><strong>▲Ouvel</strong></span><br />ATK + 6%, MATK + 6%, MaxHP - 10%, MaxMP - 10%<br /><br /><span style="font-size: large;"><strong>▲Shelk</strong></span><br />AGI + 5 Evasion + 15% Absolute &amp; Magic Eva + 5% Counter On Evasion + 5%<br /><br /><span style="font-size: large;"><strong>▲ Merario</strong></span><br /> VIT + 5, ATK + 2%, DEF + 140<br /><br /><span style="color: #c96e2d; font-weight: bold; font-size: large;">▲Sauro II</span><br /><span style="color: #000000; font-size: small;">Melee +3% to all elements, All magic +3%, Delay -0.5 sec, Autoskill +2%</span><br /><br /><span style="color: #c96e2d; font-weight: bold; font-size: large;">▲ Halios</span><br /><span style="color: #000000; font-size: small;">Autoskill +5% Hate rise +20% ASPD +20%</span><br /><br /><strong style="color: #c96e2d; font-size: large;">▲ Arick</strong><br /><span style="color: #000000; font-size: small;">Critical Damage +6% Melee and Magic R -5% Magic evasion -12%</span><br /><br /><strong style="color: #c96e2d; font-size: large;">▲ Cordal</strong><br />Autoskill +3%, Critical Damage + 3%<br /><br /></span></div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/27/17102706471247300.png" alt="" /></span></div>
<div data-tag="spoiler"><strong><span style="font-size: large;">If you are a new player without a lot of money, write the names of the equipements listed here in the stalls, and buy the cheaper <img style="max-width: 100%;" src="//storage.proboards.com/forum/images/smiley/wink.png" alt=";)" /> #<a title="@ahsan" href="/user/9499">'AhSaN'</a></span></strong><br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/27/171027072944609331.png" alt="" /></span></div>
<div data-tag="spoiler"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/27/17102707294458010.png" alt="" /><br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Sion Capel III&nbsp;</span>- <span style="font-size: small;">(upgrade of Sion Capell at Eldan, then Mioreita) "Gerust"</span></strong><strong>✧Universal Attribute</strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>ATK : 268</strong></span><br />N. magic +10%, Heal reward up by AGI, Auto HP recovery +30%, Magic R -20%, All elements, M attack chance</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Tarnovo Lahr knife</span>&nbsp;(name TBC) - <span style="font-size: small;">(upgrade of Brigant Knife at Eldan, then Varant) "Nuit"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>ATK : 287 - 302</strong></span><br />Physical Power +750, Heal Recovery +12%, Magic Resistance -15%, Critical Damage up by INT, MP Natural Recovery +25%<br /><span style="font-size: small;"><em>Critical Damage Increase = Critical Damage + 10% if INT is 256, Critical Damage + 16% if INT is 400 (Increase for every INT +1) &lt; this was for the first up, idk if it has changed for second up</em></span></div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Maniji II</span> - <span style="font-size: small;">(upgrade of Maniji at Underground Bailune) "maelriel"</span></strong><strong>✧Universal Attribute</strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>ATK : 248 - 263</strong></span><br />Universal Attribute, ATK+8%, Hate -15%, Physical Power Increased by LVL, When Attacking: Small Amount of MP Recovery</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Ceduro II&nbsp;</span>- (upgrade of Ceduro at Mioreita Castle)<span style="font-size: small;"> "Veleno Rosa"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>ATK : 292</strong></span><br />Magic R -10%, Dex+8 Autoskill +12% ATK up based on Lv. Poison dmg +25% Critical up, Ailment R +10%<br /><em>Notes: ATK increase = Lv &times; 0.75</em></div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Dragon's Claw II</span>- <span style="font-size: small;">(upgrade of Dragon's Claw at Ioleu Village) "Carpentry lvl 89"</span></strong><strong>✧Dark Element</strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>dragon's Claw III should be out at Maldario but idk stats<br />ATK : 260 - 275</strong></span><br />Dark Element, Magic Recovery -15%, Autoskill +5%, Evasion +10%, Critical Damage +10%, MaxHP+20%, HP Absorb Chance</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Glow Fist</span> -<span style="font-size: small;"> "Smithing lvl 151"</span></strong><strong>✧Light Element</strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>ATK : 240 - 255</strong></span><br />ATK: 240-255 during light magical tolerance -10% Light magic +10% Critical damage +13% MaxHP increased attack in INT, magic attack with probability　</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Freesia Claw</span> -<span style="font-size: small;"> "Xmas Event"</span></strong><strong>✧Water Element</strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>ATK : 253</strong></span><br />crt dmg+12% melee+20% to fire melee-20% to water melee+5% magic counter chance</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Prox Claw </span>- <span style="font-size: small;">(upgrade of Fire Claw at Port Spargas, then Kreldan, then Mioreita) "Vork"</span></strong><strong>✧Fire Element</strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>ATK : 280&nbsp;</strong></span><br />Fire attribute Fire magic +15% CRT +3 Evasion +10% Autoskills triggered +5% Magic R -15% during defense, magic counterattack with probability<br /><em>(Hidden Correction: MP Consumption -10%) <br /></em></div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Snead Claw</span>&nbsp;II- (upgrade of Snead Claw at Mioreita Castle)<span style="font-size: small;"> "Minela II"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>ATK : 280</strong></span><br />Magic R -20%, Melee +25% to Neutral, Critical damage +15% MaxMP +25%, Additional attack chance<br /><em>Notes: Additional attack = (currently MP / 2 + own Lv over enemy Lv over enemy DEF + enemy DEF / 3) * attribute + given damage / 10</em></div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Eclair III</span> - <span style="font-size: small;">(upgrade of Eclair at Kreldan, then Reoctove) "Fort Bailune Blacksmith" ✧Light Element</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>ATK : 243 - 273</strong></span><br />Light Element, Heal Reward up, Absolute Evasion +8%, MaxHP+5%, Magic Resistance -15%, Normal Attack x1.5 Chance by Attack (Hidden Correction: 50% Additional Attack Damage), Range Cut +15%</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Blatt Arm III&nbsp;</span>- <span style="font-size: small;">(upgrade of Blatt Arm at Eldan, then Maldario ) "Leaf Dragon Blatt"</span></strong><strong>✧Earth Element</strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>ATK : 281 DEF : 2</strong></span><br />Rock Element Hate -15% Magic R -15% ATK +8% VIT +7 When VIT less of equal 127, Hate -25%<br /><em>(Hidden Correction: Range +1?) <br />(Hidden Performance: When Enemy is Defeated, MP Recovery by 1/100 of the Given Damage)</em></div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Sauro Fang L4</span>&nbsp;-<span style="font-size: small;"> "Sauro Chest 4"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>ATK : 287 - 291</strong></span><br />ATK +16% Critical damage +16% MaxMP +25% VIT +10 AGI +10 Melee Pierce +13% Range +1 Autoskill +5% ASPD +10% [X = 0.05 * AGI] [Heal Recovery up by X]</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Knuckle Shield II</span> - <span style="font-size: small;">(upgrade of Knuckle Shield at Maios) "smithing lvl 101"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>Second up is out at aqruf but idk stats<br />ATK: 258 DEF: 5 </strong></span><br />MaxMP +30% Auto MP recovery +20% VIT +8 Rate cut +15% Melee and Magic R +10% defense, HP recovery by consuming MP</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Girouette II</span>&nbsp;- (upgrade of Girouette at Varant)&nbsp;<span style="font-size: small;"> "Green Morphy"</span></strong><strong><span style="color: #d7005a;">✧Dark Element</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>ATK : 285</strong></span><br />Dark Element, Magic R -30% Improved Critical ATK +6% AGI +9 Blind+3%, Triple damage chance by attack</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Ice Crush</span> - <span style="font-size: small;">(upgrade of Grail at Pilaneza City, Then Deeos village) "Grail"</span></strong><strong><span style="color: #028bff;">✧Water Element</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>ATK : 259</strong></span><br />atk+10% autoskill +6%melee pierce+5% m.resist-5%<br />50% of crit stat to m.atk</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Evil Dog Glove</span> - <span style="font-size: small;"> "Production Tailoring lv190"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>ATK : 296 - 311 </strong></span><br />Dark Element, Critical Up, Magic Resistance -10%, ATK +20%, Triple Damage Chance by Attack.</div>
<br /><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/27/171027072945161731.png" alt="" /><br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Dragon mail III </span>- <span style="font-size: small;">(upgrade at Sateria, then Reoctove) "Beelzenom"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF: 18-24, ATK:15 </strong></span><br />ATK+9%, Autoskill +5%, MATK+10%, Critical Rate +15, Critical Damage +8%, Melee &amp; Magic Resistance +6%, Absolute Accuracy +15% (Hidden Performance: When Defending, Probability of Physical Counterattack. When Counterattack is Triggered, Disable the Damage)</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Dunkelheit III</span> - <span style="font-size: small;">(upgrade at Fort Bailune, then Deeos Village) "Sianas"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF:19-22, ATK:10</strong></span><br />ATK+7%, MATK+10%, Critical Rate +20, Critical Damage +7%, Reflect +5%, Autoskill +3%</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Heinrich Mail II</span> - <span style="font-size: small;">(upgrade at Eldan then Varant) "Raton 2"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF:23 - 28&nbsp;</strong></span><br />ATK +14%, MATK +14%, Melee pierce +6%, Magic pierce +6% Magic evasion +8% Heal reward +1000, Damage cut if HP is under 25% or lower<br /><em>(Hidden Correction: INT+3, VIT+3)</em></div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Leather Coat III</span>- <span style="font-size: small;">(upgrade at Drafbourg, then Ioleu village) "Mooth"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF:16-22</strong></span><br />Auto MP Recovery +50%, MDEF+15%, Absolute &amp; Magic Evasion +6%, Magic Avoidance +2%, Burn Duration &ndash; 0.5 seconds, Heal Reward +1500</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Ultimi III </span>- <span style="font-size: small;">(upgrade at Eldan, then Deeos) "Fort bailune blacksmith"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF:23-28, ATK:5</strong></span><br />ATK+12%, MATK+16%, Critical up, Skill Delay -1.0 seconds, Accuracy +100, Absolute Evasion +10%, Melee +600</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Ira III</span> - <span style="font-size: small;">(upgrade at Maios then Mioreita) "Kreya Blacksmith"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF : 12 - 15 ATK : 20 </strong></span><br />ATK +16% Magic Evasion +10% Critical rate +25% Autoskill +10% Critical damage +7% Melee +1% Melee R -25% MaxMP +15%</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Schwermer II</span> - <span style="font-size: small;">(upgrade at Underground Bailune) "Behemoth"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF : 17 - 23</strong></span><br />Critical Damage +14%, Autoskill +4%, VIT+7, Skill Delay -0.4 seconds, When Defending, Melee Counter Chance<br /><em>(When Counterattack is Triggered, Damage Reduction is Disabled)</em><em><br /></em></div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Bellow of Order II -</span><span style="font-size: small;"> (upgrade at Maldario)</span><span style="font-size: small;">"Gatekeeper"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-size: medium;"><span style="font-family: 'courier new';"><strong>DEF : 25 - 29</strong></span></span><br />Melee&amp;Magic R +13%, Skill delay -1.2sec, ATK up by STR, MATK up by INT, Damage cut chance by defense<br /><em><span style="color: #326298;">[X = 1.20 * STR] [ATK up by X]<br /> [X = 1.20 * INT] [MATK up by X]</span><br /></em></div>
<br /><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/27/171027072944884626.png" alt="" /><br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Asura Stole III</span> - <span style="font-size: small;">(upgrade at Underground Bailune then Aqruf) "Nommars"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF:3-7, ATK:33</strong></span><br />ATK +6% Critical damage +8% Absolute Avoidance +9% Magical evasion +9% Item recovery -10%. If DEX &gt;= 256 Critical damage +2%</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Aulis Gale</span><span style="font-size: small;"> "Stormia"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF : 1 - 6-7</strong></span><br />Critical rate +20 Earth R -20%, Evasion rate up chance by attack, DEX +5 Evasion &amp; Magic evasion +10%<br /><em>Notes: Evasion rate rise is about 10 seconds, AVD is AGI &times; 1.2 increase</em></div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Barbarotita III</span>- <span style="font-size: small;">(upgrade at Underground Bailune then Mioreita) "Layve"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF : 13 - 19 ATK : 20 - 23</strong></span><br />ATK +14% Skill Delay -1.2s Accuracy -15% Knockout -1.0s STR +10 Damage cut +12%</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Brave Cape II</span> - <span style="font-size: small;">(upgrade at Underground Bailune) "Jaguar"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF : 7-8 ATK : 15</strong></span><br />STR+15, ATK+7%, Hit+30, Autoskill Trigger +3%, When Defending, Probability of Attack Power Increment</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Doggy Ears III</span>- <span style="font-size: small;">(upgrade at Port Spargas, then Reoctove) "Cerberus (maze)"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF : 23</strong></span><br />Evasion +15%, MATK +6%, Autoskill +6%, Absolute evasion +10%, INT +5</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Force Helm III&nbsp;</span>- <span style="font-size: small;">(upgrade at Eldan then Mioreita) "Ganaph"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF : 9 - 12 ATK : 27 </strong></span><br />ATK +5% Critical damage +13% Hate Rise +10% Melee R +10% Magic R +10% CRT +10 If [CRT &gt; 300] then Melee Pierce +10%</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Glory Cape</span> -<span style="font-size: small;"> "Almas"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF : 12 - 17-18</strong></span><br />INT &amp; VIT +2, Adds ATK &amp; MATK +5%, Melee &amp; Magic R +5%, Autoskill +5% if Lv &gt; 199.</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Luxe Cloak II</span> - <span style="font-size: small;">(upgrade at Mioreita Castle) "Twin Colons"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>ATK : 14 DEF : 14</strong></span><br />ATK +12% Magic evasion +5%</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Sector Plaster II&nbsp;</span>- <span style="font-size: small;">(upgrade at Mioreita Castle) "Impesh"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF : 22 ATK : 6</strong></span><br />ATK +8% AGI +10 Magic evasion +4% Autoskills +7%</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Medim Corona III&nbsp;</span>- <span style="font-size: small;">(upgrade at Underground Bailune then Aqruf) "Echidna"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF : 15 - 17 </strong></span><br />Melee up by 350% of Lv, ATK +6%, Critical damage +10% with Swords, CRT +5, Range +2 with Claws, Melee Pierce +5%<br /><em> [X = 3.50 * Lv] [Melee up by X] </em></div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Monty Beret II</span>- (upgrade at Varant city)<span style="font-size: small;"> "Cianshi"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF : 12 - 15</strong></span><br />Melee R +8%, Magic R +8%, Skill delay -1.2 sec, Absolute accuracy +9%, ATK up by DEX, Item recovery +25%, ATK +9%</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Reckless III</span> - <span style="font-size: small;">(upgrade at Ioleu Village then Maldario) "Piconi"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF : 14 ATK : 35 </strong></span><br /> ATK +11% MATK +11% Absolute Evasion +9% Magic Evasion +9% Melee R -3% Magic R -3% Rate cut -10% Heal Reward +10%</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Eye Bandage II&nbsp;</span>- (upgrade at Varant)<span style="font-size: small;"> "Third Eyes"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF : 4 - 5 ATK : 3</strong></span><br />CRT +5 Critical damage +14% Accuracy +10% Counter on Evasion +13%</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Daiginjo holiday</span> - <span style="font-size: small;">(upgrade at Anniversary Event) "Anniversary Event"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>ATK : 18 DEF : 9 - 12</strong></span><br />Accuracy Rate -30%, Critical Rate -70%, Hate Rise +30%, Critical Damage +22%, Autoskill +12%</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Huge Cherry Blossom </span>- <span style="font-size: small;">(upgrade at Anniversary Event) "Anniversary Event"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF : 20 - 22</strong></span><br />MaxHP+12%, Heal Received +10%, Ailment Resistance +25%, Item Recovery +10%, MaxMP-8%, ASPD-10%, When Attacking, Probability of Absorb Damage</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Arelta III&nbsp;</span>- <span style="font-size: small;">(upgrade at Ioleu Village then Maldario) "Sateria Lottery"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF : 22 - 25 </strong></span><br />ATK +9% MATK +9% Absolute Evasion +7% Magic Evasion +7% MaxHP +20% Auto MP Recovery +20% Critical rate +20 Skill Delay -1.2s</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Nasturtium</span> - <span style="font-size: small;"> "Production Tailoring lv 152"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF: 13-19 ATK: 25 </strong></span><br />Melee R +10%, Triple damage chance. Skill delay -0.5 sec, MP cost -20% if INT &gt; 255</div>
<br /><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/27/171027072944334276.png" alt="" /><br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Dodge Charm</span> -<span style="font-size: small;"> "Neknott"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF : 5 - 7</strong></span><br /> AGI +1 Evasion +3%</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><span style="font-size: large;"><strong>◈Volk Shoes</strong></span><strong> - <span style="font-size: small;">"Nozuchi"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF : 0 - 3</strong></span><br />Evasion +10%, Absolute evasion +2%</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Hard Scale Claw </span>- <span style="font-size: small;">"Whimp"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF : 0 - 3</strong></span><br />Shell break +5% if Monk. AGI +15, Autoskill +2% with Claws. Magic R -10%</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Ring of Rush</span> -<span style="font-size: small;"> "Gigante"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>ATK : </strong></span><br />DEX &amp; Accuracy &amp; Critical rate greatly decreases. Great ATK up by Lv<br /><em>Notes: ATK + 300 ATK + 3% (according to the DEX- ATK- status rising value as of each weapon species)</em></div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Powerful Ring</span> - <span style="font-size: small;"> "Masked Soldier lv206 -208"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF : 0-3</strong></span><br />ATK +5% MaxMP -40% If [Lv &gt; 200] then MaxMP +50%</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Soul Sucker Fang</span> - <span style="font-size: small;">"Production Alchemy lv195"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF : 0-3</strong></span><br />ATK&amp;MATK +2% HP recovery chance by attack</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Aconitum</span> - <span style="font-size: small;"> "Zlova"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF : 0-3</strong></span><br />Autoskills +7% ASPD +10% Magic R -10% attack, his poison added in the probability</div>
</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/27/171027072943977408.png" alt="" /></span></div>
<div data-tag="spoiler"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/27/17102707294458010.png" alt="" /><br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Stake Knuckle</span>-<span style="font-size: small;"> "Mignon" (special claw)</span></strong></span></div>
<div data-tag="spoiler"><br /><span style="font-family: 'courier new'; font-size: medium;"><strong>ATK : 190 - 200</strong></span><br />Melee up by Lv, Melee counter chance by defense, Special Claw<br /><em>Notes: ASPD minimum fixed physical power = Lv &times; 9 physical counterattack = the received damage worth</em></div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Mortal Dagger</span> -<span style="font-size: small;"> "Carpentry lv177"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>ATK : 271-285 DEF: 6</strong></span><br />MATK +14%, Magic R +4%, Cast time -15%, Cast defense +10%, Skill delay -0.5 sec, Magic counter counter chance by defense<br /><em>Notes: (hidden performance: during the defense, MP40% recovery? when magic counterattack, MP20% recovery with a probability?)</em></div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Uroboros</span> -<span style="font-size: small;"> "Telon"</span></strong><strong>✧Light Dark Element</strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>ATK : 262 - 268</strong></span><br />physical +20% in light-Dark Element ATK +8% MATK +10% MP cost -20% Skill delay -1 sec</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Wicktrace III</span> - <span style="font-size: small;">(upgrade at Eldan, then Mioreita Castle) "Nuitram"</span></strong><strong>✧4 Elements</strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>ATK : 275 - 290</strong></span><br />Melee through +6%, Magic evasion +15%, Critical damage +12%, Additional attack chance by attack, Critical rate +30, 4 Elements <br /><em>(hidden correction: AVD +10%)</em><em><br /></em></div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Jagged Shuriken III</span> - <span style="font-size: small;">(upgrade at Eldan, then Reoctove) "Gadave"</span></strong><strong>✧Water Element</strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>ATK : 263 - 274</strong></span><br />Water element Hate rise -20% Critical rate +30 MATK +9% Critical damage +8% Item delay -1 sec</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Dragon Roar III </span>- <span style="font-size: small;">(upgrade at Sateria, then Maios) "Ziddu"</span></strong><strong>✧Fire Element</strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>ATK:262-271, DEF:5</strong></span><br />Fire Element, ASPD-10%, MaxHP+30%, Critical Damage +10%, Critical Rate +30, CRT+6</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Air Slicer III </span>- <span style="font-size: small;">(upgrade at Drafbourg, then Ioleu Village) "Horned Ram"</span></strong><strong>✧Wind Element</strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>ATK:266-267, DEF:3 </strong></span><br />Wind Element, Critical Rate +30, Melee +300, Skill Delay -0.7 seconds, Small Critical Damage Up by AGI</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Stavros</span> - <span style="font-size: small;"> "mioreita blacksmith"&nbsp;<span style="color: #69055d;">✧Dark Element</span></span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>ATK : 288 - 292</strong></span><br />INT +8, MaxMP +10%, Skill delay -1.2 sec, -50% damage to Light, Melee +25% to Dark. Evasion rate up chance</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Eventail III</span> - <span style="font-size: small;">(upgrade at Eldan then Aqruf) "Dammar"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>ATK:297 - 312&nbsp;</strong></span><br />Melee +30%, Casting Time -50%, Small counter chance up by AGI, Magic evasion +5%, Twice attack chance</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Mio Filio II</span> - <span style="font-size: small;">(upgrade at Varant) "Fimbul"<span style="color: #bb7f00;">✧Earth Element</span></span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>ATK : 291</strong></span><br />Melee to Wind +20% Melee to Earth -20% ATK +8% Melee Pierce +8% Critical damage +8% [MaxMP up by Lv] Skill Delay -0.8s</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Whirlwind</span> - <span style="font-size: small;"> "Production Chasing lv147"<span style="color: #11ad04;">✧Wind Element</span></span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>ATK : 245-260</strong></span><br />Wind element, AGI +10 ATK +6%, Twice attack chance, Critical damage up by INT</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Prescience III</span> - <span style="font-size: small;">(upgrade at Eldan, then Varant) "Dajarte"<span style="color: #69055d;">✧Dark Element</span></span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>ATK : 294 - 303</strong></span><br />Magic evasion +12%, Melee up by Lv. Melee through +5%, ATK +12%, Thrice attack chance, Dark element</div>
<br /><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/27/171027072945161731.png" alt="" /><br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Ultimi III</span>- <span style="font-size: small;">(upgrade at Eldan, then Deeos Village) "Fort Bailune Blacksmith"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF: 23-28 ATK: 5 </strong></span><br />ATK +12% MATK +16% Critical up, Delay -1 sec, Accuracy +100, Absolute evasion +10%, Melee +600</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Bellow of order</span>&nbsp;<span style="font-size: large;">II&nbsp;</span>-<span style="font-size: small;">&nbsp;(upgrade at Maldario) "Gatekeeper"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF : 25 - 29<br /></strong></span><br /><span style="color: #326298; font-size: small;">Melee&amp;Magic R +13%, Skill delay -1.2sec, ATK up by STR, MATK up by INT, Damage cut chance by defense<br /><br /><em>[X = 1.20 * STR] [ATK up by X]<br /><br />[X = 1.20 * INT] [MATK up by X]</em></span></div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Exelis IV</span>&nbsp;- <span style="font-size: small;">(upgrade at Port Spargas, then Pilaneza, then Maldario) "Schlingel"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF: 6 - 12 ATK: 15</strong></span><br />ATK +8% MATK +8% Evasion +15% Magic R +13% Skill Delay -1.8s</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Schwermer III</span> - <span style="font-size: small;">(upgrade at Underground Bailune then Aqruf) "Behemoth"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF:17 - 23</strong></span><br />Critical Damage +16%, Autoskill +5%, VIT+9, Skill Delay -1 seconds, When Defending, Melee Counter Chance<br /><em>(When Counterattack is Triggered, Damage Reduction is Disabled)</em></div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Dragon mail III</span> - <span style="font-size: small;">(upgrade at Sateria, then Reoctove) "Beelzenom"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF:18-24, ATK:15</strong></span><br />ATK+9%, Autoskill +5%, MATK+10%, Critical Rate +15, Critical Damage +8%, Melee &amp; Magic Resistance +6%, Absolute Accuracy +15% <br /><em>(Hidden Performance: When Defending, Probability of Physical Counterattack. When Counterattack is Triggered, Disable the Damage)</em></div>
<br /><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/27/171027072944884626.png" alt="" /><br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Monty Beret II</span>&nbsp;- (upgrade at Varant city)<span style="font-size: small;"> "Cianshi"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF: 13 - 18</strong></span><br />Melee R +8%, Magic R +8%, Skill delay -1.2 sec, Absolute accuracy +9%, ATK up by DEX, Item recovery +25%, ATK +9%<br /><em>Notes: The ATK every DEX1 + 0.75</em></div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Daiginjo II </span>- <span style="font-size: small;">(upgrade at Anniversary Event) "Anniversary Event"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF:9 - 12, ATK: 18</strong></span><br />Accuracy Rate -30%, Critical Rate -70%, Hate Rise +30%, Critical Damage +22%, Autoskill +12%</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Separation Arrow </span>-<span style="font-size: small;"> "White Day Event (?)"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF: 0 - 3 ATK: 10 </strong></span><br />MaxHP -10%, Delay -0.5 sec, ATK +5%, Critical Damage +10%, Recoil +1%. During White Day event, probability of physical attack.</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Arelta II</span> - <span style="font-size: small;">(upgrade at Ioleu Village) "Sateria Lottery (?)"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong> DEF:22 - 25</strong></span><br />ATK &amp; MATK+7%, Absolute &amp; Magic Evasion +6%, MaxHP+15%, Auto MP Recovery +20%, Critical Rate +20, Skill Delay -1 seconds</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Barbarotita III</span> - <span style="font-size: small;">(upgrade at Underground Bailune then Mioreita) "Layve"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF:10 - 16, ATK: 20</strong></span><br />ATK +14% Skill Delay -1.2s Accuracy -15% Knockout -1.0s STR +10 Damage cut +12%</div>
<br /><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/27/171027072944334276.png" alt="" /><br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Disaster Stone</span> -<span style="font-size: small;"> "Smithing lvl 120"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF : 0 - 3 </strong></span><br />MaxHP-20% recoil damage 1% VIT ATK increase<br />Notes: ATK increase = LV over VIT ≦ 300</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Hard Scale Claw</span> -<span style="font-size: small;"> "Whimp"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF : 0 - 3 </strong></span><br />Shell break +5% if Monk. AGI +15, Autoskill +2% with Claws. Magic R -10%</div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><strong><span style="font-size: large;">◈Gaiety Ring</span> -<span style="font-size: small;"> "Wrath Chilo"</span></strong></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new'; font-size: medium;"><strong>DEF : 0 - 3 </strong></span><br />MP cost +25% Lv200 or more of the case, little is MATK and Autoskills the INT increase<br /><em>Notes: Auto Skills trigger percentage + 10% in the INT400?</em></div>
<br /><br /></div>
</div>
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/27/171027064712919307.png" alt="" /></span></div>
<div data-tag="spoiler"><br /><span style="font-family: 'courier new';"><span style="font-family: 'courier new';"><span style="font-family: georgia;"><strong><br /><span style="font-size: large;">◇Boss Colon</span></strong></span></span></span>
<ul>
<li><span style="font-size: small;">ATK +12, ATK +6%, DEF -4%</span></li>
</ul>
<span style="font-family: 'courier new';"><span style="font-family: 'courier new';"><span style="font-family: georgia;"><strong><br /><span style="font-size: large;">◇Cerberus</span></strong></span></span></span>
<ul>
<li><span style="font-size: small;">-10 Crit Rate, +12% Crit Dmg</span></li>
</ul>
<span style="font-family: 'courier new';"><span style="font-family: 'courier new';"><span style="font-family: georgia;"><strong><br /><span style="font-size: large;">◇Dorry</span></strong></span></span></span>
<ul>
<li><span style="font-size: small;">Atk 6% rate cut -10% Additional 6% atk and melee +300 if on armor</span></li>
</ul>
<span style="font-family: 'courier new';"><span style="font-family: 'courier new';"><span style="font-family: georgia;"><strong><br /><span style="font-size: large;">◇Ganei</span></strong></span></span></span>
<ul>
<li><span style="font-size: small;">ATK +10%, MaxHP -30%, MaxHP +30% when equipped to a special equipment</span></li>
</ul>
<span style="font-family: 'courier new';"><span style="font-family: 'courier new';"><span style="font-family: georgia;"><strong><br /><span style="font-size: large;">◇Magonza</span></strong></span></span></span>
<ul>
<li><span style="font-size: small;">Melee+200, Magic R-10%. adds atk+9% and magic R+10% on Armor</span></li>
</ul>
<span style="font-family: 'courier new';"><span style="font-family: 'courier new';"><span style="font-family: georgia;"><strong><span style="font-size: large;"><br /></span><span style="font-size: large;">◇Minenaga</span></strong></span></span></span>
<ul>
<li><span style="font-size: small;">Crit Damage +5%, Crit Damage +5% when equipped to an armor</span></li>
</ul>
<span style="font-family: 'courier new';"><span style="font-family: 'courier new';"><span style="font-family: georgia;"><strong><br /><span style="font-size: large;">◇Oritius</span></strong></span></span></span>
<ul>
<li><span style="font-size: small;">ATK +9%, HP natural recovery -20% </span></li>
</ul>
<span style="font-family: 'courier new';"><span style="font-family: 'courier new';"><span style="font-family: georgia;"><strong><br /><span style="font-size: large;">◇Plazuda</span></strong></span></span></span>
<ul>
<li><span style="font-size: small;">ATK +5%, ATK +3% when equipped to a weapon</span></li>
</ul>
<span style="font-family: 'courier new';"><span style="font-family: 'courier new';"><span style="font-family: georgia;"><strong><br /><span style="font-size: large;">◇Raton</span></strong></span></span></span>
<ul>
<li><span style="font-size: small;">Critical Damage +14%, Mp Cost +10%, Adds Atk+6% on Additional Gear</span></li>
</ul>
<span style="font-family: 'courier new';"><span style="font-family: 'courier new';"><span style="font-family: georgia;"><strong><br /><span style="font-size: large;">◇Schlingel</span></strong></span></span></span>
<ul>
<li><span style="font-size: small;">ATK +6, ATK +8%, Critical rate -10</span></li>
</ul>
<span style="font-family: 'courier new';"><span style="font-family: 'courier new';"><span style="font-family: georgia;"><strong><br /><span style="font-size: large;">◇Vida</span></strong></span></span></span>
<ul>
<li><span style="font-size: small;">atk+4% hate rise+15%, adds atk+8% hate rise-15% on addgear</span></li>
</ul>
<span style="font-family: 'courier new';"><span style="font-family: 'courier new';"><span style="font-family: georgia;"><strong><br /><span style="font-size: large;">◇Warrior of Light</span></strong></span></span></span>
<ul>
<li><span style="font-size: small;">ATK +10%, Magic Resistance -10%. When equipped to special equipment, chance of double attack. (Consumes auto skill) </span></li>
</ul>
<span style="font-family: 'courier new';"><span style="font-family: 'courier new';"><span style="font-family: georgia;"><strong><br /><span style="font-size: large;">◇Ziddu</span></strong></span></span></span>
<ul style="list-style-type: disc;">
<li><span style="font-size: small;">atk+5% autoskill+3% in weapons</span></li>
</ul>
<span style="font-family: 'courier new';"><span style="font-family: 'courier new';"><span style="font-family: georgia;"><strong><span style="font-size: large;">◇Raguel</span></strong></span></span></span>
<ul style="list-style-type: disc;">
<li><span style="font-size: small;">ATK+8%, Rate cut +5% Additional attack chance on Weapons (consumes autoskill)</span></li>
</ul>
<span style="font-family: 'courier new';"><span style="font-family: 'courier new';"><span style="font-family: georgia;"><strong><span style="font-size: large;">◇Veleno Rosa</span></strong></span></span></span>
<ul style="list-style-type: disc;">
<li><span style="font-size: small;">Poison+10% Delay -0.1sec, Additional attack Chance, Dmg up if poisoned (Consumes autoskill)</span></li>
</ul>
<span style="font-family: 'courier new';"><span style="font-family: 'courier new';"><span style="font-family: georgia;"><strong><span style="font-size: large;">◇Iniliba</span></strong></span></span></span>
<ul style="list-style-type: disc;">
<li><span style="font-size: small;">Damage cut chance by defense, Atk and Matk +10% on armors, (Consumes Autoskill)</span></li>
</ul>
<span style="font-family: 'courier new';"><span style="font-family: 'courier new';"><span style="font-family: georgia;"><strong><span style="font-size: large; color: #07b867;">◇Wyn</span></strong></span></span></span>
<ul style="list-style-type: disc;">
<li><span style="color: #000000; font-size: small;">ASPD + 20%, AGI +5, Critical damage +10%, Additional attack chance by attack (Consumes autoskill)</span></li>
</ul>
<span style="font-family: 'courier new';"><span style="font-family: 'courier new';"><span style="font-family: georgia;"><strong><br /><span style="font-size: large; color: #07b867;">◇Sauro II</span></strong></span></span></span>
<ul style="list-style-type: disc;">
<li><span style="color: #000000; font-size: small;">MaxHP +20%, MaxMP +20%, Exp +5%. On weapon, ATK +15%, MATK +20%, Melee pierce +5%, Magic pierce +5%</span></li>
</ul>
<span style="font-family: 'courier new';"><span style="font-family: 'courier new';"><span style="font-family: georgia;"><strong><br /><span style="font-size: large; color: #07b867;">◇Telon</span></strong></span></span></span>
<ul style="list-style-type: disc;">
<li><span style="font-family: 'courier new';"><span style="font-family: georgia; font-size: small;"><strong>Autoskill-5%, Skill Delay +1.5sec ATK+14%, Adds autoskill+10%, Skill delay -0.5sec on Special</strong></span></span></li>
</ul>
</div>
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/27/171027064713624905.png" alt="" /></span></div>
<div data-tag="spoiler"><br /><span style="font-size: large;"><strong><span style="font-family: 'courier new';">☆HP<br />☆MP<br />☆Attack<br />☆Melee Defense<br />☆Magic Defense <br />☆Evasion<br />☆Strenght<br />☆Intelligence <br />☆Vitality<br />☆Agility<br />☆Critical<br />☆Autoskill<br />...</span></strong></span><br /><br /></div>
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/27/171027064710610915.png" alt="" /></span></div>
<div data-tag="spoiler"><span style="font-family: 'courier new';"><span style="color: #e61942; font-size: x-large;"><strong><br /></strong></span><br /><br /></span><span style="font-family: 'courier new';"><span style="color: #76358f; font-size: medium;"><strong>Quests </strong></span><br /><br /><span style="color: #045f5c; font-size: small;">There's a lot of available levelling quest in game that you can do but theses are the popular quest back then and now.. You dont need to do theses quests but feel free to do them if you want.</span></span><span style="font-family: 'courier new';"><span style="font-size: large;"><strong><br /><br /></strong></span><br /><span style="color: #63267a;"><strong>Awaiting the Goddess (ATG) || near Kleya ~ [280,000 or 365,000]<br /></strong></span><br />This quest is from Inje Man somewhere.. You can do ATG as soon as you reach lvl 80 without FG until 120 and you're sick of it.<br /><br /><strong>30 x Albrero <br />30 x Leopard <br />30 x Ganoschka <br />1 x False Grecia [optional]</strong><br /><br /><br /><strong><span style="color: #63267a;">Enemies of Inje || near Kleya ~ [80,000]<br /><br /></span></strong>This quest is given by Kubron near the moles spot there. You can do this along with ATG once you reach lvl 100 for extra exp.<br /><br /><strong>50 x Albrero <br />20 x Leopards <br />10 x Ganoschka </strong><br /><br /><br /><br /><span style="color: #63267a;"><strong>Naga Quest || Maze of Enzeits ~ [410,000]<br /><br /></strong></span>Once you reach lvl 120, you can do this quest near Himmel place. Just bring vaccinc for poison, I think, you're good.<br /><br /><strong>99 x Naga</strong><br /><br /><br /><strong><span style="color: #76358f;">Dragnewt Clothes&amp;amp;|| Dragbourg: Immigrant Ward<br /></span></strong><br />I did this quest when I was frustrated over the fact that i can't solo megaroche back then and I havent discover the joy of grinding with high ents. You just have to kill the Lutor mobs endlessly and just turn in the quest when full bag.<br /><br /><strong>30 x Rough Hide<br />3 x Pliable Fur</strong><br /><br /><br /><br /><span style="color: #9d06aa;"><strong>Dirty Gears || Pilaneza ~ [760,000]<br /><br /></strong></span><br />Once you reached 240, you can turn these dirty gears from nommars. Collect stacks of gears until youre back to town and turn them in. You can turn 5 dirty gears but you'll only have the half of the exp.<br /><br /><strong>10 x Dirty Gears<br /><br /></strong></span><span style="font-family: 'courier new';"><br /></span><span style="font-family: 'courier new';"><span style="color: #63267a;"><span style="font-size: large;"><strong>Mobs<br /><br /></strong></span></span></span><span style="color: #045f5c; font-family: 'courier new'; font-size: small;">These are your usual leveling mobs.</span><span style="font-family: 'courier new';"><span style="color: #63267a;"><span style="font-size: large;"><strong><br /><br /></strong></span></span></span><span style="font-family: ';">Ancient Gladiator<br /></span><span style="font-family: 'courier new';">Baum Warrior<br />Balor<br />High Ents<br /></span><span style="font-family: ';">Matar</span><span style="font-family: 'courier new';"><br />Megaroche<br /></span><span style="font-family: ';">Nommar<br />Yardes<br />Third Eyes<br /></span><span style="font-family: 'courier new';"><br /><br /><br /><br /></span></div>
<br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/27/171027064729959375.png" alt="" /></span></div>
<div data-tag="spoiler"><span style="font-family: 'comic sans ms'; font-size: medium;"><strong><span style="color: #05366f;">1. Always keep your refinement value on weapon to "+9". It's because Chakra adds ATK by INT and "Refinement value on weapon". So you'll get a good amount of ATK from Chakra by refining your weapon to the fullest.</span></strong><br /></span><hr /><span style="font-family: 'comic sans ms'; font-size: medium;"><strong><span style="color: #920a04;">2. If you're a claw build, it is better to have a Geo Spam set for Party-Play. According to ijus you need -7.5 second skill delay to spam Geo. So why not play in Party too instead of solo all the time?<br />- If you are a [AGI/CRT/INT] Build, you should use normal claws. Having INT in your build will allow you to have more advantage on the delay of Geo Breaker.<br /><br />- If you are a [AGI/CRT/STR] Build, I'd recommend you to use "Purity Claw" for spamming Geo Breaker.<br /><br /><br /><br />The Al Crystas which would always be needed are Cheltil, Sauro II and Maelriel. Remember, skill spamming is always better than Auto-Attacking.</span></strong><br /></span><hr /><span style="color: #193a5f; font-family: 'comic sans ms'; font-size: medium;"><br /><strong>3. If you are a Geo and want more survivability I'd like you to switch your Throwing to Special claw and use Asura Aura. Throwing Takes over 20% of Asura Aura on each Geo spam. But Spec claw eat 7-10% of Asura, Thus better survivability.</strong></span><hr /><span style="font-family: 'comic sans ms'; font-size: medium;"><span style="color: #920a04;"><br /><strong>4. At lower levels you should always wear a survival set untill you reach Mid Level (Lv.180). It's true that Monks die easily at lower levels just because of lack of MaxHP and EVA. So to cope with that situation you must have a survival set. A survival set must have Damage Reduction, HP recovery equipments, packed up with MaxHP +20% Crystas. I also recommend using Aulis Gale, it helps on Evasion. Also, you can use Light Green Egg to survive on boss battles (Especially for Geo Monks). Light Green Egg revives you at 1HP when you die, and thats untill the 10 second buff is when used Light Green Egg (LGE).</strong></span><br /></span><hr /><span style="color: #193a5f;"><br /></span><span style="font-family: 'comic sans ms'; font-size: medium;"><strong><span style="color: #193a5f;">5. The Passive skill called Combination, It takes a total of 50 seconds to fill up the combination bar from 0% to 100%.</span></strong><br /></span><hr /><span style="color: #920a04;"><br /></span>
<div style="text-align: left;"><strong><span style="color: #920a04;">6. If you want to farm mobs with AoE, you can always use the most wonderful skill called Battle Roar. Battle Roar is an Ambient AoE, meaning when used, you are the center of the AoE. But the problem is that it's range is very small and ypu need to have mobs very near you to target them.</span></strong></div>
<div style="text-align: left;"><strong><span style="color: #920a04;">So what we can do is to use "Range+" equips to increase it's range and target more mobs. For this two Phrases needs to be made.</span></strong></div>
<div style="text-align: left;"><strong><span style="color: #920a04;">Phrase 1 : Has some "Range+" equipments (Example : Kodachi III)</span></strong></div>
<div style="text-align: left;"><strong><span style="color: #920a04;">Phrase 2 : Your usual Geo Spam set</span></strong></div>
<div style="text-align: left;"><strong><span style="color: #920a04;">First, equip your Phrase 1, the range set. Use this and target mobs around you. Then, quickly change to Phrase 2, Geo set and use Geo Brekaer and finish all of the mobs.</span></strong></div>
<div style="text-align: left;"><strong><span style="color: #920a04;">Thats how you can farm Mobs with AoE!</span><br /></strong><hr /></div>
<br />Tips and tricks by <a title="@ahsan" href="/user/9499">'AhSaN'</a> , feel free to add more <img style="max-width: 100%;" src="//storage.proboards.com/forum/images/smiley/wink.png" alt=";)" /></div>
<br /><br />
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/28/171028055108229939.png" alt="" /></span></div>
<div data-tag="spoiler"><strong><strong>Ok i'm trying something new in my guides, I hope you'll appreciate it. This part is for pro monks that can afford expensive gears (youtuber are known for that) but also for monks lazy to built their own character and just want to copy famous youtubers<br /><br />I'm posting players equipment and info without asking them, but i'm also sharing their video, which make more views and make them even more famous, feel free to them to complain and i'll delete every info on them on this post, including their video<br /><br /></strong></strong>
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="font-size: 10pt; max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/29/17102902580420387.png" alt="" /></span></div>
<div data-tag="spoiler">
<table style="text-align: center;">
<tbody>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Monk Type</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">Nail</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Level</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">329</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>STATS</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><img style="max-width: 100%;" src="//storage.proboards.com/forum/images/smiley/huh.png" alt="???" /></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>AL page</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><img style="max-width: 100%;" src="//storage.proboards.com/forum/images/smiley/huh.png" alt="???" /></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Al xtals</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><img style="max-width: 100%;" src="//storage.proboards.com/forum/images/smiley/huh.png" alt="???" /></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Video Date</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">10/10/2017</td>
<td style="border: 1px solid #000000; padding: 3px;">
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/29/171029024917502348.png" alt="" /></span></div>
<div data-tag="spoiler">&nbsp;</div>
</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">EQUIPEMENTS SET 1</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">Name</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">Xtal</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">Ability</span></strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Weapon</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">Evil Dog Glove +9</td>
<td style="border: 1px solid #000000; padding: 3px;">Sauro II</td>
<td style="border: 1px solid #000000; padding: 3px;">Fixed Melee lv 5</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Armor</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">Ira III +9</td>
<td style="border: 1px solid #000000; padding: 3px;">Wyn</td>
<td style="border: 1px solid #000000; padding: 3px;">Autoskill lv 2</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Additional Gear</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">Nasturtium +9</td>
<td style="border: 1px solid #000000; padding: 3px;">Raton</td>
<td style="border: 1px solid #000000; padding: 3px;">Autoskill lv 3</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Special Equipment</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">Soul Sucker Fang</td>
<td style="border: 1px solid #000000; padding: 3px;">Autoskill lv 4</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">EQUIPEMENTS SET 2</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">Name</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">Xtal</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">Ability</span></strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Weapon</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">Evil Dog Glove +9</td>
<td style="border: 1px solid #000000; padding: 3px;">Sauro II</td>
<td style="border: 1px solid #000000; padding: 3px;">Fixed Melee lv 5</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Armor</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">Ira III +9</td>
<td style="border: 1px solid #000000; padding: 3px;">Veleno Rosa</td>
<td style="border: 1px solid #000000; padding: 3px;">Autoskill lv 2</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Additional Gear</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">Dainginjo [Holiday] +9</td>
<td style="border: 1px solid #000000; padding: 3px;">Veleno Rosa</td>
<td style="border: 1px solid #000000; padding: 3px;">Autoskill lv 3</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Special Equipment</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">Aconitum</td>
</tr>
</tbody>
</table>
</div>
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/29/171029040859738163.png" alt="tea" /></span></div>
<div data-tag="spoiler">
<table style="text-align: center;">
<tbody>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Monk Type</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">Nail</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Level</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">304</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>STATS</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">331 AGI 329 CRT 270 INT 125 VIT</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>AL page</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">6 purple lines<br />2 blue lines</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Al xtals</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">Shelk, Zazel, Mamonea, Leviam, Teo</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Video Date</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">25/10/2017</td>
<td style="border: 1px solid #000000; padding: 3px;">
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/29/171029024917502348.png" alt="" /></span></div>
<div data-tag="spoiler">&nbsp;</div>
</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">EQUIPEMENTS SET 1</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">Name</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">Xtal</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">Ability</span></strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Weapon</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">Ceduro II +9</td>
<td style="border: 1px solid #000000; padding: 3px;">Veleno Rosa</td>
<td style="border: 1px solid #000000; padding: 3px;">Evasion Lv4</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Armor</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">Ira III +9</td>
<td style="border: 1px solid #000000; padding: 3px;">Veleno Rosa</td>
<td style="border: 1px solid #000000; padding: 3px;">Critical lv4</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Additional Gear</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">Huge Cherry Blossom +9</td>
<td style="border: 1px solid #000000; padding: 3px;">Raton</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Special Equipment</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">Ring of rush</td>
<td style="border: 1px solid #000000; padding: 3px;"><br /><br /><br /></td>
<td style="border: 1px solid #000000; padding: 3px;">Dexterity lv4</td>
</tr>
</tbody>
</table>
</div>
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/29/171029041608156699.png" alt="" /></span></div>
<div data-tag="spoiler">
<table style="text-align: center;">
<tbody>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Monk Type</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">Nail</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Level</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">368</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>STATS</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">440 STR 440 AGI 430 CRT 120 VIT<br /><br /></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>AL page</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">6 purple lines <br />2 Red lines<br /><br /></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Al xtals</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">Vatendeth, Shelk, Gatekeeper, Leviam, Malti<br /><br /></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Video Date</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">27/10/2017</td>
<td style="border: 1px solid #000000; padding: 3px;">
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/29/171029024917502348.png" alt="" /></span></div>
<div data-tag="spoiler">&nbsp;</div>
</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">EQUIPEMENTS SET 1</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">Name</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">Xtal</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">Ability</span></strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Weapon</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">Sauro Fang L4+9</td>
<td style="border: 1px solid #000000; padding: 3px;">Raguel</td>
<td style="border: 1px solid #000000; padding: 3px;">Fixed Melee lv5</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Armor</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">Dragon Mail III +9</td>
<td style="border: 1px solid #000000; padding: 3px;">Iniliba</td>
<td style="border: 1px solid #000000; padding: 3px;">Autoskill lv3</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Additional Gear</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">Force Helm II +9</td>
<td style="border: 1px solid #000000; padding: 3px;">Wyn</td>
<td style="border: 1px solid #000000; padding: 3px;">Critical lv4</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Special Equipment</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">Powerful Ring</td>
<td style="border: 1px solid #000000; padding: 3px;">Wyn</td>
<td style="border: 1px solid #000000; padding: 3px;">Rate Cut lv 5</td>
</tr>
</tbody>
</table>
</div>
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/29/171029042145669838.png" alt="" /></span></div>
<div data-tag="spoiler">
<table style="text-align: center;">
<tbody>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Monk Type</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">Nail</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Level</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">350</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>STATS</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">370 INT 370 AGI 365 CRT 100 VIT<br /><br /></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>AL page</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">4 Purple lines <br />4 Red lines<br /><br /></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Al xtals</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">Altan, Halios , Cordal, Sauro II, Maelriel<br /><br /></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Video Date</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">18 / 07 /2017</td>
<td style="border: 1px solid #000000; padding: 3px;">
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/29/171029024917502348.png" alt="" /></span></div>
<div data-tag="spoiler">&nbsp;</div>
</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">EQUIPEMENTS SET 1</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">Name</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">Xtal</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">Ability</span></strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Weapon</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">Ceduro II +9<br />Sauro Fang L4 +9</td>
<td style="border: 1px solid #000000; padding: 3px;">Wyn</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Armor</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">Ultimi III +9</td>
<td style="border: 1px solid #000000; padding: 3px;">Dorry</td>
<td style="border: 1px solid #000000; padding: 3px;">HP lv 5</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Additional Gear</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">Huge Cherry Blossom II +9</td>
<td style="border: 1px solid #000000; padding: 3px;">Raton</td>
<td style="border: 1px solid #000000; padding: 3px;">Autoskill lv4</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Special Equipment</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">Ring of Rush</td>
<td style="border: 1px solid #000000; padding: 3px;">Warrior of light<br />Telon</td>
<td style="border: 1px solid #000000; padding: 3px;">Technique lv 5</td>
</tr>
</tbody>
</table>
</div>
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/29/171029043518269501.png" alt="" /><span style="font-size: x-large;">アキムラ</span></span></div>
<div data-tag="spoiler">
<table style="text-align: center;">
<tbody>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Monk Type</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Nail</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Level</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">325</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>STATS</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">389 AGI 361 INT 361 CRT 50 VIT</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>AL page</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">6 purple lines<br />2 blue lines</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Al xtals</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Sauro II, Gatekeeper, Shelk, Cordal, Larkas</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Video Date</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">08/01/2017</span></td>
<td style="border: 1px solid #000000; padding: 3px;">
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/29/171029024917502348.png" alt="" /></span></div>
<div data-tag="spoiler">&nbsp;</div>
</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">EQUIPEMENTS SET 1</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">Name</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">Xtal</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">Ability</span></strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Weapon</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Dragon's Claw II +9</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Grapagos x2</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Autoskill Lv2</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Armor</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Ultimi III +8</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Dajarte</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Autoskill lv5</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Additional Gear</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Huge Cherry Blossom II +8</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Raton</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Autoskill lv5</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Special Equipment</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Hard Scale Claw</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Telon</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Agility lv5</span></td>
</tr>
</tbody>
</table>
</div>
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/29/171029044837253760.png" alt="" /></span></div>
<div data-tag="spoiler">
<table style="text-align: center;">
<tbody>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Monk Type</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Nail</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Level</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">300</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>STATS</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">370 AGI 350 CRT 320 INT 50 VIT</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>AL page</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">6 yellow lines<br />2 Green lines</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Al xtals</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Vatendeth, Sauro II, Cordal, Shelk, Halios</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Video Date</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/29/171029024917502348.png" alt="" /></span></div>
<div data-tag="spoiler">&nbsp;</div>
</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">EQUIPEMENTS SET 1</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">Name</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">Xtal</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">Ability</span></strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Weapon</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">Dragon's Claw II +9</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Armor</strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Additional Gear</strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Special Equipment</strong></td>
</tr>
</tbody>
</table>
</div>
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/29/171029052410767243.png" alt="" /></span></div>
<div data-tag="spoiler">
<table style="text-align: center;">
<tbody>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Monk Type</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">Nail</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Level</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">350</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>STATS</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">431 AGI 431 INT 431 CRT 106 VIT</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>AL page</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">6 purple lines<br />2 red lines</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Al xtals</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Shelk, Halios, Gatekeeper, Cordal, Mamonea</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Video Date</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/29/171029024917502348.png" alt="" /></span></div>
<div data-tag="spoiler">
<div><a></a></div>
</div>
</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">EQUIPEMENTS SET 1</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">Name</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">Xtal</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">Ability</span></strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Weapon</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Dragon's Claw II +9</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Grapagos</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Evasion Lv 5</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Armor</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Dragon Mail III +9&nbsp;</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Dorry</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Critical Lv 5</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Additional Gear</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Huge Cherry Blossom II +9</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Raton</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Autoskill Lv 4</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Special Equipment</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Ring of Rush</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Wyn</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Agility Lv 4</span></td>
</tr>
</tbody>
</table>
</div>
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/29/171029054949135646.png" alt="" /></span></div>
<div data-tag="spoiler">
<table style="text-align: center;">
<tbody>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Monk Type</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Geo Spam</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Level</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">347</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>STATS</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">429 INT 429 CRT 429 STR 107 DEX</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>AL page</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">PAGE 2 :<br />6 yellow lines<br />2 red lines<br /><br /><br />PAGE 3 :<br />6 purple lines<br />2 red lines<br /><br /><br /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Al xtals</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">PAGE 2 :<br />Ouvel, Arick, Gatekeeper, Sauro II, Mamonea<br /><br />PAGE 3 :<br />Malti, Irai, Sauro II, Cheltil, Leviam</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Video Date</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">09/02/2017</span></td>
<td style="border: 1px solid #000000; padding: 3px;">
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/29/171029024917502348.png" alt="" /></span></div>
<div data-tag="spoiler">
<div><a></a></div>
</div>
</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">EQUIPEMENTS SET 1 (in pt and page 2 of AL)</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">Name</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">Xtal</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">Ability</span></strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Weapon</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Stake Knuckle +9</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Grapagos x2</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Quick Cool Lv5</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Armor</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Ultimi III +6</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Dorry</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Attack Lv 5</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Additional Gear</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Daiginjo [holiday] +9</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Raton</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Autoskill Lv 4</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Special Equipment</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Disaster Stone</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Beelzenoid</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Strength Lv5</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-size: large;">EQUIPEMENTS SET 2<br />(page 3 of AL)</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-size: large;">Name</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-size: large;">Xtal</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-size: large;">Ability</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;">Weapon</td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Mio Filio +9<br />Mortal Dagger +9<br />Wicktrace III +9&nbsp;<br />Whirlwind +9<br />Prescience II+9<br />Eventail II+9<br />Dragon Roar III+9<br />Stravos +9<br />Freesia Caim +9<br /></span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Aurumteus<br />Ziddu<br />Grapagos<br />Sturm + Grapagos<br />Halios + Grapagos<br />Scorpia + Grapagos<br /><span style="font-size: xx-small;">Vatendeth + Grapagos</span><br />Argyros<br />White Fox</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Atk Lv4<br />AutoLv2<br />Atk Lv4<br />Atk Lv4<br />Atk Lv4<br />Atk Lv4<br />Atk Lv4<br />Atk Lv4<br />Atk Lv4</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;">Armor</td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Dragon Mail III+9</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Dorry</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Autoskill Lv 3</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;">Additional Gear</td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Blue Epaulette+9<br />Barbarotita III+9</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Raton<br />Raton</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">AutoLv5<br />Critical lv 5</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;">Special Equipment</td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Hard Scale Claw</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Telon</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Autoskill Lv 5</span></td>
</tr>
</tbody>
</table>
</div>
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/29/171029062838744915.png" alt="" /></span></div>
<div data-tag="spoiler">
<table style="text-align: center;">
<tbody>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Monk Type</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Geo Spam</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Level</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">345</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>STATS</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">419 INT 409 DEX 408 CRT</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>AL page</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">6 yellow lines<br />2 red lines</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Al xtals</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Arick, Mamonea, Sauro II, Enina, Cordal</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Video Date</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<div><a style="display: none;"></a><span style="cursor: pointer;"><img style="max-width: 100%;" src="http://nsa39.casimages.com/img/2017/10/29/171029024917502348.png" alt="" /></span></div>
<div data-tag="spoiler">
<div><a></a></div>
</div>
</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">EQUIPEMENTS SET 1</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">Name</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">Xtal</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong><span style="font-size: large;">Ability</span></strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Weapon</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Uroboros +9<br />Eventail II +9<br />Sauro Aster L3 +9<br />Artemis III +9</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;"><img style="max-width: 100%;" src="//storage.proboards.com/forum/images/smiley/huh.png" alt="???" /></span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;"><img style="max-width: 100%;" src="//storage.proboards.com/forum/images/smiley/huh.png" alt="???" /></span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;">Armor</td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Ulitmi III+9</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Dorry</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Strength Lv5</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;">Additional Gear</td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Monty Beret II +9&nbsp;</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Raton</span></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Autoskill Lv2</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;">Special Equipment</td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-weight: normal;">Disaster Stone</span></td>
</tr>
</tbody>
</table>
</div>
</div>
</article>
                        <hr>
                        <p>Author: <a href="http://irunaonline.boards.net/user/2293">caporal</a></p>
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
