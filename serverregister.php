<?php

// initializing variables
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost:3306', '17kibr', '', '17kibr');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
      header('location: error2.html');
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email

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
      if ($user) { // if user exists
        if ($user['email'] === $email) {
            array_push($errors, "email already exists");
            header('location: error1.html');
        }
      }

      // Finally, register user if there are no errors in the form
      if (count($errors) == 0) 
      {
      	$password = md5($password_1);//encrypt the password before saving in the database


        $sql = "INSERT INTO irunausers (email, password) VALUES(?, ?)";
        $stmt = mysqli_stmt_init($db);
        if (!mysqli_stmt_prepare($stmt, $sql)) 
        {
            header('location: error8.html');
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "ss", $email, $password);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

          	$_SESSION['email'] = $email;
          	$_SESSION['success'] = "You are now logged in";
          	header('location: index.php');
        }
      }
  }
}
?>