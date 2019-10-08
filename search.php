<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php
session_start();
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
		<h3>Search Results</h3>
		<hr/>
		<div>
			<table class="table table-condensed table-bordered">
				<tr>
					   <th class="col-md-4">Item: 
                        <?php if (isset($_SESSION['request']))
                        {
                            echo $_SESSION['request'];
                        }
                        ?>
                    </th>
                <?php
                
                $db = mysqli_connect('localhost:3306', '17kibr', '', '17kibr');
                
                if (isset($_SESSION['request']))
                {
                    if(isset($_SESSION['type']))
                    {
                        switch(mysqli_real_escape_string($db, $_SESSION['type']))
                        {
                            case "EQUIPMENT":
                                echo "
                                    <th>ATK</th>
                                    <th>DEF</th>
                                    <th>Refinement</th>
                                    <th>Slots</th>
                                    <th>Slot 1</th>
                                    <th>Slot 2</th>
                                    <th>Ability</th>
                                    <th>Ability Lv</th>
                                    <th>Price</th>
                                    <th>Contact seller</th>
                                </tr>
                                ";
                                
                                $usersearch = mysqli_real_escape_string($db, $_SESSION['request']);
								
                                $sql = "SELECT * FROM irunaitems WHERE item=? ORDER BY price ASC";
								$stmt = mysqli_stmt_init($db);
                                if (!mysqli_stmt_prepare($stmt, $sql)) 
                                {
                                    header('location: error8.html');
                                }
                                else
                                {
                                    mysqli_stmt_bind_param($stmt, "s", $usersearch);
                                    mysqli_stmt_execute($stmt);
                                    $result = mysqli_stmt_get_result($stmt);

                                    if (mysqli_num_rows($result))
                                    {
                                        while ($row = mysqli_fetch_assoc($result)) 
                                        {
                                            echo "
                                            <tr>
                                                <td>{$row['item']}</td>
                                                <td>{$row['atk']}</td>
                                                <td>{$row['def']}</td>
                                                <td>{$row['refinement']}</td>
                                                <td>{$row['slots']}</td>
                                                <td>{$row['slot1']}</td>
                                                <td>{$row['slot2']}</td>
                                                <td>{$row['ability']}</td>
                                                <td>{$row['abilitylv']}</td>
                                                <td>{$row['price']}</td>
                                                <td><a href={$row['contact']}>Facebook</a></td>
                                            </tr>
                                            ";
                                        }
                                    }
                                }
								
                                exit;
                                break;
                            
                            case "ITEMS":
                                echo "
                                    <th>QTY</th>
                                    <th>Price</th>
                                    <th>Contact seller</th>
                                </tr>
                                ";

                                $usersearch = mysqli_real_escape_string($db, $_SESSION['request']);
                                
                                $sql = "SELECT * FROM irunamaterials WHERE item=? ORDER BY price ASC";
                                $stmt = mysqli_stmt_init($db);
                                if (!mysqli_stmt_prepare($stmt, $sql)) 
                                {
                                    header('location: error8.html');
                                }
                                else
                                {
                                    mysqli_stmt_bind_param($stmt, "s", $usersearch);
                                    mysqli_stmt_execute($stmt);
                                    $result = mysqli_stmt_get_result($stmt);
                
                                    if (mysqli_num_rows($result))
                                    {
                                        while ($row = mysqli_fetch_assoc($result)) 
                                        {
                                            echo "
                                            <tr>
                                                <td>{$row['item']}</td>
                                                <td>{$row['qty']}</td>
                                                <td>{$row['price']}</td>
                                                <td><a href={$row['contact']}>Facebook</a></td>
                                            </tr>
                                            ";
                                        }
                                    }
                                }
                                exit;
                                break;
                                
                            case "XTAL":
                                echo "
                                    <th>Price</th>
                                    <th>Contact Seller</th>
                                </tr>
                                ";
                                
                                $usersearch = mysqli_real_escape_string($db, $_SESSION['request']);
                                
                                $sql = "SELECT * FROM irunaxtal WHERE item=? ORDER BY price ASC";
                                $stmt = mysqli_stmt_init($db);
                                if (!mysqli_stmt_prepare($stmt, $sql)) 
                                {
                                    header('location: error8.html');
                                }
                                else
                                {
                                    mysqli_stmt_bind_param($stmt, "s", $usersearch);
                                    mysqli_stmt_execute($stmt);
                                    $result = mysqli_stmt_get_result($stmt);
                
                                    if (mysqli_num_rows($result))
                                    {
                                        while ($row = mysqli_fetch_assoc($result)) 
                                        {
                                            echo "
                                            <tr>
                                                <td>{$row['item']}</td>
                                                <td>{$row['price']}</td>
                                                <td><a href={$row['contact']}>Facebook</a></td>
                                            </tr>
                                            ";
                                        }
                                    }
                                }
                                exit;
                                break;
                                
                            case "AL":
                                echo "
                                    <th>Color</th>
                                    <th>Price</th>
                                    <th>Contact Seller</th>
                                </tr>
                                ";
                                
                                $usersearch = mysqli_real_escape_string($db, $_SESSION['request']);
                                
                                $sql = "SELECT * FROM irunaal WHERE item=? ORDER BY price ASC";
                                $stmt = mysqli_stmt_init($db);
                                if (!mysqli_stmt_prepare($stmt, $sql)) 
                                {
                                    header('location: error8.html');
                                }
                                else
                                {
                                    mysqli_stmt_bind_param($stmt, "s", $usersearch);
                                    mysqli_stmt_execute($stmt);
                                    $result = mysqli_stmt_get_result($stmt);

                                    if (mysqli_num_rows($result))
                                    {
                                        while ($row = mysqli_fetch_assoc($result)) 
                                        {
                                            echo "
                                            <tr>
                                                <td>{$row['item']}</td>
                                                <td>{$row['color']}</td>
                                                <td>{$row['price']}</td>
                                                <td><a href={$row['contact']}>Facebook</a></td>
                                            </tr>
                                            ";
                                        }
                                    }
                                }
                                exit;
                                break;
                                
                            case "RELIC":
                                echo "
                                    <th>Price</th>
                                    <th>Contact Seller</th>
                                </tr>
                                ";
                                
                                $usersearch = mysqli_real_escape_string($db, $_SESSION['request']);
                                
                                $sql = "SELECT * FROM irunarelics WHERE item=? ORDER BY price ASC";
                                $stmt = mysqli_stmt_init($db);
                                if (!mysqli_stmt_prepare($stmt, $sql)) 
                                {
                                    header('location: error8.html');
                                }
                                else
                                {
                                    mysqli_stmt_bind_param($stmt, "s", $usersearch);
                                    mysqli_stmt_execute($stmt);
                                    $result = mysqli_stmt_get_result($stmt);

                                    if (mysqli_num_rows($result))
                                    {
                                        while ($row = mysqli_fetch_assoc($result)) 
                                        {
                                            echo "
                                            <tr>
                                                <td>{$row['item']}</td>
                                                <td>{$row['price']}</td>
                                                <td><a href={$row['contact']}>Facebook</a></td>
                                            </tr>
                                            ";
                                        }
                                    }
                                }
                                exit;
                                break;
                                
                            case "ABILITY":
                                echo "
                                    <th>ATK</th>
                                    <th>DEF</th>
                                    <th>Refinement</th>
                                    <th>Slots</th>
                                    <th>Slot 1</th>
                                    <th>Slot 2</th>
                                    <th>Ability</th>
                                    <th>Ability Lv</th>
                                    <th>Price</th>
                                    <th>Contact seller</th>
                                </tr>
                                ";
                                
                                $usersearchnumber = mysqli_real_escape_string($db, $_SESSION['request']);
                                $usersearchnumber = preg_replace("/[^0-9]/", "", $usersearchnumber);
                                $usersearch = mysqli_real_escape_string($db, $_SESSION['request']);
                                $usersearch = preg_replace('/[0-9]+/', '', $usersearch);
                                
                                $sql = "SELECT * FROM irunaitems WHERE ability=? AND abilitylv=? ORDER BY price ASC";;
                                $stmt = mysqli_stmt_init($db);
                                if (!mysqli_stmt_prepare($stmt, $sql)) 
                                {
                                    header('location: error8.html');
                                }
                                else
                                {
                                    mysqli_stmt_bind_param($stmt, "ss", $usersearch, $usersearchnumber);
                                    mysqli_stmt_execute($stmt);
                                    $result = mysqli_stmt_get_result($stmt);

                                    if (mysqli_num_rows($result))
                                    {
                                        while ($row = mysqli_fetch_assoc($result)) 
                                        {
                                            echo "
                                            <tr>
                                                <td>{$row['item']}</td>
                                                <td>{$row['atk']}</td>
                                                <td>{$row['def']}</td>
                                                <td>{$row['refinement']}</td>
                                                <td>{$row['slots']}</td>
                                                <td>{$row['slot1']}</td>
                                                <td>{$row['slot2']}</td>
                                                <td>{$row['ability']}</td>
                                                <td>{$row['abilitylv']}</td>
                                                <td>{$row['price']}</td>
                                                <td><a href={$row['contact']}>Facebook</a></td>
                                            </tr>
                                            ";
                                        }
                                    }
                                }
                                exit;
                                break;
                                
                            default:
                                header('location: error7.html');
                                break;
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
