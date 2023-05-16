<?php require_once("admin\includes\scripts\api\APIs.php");
$url = 'http://localhost:8080/user';
$resp = getList($url);

if (array_key_exists('loginBtn', $_POST)) {


    foreach ($resp as $rs) {
        if (strcmp($_POST['username'], $rs->userName)==0 && strcmp($_POST['password'], $rs->password)==0) {
            $loggedInUser = new user();
            $loggedInUser->userID=$rs->userID;
            $loggedInUser->userName=$rs->userName;
            $loggedInUser->name=$rs->name;
            $loggedInUser->accessLevel=$rs->accessLevel;
            $_SESSION['user'] = $loggedInUser;
            break;
        }
    }
    if (isset($_SESSION['user'])) {
        $_SESSION['cartItems']=array();
       
            echo '<script>';
            echo 'window.location = "/php_phone_store_FrontEnd/"';
            echo '</script>';
        
        
    }

}