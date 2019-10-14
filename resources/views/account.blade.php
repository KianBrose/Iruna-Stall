<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Iruna Global Stall</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
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
                             <a class="nav-link" href="#">Account</a>
                        </li>
			<li class="nav-item">
                             <a class="nav-link" href="#">Add item</a>
                        </li>
			<li class="nav-item">
                             <a class="nav-link" href="#">View my items</a>
                        </li>
			<li class="nav-item">
                             <a class="nav-link" href="#">About</a>
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
						<form method="post" action="itemcore.php">
							<select name="itemtype" class="form-control2" id="itemtype"> 
							   <option>Choose type</option>
							   <option value="1">Equipment</option>
							   <option value="2">Items</option>
							   <option value="3">Xtal</option>
							   <option value="4">AL Crystal</option>
							   <option value="5">Relic</option>
							</select>

							<div id="equip" style="display:none;">
							<tr>
								<td>
									<label for="Test">Item Name:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="text" class="form-control iteminput" style="width: 400px" name="equipname" id="equipname"/>
								</td>
							</tr>
							<tr>
								<td>
									<label for="Test">ATK:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="text" class="form-control iteminput" style="width: 400px" name="equipatk" id="equipatk"/>
								</td>
							</tr>
							<tr>
								<td>
									<label for="Test">DEF:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="text" class="form-control iteminput" style="width: 400px" name="equipdef" id="equipdef"/>
								</td>
							</tr>
							<tr>
								<br>
								<td>
									<label for="Test">Refinement:</label>
								</td>
								<td  style="padding-left:10px;">
									<select name="equipref" class="form-control2" id="equipref"> 
									   <option value="0">0</option>
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
									<label for="Test">Slots:</label>
								</td>
								<td  style="padding-left:10px;">
									<select name="equipslotamount" class="form-control2" id="equipslotamount"> 
									   <option value="0">0</option>
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
									<label for="Test">Slot 1:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="text" class="form-control iteminput" style="width: 400px" name="equips1" id="equips1"/>
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
									<input type="text" class="form-control iteminput" style="width: 400px" name="equips2" id="equips2"/>
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
									   <option value="0">No</option>
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
									<input type="text" class="form-control iteminput" style="width: 400px" name="equipaname" id="equipaname"/>
								</td>
							</tr>
							<tr>
								<td>
									<label for="Test">Ability level:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="text" class="form-control iteminput" style="width: 400px" name="equipalevel" id="equipalevel"/>
								</td>
							</tr>
							</div>
							<tr>
								<br>
								<td>
									<label for="Test">Price:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="text" class="form-control iteminput" style="width: 400px" name="equipprice" id="equipprice"/>
								</td>
							</tr>
								<br><input type="submit" class="button btn" style="width: 150px" name="search_button" id="search_button" value="Add new item"/>
							</div>

							<div id="item" style="display:none;">
							<tr>
								<td>
									<label for="Test">Item Name:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="text" class="form-control iteminput" style="width: 400px" name="itemname" id="itemname"/>
								</td>
							</tr>
							<tr>
								<td>
									<label for="Test">Quantity:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="text" class="form-control iteminput" style="width: 400px" name="itemqty" id="itemqty"/>
								</td>
							</tr>
							<tr>
								<td>
									<label for="Test">Price(per piece):</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="text" class="form-control iteminput" style="width: 400px" name="itemprice" id="itemprice"/>
								</td>
							</tr>
								<br><input type="submit" class="button btn" style="width: 150px" name="search_button" id="search_button" value="Add new item" onclick="window.location.href='/additem.php'"/>
							</div>

							<div id="xtal" style="display:none;">
							<tr>
								<td>
									<label for="Test">Xtal Name:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="text" class="form-control iteminput" style="width: 400px" name="xtalname" id="xtalname"/>
								</td>
							</tr>
							<tr>
								<td>
									<label for="Test">Quantity:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="text" class="form-control iteminput" style="width: 400px" name="xtalqty" id="xtalqty"/>
								</td>
							</tr>
							<tr>
								<td>
									<label for="Test">Price:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="text" class="form-control iteminput" style="width: 400px" name="xtalprice" id="xtalprice"/>
								</td>
							</tr>
								<br><input type="submit" class="button btn" style="width: 150px" name="search_button" id="search_button" value="Add new item" onclick="window.location.href='/additem.php'"/>
							</div>

							<div id="al" style="display:none;">
							<tr>
								<td>
									<label for="Test">Item Name:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="text" class="form-control iteminput" style="width: 400px" name="alname" id="alname"/>
								</td>
							</tr>
							<tr>
								<td>
									<label for="Test">Quantity:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="text" class="form-control iteminput" style="width: 400px" name="alqty" id="alqty"/>
								</td>
							</tr>
							<tr>
								<br>
								<td>
									<label for="Test">Color:</label>
								</td>
								<td  style="padding-left:10px;">
									<select name="alcolor" class="form-control2" id="alcolor"> 
									   <option value="R">Red</option>
									   <option value="G">Green</option>
									   <option value="B">Blue</option>
									</select>
								</td>
							</tr>
							<tr>
								<br>
								<td>
									<label for="Test">Price:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="text" class="form-control iteminput" style="width: 400px" name="alprice" id="alprice"/>
								</td>
							</tr>
								<br><input type="submit" class="button btn" style="width: 150px" name="search_button" id="search_button" value="Add new item" onclick="window.location.href='/additem.php'"/>
							</div>

							<div id="relic" style="display:none;">
							<tr>
								<td>
									<label for="Test">Relic Name:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="text" class="form-control iteminput" style="width: 400px" name="relicname" id="relicname"/>
								</td>
							</tr>
							<tr>
								<td>
									<label for="Test">Quantity:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="text" class="form-control iteminput" style="width: 400px" name="relicqty" id="relicqty"/>
								</td>
							</tr>
							<tr>
								<td>
									<label for="Test">Price:</label>
								</td>
								<td  style="padding-left:10px;">
									<input type="text" class="form-control iteminput" style="width: 400px" name="relicprice" id="relicprice"/>
								</td>
							</tr>
								<br><input type="submit" class="button btn" style="width: 150px" name="search_button" id="search_button" value="Add new item" onclick="window.location.href='/additem.php'"/>
							</div>

						</form>	
					<script type="text/javascript" src="jquery-ui-1.10.0/tests/jquery-1.9.0.js"></script>
					<script src="jquery-ui-1.10.0/ui/jquery-ui.js"></script>

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
            <div class="col-md-2">
                <div>

                    <h4>&nbsp;</h4>
                    <hr>


                    <div>
                        <h4>Useful Links</h4></div>
                    <ul class="decoration_none">
                        <li><a href="http://iruna-online.com/">Official Iruna Website</a></li>
                        <li><a href="http://irunaonline.boards.net/">Iruna Boards Forum</a></li>
                        <li><a href="http://iruna-online.weebly.com/">Iruna Weebly</a></li>
                        <li><a href="https://wikiwiki.jp/iruna-online/">Iruna JP Wiki</a></li>
                    </ul>
                    <br>

                </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
