<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title> Samurai Guide | Iruna Global Stall</title>
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
                    <h4>NightinGal's Minstrel Guide</h4>
                    <hr>
                    <div>
                        <article>
<div><strong><span style="font-size: large;">Introduction</span></strong><br /><br /> Hello! Welcome to our Minstrel Guide, which our fellow members of the NightinGals have contributed to the making of this thread. This guide will be updated often with the most up-to-date equipment. The things that are going to be explained in this thread are of course, about Minstrels. The Joy and Lifestyles of being a Minstrel, getting introduced to different builds of this lovely job, and lastly, how to become a dedicated Minstrel.<br /><br /><strong><span style="font-size: large;">About NightinGals</span></strong><br /><br />
<div><a>SPOILER: Click to show</a></div>
<div data-tag="spoiler"><br /><br /> Want to know who are NightinGals member and their respective experience of being Minstrel?? We also include the link to each NightinGals member who open YouTube Channel. Feel free to visit their channel for your references and do leave a like/dislike, comment or even subscribe to their channel!!<br /><br /><br /><strong><span style="color: #ffeb08;">1st Member: MagicChi the SwordxBow Minstrel<br />YouTube Channel:&nbsp;<a href="https://www.youtube.com/channel/UCyGxDPz0OBPwvBl66gCWssA" target="_blank" rel="nofollow noopener">MagicChi まほう-ち</a></span></strong><br /><br /><em> &ldquo;When I first started to play Iruna it seemed like Minstrels were quite rare, during the years I began to play. I found it odd that minstrels were so underrated. Minstrel has a nice tone to it, being able to do things that most jobs can&rsquo;t do. Minstrel&rsquo;s population has grown over the years and still has a bright future. Minstrel is yet one of my favorite jobs in my overall opinion and I can&rsquo;t wait to see what it has to offer in the future.&rdquo;</em><br /><br /><br /><br /><hr /><br /><br /><strong><span style="color: #ea87fd;">2nd Member:・&deg;Emi&deg;・the Bow DPS Minstrel<br />YouTube Channel:&nbsp;<a href="https://www.youtube.com/channel/UCGMdcUhFFUD9y06X8o8CZoA" target="_blank" rel="nofollow noopener">♪ Iruna Emi ♪</a></span></strong><br /><br /><em> &ldquo;Minstrels are very unique from the other classes. (I guess that&rsquo;s why minstrel is called a special class xD) Anyways o.o/ putting lame jokes aside,<br /> The main reason why I love being a minstrel is that I can be creative with it. You&rsquo;re not limited to certain builds so you can experiment and have fun with yourself. There are so many possibilities of sets you can create depending on your build. Also, minstrels require the knowledge of the other jobs to support them in which songs they need. There is no right or wrong with being a minstrel. Since there aren&rsquo;t many builds nor sets introduced, you can even create your own. The special thing about minstrel is that you can be unique and different from everyone else.&rdquo;</em><br /><br /><br /><br /><hr /><br /><br /><strong><span style="color: #53f553;">3rd Member:「Acedia」the Special Bow Minstrel<br />YouTube Channel: <a href="https://www.youtube.com/channel/UCA7IFlqOIgiiX43b-n9WhLQ" target="_blank" rel="nofollow noopener">Takato</a></span></strong><br /><br /><em> &ldquo;I really don't know what to say. Nyan Nyan Nyan.&nbsp;I've played Minstrel hybrid coz I wanna prove something that support can be awesome sometimes. <br /><br />Creating my own meta? maybe?&rdquo;</em><br /><br /><br /><br /><hr /><br /><br /><strong><span style="color: #ff0b01;">4th Member: Abril the Sword DPS Minstrel <br />YouTube Channel: N/A</span></strong><br /><br /><em> "Hmm...Minstrel...Minstrel, I found a nice job...very elegant...independent if you want it...but, those who are or will be Alchemist, Samurai, &amp; Ninja leave the Minstrel as a useless job...only the job that you use to farm &amp; level...they think the minstrel is rare 100%. Sure, nothing that's lucky.<br /><br /> What I like about Minstrel that it could be by itself...but always need help and assistance in mq...one or the other boy or girl the first thing...she says "Is this you're Minstrel? You can't kill bosses...you MQ like that?" Then they kick me or just say because I'm just Minstrel and I tell them that nothing happens by just kicking me...they accept the help&nbsp;and they speak as if they were mocking me." But other say, "Wow, I did not know that Minstrels were so strong. <br /><br /> I love Minstrel class because so I can prove to people wrong it isn't a horrible job."</em><br /><br /><hr /><span style="color: #081cff;"><strong><br />6th Member: Arisa55 the Special Claw Minstrel<br />YouTube Channel: Iruna RV</strong></span><br /><em> "</em><em>I first made my minstrel as a second character but sooner or later it became my main(RIP my enchanter) then tried other builds before I got stuck with Special Claws."<br /><br /></em><em> How many times I got underestimated when helping others do MQ but after that "What is your build?", "What how?", "Wow, didn't know minstrel can be this good". I want to prove that we aren't just for singing at the back of the party we can do so much more.</em><br /><br /></div>
<hr /><strong><span style="font-size: large;"><br />Becoming A Minstrel</span></strong><br /><br /> Becoming a Minstrel is quite difficult and takes tons of patience early in the game. If you are going to be a support Minstrel, you may have a tiny trouble for yourself when playing Iruna. Becoming some sort of DPS Minstrel will be of help in some types of survivability. Also, Minstrel&rsquo;s songs are not there to be taken advantage of. Minstrels aren&rsquo;t all about grinding or farming. People often use Minstrels to level their main jobs, Ninja/Samurai. They&rsquo;re very looked down upon. There are many better ways to grind as their own jobs. Also, the best way to becoming a Minstrel? A sturdy build. You will need a type of &ldquo;plan&rdquo; on deciding the equipment of your build.<br /><br /><strong>(After Patch)</strong><br /><br /> Becoming a Minstrel in the early game is still difficult. Reason cause you might not have enough stat points which is essential. Grinding is crucial because when farming you are really squishy. Minstrels now have become more engaging, since of song range buff is shorten you have to be near mob/boss in order to buff. This is something that every <strong><u>player</u></strong> should know because we can't buff those who are far from mob/boss. Solo Minstrel is very good now. Perhaps solo grinding/farming is very good. You don't need to necessarily use any potions at all. Which is huge. Minstrel has huge potential with new skills in the late game. Easier to farm with a&nbsp;party too. Minstrel still has a bright future.<br /><br /><span style="font-weight: bold;"><span style="font-size: large;">Skill Quests and Items for Minstrel</span><br /><span style="font-size: small;"><br /></span></span>&nbsp;Wondering how to become a Minstrel? Don't worry we got you covered with info on what to collect and slay, level requirement for each skill along with where you can go to get the skills quest or item in the game. We also include a link to the forum for further detail on each skill.<br /><br /><u style="font-weight: bold;">How to become a Minstrel?<br /></u><br />You need at least Lv 100 to become a Minstrel. Visit the Capital City of Elban and talk to Rulea the Merchant. Take a quest to become Minstrel. Require to collect listed item:<br />
<ul style="list-style-type: disc;">
<li><strong>1x Starhunter Petal<br /></strong></li>
<li><strong>1x Fearful Evil Eye</strong></li>
<li><strong>1x Corallite</strong></li>
<li><strong>1x Goddess Tear</strong></li>
</ul>
<br /><br /><strong><u>What are skills that I learn from becoming a Minstrel?<br /><br /></u></strong>After completing Quest becoming a Minstrel, You will automatically learn only 2 skills.<br />One passives skill Song Lore 1 and One Active skill Humming. <br />Other skills you either have to complete a quest for NPC or buying an item from NPC.<br />&nbsp;<br />
<div style="text-align: left;"><strong><u><span style="font-size: small;">Where to find the rest of the songs?</span></u></strong></div>
<div style="text-align: left;"><span style="font-size: 10pt;">Don&rsquo;t worry we&rsquo;ve got you covered.</span></div>
<div style="text-align: center;">
<div style="text-align: left;"><span style="font-size: small;"><strong>Songs Quest from NPC</strong></span></div>
<div style="text-align: left;"><span style="font-size: xx-small;">*Refer&nbsp;<a href="http://irunaonline.boards.net/thread/26722/minstrel-song-formulas-wip" target="_blank" rel="noopener norewrite">Minstrel Song Formulas</a>&nbsp;for detail on each skill.</span></div>
<div style="text-align: left;">MP cost for each songs 100MP except for Dragonewt 300MP, Humming 30MP, Improvisation 1MP.</div>
<div style="text-align: left;">HP cost for each songs except Humming and Improvisation are based on you level. If level 100 then it cost 100HP per song.</div>
<table style="text-align: left;">
<tbody>
<tr>
<td style="border: 1px solid #000000; padding: 3px;" align="justify"><strong><span style="color: #c15afc;">Dream Song<br /><br /></span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;" align="justify"><strong><br />Minaula City: Tea House<br />NPC: Sawa<br />Requirement: Lv&gt;99, Song Lore 1<br />Quest: Slay<br /></strong>
<ul style="list-style-type: disc;">
<li><strong>1x Bear Samurai</strong></li>
<li><strong>1x Gator Samurai</strong></li>
<li><strong>1x Crow Samurai</strong></li>
<li><strong>1x Minenaga</strong></li>
</ul>
<strong><br /></strong></td>
<td style="border: 1px solid #000000; padding: 3px;" align="justify"><strong>An ancient Ganajian song. <br />Reduce PT embers' MP cost <br />Extend effect time of next song.<br /><br /></strong>Deal damage.<br />Reduce nearby party MP cost by 100%.<br />Boost DEX depending on User Lv.<br />Increase next own song duration from 30sec to 45sec.<br />Further reduce skills delay depending on DEX and Lv.<br /><br /><em>Skill Delay +/- = 3.0sec - (character lv./100) - (DEX/250)</em></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;" align="justify"><strong><span style="color: #d2fa03;">Life Song</span></strong></td>
<td style="border: 1px solid #000000; padding: 3px;" align="justify"><strong><br />Karue Reef<br />NPC: Neryl<br />Requirement: Lv&gt;99, Song Lore 1<br />Quest: Collect Only<br /></strong>
<ul style="list-style-type: disc;">
<li><strong>1x Deer Hide</strong></li>
<li><strong>1x Spirit Silk</strong></li>
<li><strong>1x Fuzz</strong></li>
<li><strong>1x White Feather</strong></li>
</ul>
<strong><br /></strong></td>
<td style="border: 1px solid #000000; padding: 3px;" align="justify"><strong>An ancient Parulian song. <br />Improve entire PT's endurance<br />Recover your own HP.<br /><br /></strong>Deal damage.<br />Boost nearby party HP<br />Boost VIT depending on User Lv.<br />Heal own HP upon usage. <br />Heal 10% of user max HP.</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;" align="justify"><strong>Wisdom Song<br /></strong></td>
<td style="border: 1px solid #000000; padding: 3px;" align="justify"><strong><br />Capital City Elban<br />NPC: Rulea the Merchant<br />Requirement: Lv&gt;99, Song Lore 1<br />Quest: Collect Only</strong>
<ul style="list-style-type: disc;">
<li><strong>1x Pretty Insect Wing<br /></strong></li>
<li><strong>1x Pretty Shell<br /></strong></li>
<li><strong>1x Pretty Feather</strong></li>
<li><strong>1x Pretty Scale</strong></li>
</ul>
<strong><br /></strong></td>
<td style="border: 1px solid #000000; padding: 3px;" align="justify"><strong>An ancient Darkani song.<br />Increase PT members' SSPD &amp; MATK<br />Improve the power of the next song<br /><br /></strong>Deal damage<strong>.<br /></strong>Boost nearby party cast speed<br />and MATK<br />Boost INT depending on User Lv<br />Boost damage bonus of next own song except<br />Wisdom, Humming &amp; Improvisation.<br /><br /></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;" align="justify"><strong>Warrior Song<br /></strong></td>
<td style="border: 1px solid #000000; padding: 3px;" align="justify"><strong><br />Kakuela<br />NPC: Mizuka the Blacksmith<br />Requirement: Lv&gt;149<br />Quest: Slay<br /></strong>
<ul style="list-style-type: disc;">
<li><strong>1x Gandave</strong></li>
<li><strong>30x Jiendao</strong></li>
<li><strong>30x Nozuchi</strong></li>
</ul>
<strong><br /></strong></td>
<td style="border: 1px solid #000000; padding: 3px;" align="justify"><strong>An ancient Kumijinese song.<br />Raise PT members' evasion &amp; <br />status ailment resistance.<br />Move away from targets<br /><br /></strong>Deal damage. <br />Boost nearby party Evasion <br />and Ailment resistance<br />Boost AGI depending on User Lv<br />Knock user away from enemy to gain some distance<strong>.<br /></strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;" align="justify"><strong>Dragonewt<br /></strong></td>
<td style="border: 1px solid #000000; padding: 3px;" align="justify"><strong><br />Drafbourg: Imigrant Ward<br />Pub: Dragon Emperor's Chalice<br />NPC: Balu<br />Requirement: Lv&gt;150<br />Quest: Collect Only<br /></strong>
<ul style="list-style-type: disc;">
<li><strong>2x Medical Herb<br /></strong></li>
<li><strong>30x Old Dragon Fang<br /></strong></li>
<li><strong>60x Deer Antler</strong></li>
</ul>
<strong><br /></strong></td>
<td style="border: 1px solid #000000; padding: 3px;" align="justify"><strong>An ancient song from Bleudraf. <br />Inflict DMG to targets who<br />&nbsp;drown out your song<br /><br /></strong>Deal the highest damage depending <br />on number of active songs by removing <br />an active song with lowest duration.<br /><br />Cannot be use if there is no active song(s).<strong><br /></strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;" align="justify"><strong>Improvisation<br /></strong></td>
<td style="border: 1px solid #000000; padding: 3px;" align="justify"><strong><br />Capital City Eldan<br />Pub: Bottom of Heaven<br />NPC: Flene<br />Requirement: Lv&gt;<br />Quest: Collect and Slay Only<br /></strong>
<ul style="list-style-type: disc;">
<li><strong>2x Meelis Horn<br /></strong></li>
<li><strong>2x God Iron Fragment</strong></li>
<li><strong>30x Pundia</strong></li>
</ul>
<strong><br /></strong></td>
<td style="border: 1px solid #000000; padding: 3px;" align="justify"><strong>Finish a song with Improvisation.<br />Remove the effect of the current songs <br />and heal HP<br /><br /></strong>Revive and Heal nearby party by<br />removing current self active songs while<br />some self bonus song stay such as:<br />Wisdom next song bonus damage<br />Nostalgia Stone skin<br />Sandstorm nullifed incoming ailment<br /><br />Healing effect greater depending <br />on number of active songs removed<strong><br /></strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;" align="justify"><strong>Simile</strong></td>
<td style="border: 1px solid #000000; padding: 3px;" align="justify"><strong><strong><br /><br />Fly Knights Valley<br />NPC: Old Zebram<br />Requirement: Lv 300 or more<br />Quest: Slay</strong></strong>
<ul style="list-style-type: disc;">
<li>1x Ouvel</li>
</ul>
<strong><br /><br /></strong></td>
<td style="border: 1px solid #000000; padding: 3px;" align="justify">Repeat the previous bar. Extend the duration of the<br />current song buffs.</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;">Presto</td>
<td style="border: 1px solid #000000; padding: 3px;"><br /><br /><strong><strong>Mioreita Castle<br />Pub: Chalice of Starlight<br />Requirement: Lv 340 or more<br />Quest: Slay</strong></strong>
<ul style="list-style-type: disc;">
<li>x1 Frederico</li>
<li>x30 Flametongue</li>
<li>x30 Pirouette</li>
<li>x30 Don Poco</li>
</ul>
<br /><br /></td>
<td style="border: 1px solid #000000; padding: 3px;">Add effect of dealing continuous DMG for self and PT<br />as you increasse tempo song's effective time shortens.</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;">reserve</td>
</tr>
</tbody>
</table>
</div>
<br />
<div style="text-align: left;"><br /><br /></div>
<div style="text-align: left;">Songs Items from NPC</div>
<div style="text-align: left;"><span style="font-size: xx-small;">*Refer to&nbsp;<a href="http://irunaonline.boards.net/thread/26722/minstrel-song-formulas-wip" target="_blank" rel="noopener norewrite">Minstrel Song Formulas</a>&nbsp;for detail on each skill.</span></div>
<div style="text-align: left;">MP cost for each song 100MP except for Dragonewt 300MP, Humming 30MP, Improvisation 1MP.</div>
<div style="text-align: left;">HP cost for each songs except Humming and Improvisation are based on you level. If level 100 then it cost 100HP per song.</div>
<div style="text-align: left;">
<table style="text-align: center;">
<tbody>
<tr>
<td style="border: 1px solid #000000; padding: 4px;" align="justify"><strong><span style="color: #fcba2e;">Passionate Song</span></strong></td>
<td style="border: 1px solid #000000; padding: 4px;" align="justify"><strong>Kleya City<br />NPC: Rel the Merchant<br />Item: Mithurna Music<br />Cost: 100000s<br />Requirement: Lv&gt;99, Song Lore 1</strong></td>
<td style="border: 1px solid #000000; padding: 4px;" align="justify"><strong>An ancient Mithurnian song.<br />Increase PT members' ASPD &amp; ATK<br />Cut your attack interval by Half<br /><br /></strong>Deal damage.<br />Boost nearby party attack speed<br />and ATK<br />Boost STR depending on user Lv.<br />Reduces own attack intervals</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 4px;" align="justify"><strong><span style="color: #ff3216;">Nostalgia Song</span></strong></td>
<td style="border: 1px solid #000000; padding: 4px;" align="justify"><strong>Eryldan Desert<br />NPC: Filely<br />Item: Slebinian Music<br />Cost: 100000s<br />Requirement: Lv&gt;99, Song Lore 1<br /></strong></td>
<td style="border: 1px solid #000000; padding: 4px;" align="justify"><strong>An ancient Slebinian song.<br />Raise PT members' critical abilities<br />Affix a song barrier to yourself<br /><br /></strong>Deal damage.<br />Boost nearby party CRT rate, <br />Critical damage &amp; Melee power by 20%<br />Boost CRT depending on user Lv.<br />Apply "Stone Skin" for 30sec</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 4px;" align="justify"><strong><span style="color: #ffe316;">Sweet Song</span></strong></td>
<td style="border: 1px solid #000000; padding: 4px;" align="justify"><strong>Lograth City<br />NPC: Falt the Merchant<br />Item: Lograth Music<br />Cost: 100000s<br />Requirement: Lv&gt;199, Song Lore 2</strong></td>
<td style="border: 1px solid #000000; padding: 4px;" align="justify"><strong>Written by a poet visisting Lograth<br />Slightly raise PT members' drop rate<br />Recover your own MP<br /><br /></strong>Deal damage<br />Boost nearby party drop rate by 25%<br />Boost CRT depending on user Lv.<br />Recover 10% of user max MP.</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 4px;" align="justify"><strong>Song Lore 2</strong></td>
<td style="border: 1px solid #000000; padding: 4px;" align="justify"><strong>Drafbourg: Dragonewt Ward<br />NPC: Matif<br />Item: Song Book 2<br />Cost: 3000000s<br />Requirement: Lv&gt;199, Song Lore 1</strong></td>
<td style="border: 1px solid #000000; padding: 4px;" align="justify"><strong>Knowledge of songs<br />Increase Max MP and auto MP recovery<br /><br /></strong>Allow 3 active song to be use.</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 4px;" align="justify"><strong><span style="color: #c716ff;">Sand</span><span style="color: #d145fd;">sto</span><span style="color: #d56cf7;">rm S</span><span style="color: #de93f7;">on</span><span style="color: #e8acfc;">g</span></strong></td>
<td style="border: 1px solid #000000; padding: 4px;" align="justify"><strong>Capital City Eldan<br />NPC: Nete the Merchant<br />Item: Eldan Music<br />Cost: 1000000s<br />Requirement: Lv&gt;199, Song Lore 2</strong></td>
<td style="border: 1px solid #000000; padding: 4px;" align="justify"><strong>Song of Eldan<br />Protects PT from some oncoming status ailments<br />Releases you from status ailment<br /><br /></strong>Deal damage.<br />Nullified nearby party from incoming status ailment such as<br />Poison, Paralysis, Blind, Burn.<br />Song removed after nullified incoming ailment<br />Song cannot remove ailment that already inflicted<br />&nbsp;to party unless been overwrite.<br />Boost AGI depending on user Lv.<br />Increase healing effect on user.<br />Remove inflicted ailment on user upon usage and <br />nullified incoming ailment including stun to user. <br />Song removed after nullified incoming ailment</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 4px;" align="justify"><strong><span style="color: #f5ff08;">Jo</span><span style="color: #baff08;">y a</span><span style="color: #26ff08;">n</span><span style="color: #08ffba;">d S</span><span style="color: #08b0ff;">or</span><span style="color: #081cff;">ro</span><span style="color: #a608ff;">w</span></strong></td>
<td style="border: 1px solid #000000; padding: 4px;" align="justify"><strong>Pilaneza City<br />NPC: Mueldo the Merchant<br />Item: Pilaneza Music<br />Cost: 100000s<br />Requirement: Lv&gt;149, Song Lore 2</strong></td>
<td style="border: 1px solid #000000; padding: 4px;" align="justify"><strong>Written by a poet visiting PIlaneza<br />Raise PT members heal &amp; item effects<br />Recover HP/MP for a while<br /></strong><br />Deal damage.<br />Increase nearby party heal and item effect by 10%.<br />Recover HP or MP depending on whichever the lowest.<br />Boost VIT depending on user Lv.<br />Increase healing effect on user.</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 4px;" align="justify"><strong><span style="color: #08ff1c;">Li</span><span style="color: #d7ff08;">be</span><span style="color: #ffeb08;">r</span><span style="color: #ffc408;">a</span><span style="color: #ff8454;">tio</span><span style="color: #ff75e9;">n S</span><span style="color: #bd40f8;">o</span><span style="color: #4040f8;">n</span><span style="color: #40a7f8;">g</span></strong></td>
<td style="border: 1px solid #000000; padding: 4px;" align="justify"><strong>Underground Bailune<br />NPC: Chat the Merchant<br />Item: Bailune Music<br />COst: 1000000s<br />Requirement: Lv&gt;199, Song Lore 2</strong></td>
<td style="border: 1px solid #000000; padding: 4px;" align="justify"><strong>A song of peace from Bailune<br />Increase PT members'job bonuses<br />Can be used with Revelation<br /></strong><br />Deal damage<br />Increase nearby party job bonus which <br />can be used together with Bishop Revelation skill.<br />Boost DEX depending on user Lv.<br />Double the job bonus for user.</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 4px;" align="justify"><strong><span style="color: #c0bdbd;">Cl</span><span style="color: #cfcece;">eav</span><span style="color: #dddbdb;">e S</span><span style="color: #eceaea;">ong</span></strong></td>
<td style="border: 1px solid #000000; padding: 4px;" align="justify"><strong>Sateria City<br />NPC: Frina the Merchant<br />Item: Saterian Music<br />Cost: 100000s<br />Requirement: Lv&gt;199, Song Lore 2</strong></td>
<td style="border: 1px solid #000000; padding: 4px;" align="justify"><strong>An ancient Mithurnian song.<br />Raise PT members' Melee, Magic Pierce, &amp; Magic Power<br /><br /></strong>Deal damage.<br />Increase nearby party Melee Pierce &amp; Power,<br />&nbsp;Magic Pierce and Power.<br />Boost VIT depending on user Lv.<br />Increase healing effect on user</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 4px;" align="justify"><strong>Song Lore 3</strong></td>
<td style="border: 1px solid #000000; padding: 4px;" align="justify"><strong><br /><br />Lograth City: Pub: Fountain in Ruins<br />NPC: Levia<br />Item: Song Book 3<br />Cost: 3000000s<br />Requirement: Lv&gt;239, Song Lore 2<br /><br /><br /></strong></td>
<td style="border: 1px solid #000000; padding: 4px;" align="justify"><strong>Knowledge of songs<br />Increase MaxMP and auto MP recovery<br /><br /></strong>Allow 4 active song to be use.</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 4px;">Improvisation 2</td>
<td style="text-align: left; border: 1px solid #000000; padding: 4px;"><br /><strong>Kreya City: Pub<br />NPC: Sitara<br />Item: Improvisation Book 2<br />Cost: 5000000s<br />Requirement: Lv&gt;320. Improvisation 1</strong><br /><br /></td>
<td style="border: 1px solid #000000; padding: 4px;"><strong>Finish a song with Improvisation.<br /><br />Remove the effect of the current songs <br /><br />and heal HP<br /><br /><br /><br /></strong>Revive and Heal nearby party by<br /><br />removing current self active songs while<br /><br />some self bonus song stay such as:<br /><br />Wisdom next song bonus damage<br /><br />Nostalgia Stone skin<br /><br />Sandstorm nullifed incoming ailment<br /><br /><br /><br />Healing effect greater depending <br /><br />on number of active songs removed<br /><br /><br /></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 4px;" align="justify"><strong>reserve</strong></td>
<td style="border: 1px solid #000000; padding: 4px;" align="justify"><strong>reserve under construction<br /></strong></td>
<td style="border: 1px solid #000000; padding: 4px;" align="justify"><strong>reserve under construction<br /></strong></td>
</tr>
</tbody>
</table>
</div>
<hr /><br /><strong><span style="font-size: large;">Builds, Stats, and Equipment for Minstrels</span></strong><br /><br />There are many builds to choose from when playing a Minstrel. Some of those builds are Support / DPS / Solo, etc. There are a variety of builds to play a Minstrel.<br />
<div><span style="font-size: medium;"><strong>Ultimate Support Build</strong></span></div>
<strong style="font-size: small;">DEX&gt;CRT&gt;STR/INT/VIT</strong><br /><br /> The reason for it called the "<strong>Ultimate Support Build</strong>" is because it is purely built for supporting only. After <strong>post skill balance patch</strong> all minstrel songs which only do buffing before are <em><strong>now dealing damage as well with range, delay and HP&amp;MP cost being reduce</strong></em>. So if you want to stay as supporter in party you need to consider investing into appropriate stat equip and crysta.<br />So here is some advice on what you can do:
<ul style="list-style-type: disc;">
<li>- Focus on DEX before other stat since DEX the only common build among the special class. Minstrel may no longer need DEX for support as skill delay are very low compare to before skill balancing. However higher DEX give the advantages by focusing on less reliance on skill delay type of equipment, quick cool abilities or even skill delay type of AL or even crysta. Instead you can focus on - hate rise, resistance, exp or even drop rate with DEX while being efficient in supporting party.</li>
<li>- Consider investing on VIT as it is mean for survival even if you got full resist set or Life song. Minimum of 50 VIT</li>
<li>- Consider investing on at least 1 of ◇Veltria even if you have Improvisation at Lv 280. Veltria are still useful in many situation and will be useful even if you changing into other special class.</li>
</ul>
<br /><strong>Equipment - Support or Buff Set</strong><br /><span style="font-size: xx-small;">At level 100:<br />*No DEX build require 6.0 sec skill delay for songs spam with Dream Song.<br />*250 DEX build require 5.0 sec skill delay for songs spam with Dream Song.<br />-Skill delay further reduces with DEX and Dream Song as you level up.<br /></span>
<table style="text-align: justify;">
<tbody>
<tr>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;"><strong>DEX&gt;CRT/STR/INT<br />(Optional Vit&lt;/=100)</strong></td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;"><strong>Recommended Equipment</strong></td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;"><strong>Recommended Crysta</strong></td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;"><strong>Recommended Abilities</strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Weapon</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<ul style="list-style-type: disc;">
<li style="text-align: justify;">Jade Ricus (Auto Recovery)</li>
<li style="text-align: justify;">Queen of the Night (Auto Recovery, - Hate Rise)</li>
<li style="text-align: justify;">Violakarn (- Hate Rise)</li>
<li style="text-align: justify;">Odium IV (-Hate Rise)</li>
<li style="text-align: justify;">Genius (Resist)</li>
</ul>
</td>
<td style="border: 1px solid #000000; padding: 3px;">
<div style="text-align: justify;">
<div>◇Beelzebub (- Hate Rise)</div>
<div>◇Coagulum (- Hate Rise)</div>
<div>◇Prince Arick (-Hate Rise)</div>
<div>◇Ziddu (-Hate Rise)</div>
<div>◇Veltria (Heal Skill)</div>
<div>◇Currone (Drop Rate)</div>
<div>◇Felinike (Drop Rate)</div>
<div>◇Sauro (5%exp)</div>
<div>◇Sauro II (5% exp)</div>
<div>◇Iniliba (Resist)</div>
</div>
</td>
<td style="text-align: justify; border: 1px solid #000000; padding: 3px;">✩Gentleness<br />✩Striver<br />✩Rate Cut<br />✩Quick Cool</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Armor</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<ul style="list-style-type: disc;">
<li>Tentacion</li>
<li>Exelis(Strengthened 3)</li>
<li>Hulam Nemes (Strengthened 2)</li>
<li>Shushiwa (Strengthened 3)</li>
<li>Bellow of Order (Strengthened 1)</li>
</ul>
</td>
<td style="border: 1px solid #000000; padding: 3px;">◇Beelzebub (- Hate Rise)<br />◇Coagulum (- Hate Rise)<br />◇Prince Arick (-Hate Rise)<br />◇Veltria (Heal Skill)<br />◇Currone (Drop Rate)<br />◇Felinike (Drop Rate)<br />◇Sauro (5%exp)<br />◇Sauro II (5% exp)<br />◇Iniliba (Resist)</td>
<td style="border: 1px solid #000000; padding: 3px;">✩Gentleness<br />✩Striver<br />✩Rate Cut<br />✩Range Cut<br />✩Quick Cool</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Additional Gear</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<ul style="list-style-type: disc;">
<li>Evil Dragon Wings (Strengthened 1)</li>
<li>Ardour Cachenez</li>
<li>Monty Beret (Strengthened 1)</li>
<li>White Ribbons (Drop Rate)</li>
</ul>
</td>
<td style="border: 1px solid #000000; padding: 3px;">◇Beelzebub (- Hate Rise)<br />◇Coagulum (- Hate Rise)<br />◇Prince Arick (-Hate Rise)<br />◇Ziddu (-Hate Rise)<br />◇Veltria (Heal Skill)<br />◇Currone (Drop Rate)<br />◇Felinike (Drop Rate)<br />◇Sauro (5%exp)<br />◇Sauro II (5% exp)<br />◇Iniliba (Resist)</td>
<td style="border: 1px solid #000000; padding: 3px;">✩Gentleness<br />✩Striver<br />✩Rate Cut<br />✩Range Cut<br />✩Quick Cool</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Special</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<ul style="list-style-type: disc;">
<li>Argent Ring S/NS</li>
<li>Jar of Greed</li>
<li>Any Free Main Quest Special Equip</li>
</ul>
</td>
<td style="border: 1px solid #000000; padding: 3px;">◇Beelzebub (- Hate Rise)<br />◇Coagulum (- Hate Rise)<br />◇Prince Arick (-Hate Rise)<br />◇Ziddu (-Hate Rise)<br />◇Veltria (Heal Skill)<br />◇Currone (Drop Rate)<br />◇Felinike (Drop Rate)<br />◇Sauro (5%exp)<br />◇Sauro II (5% exp)<br />◇Iniliba (Resist)</td>
<td style="border: 1px solid #000000; padding: 3px;">✩Gentleness<br />✩Quick Cool<br />✩Rate Cut</td>
</tr>
</tbody>
</table>
<strong><br />Al Recommendation:</strong> ▲Irai /▲Leviam /▲Vatendeth /▲Malti /▲Death Chils/▲Pole/▲Vulschem<br /><strong>Al Formation:</strong> 8 Green Line / 6 Purple Line 2 Red Line / 8 Red Line<strong><br /><br />Post Skill Balance Patch</strong>Supporter Minstrel with DEX now are capable of having much more flexible buffing set with no problem on improving Resistance and - Hate Rise without worrying longer skill delay like before. Eventually you have some of low budget buffing set.<br /><br /><strong><span style="font-size: medium;">DPS, Solo and Support Build</span></strong><br /><strong><br /></strong><strong>Post Skill Balance Patch </strong>Dragonewt Minstrels loss their capabilities of spamming party Dragonewt while deal quite heavy damage especially in melee party with Assassin, Samurai, Monk, Sniper, Gladiator, Beast Knight and Melee Ninja. However <strong>post skill balance patch </strong>bring something new to minstrel. All buff song are <em><strong>now dealing damage as well with range, delay and HP&amp;MP cost being reduce</strong></em>. So if you want to contribute damage in party these are some of the build that may fits your play style.<br /><span style="font-size: small;"><br /><strong>DEX&gt;CRT&gt;STR</strong><strong>: Bow x Sword x Throwing<br /><br /></strong></span><strong>1<sup>st</sup></strong><strong>Bow Build Minstrels</strong> are the <strong>highest song damage dealer</strong> while spamming due to some fact:
<ul style="list-style-type: disc;">
<li>- Complete existent of a bow with the higher element such as Gaia, Flame, Thunder, and Ice.</li>
<li>- Special equip that give high raw ATK per DEX such as Thimble or Adamantite Arrow.</li>
<li>- Latest additional equip Monty Beret that also gives good raw ATK per DEX.</li>
</ul>
<div><span style="font-size: 13.3333px;"><br /><strong>2<sup>nd</sup></strong><strong>Sword Build Minstrels</strong> are <strong>2nd highest song damage dealer</strong> while spamming. However what makes them different from bow build are their survivability when equip using Myrica Wristlet in the certain situation despite lack of the complete higher elemental sword. - Item delay effect in some sword also helps in improving survivability.<br /><br /><strong>3<sup>rd</sup></strong><strong>Throwing Build Minstrels</strong> are <strong>3rd highest song damage dealer </strong>while spamming. However, unlike bow build, throw build has no higher elemental throwing with some of the throwing are based on MATK% which didn't support song melee damage properties.&nbsp;<br /></span></div>
<br /><strong>Equipment - DPS Songs Set</strong><br />
<div style="text-align: justify;"><span style="color: #ff0b01; font-size: xx-small;">At level 100:<br />*No DEX build require 4.0 sec skill delay for songs spam.<br />*256 DEX build require 3.0 sec skill delay for songs spam.<br />-If using Dream Song at this level skill delay are added or reduces depending on DEX and level.<br /></span></div>
<table style="text-align: justify;">
<tbody>
<tr>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;"><strong>STR&gt;DEX&gt;CRIT<br />(Optional Vit&lt;/=100)</strong></td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;"><strong>Recommended Equipment</strong></td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;"><strong>Recommended Crysta</strong></td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;"><strong>Recommended Abilities</strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Weapon</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<div><span style="font-size: 13.3333px;">Bow Build:</span></div>
<ul style="list-style-type: disc;">
<li style="text-align: justify;">Yggdrasil Bow</li>
<li style="text-align: justify;">Semeion IV</li>
<li style="text-align: justify;">Elemental Bows</li>
<ul style="list-style-type: circle;">
<li>Hellfire Bow</li>
<li>Bercrete III</li>
<li>Rising Ray</li>
<li>Freesia Bow II</li>
<li>Strike Bow</li>
<li>White Saviour</li>
<li>Dragon Techne</li>
</ul>
</ul>
<div><span style="font-size: 13.3333px;">Sword Build:</span></div>
<ul style="list-style-type: disc;">
<li>Red Tengu IV</li>
<li>Sauro Blade L5</li>
<li>Purity Claw</li>
<li>Elemental Swords</li>
<ul style="list-style-type: circle;">
<li>Lion King Sword</li>
<li>Rock Sword Varuten</li>
<li>Sea Breeze II</li>
<li>Freesia Sword II</li>
<li>Air Strum II</li>
<li>Claiomh Solais III</li>
<li>Fallen GOd Sword</li>
</ul>
</ul>
<div><span style="font-size: 13.3333px;">Throwing Build:</span></div>
<ul style="list-style-type: disc;">
<li>Queen of the Night</li>
<li>Elemental Throwing
<ul style="list-style-type: circle;">
<li>Higiri</li>
<li>Mio Filio II</li>
<li>Whirlwind</li>
<li>Freesia Caim II</li>
<li>Garabestea III</li>
<li>Prescience III</li>
</ul>
</li>
</ul>
</td>
<td style="border: 1px solid #000000; padding: 3px;">
<div style="text-align: justify;">◇Vatendeth<br />◇Aurumteus<br />◇Strum<br />◇Eisen<br />◇Cerberus<br />◇Grapagos<br />◇Amatis<br />◇Bancho Muscle</div>
<div style="text-align: justify;">◇Mr Oritius<br />◇White Fox</div>
<div style="text-align: justify;">◇Sauro II</div>
<div style="text-align: justify;">◇Nigdu</div>
</td>
<td style="text-align: justify; border: 1px solid #000000; padding: 3px;">☆Attack<br />☆Critical<br />☆Strength<br />☆Dexterity<br />☆Gentleness</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Armor</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<ul style="list-style-type: disc;">
<li>Ira (Strengthened 2)</li>
<li>Ultimi (Strengthened 2)</li>
<li>Bellow of Order (Strengthened 1)</li>
<li>Dragon Mail (Strengthened 2)</li>
</ul>
</td>
<td style="border: 1px solid #000000; padding: 3px;">◇Magonza<br />◇Amatis<br />◇Iniliba<br />◇Dorry<br />◇Mr Oritius<br />◇Nigdu<br />◇Aldi</td>
<td style="border: 1px solid #000000; padding: 3px;">☆Attack<br />☆Critical<br />☆Strength<br />☆Dexterity<br />☆Gentleness</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Additional Gear</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<ul style="list-style-type: disc;">
<li>Monty Beret (Strengthened 1)</li>
<li>Separation Arrow (Strengthened 1)</li>
<li>Force Helm (Strengthened 2)</li>
</ul>
</td>
<td style="border: 1px solid #000000; padding: 3px;">◇Cerberus<br />◇Amatis<br />◇Mr Oritius<br />◇Nigdu<br />◇Raton</td>
<td style="border: 1px solid #000000; padding: 3px;">☆Critical<br />☆Strength<br />☆Dexterity<br />☆Gentleness</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Special</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<div><span style="font-size: 13.3333px;">Special for Bow:</span></div>
<ul style="list-style-type: disc;">
<li>Archer Gloves S/NS</li>
<li>Thimble S/NS</li>
<li>Adamantite S/NS</li>
</ul>
<div><span style="font-size: 13.3333px;"><span style="font-size: 13.3333px;">Special for Sword/Throwing:<br /></span></span>
<ul style="list-style-type: disc;">
<li>Disaster Stone S/NS</li>
<li>Arelta Ring S</li>
<li>Nightscore S/NS</li>
</ul>
</div>
</td>
<td style="border: 1px solid #000000; padding: 3px;">◇Cerberus<br />◇Warrior of Light<br />◇Mr Oritius<br />◇Nigdu<br />◇Beelzenoid<br />◇Telon</td>
<td style="border: 1px solid #000000; padding: 3px;">☆Critical<br />☆Strength<br />☆Dexterity<br />☆Gentleness</td>
</tr>
</tbody>
</table>
<br /><strong>Al Recommendation:</strong>&nbsp;▲Ouvel /&nbsp;▲Gatekeeper / ▲Sauro II /&nbsp;▲Teo /&nbsp;▲Any Critical Damage % or Attack% Al that benefits DPS<br /><strong>Al Formation:</strong> 6 Yellow Line 2 Red Line / 6 Yellow Line 2 Green Line / 8 Green Line<br /> <strong><span style="font-size: small;">DEX&gt;CRT&gt;AGI / AGI&gt;CRT&gt;DEX: Special Bow<br /><br /></span>4<sup>th</sup></strong><strong>Special Bow Build Minstrels</strong> is one of early build that capable of soloing if build properly in early level once since most of the boss in episode 1 and 2 are easy to solo due to decent evasion together with Warrior Song. However, just like another DEX build Special Bow minstrel still need to rely on a party on certain occasion. <strong>Post Skill Balance Patch </strong>Special Bow Build Minstrel suffer from lack of HP due to the fact that 25% stat bonus increment from each song are being removed. It not really recommended build anymore unless you going to change to 1-Shot Ninja. Special Bow Build Minstrel are slightly lower in DPS compare to Normal Bow, Sword and Throwing due to lack of decent elemental equip.<br />&nbsp;<br /><strong>Equipment - Special Bow Songs Set<br /></strong>
<div style="text-align: justify;"><span style="color: #ff0b01; font-size: xx-small;">At level 100:<br />*No DEX build require 4.0 sec skill delay for songs spam.<br />*256 DEX build require 3.0 sec skill delay for songs spam.<br />-If using Dream Song at this level skill delay added or reduces depending on DEX and level.<br /></span></div>
<table style="text-align: justify;">
<tbody>
<tr>
<td style="border: 1px solid #000000; padding: 3px;">
<div style="text-align: center;"><span style="font-size: 10pt;"><strong>DEX&gt;CRT&gt;AGI<br />AGI&gt;CRT&gt;DEX</strong></span></div>
<div style="text-align: center;"><span style="font-size: 10pt;"><strong>(Optional gL/rl=100)</strong></span></div>
</td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;"><strong>Recommended Equipment</strong></td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;"><strong>Recommended Crysta</strong></td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;"><strong>Recommended Abilities</strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Weapon</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<ul style="list-style-type: disc;">
<li>Ameno Uzume</li>
<li>Gerifalte II</li>
<li>Irogeos Bow</li>
<li>Malicia</li>
<li>Surge</li>
<li>Stardust Bow</li>
<li>Yumi</li>
</ul>
</td>
<td style="border: 1px solid #000000; padding: 3px;">◇Cerberus<br />◇Grapagos<br />◇Amatis<br />◇Bancho Muscle<br />◇Mr Oritius<br />◇Nigdu</td>
<td style="border: 1px solid #000000; padding: 3px;">☆Attack<br />☆Evasion<br />☆Critical<br />☆Agility<br />☆Dexterity</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Armor</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<ul style="list-style-type: disc;">
<li>Ira (Strengthened 2)</li>
<li>Ultimi (Strengthened 2)</li>
<li>Bellow of Order (Strengthened 1)</li>
<li>Dragon Mail (Strengthened 2)</li>
</ul>
</td>
<td style="border: 1px solid #000000; padding: 3px;">◇Magonza<br />◇Amatis<br />◇Iniliba<br />◇Dorry<br />◇Mr Oritius<br />◇Nigdu<br />◇Aldi</td>
<td style="border: 1px solid #000000; padding: 3px;">☆Attack<br />☆Evasion<br />☆Critical<br />☆Agility<br />☆Dexterity</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Additional</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<ul style="list-style-type: disc;">
<li>Monty Beret (Strengthened 1)</li>
<li>Separation Arrow (Strengthened 1)</li>
<li>Force Helm (Strengthened 2)</li>
<li>Barbarotita (Strengthened 3)</li>
</ul>
</td>
<td style="border: 1px solid #000000; padding: 3px;">◇Cerberus<br />◇Amatis<br />◇Raton<br />◇Vida<br />◇Mr Oritius<br />◇Nigdu</td>
<td style="border: 1px solid #000000; padding: 3px;">☆Evasion<br />☆Critical<br />☆Agility<br />☆Dexterity<br />☆Gentleness</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Special</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<ul style="list-style-type: disc;">
<li>Thimble S/NS</li>
<li>Archer Glove S/NS</li>
<li>Any Free Main Quest Special Equip</li>
</ul>
</td>
<td style="border: 1px solid #000000; padding: 3px;">◇Cerberus<br />◇Warrior of Light<br />◇Wyn<br />◇Mr Oritius<br />◇Nigdu<br />◇Telon</td>
<td style="border: 1px solid #000000; padding: 3px;">☆Evasion<br />☆Critical<br />☆Agility<br />☆Dexterity<br />☆Gentleness</td>
</tr>
</tbody>
</table>
<br /><strong>Al Recommendation:</strong> ▲Ouvel / ▲Gatekeeper / ▲Sauro II / ▲Shelk / ▲Any Magic or Melee Evasion%, Critical Damage % or Attack%<br /><strong>Al Formation:</strong> 6 Yellow Line 2 Red Line / 6 Yellow Line 2 Green Line / 8 Green Line<br /> <strong><span style="font-size: small;">AGI&gt;CRT&gt; STR. VIT&gt;/=100: Claw<br /></span></strong><br /><strong>5<sup>th</sup></strong><strong>Claw Auto Attack Build Minstrels</strong> is one of the <strong>lowest rank songs damage among other build</strong> due to heavy reliance on skill delay equipment to spam songs at early level. However if properly build with knowledge, Claw Auto Attack Build Minstrels are decent soloer at an early level until late game despite low damage. Pets skill especially Dual Blow further improve this build to make up other 4 builds above.<br /><br /><strong>Equipment - Claw Auto Attack Build</strong><br />
<div style="text-align: justify;"><span style="color: #ff0b01; font-size: xx-small;">At level 150:<br />*No DEX build require 4.0 sec skill delay for songs.<br />*+9 Refinement on a weapon is required to spam Dual Blow<br />-Skill delay further reduces with DEX and Dream Song as you level up.</span><br /><br /></div>
<table style="text-align: justify;">
<tbody>
<tr>
<td style="border: 1px solid #000000; padding: 3px;">
<div style="text-align: center;"><span style="font-size: 10pt;"><strong>AGI&gt;CRIT&gt;STR</strong></span></div>
<div style="text-align: center;"><span style="font-size: 10pt;"><strong>(Optional VIT&gt;/=100)</strong></span></div>
</td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;"><strong>Recommended Equipment</strong></td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;"><strong>Recommended Crysta</strong></td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;"><strong>Recommended Abilities</strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Weapon</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<ul style="list-style-type: disc;">
<li>Maniji II</li>
<li>Ceduro II</li>
<li>Knuckle Shield II</li>
</ul>
</td>
<td style="border: 1px solid #000000; padding: 3px;">◇Cerberus<br />◇Grapagos<br />◇Wyn<br />◇Amatis<br />◇Mr Oritius<br />◇Bancho Muscle<br />◇Veleno<br />◇Nigdu</td>
<td style="border: 1px solid #000000; padding: 3px;">☆Autoskill<br />☆Quick Cool<br />☆Critical<br />☆Agility<br />☆Strength</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Armor</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<ul style="list-style-type: disc;">
<li>Ira (Strengthened 2)</li>
<li>Ultimi (Strengthened 3)</li>
<li>Schwermer (Strengthened 2)</li>
<li>Dragon's Mail (Strengthened 2)</li>
<li>Bellow of Order (Strengthened 1)</li>
</ul>
</td>
<td style="border: 1px solid #000000; padding: 3px;">◇Magonza<br />◇Wyn<br />◇Amatis<br />◇Dorry<br />◇Mr Oritius<br />◇Veleno<br />◇Nigdu<br />◇Aldi</td>
<td style="border: 1px solid #000000; padding: 3px;">☆Autoskill<br />☆Evasion<br />☆Critical<br />☆Agility<br />☆Strength</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Additional</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<ul style="list-style-type: disc;">
<li>Huge Cherry Blossom (Strengthened 1)</li>
<li>Force Helm (Strengthened 2)</li>
<li>Barbarotita (Strengthened 3)</li>
</ul>
</td>
<td style="border: 1px solid #000000; padding: 3px;">◇Cerberus<br />◇Amatis<br />◇Raton<br />◇Mr Oritius<br />◇Nigdu<br />◇Vida</td>
<td style="border: 1px solid #000000; padding: 3px;">☆Autoskill<br />☆Quick Cool<br />☆Critical<br />☆Agility<br />☆Strength</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Special</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<ul style="list-style-type: disc;">
<li>Atleta Ring S</li>
<li>Ring of Rush S/NS</li>
<li>Craft Guide Book S/NS</li>
<li>Soul Sucker Fang S/NS</li>
<li>Any Free Main Quest Special Equip</li>
</ul>
</td>
<td style="border: 1px solid #000000; padding: 3px;">◇Cerberus<br />◇Warrior of Light<br />◇Wyn<br />◇Beelzenoid<br />◇Telon<br />◇Nigdu</td>
<td style="border: 1px solid #000000; padding: 3px;">☆Autoskill<br />☆Rate Cut<br />☆Critical<br />☆Agility<br />☆Strength</td>
</tr>
</tbody>
</table>
<br /><strong>Al Recommendation:</strong> ▲Ouvel / ▲Gatekeeper / ▲Sauro II / ▲Cordal / ▲Any Autoskill%, Critical Damage% or Attack%<br />
<div><strong>Al Formation:</strong> 6 Purple Line 2 Red Line / 6 Yellow Line 2 Green Line / 8 Green Line</div>
<div><strong>VIT&gt;STR&gt;CRT / STR&gt;CRT&gt;VIT=DEX/STR=DEX=CRIT&gt;VIT: Special Claw Build</strong></div>
<div><strong>6<sup>th</sup></strong><strong>Special Claw Build Minstrels</strong> are consider one of new build for minstrel <strong>Post Skill Balance Patch</strong>. Special Claw also can be used by STR/DEX/CRT user who want to use claw as their weapon. However Special Claw that available in game are very limited making this build very limited in term of weapons however very flexible and tanky depending on what stat, armor, additional equip and special equip that minstrel choose.</div>
<div><br /><span style="color: #ff3216; font-size: xx-small;">At level 150:<br />*No DEX build require 4.0 sec skill delay for songs.<br />-Skill delay further reduces with DEX and Dream Song as you level up.<br /></span><span style="color: #ff0b01; font-size: xx-small;">*256 DEX build require 3.0 sec skill delay for songs spam.<br /><br />-If using Dream Song at this level skill delay are added or reduces depending on DEX and level.</span><br />
<table style="color: #000000;">
<tbody>
<tr>
<td style="border: 1px solid #000000; padding: 3px;" align="center"><strong>VIT&gt;STR&gt;CRT<br />STR&gt;CRT&gt;VIT=DEX<br /><br />STR=DEX=CRIT&gt;VIT<br /></strong></td>
<td style="border: 1px solid #000000; padding: 3px;" align="center"><strong>Recommended Equipment</strong></td>
<td style="border: 1px solid #000000; padding: 3px;" align="center"><strong>Recommended Crysta<br /></strong></td>
<td style="border: 1px solid #000000; padding: 3px;" align="center"><strong>Recommended Abilities<br /></strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Weapon</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<ul style="list-style-type: disc;">
<li>Mephisto Claw</li>
<li>Purity Claw</li>
<li>Stake Knuckle</li>
<li>Pile Knuckle</li>
<li>Mirror Claw SP/SC/SS/SR</li>
</ul>
</td>
<td style="border: 1px solid #000000; padding: 3px;">◇Sauro II<br />◇Grapagos<br />◇Bancho Muscle<br />◇Cerberus<br />◇Nigdu</td>
<td style="border: 1px solid #000000; padding: 3px;">☆Attack<br />☆Quick Cool<br />☆Strength<br />☆Critical<br />☆Regenerate</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Armor</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<ul style="list-style-type: disc;">
<li>Bellow of Order (Strengthened 1)</li>
<li>Dragon's Mail</li>
<li>Ira (Strengthened 3)</li>
<li>Ultimi (Strengthened 2)</li>
</ul>
</td>
<td style="border: 1px solid #000000; padding: 3px;">◇Bancho Muscle<br />◇Dorry<br />◇Iniliba<br />◇Magonaza<br />◇Nigdu<br />◇Cerberus</td>
<td style="border: 1px solid #000000; padding: 3px;">☆Attack<br />☆Quick Cool<br />☆Strength<br />☆Critical<br /><br /></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Additional</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<ul style="list-style-type: disc;">
<li>Orge Shield</li>
<li>Barbarotita</li>
<li>Force Helm (Strengthened 2)</li>
<li>Monty Beret (Strengthened 1)(With DEX)</li>
</ul>
</td>
<td style="border: 1px solid #000000; padding: 3px;">◇Vida<br />◇Raton<br />◇Nigdu<br />◇Cerberus</td>
<td style="border: 1px solid #000000; padding: 3px;">☆Attack<br />☆Quick Cool<br />☆Strength<br />☆Critical<br />☆Regenerate</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Special</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<ul style="list-style-type: disc;">
<li>Craft Guide Book S/NS (Without DEX)</li>
<li>Atleta Ring S/NS</li>
<li>Ring of Rush S/NS</li>
</ul>
<br /><br /></td>
<td style="border: 1px solid #000000; padding: 3px;">◇Nigdu<br />◇Ganei<br />◇Warrior of Light<br />◇Beelzenoid<br />◇Cerberus</td>
<td style="border: 1px solid #000000; padding: 3px;">☆Attack<br />☆Quick Cool<br />☆Strength<br />☆Critical<br /><br /></td>
</tr>
</tbody>
</table>
<br /><strong style="color: #000000;">Al Recommendation:▲</strong><span style="color: #000000;">Ouvel / ▲Gatekeeper / ▲Sauro II / ▲Teo / ▲Any Critical Damage % or Attack% Al that benefits DPS</span></div>
<div><strong><span style="color: #000000;">Al Formation:</span><span style="color: #ffeb08;">6 Yellow Line</span><span style="color: #ff3216;">2 Red Line</span></strong></div>
<div><strong>INT&gt;DEX&gt;VIT: Autoskill/Counter magic Minstrels<br /></strong></div>
<div><strong>7<sup>th</sup></strong><strong>Autoskill/Counter Magic Minstrels</strong> are consider one of the new build for minstrel <strong>Post Skill Balance Patch</strong>. Despite lack of passive that further increase MATK, this type of minstrel utilizing song bonuses from Wisdom, Life Song, Cleave and Liberation for their survival. Magic counter from equipment and autokill% are their additional sources of damage aside from spamming song</div>
<div><br />
<table>
<tbody>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>INT&gt;DEX&gt;VIT<br /></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Recommended Equipment<br /></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Recommended Crysta<br /></strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Recommended Abilities<br /></strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Weapon</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<ul style="list-style-type: disc;">
<li>Freesia Rod II</li>
<li>Staff of Dawn</li>
<li>Aprilis Rod</li>
<li>Indigo Breaker Bow</li>
</ul>
</td>
<td style="border: 1px solid #000000; padding: 3px;">
<div><span style="font-size: 13.3333px;">◇Frederico<br />◇Minela<br />◇Fiona<br />◇Ninigi<br />◇Sauro II<br />◇Sofys<br />◇Gerust<br /></span></div>
</td>
<td style="border: 1px solid #000000; padding: 3px;">☆Magic<br />☆Inteligence<br />☆Autoskill</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Armor</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<ul style="list-style-type: disc;">
<li>Bellow of Order</li>
<li>Dragon Mail</li>
<li>Struggler (Strengthened 2)</li>
<li>Dark Priest Robe (Strengthened 3)</li>
</ul>
</td>
<td style="border: 1px solid #000000; padding: 3px;">
<div><span style="font-size: 13.3333px;">◇Praldy<br />◇Mineala<br />◇Ninigi<br />◇Sofys<br />◇Fred<br />◇Moldus<br /></span></div>
</td>
<td style="border: 1px solid #000000; padding: 3px;">☆Magic<br /><br />☆Inteligence<br /><br />☆Autoskill</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Additional</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<ul style="list-style-type: disc;">
<li>Snow earmuffs</li>
<li>Spin Shield</li>
<li>Sage Hat(stengthened 2)</li>
<li>Blue Epaulettes</li>
</ul>
</td>
<td style="border: 1px solid #000000; padding: 3px;">
<div><span style="font-size: 13.3333px;">◇Dunkelis II<br />◇Mineala<br />◇Ninigi<br />◇Sofys<br />◇Pole<br />◇Ushilth<br />◇Tarna<br /></span></div>
</td>
<td style="border: 1px solid #000000; padding: 3px;">☆Magic<br /><br />☆Inteligence<br /><br />☆Autoskill</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Special</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<ul style="list-style-type: disc;">
<li>Ice Crystal Necklace S/NS</li>
<li>Luster Ring S/NS</li>
<li>Craft Guide Book S/NS</li>
<li>Gaiety Ring S/NS</li>
</ul>
<br /><br /></td>
<td style="border: 1px solid #000000; padding: 3px;">
<div><span style="font-size: 13.3333px;">◇Minela<br />◇Ninigi<br />◇Sofys<br />◇Agira<br />◇Jahoel<br /></span></div>
</td>
<td style="border: 1px solid #000000; padding: 3px;">☆Magic<br /><br />☆Inteligence<br /><br />☆Autoskill</td>
</tr>
</tbody>
</table>
<br /><strong>Al Recommendation:▲</strong>Halios/ ▲Sauro II/&nbsp;▲Adventurer/&nbsp;▲Ouvel/▲Any Autoskill%,Magic attack Al</div>
<div><strong><span style="color: #000000;">Al Formation:</span><span style="color: #d145fd;"> 6 Purple Line</span><span style="color: #ff0b01;">2 Red Line</span><span style="color: #000000;">/ </span><span style="color: #c716ff;">6 Purple Line</span><span style="color: #4040f8;"> 2 Blue Line</span></strong></div>
<hr /><br /><strong><span style="font-size: large;">Optional Sets</span><br /></strong><br />Finally, we&rsquo;re done with main sets o.o/<br />As a Minstrel, you&rsquo;re going to be finding yourself making tons of sets to make your life a bit easier.<br /><br /><strong>Resistance Set<br /></strong><br />Resistance Set is great for soloing, especially for soloing even without having AGI in stats.<br /><strong><br />Equipment - Resistance Set<br /></strong>
<table style="text-align: justify;">
<tbody>
<tr>
<td style="border: 1px solid #000000; padding: 3px;">
<div style="text-align: center;"><strong>Resistance Set<br /></strong></div>
</td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;"><strong>Recommended Equipment</strong></td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;"><strong>Recommended Crysta</strong></td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;"><strong>Recommended Abilities</strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Weapon</strong></td>
<td style="border: 1px solid #000000; padding: 3px;"><span style="font-size: 13.3333px;"><span style="font-size: 13.3333px;">Bow Build:</span></span>
<ul style="list-style-type: disc;">
<li>Falconet</li>
<li>Mirror Bow SR</li>
</ul>
<div>Sword Build</div>
<ul style="list-style-type: disc;">
<li>Sauro Blade L5</li>
<li>Genius</li>
<li>Mirror Sword SR</li>
</ul>
<div>Special Claw Build<br />
<ul style="list-style-type: disc;">
<li>Mirror Claw SR</li>
</ul>
Claw Build<br />
<ul style="list-style-type: disc;">
<li>Knuckle Shield</li>
</ul>
</div>
</td>
<td style="border: 1px solid #000000; padding: 3px;">◇Iniliba<br />◇Wizard</td>
<td style="border: 1px solid #000000; padding: 3px;">☆Rate Cut</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Armor</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<ul style="list-style-type: disc;">
<li>Bellow of Order (Strengthened 1)</li>
</ul>
</td>
<td style="border: 1px solid #000000; padding: 3px;">◇Iniliba<br />◇Wizard</td>
<td style="border: 1px solid #000000; padding: 3px;">☆Rate Cut</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Additional</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<ul style="list-style-type: disc;">
<li>Monty Beret(Strengthened 1)</li>
<li>Force Helm (Strengthened 2)</li>
<li>Lucioscudo (Strengthened 1)</li>
</ul>
</td>
<td style="border: 1px solid #000000; padding: 3px;">◇Iniliba<br />◇Wizard</td>
<td style="border: 1px solid #000000; padding: 3px;">☆Rate Cut</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Special</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<ul style="list-style-type: disc;">
<li>Heavy Boots S/NS</li>
<li>Necklace of Mortification S/NS</li>
<li>Catura Talisman S</li>
</ul>
</td>
<td style="border: 1px solid #000000; padding: 3px;">◇Iniliba<br />◇Wizard</td>
<td style="border: 1px solid #000000; padding: 3px;">☆Rate Cut</td>
</tr>
</tbody>
</table>
<strong><br />Al Recommendation:</strong> ▲Vatendeth / ▲Irai / ▲Leviam / ▲Malti / ▲Gatekeeper<br /><strong>Al Formation:</strong> 6 Yellow Line 2 Red Line / 6 Red Line 2 Purple Line / 8 Red Line&nbsp;<br />
<div><strong>Self Recovery/Heal Reward Set</strong></div>
<br />Self Recovery/Heal Reward Set are set that are useful to self-recover own HP during or out of battle. A mix of heal reward, auto/natural recovery and enough delay help Minstrel to recover HP really fast. A minimum of 3 sec delay is required to spam Veltria<br /><br /><strong>Equipment - Self Recovery/Heal Reward Set</strong><br />
<table style="text-align: justify;">
<tbody>
<tr>
<td style="border: 1px solid #000000; padding: 3px;">
<div style="text-align: center;"><strong>Resistance Set<br /></strong></div>
</td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;"><strong>Recommended Equipment</strong></td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;"><strong>Recommended Crysta</strong></td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;"><strong>Recommended Abilities</strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Weapon</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<ul style="list-style-type: disc;">
<li>Jade Ricus</li>
<li>Queen of the Night</li>
<li>Sion Capell III</li>
</ul>
</td>
<td style="border: 1px solid #000000; padding: 3px;">◇Veltria<br />◇Botaniga</td>
<td style="border: 1px solid #000000; padding: 3px;">☆Regeneration<br />☆Heal Reward</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Armor</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<ul style="list-style-type: disc;">
<li>Leather Coat (Strengthened 1)</li>
<li>Heinrich Mail (Strengthened 2)</li>
</ul>
</td>
<td style="border: 1px solid #000000; padding: 3px;">◇Veltria<br />◇Botaniga</td>
<td style="border: 1px solid #000000; padding: 3px;">☆Regeneration</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Additional</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<ul style="list-style-type: disc;">
<li>Luludi (Strengthened 1)</li>
<li>Miselatis (Strengthened 1)</li>
<li>Wolf Ear (Strengthened 1)</li>
<li>Zweig Shield (Strengthened 2)</li>
</ul>
</td>
<td style="border: 1px solid #000000; padding: 3px;">◇Veltria<br />◇Botaniga</td>
<td style="border: 1px solid #000000; padding: 3px;">☆Regeneration<br /><br />☆Heal Reward</td>
</tr>
<tr>
<td style="border: 1px solid #000000; padding: 3px;"><strong>Special</strong></td>
<td style="border: 1px solid #000000; padding: 3px;">
<ul style="list-style-type: disc;">
<li>Heavy Boots S/NS</li>
<li>Necklace of Mortification S/NS</li>
<li>Catura Talisman S</li>
</ul>
</td>
<td style="border: 1px solid #000000; padding: 3px;">◇Veltria<br />◇Botaniga</td>
<td style="border: 1px solid #000000; padding: 3px;">☆Regeneration<br /><br /></td>
</tr>
</tbody>
</table>
<div><span style="text-decoration: line-through;"><strong>1HP Buff Set</strong></span></div>
<span style="text-decoration: line-through;"><br /></span>
<div><span style="text-decoration: line-through;">1HP Buff Set is useful for long-term party buffing without any healing especially grinding. It also useful for party buffing in some boss battle. Using at least 3 ◇Ganei on Buff Set (Refer Ultimate Supporter Build Table for equipment) you can spam buff song without a problem.</span></div>
<br />
<div><strong>Rare Drop Set</strong></div>
<br />Rare Drop set is also an important aspect of minstrel despite having sweet home. Using at least 3 Currone on Buff Set (Refer Ultimate Supporter Build Table for equipment) with additional equip such as White Ribbons from summer event to further increase your drop rate while spamming buff song without a problem.<hr /><br /><span style="font-size: large;"><strong>Tips for Minstrel</strong></span><br /><br /><u><strong>Early Game Tips</strong></u><br /><br />If you become a Minstrel when you're probably lv.100-150. The difficult thing about being a Minstrel early game is doing Main quest and finding parties at a low level. Here are 3 tips that'll help you start off and what your main objectives would be.<br /><br /><strong><span style="font-size: medium;">1st</span></strong>Furthermost you need to get your level up to 240 as soon as you can. Things will start being easy for you. You can start farming and be helpful during Main quest when your friends or you could probably solo some bosses until Eldan Mq.<br /><strong><br /><span style="font-size: medium;">2nd</span></strong> You need to get a Jade Ricus. Whether you like it or not. No slot works because it's really good on its own already. Also if you can get a skill delay set it will help you along your journey (Optional).<br /><br /><strong><span style="font-size: medium;">3rd</span></strong> You have to farm for spina. Once you're 240 farming bosses or so like Ouvel and Gatekeeper. You're going to need money. Lots of it. For buying skills and etc and your skill delay equipment. Unless you don't have your Jade Ricus and Skill Delay Set and not 240? I propose that you farm raids in Sofya.<br /><br /><u><strong>Late Game Tips</strong></u><br /><br />If you become a Minstrel late game. When you decide to switch your warrior, mage, or special jobs to Minstrel. You're probably around lv.260+~ish? Another reason is that you want to make a Minstrel as an alt because I don't know you're probably really rich to invest for a Minstrel. Okay so first of all thanks for joining the Minstrel Army. Late game you're probably geared a bit and probably need some help and guidance for Minstrel but it's quite simple. Follow the early game tips if you haven't already. Now continuing on for late game.<br /><br /><strong><span style="font-size: medium;">1st</span></strong> If you aren't level 320 then start grinding! Minstrel 300 &amp; 320 Skills will be proven useful to you.<br /><br /><strong><span style="font-size: medium;">2nd</span></strong> Please. Please. Please. Depending on your Minstrel Build. Get a type of Solo, Damage, or Magic Set. As a second hitter job. This set is probably required. (Dragonewt Dmg based on your ATK &gt; Critical Damage+%) It's very easy if you want to be a soloist Minstrel. You'll face problems with only your skill delay set.<br /><br /><strong><span style="font-size: medium;">3rd</span></strong> My very last tip to you is that don't use Minstrel as a leveling tool. I trust you that you'll love the job.<hr /><br /><strong><span style="font-size: large;">Dream Song for Dummies</span></strong><br /> Here is a table of skill delay by added or reduce by Dream Song that already been calculate to help you decide on how much skills delay needed for your build stat based on your level and DEX. No DEX build suffer the most from + sec skill delay until level 300 while DEX builds benefits for - sec skill delay at an early level.<br /><br /><span style="font-size: xx-small;"><span style="color: #ff0b01;">*Delay Amount of all songs except Dragonewt and Humming without DEX is 8.5sec<br /></span>*Equation: Skill Delay Increase/Decrease = 3.0sec - (Level/100) - (DEX/250)<br /></span><br />
<table style="text-align: center;">
<tbody>
<tr>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;"><strong>Level</strong></td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;"><strong>Without DEX</strong></td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;"><strong>With DEX</strong></td>
</tr>
<tr>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;">100</td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;">If 0 DEX = +2.0 sec</td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;">If 250 DEX = +1.0 sec</td>
</tr>
<tr>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;">150</td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;">If 0 DEX = +1.5 sec</td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;">If 250 DEX = +0.5 sec</td>
</tr>
<tr>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;">200</td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;">If 0 DEX = +1.0 sec</td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;">If 275 DEX = -0.1 sec</td>
</tr>
<tr>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;">250</td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;">If 0 DEX = +0.5 sec</td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;">If 300 DEX = -0.7 sec</td>
</tr>
<tr>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;">300</td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;">If 0 DEX = +0.0 sec</td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;">If 350 DEX = -1.4 sec</td>
</tr>
<tr>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;">350</td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;">If 0 DEX = - 0.5 sec</td>
<td style="text-align: center; border: 1px solid #000000; padding: 3px;">If 400 DEX = -2.1 sec</td>
</tr>
</tbody>
</table></div>
</article>
                        <hr>
                        <p>Author: <a href="http://irunaonline.boards.net/user/10808">NightinGals</a></p>
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
