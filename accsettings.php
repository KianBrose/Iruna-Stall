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

if (strlen($_SESSION['email']) == 0)
{
    header('location: login.php');
}

$db = mysqli_connect('localhost:3306', '17kibr', '', '17kibr');

if (isset($_POST['user_changepass'])) 
{
    // receive all input values from the form
    $email = $_SESSION['email'];
    $password_old = mysqli_real_escape_string($db, $_POST['password_old']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    $sql = "SELECT * FROM irunausers WHERE email=? LIMIT 1";
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
        $user = mysqli_fetch_assoc($result);
    
        if ($user) 
        {
            if ($user['email'] === $email) 
            {
                $sql = "SELECT password FROM irunausers WHERE email=? LIMIT 1";
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
                    $user = mysqli_fetch_assoc($result);
                
                    $password_old = md5($password_old);
                    
                    if ($user['password'] === $password_old)
                    {
                        if ($password_1 === $password_2) 
                        {
                            $password_1 = md5($password_1);
                            $password_2 = md5($password_2);

                            $sql = "UPDATE irunausers SET password=? where email=?";
                            $stmt = mysqli_stmt_init($db);
                            if (!mysqli_stmt_prepare($stmt, $sql)) 
                            {
                                header('location: error8.html');
                            }
                            else
                            {
                                mysqli_stmt_bind_param($stmt, "ss", $password_1, $email);
                                mysqli_stmt_execute($stmt);
                                $result = mysqli_stmt_get_result($stmt);
                            
                                header('location: index.php');
                            }
                        }
                        else
                        {
                            array_push($errors, "The two passwords do not match");
                            header('location: error2.html');
                        }
                    }
                }
            }
        }
    }
}

if (isset($_POST['user_delacc'])) 
{
    // receive all input values from the form
    $email = $_SESSION['email'];
    $emailpost = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    
    if ($email === $emailpost)
    {
        $sql = "SELECT * FROM irunausers WHERE email=? LIMIT 1";
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
            $user = mysqli_fetch_assoc($result);

            if ($user) 
            {
                if ($user['email'] === $email) 
                {
                    $sql = "SELECT password FROM irunausers WHERE email=? LIMIT 1";
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
                        $user = mysqli_fetch_assoc($result);

                        $password_1 = md5($password_1);

                        if ($user['password'] === $password_1)
                        {
                            $sql = "DELETE FROM `irunausers` WHERE email=?";
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

                                function DeleteRow(string $owner, string $table) 
                                {
                                    $db = mysqli_connect('localhost:3306', '17kibr', '', '17kibr');
                                    $sql = "DELETE FROM $table WHERE owner=?";
                                    $stmt = mysqli_stmt_init($db);
                                    if (!mysqli_stmt_prepare($stmt, $sql)) 
                                    {
                                        header('location: error8.html');
                                    }
                                    else
                                    {
                                        mysqli_stmt_bind_param($stmt, "s", $owner);
                                        mysqli_stmt_execute($stmt);
                                        $result = mysqli_stmt_get_result($stmt);
                                    }
                                }
                                DeleteRow($email, "irunaal");
                                DeleteRow($email, "irunaitems");
                                DeleteRow($email, "irunamaterials");
                                DeleteRow($email, "irunarelics");
                                DeleteRow($email, "irunaxtal");
                                header('location: index.php');
                                $_SESSION['email'] = "";
                            }
                        } 
                        else
                        {
                            array_push($errors, "The two passwords do not match");
                            header('location: error2.html');
                        }
                    }
                }
            }
        }
    }
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
<div class="col-md-9">
<h3>Account Settings</h3>
<hr/>
<div>
    <h3>Change Password</h3>
    <form method="post" action="accsettings.php">
        <div class="input-group">
            <label>Old Password</label>
            <input class="form-control" type="password" name="password_old">
        </div>
        <div class="input-group">
            <label>New Password</label>
            <input class="form-control" type="password" name="password_1">
        </div>
        <div class="input-group">
            <label>Confirm New Password</label>
            <input class="form-control" type="password" name="password_2">
        </div>
        <div class="input-group">
            <br>
            <button type="submit" class="btn btn-default btn-block" name="user_changepass">Change Password</button>
        </div>
    </form> 
    <hr/>
    <h3 style="color:red;"><b>Delete Account &#38; All Posts</b></h3>
    <form method="post" action="accsettings.php">
        <div class="input-group">
            <label>Email</label>
            <input class="form-control" type="text" name="email">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input class="form-control" type="password" name="password_1">
        </div>
        <div class="input-group">
            <br>
            <button type="submit" class="btn btn-default btn-block" name="user_delacc" style="color:red;"><b>DELETE ACCOUNT</b></button>
        </div>
    </form> 
</div>
</div>
</div>
</body>
</html>