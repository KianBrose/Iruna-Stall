<?php
session_start();

$_SESSION['request'] = "";
$_SESSION['type'] = "";

$errors = array(); 
// connect to the database
$db = mysqli_connect('localhost:3306', '17kibr', '', '17kibr');

if (isset($_POST['search_button'])) 
{
    // receive all input values from the form
    $input = mysqli_real_escape_string($db, $_POST['searchinput']);
    $inputcopy = mysqli_real_escape_string($db, $_POST['searchinput']);
    $inputtype = mysqli_real_escape_string($db, $_POST['searchtype']);
    

    // Check if it's empty
    if (empty($input)) 
    { 
        array_push($errors, "Input is required");
        header('location: error4.html');
    }
    if (empty($inputtype)) 
    { 
        array_push($errors, "Type is required"); 
        header('location: error4.html');
    }
    if (ctype_alnum(trim(str_replace(' ','',$input))))
    {
        if (ctype_alnum(trim(str_replace(' ','',$inputtype))))
        {
            $input = strtoupper($inputcopy);
            $inputtype = strtoupper($inputtype);
            
            switch ($inputtype)
            {
                case "EQUIPMENT":
                    $_SESSION['request'] = $input;
                    $_SESSION['type'] = "EQUIPMENT";
                    header('location: search.php');
                    break;
                
                case "ITEMS":
                    $_SESSION['request'] = $input;
                    $_SESSION['type'] = "ITEMS";
                    header('location: search.php');
                    break;
                    
                case "XTAL":
                    $_SESSION['request'] = $input;
                    $_SESSION['type'] = "XTAL";
                    header('location: search.php');
                    break;
                    
                case "AL":
                    $_SESSION['request'] = $input;
                    $_SESSION['type'] = "AL";
                    header('location: search.php');
                    break;
                    
                case "RELIC":
                    $_SESSION['request'] = $input;
                    $_SESSION['type'] = "RELIC";
                    header('location: search.php');
                    break;
                    
                case "ABILITY":
                    $_SESSION['request'] = $input;
                    $_SESSION['type'] = "ABILITY";
                    header('location: search.php');
                    break;
                    
                default:
                    $input = "";
                    $inputtype = "";
                    $_SESSION['email'] = "";
                    header('location: error6.html');
                    break;
            }
        }
        else
        {
            header('location: error5.html');
        }
    }
    else
    {
        header('location: error5.html');
    }
}
?>