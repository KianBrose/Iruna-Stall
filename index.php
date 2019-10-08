<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php
session_start();
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="This is a Items Database for Iruna Online"/>
	<meta name="keywords" content="Iruna Online, MMORPG, RPG, Monsters, Items, Weapons, Armor, Production, Blacksmith"/>
	<meta name = "naver-site-verification" content = "d0fab3294232e1dd1a0638bb4fd594ef0cd139cc" />
	<link href="bootstrap-3-3-5-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
	<link href="style/style.css" rel="stylesheet" type="text/css"/>
	<script src="ajax/libs/jquery/3-4-1/jquery.min.js"></script>
	<link rel="stylesheet" href="ajax/libs/jqueryui/1-12-1/themes/smoothness/jquery-ui.css">
	<script src="ajax/libs/jqueryui/1-12-1/jquery-ui.min.js"></script>
	<script src="bootstrap-3-3-5-dist/js/bootstrap.min.js"></script>
	<script src="scripts/custom.js"></script>
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
				<li ><a href="accsettings.php">Account Settings</a></li>
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
	<div class="row">
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
				<li ><a href="accsettings.php">Account Settings</a></li>
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
		<div class="col-md-7">
			<div>
			<h3>Welcome <?php 
                if (isset($_SESSION['email']))
                {
                    echo $_SESSION['email']; 
                }
                ?>!</h3>
			<hr />
                
                <form class="form-inline well" method="post" action="searchengine.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="searchinput" id="searchinput" value="" />
                    </div>
                    <div class="form-group">
                        <select id="searchtype" class="form-control" name="searchtype">
                            <option value="equipment" selected="selected">Equipment</option>
                            <option value="items">Items</option>
                            <option value="xtal">Xtal</option>
                            <option value="al">AL crystal</option>
                            <option value="relic">Relic</option>
                            <option value="ability">Ability</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-default btn-block" name="search_button" id="search_button" value="Search"/>
                    </div>
                </form>
				<input type="button" class="button btn btn-default btn-block" name="search_button" id="search_button" value="Add new item" onclick="window.location.href='additem.php'"/>
                
                <div class="row divider" role="separator" style="margin-top:20px;"></div>
                <p>Welcome to our Iruna Global Stall</p><br>
                Enter item name into the search box and press search<br>
                <br>
                <br>
                <div class="row divider" role="separator" style="margin-top:20px;"></div>
            </div>
			<div></div>
		</div>
		<div class="col-md-2">
			<div>
  <h3>&nbsp;</h3>
  <hr/>
  <div><h4>Useful Links</h4></div>
  <ul class="decoration_none">
    <li><a href="http://iruna-online.com/">Official Iruna Website</a></li>
    <li><a href="http://irunaonline.boards.net/">Iruna Boards Forum</a></li>
    <li><a href="http://iruna-online.weebly.com/">Iruna Weebly</a></li>
    <li><a href="https://wikiwiki.jp/iruna-online/">Iruna JP Wiki</a></li>
	<li><a href="http://www.iruna-online.info">Iruna Online Info</a></li>
  </ul><br>
            </div>
        </div>
    </div>
</div>
    </body>
</html>
