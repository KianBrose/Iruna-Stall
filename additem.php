<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="This page has information about Apostolia."/>
	<meta name="keywords" content="Iruna-Online, Iruna, Apostolia"/>
	<meta name = "naver-site-verification" content = "d0fab3294232e1dd1a0638bb4fd594ef0cd139cc" />
	<link href="bootstrap-3-3-5-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
	<link href="style/style.css" rel="stylesheet" type="text/css"/>
	<script src="ajax/libs/jquery/3-4-1/jquery.min.js"></script>
	<link rel="stylesheet" href="ajax/libs/jqueryui/1-12-1/themes/smoothness/jquery-ui.css">
	<script src="ajax/libs/jqueryui/1-12-1/jquery-ui.min.js"></script>
	<script src="bootstrap-3-3-5-dist/js/bootstrap.min.js"></script>
    <?php 
    session_start();
	if(!isset($_SESSION['email']))
	{
		header('location: login.php');
	}
	if($_SESSION['email'] === "")
	{
		header('location: login.php');
	}
	?>
</head>
<body>
<style type="text/css">
</style>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container" style="">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Iruna Global Stall</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav hidden-lg hidden-md">
				<li role="presentation" class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-plus"></span>Global Stall<span class="caret"></span></a>
				<ul class="dropdown-menu">
				<li><a href="#">Global Stall</a></li>
				<li class="divider" role="separator"></li>
				<li><a href="additem.php">Add Item</a></li>
				<li><a href="viewitem.php">View my Items</a></li>
				</ul>
			</li>
				<li role="presentation" class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-plus"></span>Account<span class="caret"></span></a>
				<ul class="dropdown-menu">
				<li ><a href="#">Account Settings</a></li>
				<li class="divider" role="separator"></li>
				<li ><a href="login.php">Log In</a></li>
				<li ><a href="register.php">Register</a></li>
				</ul>
			</li>
                <li role="presentation" class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-plus"></span>Other<span class="caret"></span></a>
				<ul class="dropdown-menu">
				<li ><a href="about.html">Other</a></li>
				<li class="divider" role="separator"></li>
				<li ><a href="about.html">About</a></li>
				</ul>
			</li>
			</ul>
		</div>
	</div>
</nav>
<script type="text/javascript">$(document).ready($("nav.navbar-fixed-top").autoHidingNavbar());</script>
<div class="container">
	<div class="col-md-3 sidebar">
	<div class="hidden-xs hidden-sm">
	<div class="">
		<h3><a href="index.php" style="text-decoration:none; color: black;">Menu</a></h3>
		<hr />
		<ul id="sidebar" class="nav nav-sidebar nav-pills nav-stacked">
			<li role="presentation" class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-plus"></span>Global Stall<span class="caret"></span></a>
				<ul class="dropdown-menu">
				<li><a href="#">Global Stall</a></li>
				<li class="divider" role="separator"></li>
				<li><a href="additem.php">Add Item</a></li>
				<li><a href="viewitem.php">View my Items</a></li>
				</ul>
			</li>
			<li role="presentation" class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-plus"></span>Account<span class="caret"></span></a>
				<ul class="dropdown-menu">
				<li ><a href="#">Account Settings</a></li>
				<li class="divider" role="separator"></li>
				<li ><a href="login.php">Log In</a></li>
				<li ><a href="register.php">Register</a></li>
				</ul>
			</li>
            <li role="presentation" class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-plus"></span>Other<span class="caret"></span></a>
				<ul class="dropdown-menu">
				<li ><a href="about.html">Other</a></li>
				<li class="divider" role="separator"></li>
				<li ><a href="about.html">About</a></li>
				</ul>
			</li>
		</ul>
	</div>
	</div>
	</div>
<div class="col-md-9">
<h3>Add item</h3>
<hr/>
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
<script type="text/javascript"
    src="jquery-ui-1.10.0/tests/jquery-1.9.0.js"></script>
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
</div>
<script type="text/javascript" id="cookieinfo"
	src="//cookieinfoscript.com/js/cookieinfo.min.js">
</script>
    </div>
</body>
</html>