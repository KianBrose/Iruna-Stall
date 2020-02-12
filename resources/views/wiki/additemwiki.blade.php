<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link ref="stylesheet" href="css/style.css">
	<meta name="robots" content="index, follow"/>
	<meta property="og:image" content="https://irunastall.com/img/iruna.jpg">
    <meta property="og:title" content="Iruna Stall">
    <meta property="og:description" content="Find, buy and sell items for free on the Iruna Online Global Stall! In the Global Stall, you can post your items as a seller and search for items as a buyer. The stall is free to use and requires no account to search for items.">
	<meta name="description" content="Find, buy and sell items for free on the Iruna Online Global Stall! In the Global Stall, you can post your items as a seller and search for items as a buyer. The stall is free to use and requires no account to search for items."/>
	<meta name="keywords" content="Iruna, Stall, Global, iruna, stall, global, Iruna Global stall"/>
	<title>Iruna Global Stall Wiki</title>
	<meta name="hostname" content="irunastall.com"/>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<link rel="manifest" href="{{asset('manifest.json')}}" >
	<script src="{{asset('js/serviceLoader.js')}}"></script>
    <!-- bootstrap css -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
	<link href="{{asset('css/style.css')}}" rel="stylesheet">
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
                <a class="navbar-brand" href="{{ url('/') }}" style="width:200px;">
						<img alt="Iruna Stall" src="{{asset('img/bannerIS.png')}}" style="width:70%; height:70%">
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
                            <li class="nav-item dropdown notification">
									@if($message->count() >= 1)
									<span class="badge" style="font-weight: 900;">{{$message->count()}}</span>
										@endif
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="/user/{{ auth()->user()->user_id }}">Profile</a>
									<a class="dropdown-item" href="/account">Settings</a>
									<a class="dropdown-item" href="/private">
										<span>Messages</span>
										@if($message->count() >= 1)
									  <span style="color: red; font-weight: 900;">{{$message->count()}}</span>
									  @endif</a>
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
                    <h4>Add Wiki Item	</h4>
                    <hr>
					<div>
						<p>Welcome to the wiki add item page!</p>
							<div class="alert alert-success">Please write down the names correctly as there is no edit function of these yet.</div>
							
							@if ($errors->any())
    						<div class="alert alert-danger">{{ $errors->first() }}</div>
							@endif


							<select name="wikiinputtype" class="form-control2" id="wikiinputtype"> 
							   <option>Choose type</option>
							   <option value="1">Item</option>
							   <option value="2">Monster</option>
							   <option value="3">Production</option>
							</select>

							<div id="item" style="display:none;">
								<form action="/wikiadditem" method="POST">
								@csrf
								<tr>
									<td>
										<label for="name">Item Name:</label>
									</td>
									<td  style="padding-left:10px;">
										<input type="text" class="form-control iteminput" style="width: 400px" name="name" />
									</td>
									<br>
									<select name="itemcategory" class="form-control2" id="itemcategory"> 
									   <option>Choose type</option>
									   <option>AlCrystas</option>
									   <option>Collectibles</option>
									   <option>Crystas</option>
									   <option>Chests</option>
									   <option>Equipment</option>
									   <option>Island Objects</option>
									   <option>Ores</option>
									   <option>Recovery</option>
									   <option>RelicCrystas </option>
									   <option>Strengthening</option>
									   <option>Status</option>
									   <option>Teleport</option>
									   <option>Pets</option>
									   
									</select>
								</tr>
								<div id="equipmentcategory" style="display:none;">
									<tr>
										<br>
										<select name="equipcategory" class="form-control2" id="equipcategory"> 
										   <option>Choose type</option>
										   <option value="1">Weapon</option>
										   <option value="2">Body</option>
										   <option value="3">Additional</option>
										   <option value="4">Special</option>
										</select>
										<div id="equipmentcategoryweapon" style="display:none;">
											<br>
											<select name="itemcategory" class="form-control2" id="itemtype"> 
											   <option>Choose type</option>
											   <option value="1">Throwing</option>
											   <option value="2">Swords</option>
											   <option value="3">Claws</option>
											   <option value="4">Staffs</option>
											   <option value="5">Bows</option>
											</select>
										</div>
									</tr>
									<td>
										<br>
									<label for="name">ATK:</label>
									</td>
									<td  style="padding-left:10px;">
										<input type="text" class="form-control iteminput" style="width: 400px" name="name" id="equipatk"/>
									</td>
									<td>
										<label for="name">DEF:</label>
									</td>
									<td  style="padding-left:10px;">
										<input type="text" class="form-control iteminput" style="width: 400px" name="name" id="equipdef"/>
									</td>
									<br>
									<select name="candropabi" class="form-control2" id="candropabi"> 
									   <option>Drops with ability?</option>
									   <option value="1">Yes</option>
									   <option value="2">No</option>
									</select>
									<div id="yesdropability" style="display:none;">
										<br>
											<td>
												<label for="name">Ability name(s):</label>
											</td>
											<td  style="padding-left:10px;">
												<input type="text" class="form-control iteminput" style="width: 400px" name="name" id="abilitynames"/>
											</td>
									</div>
								</div>

								<td>
									<br>
									<label for="name">Text/Description:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="text" class="form-control iteminput" style="width: 400px" name="name" id="textdescription"/>
								</td>
								<br>
								<select name="hashiddeneffect" class="form-control2" id="hashiddeneffect"> 
									   <option>Has hidden effect?</option>
									   <option value="1">Yes</option>
									   <option value="2">No</option>
								</select>
								<br>
								<div id="hiddentextdescription" style="display:none;">
									<td>
										<label for="name">Hidden Text/Description:</label>
									</td>
									<td  style="padding-left:10px;">
										<input type="text" class="form-control iteminput" style="width: 400px" name="name" id="hiddentextdesc"/>
									</td>
								</div>

								<br><input type="submit" class="btn btn-success" style="width: 150px" name="search_button" id="search_button1" value="Add new item"/>
								</div>
							</form>
							</div>

							<div id="monster" style="display:none;">
								<form action="/wikiaddmonster" method="POST">
								@csrf
								<tr>
									<td>
										<label for="name">Monster Name:</label>
									</td>
									<td  style="padding-left:10px;">
										<input type="text" class="form-control iteminput" style="width: 400px" name="name" id="monstername"/>
									</td>
									<br>
									<td>
										<label for="name">Level(s):</label>
									</td>
									<td  style="padding-left:10px;">
										<input type="text" class="form-control iteminput" style="width: 400px" name="name" id="levels"/>
									</td>
									<br>
									<td>
										<label for="name">HP:</label>
									</td>
									<td  style="padding-left:10px;">
										<input type="text" class="form-control iteminput" style="width: 400px" name="name" id="hp"/>
									</td>
									<br>
									<td>
										<label for="name">XP:</label>
									</td>
									<td  style="padding-left:10px;">
										<input type="text" class="form-control iteminput" style="width: 400px" name="name" id="xp"/>
									</td>
									<br>
									<td>
										<label for="name">Location(s):</label>
									</td>
									<td  style="padding-left:10px;">
										<input type="text" class="form-control iteminput" style="width: 400px" name="name" id="monsterlocations"/>
									</td>
									<br>
									<td>
										<label for="name">Monster drop(s):</label>
									</td>
									<td  style="padding-left:10px;">
										<input type="text" class="form-control iteminput" style="width: 400px" name="name" id="monsterdrops"/>
									</td>
									<br>


								<br><input type="submit" class="btn btn-success" style="width: 150px" name="search_button" id="search_button2" value="Add new monster"/>
								</div>
							</form>
							</div>

							<div id="prod" style="display:none;">
								<form action="/wikiaddprod" method="POST">
								@csrf
								<tr>
									<td>
										<label for="name">Item name:</label>
									</td>
									<td  style="padding-left:10px;">
										<input type="text" class="form-control iteminput" style="width: 400px" name="name" id=""/>
									</td>
									<br>
								</tr>
								<select name="prodtype1" class="form-control2" id="prodtype1"> 
									   <option>Production type</option>
									   <option value="1">Smithing</option>
									   <option value="2">Carpentry</option>
									   <option value="3">Tailoring</option>
									   <option value="4">Chasing</option>
									   <option value="5">Alchemy</option>
									   <option value="6">Cooking</option>
								</select>
								<br>
								<select name="prodtype2" class="form-control2" id="prodtype2"> 
									   <option>Requires second prod?</option>
									   <option value="0">No</option>
									   <option value="1">Smithing</option>
									   <option value="2">Carpentry</option>
									   <option value="3">Tailoring</option>
									   <option value="4">Chasing</option>
									   <option value="5">Alchemy</option>
									   <option value="6">Cooking</option>
								</select>
								<br>
								<select name="prodtype3" class="form-control2" id="prodtype3"> 
									   <option>Requires third prod?</option>
									   <option value="0">No</option>
									   <option value="1">Smithing</option>
									   <option value="2">Carpentry</option>
									   <option value="3">Tailoring</option>
									   <option value="4">Chasing</option>
									   <option value="5">Alchemy</option>
									   <option value="6">Cooking</option>
								</select>
								<br>
								<select name="prodtype4" class="form-control2" id="prodtype4"> 
									   <option>Requires fourth prod?</option>
									   <option value="0">No</option>
									   <option value="1">Smithing</option>
									   <option value="2">Carpentry</option>
									   <option value="3">Tailoring</option>
									   <option value="4">Chasing</option>
									   <option value="5">Alchemy</option>
									   <option value="6">Cooking</option>
								</select>
								<br>
								<td>
									<br>
									<label for="name">Enter level for production(s), example (90,20,10 would be lvl 90 for first prod, lvl 20 for second etc):</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="text" class="form-control iteminput" style="width: 400px" name="name" id="prodlevels"/>
								</td>
								<br>
								<td>
									<br>
									<label for="name">Component one & QTY (example:zirconium,55 would be 55 zirconium)</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="text" class="form-control iteminput" style="width: 400px" name="name" id="component1"/>
								</td>
								<br>
								<td>
									<br>
									<label for="name">Component two & QTY</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="text" class="form-control iteminput" style="width: 400px" name="name" id="component2"/>
								</td>
								<td>
									<br>
									<label for="name">Component three & QTY</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="text" class="form-control iteminput" style="width: 400px" name="name" id="component3"/>
								</td>
								<td>
									<br>
									<label for="name">Component four & QTY</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="text" class="form-control iteminput" style="width: 400px" name="name" id="component4"/>
								</td>
								<td>
									<br>
									<label for="name">Component five & QTY</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="text" class="form-control iteminput" style="width: 400px" name="name" id="component5"/>
								</td>
								<br>

								<br><input type="submit" class="btn btn-success" style="width: 150px" name="search_button" id="search_button3" value="Add recipe"/>
								</div>
							</form>
							</div>
					
					
					<script src="https://code.jquery.com/jquery-3.4.1.min.js"   integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="   crossorigin="anonymous"></script>
					<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"   integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="   crossorigin="anonymous"></script>
    				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
					<script>    
					$('#wikiinputtype').on('change',function(){
					var selection = $(this).val();
						switch(selection)
						{
							case "1":
								$("#item").show()
								$("#monster").hide()
								$("#prod").hide()
								$("#equipmentcategory").hide()
								$("#equipmentcategoryweapon").hide()
								$("#yesdropability").hide()
								break;
							case "2":
								$("#item").hide()
								$("#monster").show()
								$("#prod").hide()
								$("#equipmentcategory").hide()
								$("#equipmentcategoryweapon").hide()
								$("#yesdropability").hide()
								break;
							case "3":
								$("#item").hide()
								$("#monster").hide()
								$("#prod").show()
								$("#equipmentcategory").hide()
								$("#equipmentcategoryweapon").hide()
								$("#yesdropability").hide()
								break;
							default:
								$("#item").hide()
								$("#monster").hide()
								$("#equipmentcategory").hide()
								$("#equipmentcategoryweapon").hide()
								$("#yesdropability").hide()
								break;
						}
					});
					$('#itemcategory').on('change',function(){
					var selection = $(this).val();
						switch(selection)
						{
							case "Equipment":
								$("#item").show()
								$("#monster").hide()
								$("#equipmentcategory").show()
								$("#equipmentcategoryweapon").hide()
								break;
							default:
								$("#item").show()
								$("#monster").hide()
								$("#equipmentcategory").hide()
								$("#equipmentcategoryweapon").hide()
								$("#yesdropability").hide()
								break;
						}
					});
					$('#equipcategory').on('change',function(){
					var selection = $(this).val();
						switch(selection)
						{
							case "1":
								$("#item").show()
								$("#monster").hide()
								$("#equipmentcategory").show()
								$("#equipmentcategoryweapon").show()
								break;
							default:
								$("#item").show()
								$("#monster").hide()
								$("#equipmentcategory").show()
								$("#equipmentcategoryweapon").hide()
								break;
						}
					});
					$('#candropabi').on('change',function(){
					var selection = $(this).val();
						switch(selection)
						{
							case "1":
								$("#item").show()
								$("#monster").hide()
								$("#equipmentcategory").show()
								$("#equipmentcategoryweapon").show()
								$("#yesdropability").show()
								break;
							default:
								$("#item").show()
								$("#monster").hide()
								$("#equipmentcategory").show()
								$("#equipmentcategoryweapon").show()
								$("#yesdropability").hide()
								break;
						}
					});
					$('#yescandropabi').on('change',function(){
					var selection = $(this).val();
						switch(selection)
						{
							case "1":
								$("#item").show()
								$("#monster").hide()
								$("#equipmentcategory").show()
								$("#equipmentcategoryweapon").show()
								$("#yesdropability").show()
								break;
							case "2":
								$("#item").show()
								$("#monster").hide()
								$("#equipmentcategory").show()
								$("#equipmentcategoryweapon").show()
								$("#yesdropability").show()
								break;
							case "3":
								$("#item").show()
								$("#monster").hide()
								$("#equipmentcategory").show()
								$("#equipmentcategoryweapon").show()
								$("#yesdropability").show()
								break;
							case "4":
								$("#item").show()
								$("#monster").hide()
								$("#equipmentcategory").show()
								$("#equipmentcategoryweapon").show()
								$("#yesdropability").show()
								break;
							default:
								$("#item").show()
								$("#monster").hide()
								$("#equipmentcategory").show()
								$("#equipmentcategoryweapon").show()
								$("#yesdropability").show()
								break;
						}
					});
					$('#hashiddeneffect').on('change',function(){
					var selection = $(this).val();
						switch(selection)
						{
							case "1":
								$("#item").show()
								$("#monster").hide()
								$("#hiddentextdescription").show()
								break;
							default:
								$("#item").show()
								$("#monster").hide()
								$("#hiddentextdescription").hide()
								break;
						}
					});
					</script>

					</div>

                    <div class="row divider" role="separator" ></div>


                    <div class="row divider" role="separator" style="margin-top:20px;"></div>
                </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
	<!-- bootstrap js -->
<script type="text/javascript" id="cookieinfo"
    src="//cookieinfoscript.com/js/cookieinfo.min.js">
</script>
</body>

</html>
