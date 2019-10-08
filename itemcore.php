<?php
session_start();
// connect to the database
$db = mysqli_connect('localhost:3306', '17kibr', 'n4vSprvNQB3cO4vt', '17kibr');
$email = $_SESSION['email'];
// REGISTER USER
if (isset($_POST['itemtype'])) {
    // receive all input values from the form
    $itemtype = mysqli_real_escape_string($db, $_POST['itemtype']);
    switch ($itemtype) {
    case '1':
        # equip
        $name = mysqli_real_escape_string($db, $_POST['equipname']);
        $atk = mysqli_real_escape_string($db, $_POST['equipatk']);
        $def = mysqli_real_escape_string($db, $_POST['equipdef']);
        $ref = mysqli_real_escape_string($db, $_POST['equipref']);
        $slotamount = mysqli_real_escape_string($db, $_POST['equipslotamount']);
        $s1 = mysqli_real_escape_string($db, $_POST['equips1']);
        $s2 = mysqli_real_escape_string($db, $_POST['equips2']);
        $aname = mysqli_real_escape_string($db, $_POST['equipaname']);
        $alevel = mysqli_real_escape_string($db, $_POST['equipalevel']);
        $price = mysqli_real_escape_string($db, $_POST['equipprice']);
        $atk = (int)$atk; 
        $def = (int)$def; 
        $ref = (int)$ref; 
        $slotamount = (int)$slotamount; 
        $alevel = (int)$alevel; 
        $price = (int)$price; 
        
      
        if (!empty($name) || !empty($atk) || !empty($def) || !empty($ref) || !empty($slotamount) || !empty($s1) || !empty($s2) || !empty($aname) || !empty($alevel) || !empty($price)) {
            
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
                
                $sql = "INSERT INTO irunaitems (item, refinement, slots, slot1, slot2, ability, abilitylv, atk, def, price, contact, owner) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($db);
                if (!mysqli_stmt_prepare($stmt, $sql)) 
                {
                    header('location: error8.html');
                }
                else
                {
                    mysqli_stmt_bind_param($stmt, "ssssssssssss", $name, $ref, $slotamount, $s1, $s2, $aname, $alevel, $atk, $def, $price, $user['facebook'], $email);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                }
            }
            header('location: itemadded.html');
        }
          
        break;
    case '2':
        # items
        $name = mysqli_real_escape_string($db, $_POST['itemname']);
        $qty = mysqli_real_escape_string($db, $_POST['itemqty']);
        $price = mysqli_real_escape_string($db, $_POST['itemprice']);
        
        $qty = (int)$qty; 
        $price = (int)$price;
            
        if (!empty($name) || !empty($qty) || !empty($price)) {
            
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
                
                $sql = "INSERT INTO irunamaterials (item, qty, price, contact, owner) VALUES(?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($db);
                if (!mysqli_stmt_prepare($stmt, $sql)) 
                {
                    header('location: error8.html');
                }
                else
                {
                    mysqli_stmt_bind_param($stmt, "sssss", $name, $qty, $price, $user['facebook'], $email);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                }
            }
            header('location: itemadded.html');
        }
        break;
    case '3':
        # xtal
        $name = mysqli_real_escape_string($db, $_POST['xtalname']);
        $qty = mysqli_real_escape_string($db, $_POST['xtalqty']);
        $price = mysqli_real_escape_string($db, $_POST['xtalprice']);
        $qty = (int)$qty; 
        $price = (int)$price;
        if (!empty($name) || !empty($qty) || !empty($price)) {
            
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
                
                $sql = "INSERT INTO irunaxtal (item, qty, price, contact, owner) VALUES(?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($db);
                if (!mysqli_stmt_prepare($stmt, $sql)) 
                {
                    header('location: error8.html');
                }
                else
                {
                    mysqli_stmt_bind_param($stmt, "sssss", $name, $qty, $price, $user['facebook'], $email);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                }
            }
            header('location: itemadded.html');
        }
        break;
    case '4':
        # al
        $name = mysqli_real_escape_string($db, $_POST['alname']);
        $qty = mysqli_real_escape_string($db, $_POST['alqty']);
        $color = mysqli_real_escape_string($db, $_POST['alcolor']);
        $price = mysqli_real_escape_string($db, $_POST['alprice']);
        $qty = (int)$qty; 
        $price = (int)$price;
        if (!empty($name) || !empty($qty) || !empty($color) || !empty($price)) {
            
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
                
                $sql = "INSERT INTO irunaal (item, qty, color, price, contact, owner) VALUES(?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($db);
                if (!mysqli_stmt_prepare($stmt, $sql)) 
                {
                    header('location: error8.html');
                }
                else
                {
                    mysqli_stmt_bind_param($stmt, "ssssss", $name, $qty, $color, $price, $user['facebook'], $email);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                }
            }
            header('location: itemadded.html');
        }
        break;
    case '5':
        # relic
        $name = mysqli_real_escape_string($db, $_POST['relicname']);
        $qty = mysqli_real_escape_string($db, $_POST['relicqty']);
        $color = mysqli_real_escape_string($db, $_POST['relicprice']);
        $qty = (int)$qty; 
        $price = (int)$price;
        if (!empty($name) || !empty($qty) || !empty($price)) {
            
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
                
                $sql = "INSERT INTO irunarelics (item, qty, price, contact, owner) VALUES(?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($db);
                if (!mysqli_stmt_prepare($stmt, $sql)) 
                {
                    header('location: error8.html');
                }
                else
                {
                    mysqli_stmt_bind_param($stmt, "sssss", $name, $qty, $price, $user['facebook'], $email);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                }
            }
            header('location: itemadded.html');
        }
        break;
    default:
      $_SESSION['email'] = "";
      header('location: login.php');
      break;
    }
}
?>