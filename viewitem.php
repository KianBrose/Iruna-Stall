<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="This page has informatoin about refinement."/>
	<meta name="keywords" content="Iruna-Online, Iruna, Refinement"/>
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
		<h3>All my items</h3>
		<hr/>
		<div>
            <h3><b>Equipment</b></h3>
			<table class="table table-condensed table-bordered">
                <tr>
                    <th class="col-md-4">Name:</th>
                    <?php

                    $db = mysqli_connect('localhost:3306', '17kibr', '', '17kibr');

                    if (isset($_SESSION['email']))
                    {
                        $email = mysqli_real_escape_string($db, $_SESSION['email']);
                        echo "
                            <th>ID</th>
                            <th>ATK</th>
                            <th>DEF</th>
                            <th>Refinement</th>
                            <th>Slots</th>
                            <th>Slot 1</th>
                            <th>Slot 2</th>
                            <th>Ability Name</th>
                            <th>Ability Lv</th>
                            <th>Price</th>
                        </tr>
                        ";
                        
                        $sql = "SELECT * FROM irunaitems WHERE owner=? ORDER BY price ASC";
                        $stmt = mysqli_stmt_init($db);
                        if (!mysqli_stmt_prepare($stmt, $sql)) 
                        {
                            header('location: error8.html');
                        }
                        else
                        {
                            mysqli_stmt_bind_param($stmt, "s", $email);
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);

                            if (mysqli_num_rows($result))
                            {
                                while ($row = mysqli_fetch_assoc($result)) 
                                {
                                    echo "
                                    <tr>
                                        <td>{$row['item']}</td>
                                        <td>{$row['id']}</td>
                                        <td><input style='width: 30px' type='text' name='' value='{$row['atk']}'></td>
                                        <td><input style='width: 30px' type='text' name='' value='{$row['def']}'></td>
                                        <td>
                                            <select name='equipref' style='height: 26px; width: 81.33px' id='equipref'> 
                                                <option value='{$row['refinement']}'>{$row['refinement']}</option>
                                                <option value='0'>0</option>
                                                <option value='1'>1</option>
                                                <option value='2'>2</option>
                                                <option value='3'>3</option>
                                                <option value='4'>4</option>
                                                <option value='5'>5</option>
                                                <option value='6'>6</option>
                                                <option value='7'>7</option>
                                                <option value='8'>8</option>
                                                <option value='9'>9</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select name='slotsamount' style='height: 26px; width: 35px' id='equipref'> 
                                                <option value='{$row['slots']}'>{$row['slots']}</option>
                                                <option value='0'>0</option>
                                                <option value='1'>1</option>
                                                <option value='2'>2</option>
                                            </select>
                                        </td>
                                        <td><input style='width: 100px' type='text' name='' value='{$row['slot1']}'></td>
                                        <td><input style='width: 100px' type='text' name='' value='{$row['slot2']}'></td>
                                        <td><input style='width: 100px' type='text' name='' value='{$row['ability']}'></td>
                                        <td>
                                            <select name='abilitylv' style='height: 26px; width: 70px' id='equipref'> 
                                                <option value='{$row['abilitylv']}'>{$row['abilitylv']}</option>
                                                <option value='0'>0</option>
                                                <option value='1'>1</option>
                                                <option value='2'>2</option>
                                                <option value='3'>3</option>
                                                <option value='4'>4</option>
                                                <option value='5'>5</option>
                                            </select>
                                        </td>
                                        <td><input style='width: 100px' type='text' name='' value='{$row['price']}'></td>
                                        <td><input type='submit' class='button btn' style='width: 75px; height: 26px' name='search_button' id='search_button' value='Change'/></td>
                                        <td><input type='submit' class='button btn' style='width: 75px; height: 26px; background-color: red; border: 2px solid red;' name='search_button' id='search_button' value='Delete'/></td>
                                        
                                    </tr>
                                    ";
                                }
                            }
                        }
                    }
                    else
                    {
                        header('location: error4.html');
                    }
                    ?>
			</table>
            <h3><b>Materials</b></h3>
			<table class="table table-condensed table-bordered">
                <tr>
                    <th class="col-md-4">Name:</th>
                    <?php

                    $db = mysqli_connect('localhost:3306', '17kibr', '', '17kibr');

                    if (isset($_SESSION['email']))
                    {
                        $email = mysqli_real_escape_string($db, $_SESSION['email']);
                        echo "
                            <th>ID</th>
                            <th>QTY</th>
                            <th>Price</th>
                        </tr>
                        ";
                        
                        $sql = "SELECT * FROM irunamaterials WHERE owner=? ORDER BY price ASC";
                        $stmt = mysqli_stmt_init($db);
                        if (!mysqli_stmt_prepare($stmt, $sql)) 
                        {
                            header('location: error8.html');
                        }
                        else
                        {
                            mysqli_stmt_bind_param($stmt, "s", $email);
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);

                            if (mysqli_num_rows($result))
                            {
                                while ($row = mysqli_fetch_assoc($result)) 
                                {
                                    echo "
                                    <tr>
                                        <td>{$row['item']}</td>
                                        <td>{$row['id']}</td>
                                        <td><input style='width: 313.33px' type='text' name='' value='{$row['qty']}'></td>
                                        <td><input style='width: 500px'type='text' name='' value='{$row['price']}'></td>
                                        <td><input type='submit' class='button btn' style='width: 75px; height: 26px' name='search_button' id='search_button' value='Change'/></td>
                                        <td><input type='submit' class='button btn' style='width: 75px; height: 26px; background-color: red; border: 2px solid red;' name='search_button' id='search_button' value='Delete'/></td>
                                    </tr>
                                    ";
                                }
                            }
                        }
                    }
                    else
                    {
                        header('location: error4.html');
                    }
                    ?>
			</table>
            <h3><b>Xtals</b></h3>
			<table class="table table-condensed table-bordered">
                <tr>
                    <th class="col-md-4">Name:</th>
                    <?php

                    $db = mysqli_connect('localhost:3306', '17kibr', '', '17kibr');

                    if (isset($_SESSION['email']))
                    {
                        $email = mysqli_real_escape_string($db, $_SESSION['email']);
                        echo "
                            <th>ID</th>
                            <th>QTY</th>
                            <th>Price</th>
                        </tr>
                        ";
                        
                        $sql = "SELECT * FROM irunaxtal WHERE owner=? ORDER BY price ASC";
                        $stmt = mysqli_stmt_init($db);
                        if (!mysqli_stmt_prepare($stmt, $sql)) 
                        {
                            header('location: error8.html');
                        }
                        else
                        {
                            mysqli_stmt_bind_param($stmt, "s", $email);
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);

                            if (mysqli_num_rows($result))
                            {
                                while ($row = mysqli_fetch_assoc($result)) 
                                {
                                    echo "
                                    <tr>
                                        <td>{$row['item']}</td>
                                        <td>{$row['id']}</td>
                                        <td><input style='width: 306px' type='text' name='' value='{$row['qty']}'></td>
                                        <td><input style='width: 306px' type='text' name='' value='{$row['price']}'></td>
                                        <td><input type='submit' class='button btn' style='width: 75px; height: 26px' name='search_button' id='search_button' value='Change'/></td>
                                        <td><input type='submit' class='button btn' style='width: 75px; height: 26px; background-color: red; border: 2px solid red;' name='search_button' id='search_button' value='Delete'/></td>
                                    </tr>
                                    ";
                                }
                            }
                        }
                    }
                    else
                    {
                        header('location: error4.html');
                    }
                    ?>
			</table>
            <h3><b>Al's</b></h3>
			<table class="table table-condensed table-bordered">
                <tr>
                    <th class="col-md-4">Name:</th>
                    <?php

                    $db = mysqli_connect('localhost:3306', '17kibr', '', '17kibr');

                    if (isset($_SESSION['email']))
                    {
                        $email = mysqli_real_escape_string($db, $_SESSION['email']);
                        echo "
                            <th>ID</th>
                            <th>QTY</th>
                            <th>Color</th>
                            <th>Price</th>
                        </tr>
                        ";
                        
                        $sql = "SELECT * FROM irunaal WHERE owner=? ORDER BY price ASC";
                        $stmt = mysqli_stmt_init($db);
                        if (!mysqli_stmt_prepare($stmt, $sql)) 
                        {
                            header('location: error8.html');
                        }
                        else
                        {
                            mysqli_stmt_bind_param($stmt, "s", $email);
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);

                            if (mysqli_num_rows($result))
                            {
                                while ($row = mysqli_fetch_assoc($result)) 
                                {
                                    echo "
                                    <tr>
                                        <td>{$row['item']}</td>
                                        <td>{$row['id']}</td>
                                        <td><input style='width: 282.67px' type='text' name='' value='{$row['qty']}'></td>
                                        <td>
                                            <select name='color' style='height: 26px; width: 54px' id='equipref'> 
                                                <option value='{$row['color']}'>{$row['color']}</option>
                                                <option value='R'>R</option>
                                                <option value='G'>G</option>
                                                <option value='B'>B</option>
                                            </select>
                                        </td>
                                        <td><input style='width: 300px' type='text' name='' value='{$row['price']}'></td>
                                        <td><input type='submit' class='button btn' style='width: 75px; height: 26px' name='search_button' id='search_button' value='Change'/></td>
                                        <td><input type='submit' class='button btn' style='width: 75px; height: 26px; background-color: red; border: 2px solid red;' name='search_button' id='search_button' value='Delete'/></td>
                                    </tr>
                                    ";
                                }
                            }
                        }
                    }
                    else
                    {
                        header('location: error4.html');
                    }
                    ?>
			</table>
            <h3><b>Relics</b></h3>
			<table class="table table-condensed table-bordered">
                <tr>
                    <th class="col-md-4">Name:</th>
                    <?php

                    $db = mysqli_connect('localhost:3306', '17kibr', '', '17kibr');

                    if (isset($_SESSION['email']))
                    {
                        $email = mysqli_real_escape_string($db, $_SESSION['email']);
                        echo "
                            <th>ID</th>
                            <th>QTY</th>
                            <th>Price</th>
                        </tr>
                        ";
                        
                        $sql = "SELECT * FROM irunarelics WHERE owner=? ORDER BY price ASC";
                        $stmt = mysqli_stmt_init($db);
                        if (!mysqli_stmt_prepare($stmt, $sql)) 
                        {
                            header('location: error8.html');
                        }
                        else
                        {
                            mysqli_stmt_bind_param($stmt, "s", $email);
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);

                            if (mysqli_num_rows($result))
                            {
                                while ($row = mysqli_fetch_assoc($result)) 
                                {
                                    echo "
                                    <tr>
                                        <td>{$row['item']}</td>
                                        <td>{$row['id']}</td>
                                        <td><input style='width: 300.67px' type='text' name='' value='{$row['qty']}'></td>
                                        <td><input style='width: 300.67px' type='text' name='' value='{$row['price']}'></td>
                                        <td><input type='submit' class='button btn' style='width: 75px; height: 26px' name='search_button' id='search_button' value='Change'/></td>
                                        <td><input type='submit' class='button btn' style='width: 75px; height: 26px; background-color: red; border: 2px solid red;' name='search_button' id='search_button' value='Delete'/></td>
                                    </tr>
                                    ";
                                }
                            }
                        }
                    }
                    else
                    {
                        header('location: error4.html');
                    }
                    ?>
			</table>
		</div>
	</div>
    </div>
</body>
</html>
