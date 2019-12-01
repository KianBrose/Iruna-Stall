<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link ref="stylesheet" href="css/style.css">
	<meta name="robots" content="index, follow"/>
	<meta name="description" content="Find, buy and sell items for free on the Iruna Online Global Stall! In the Global Stall, you can post your items as a seller and search for items as a buyer. The stall is free to use and requires no account to search for items."/>
	<meta name="keywords" content="Iruna, Stall, Global, iruna, stall, global"/>
    <title>Iruna Global Stall</title>

    <!-- bootstrap css -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
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
                    <h4>Add item</h4>
                    <hr>
					<div>
						<p>Welcome to the add item page! If this is your first time here, please refer to this <a>quick guide</a> on how to add an item!</p>
							@error('mainError')
									<div class="alert alert-danger"> {{ $message }}</div>
								@enderror
							<select name="itemtype" class="form-control2" id="itemtype"> 
							   <option>Choose type</option>
							   <option value="1">Equipment</option>
							   <option value="2">Items</option>
							   <option value="3">Xtal</option>
							   <option value="4">AL Crystal</option>
							   <option value="5">Relic</option>
							</select>

							<div id="equip" style="display:none;">
								<form action="/createEquip" method="POST">
									@csrf
							<tr>
								<td>
									<label for="name">Item Name:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="text" class="form-control iteminput" style="width: 400px" name="name" id="equipment"/>
								</td>
								@error('name')
						<div style="color:red;"> {{ $message }}</div>
						@enderror

							</tr>
							<tr>
								<td>
									<label for="atk">ATK:</label>
								</td>
								<td  style="padding-left:10px;">
								<input type="number" class="form-control iteminput" style="width: 400px" name="atk" id="atk" value="{{ old('atk') }}"/>
								</td>
								@error('atk')
								<div style="color:red;"> {{ $message }}</div>
								@enderror
							</tr>
							<tr>
								<td>
									<label for="def">DEF:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="number" class="form-control iteminput" style="width: 400px" name="def" id="def"/>
								</td>
								@error('def')
								<div style="color:red;"> {{ $message }}</div>
								@enderror
							</tr>
							<tr>
								<br>
								<td>
									<label for="Test">Refinement:</label>
								</td>
								<td  style="padding-left:10px;">
									<select name="refinement" class="form-control2" id="refinement"> 
									   <option selected value="0">0</option>
									   <option value="1">1</option>
									   <option value="2">2</option>
									   <option value="3">3</option>
									   <option value="4">4</option>
									   <option value="5">5</option>
									   <option value="6">6</option>
									   <option value="7">7</option>
									   <option value="8">8</option>
									   <option value="9">9</option>
									</select>
									<br>
								</td>
							</tr>
							<tr>
								<br>
								<td>
									<label for="type">Type:</label>
								</td>
								<td  style="padding-left:10px;">
									<select name="type" class="form-control2" id="type"> 
									   <option selected>Weapon</option>
									   <option>Body</option>
									   <option>Additional</option>
									   <option>Special</option>
									</select>
									<br>
								</td>
							</tr>
							<tr>
								<br>
								<td>
									<label for="Test">Slots:</label>
								</td>
								<td  style="padding-left:10px;">
									<select name="equipslotamount" class="form-control2" id="equipslotamount"> 
									   <option selected value="0">0</option>
									   <option value="1">1</option>
									   <option value="2">2</option>
									</select>
									<br>
								</td>
								<br>
							</tr>
							<div id="slot1" style="display:none;">
							<tr>
								<td>
									<label for="slot1">Slot 1:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="text" class="form-control iteminput crystas" style="width: 400px" name="slot1" id="slot1"/>
								</td>
								<br>
							</tr>
							</div>
							<div id="slot2" style="display:none;">
							<tr>
								<td>
									<label for="Test">Slot 2:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="text" class="form-control iteminput crystas" style="width: 400px" name="slot2" id="slot"/>
								</td>
								<br>
							</tr>
							</div>
							<tr>
								<td>
									<label for="Test">Ability:</label>
								</td>
								<td  style="padding-left:10px;">
									<select name="abidrop" class="form-control2" id="abidrop"> 
									   <option selected value="0">No</option>
									   <option value="1">Yes</option>
									</select>
								</td>
								<br>
							</tr>
							<div id="hasabil" style="display:none;">
							<tr>
								<td>
									<label for="Test">Ability name:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="text" class="form-control iteminput" style="width: 400px" name="ability" id="ability" value=""/>
								</td>
							</tr>
							<tr>
								<td>
									<label for="Test">Ability level:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="number" max="5" class="form-control iteminput" style="width: 400px" name="ability_level" id="ability_level" value="0"/>
								</td>
							</tr>
							</div>
							<tr>
								<br>
								<td>
									<label for="Test">Price:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="number" class="form-control iteminput" style="width: 400px" name="price" id="price" val/>
								</td>
							</tr>
								<br><input type="submit" class="btn btn-success" style="width: 150px" name="search_button" id="search_button" value="Add new item"/>
							</form>
							</div>

							<div id="item" style="display:none;">
								<form action="/createItem" method="POST">
									@csrf
							<tr>
								<td>
									<label for="Test">Item Name:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="text" class="form-control iteminput" style="width: 400px" name="name" id="material"/>
								</td>
								@error('fielderror')
									<div style="color:red;"> {{ $message }}</div>
								@enderror
								@error('name')
									<div style="color:red;"> {{ $message }}</div>
								@enderror
							</tr>
							<tr>
								<td>
									<label for="Test">Quantity:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="number" class="form-control iteminput" style="width: 400px" name="quantity" id="itemqty"/>
								</td>
							</tr>
							<tr>
								<td>
									<label for="Test">Price:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="number" class="form-control iteminput" style="width: 400px" name="price" id="itemprice"/>
								</td>
							</tr>
								<br><input type="submit" class="btn btn-success" style="width: 150px" name="search_button" id="search_button" value="Add new item" onclick="window.location.href='/additem.php'"/>
							</div>
						</form>

							<div id="xtal" style="display:none;">
								<form action="/createXtal" method="POST">
									@csrf
							<tr>
								<td>
									<label for="Test">Xtal Name:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="text" class="form-control iteminput crystas" style="width: 400px" name="name" id="name"/>
								</td>
							</tr>
							<tr>
								<td>
									<label for="Test">Quantity:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="number" max="99" class="form-control iteminput" style="width: 400px" name="quantity" id="quantity"/>
								</td>
							
							</tr>
							<tr>
								<td>
									<label for="Test">Price:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="number" min='1' class="form-control iteminput" style="width: 400px" name="price" id="xtalprice"/>
								</td>
							</tr>
								<br><input type="submit" class="btn btn-success" style="width: 150px" name="search_button" id="search_button" value="Add new item"/>
								</form>
							</div>
						
							<div id="al" style="display:none;">
								<form action="/createAi" method="POST">
									@csrf
							<tr>
								<td>
									<label for="name">Item Name:</label>
								</td>
								
								<td  style="padding-left:10px;">
								<input type="text" class="form-control iteminput" style="width: 400px" name="name" id="alcrystas" value="{{ old('name') }}"/>
								</td>
								@error('name')
									<div style="color:red;"> {{ $message }}</div>
								@enderror
							</tr>
							<tr>
								<td>
									<label for="quantity">Quantity:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="number" max="99" class="form-control iteminput" style="width: 400px" name="quantity" id="quantity" value="{{ old('quantity') }}"/>
								</td>
								@error('quantity')
									<div style="color:red;"> {{ $message }}</div>
								@enderror
		
							</tr>
							<tr>
								<br>
								<td>
									<label for="color">Color:</label>
								</td>
								<td  style="padding-left:10px;">
									<select name="color" class="form-control2" id="color"> 
									   <option selected>Red</option>
									   <option>Green</option>
									   <option>Blue</option>
									</select>
								</td>
								
							</tr>

							<tr>
								<br>
								<td>
									<label for="price">Price:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="number" class="form-control iteminput" style="width: 400px" name="price" id="price" value="{{ old('price') }}"/>
								</td>
								@error('price')
						<div style="color:red;"> {{ $message }}</div>
						@enderror
							</tr>
								<br><input type="submit" class="btn btn-success" style="width: 150px" name="search_button" id="search_button" value="Add new item" "/>
								</form>
							</div>

							<div id="relic" style="display:none;">
								<form action="/createRelic" method="POST">
									@csrf
							<tr>
								<td>
									<label for="Test">Relic Name:</label>
								</td>
								<td  style="padding-left:10px;">
								<input type="text" class="form-control iteminput" style="width: 400px" name="name" id="relicname" value="{{ old('name')}}"/>
								</td>
							</tr>
							<tr>
								<td>
									<label for="Test">Quantity:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="number" max="99" min="0" class="form-control iteminput" style="width: 400px" name="quantity" id="quantity"/>
								</td>
							</tr>
							<tr>
								<td>
									<label for="Test">Price:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="number" min="0" class="form-control iteminput" style="width: 400px" name="price" id="price"/>
								</td>
							</tr>
								<br><input type="submit" class="btn btn-success" style="width: 150px" name="search_button" id="search_button" value="Add new item"/>
								</form>
							</div>
					
					
					<script src="https://code.jquery.com/jquery-3.4.1.min.js"   integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="   crossorigin="anonymous"></script>
					<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"   integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="   crossorigin="anonymous"></script>
    				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
					<script>    
					$('#itemtype').on('change',function(){
					var selection = $(this).val();
						switch(selection)
						{
							case "1":
								$("#equip").show()
								$("#item").hide()
								$("#xtal").hide()
								$("#al").hide()
								$("#relic").hide()
								break;
							case "2":
								$("#equip").hide()
								$("#item").show()
								$("#xtal").hide()
								$("#al").hide()
								$("#relic").hide()
								break;
							case "3":
								$("#equip").hide()
								$("#item").hide()
								$("#xtal").show()
								$("#al").hide()
								$("#relic").hide()
								break;
							case "4":
								$("#equip").hide()
								$("#item").hide()
								$("#xtal").hide()
								$("#al").show()
								$("#relic").hide()
								break;
							case "5":
								$("#equip").hide()
								$("#item").hide()
								$("#xtal").hide()
								$("#al").hide()
								$("#relic").show()
								break;
							default:
								$("#equip").hide()
								$("#item").hide()
								$("#xtal").hide()
								$("#al").hide()
								$("#relic").hide()
								break;
						}
					});
					$('#equipslotamount').on('change',function(){
					var selection = $(this).val();
						switch(selection)
						{
							case "0":
								$("#slot1").hide()
								$("#slot2").hide()
								$("#equip").show()
								break;
							case "1":
								$("#slot1").show()
								$("#slot2").hide()
								$("#equip").show()
								break;
							case "2":
								$("#slot1").show()
								$("#slot2").show()
								$("#equip").show()
								break;
							default:
								$("#slot1").hide()
								$("#slot2").hide()
								$("#equip").hide()
								$("#item").hide()
								$("#xtal").hide()
								$("#al").hide()
								$("#relic").hide()
								break;
						}
					});
					$('#abidrop').on('change',function(){
					var selection = $(this).val();
						switch(selection)
						{
							case "0":
								$("#hasabil").hide()
								$("#equip").show()
								break;
							case "1":
								$("#hasabil").show()
								$("#equip").show()
								break;
							default:
								$("#hasabil").hide()
								$("#slot1").hide()
								$("#slot2").hide()
								$("#equip").hide()
								$("#item").hide()
								$("#xtal").hide()
								$("#al").hide()
								$("#relic").hide()
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
<script>
	$(document).ready(function() {
		
		$( "#ability" ).autocomplete({
			source: function(request, response) {
				$.ajax({
				url: "{{url('api/searchability')}}",
				data: {
						term : request.term
				},
				dataType: "json",
				success: function(data){
				var resp = $.map(data,function(obj){
						return obj.type;
				}); 

				response(resp);
				}
			});
		},
		minLength: 3
		});

		$( "#equipment" ).autocomplete({
			source: function(request, response) {
				$.ajax({
				url: "{{url('api/searchequip')}}",
				data: {
						term : request.term
				},
				dataType: "json",
				success: function(data){
				var resp = $.map(data,function(obj){
						return obj.name;
				}); 

				response(resp);
				}
			});
		},
		minLength: 3
		});
		$( "#alcrystas" ).autocomplete({
			source: function(request, response) {
				$.ajax({
				url: "{{url('api/searchal')}}",
				data: {
						term : request.term
				},
				dataType: "json",
				success: function(data){
				var resp = $.map(data,function(obj){
						return obj.name;
				}); 

				response(resp);
				}
			});
		},
		minLength: 3
		});

		$( "#material" ).autocomplete({
			source: function(request, response) {
				$.ajax({
				url: "{{url('api/searchmaterial')}}",
				data: {
						term : request.term
				},
				dataType: "json",
				success: function(data){
				var resp = $.map(data,function(obj){
						return obj.name;
				}); 

				response(resp);
				}
			});
		},
		minLength: 3
		});
		$( "#relicname" ).autocomplete({
			source: function(request, response) {
				$.ajax({
				url: "{{url('api/searchrelic')}}",
				data: {
						term : request.term
				},
				dataType: "json",
				success: function(data){
				var resp = $.map(data,function(obj){
						return obj.name;
				}); 

				response(resp);
				}
			});
		},
		minLength: 3
		});

		$( ".crystas" ).autocomplete({
			source: function(request, response) {
				$.ajax({
				url: "{{url('api/searchcrystas')}}",
				data: {
						term : request.term
				},
				dataType: "json",
				success: function(data){
				var resp = $.map(data,function(obj){
						return obj.name;
				}); 

				response(resp);
				}
			});
		},
		minLength: 3
		});



		
	});
		

	</script>
</body>

</html>
