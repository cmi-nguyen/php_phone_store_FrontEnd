<?php 
//require_once("admin\includes\scripts\api\APIs.php");
//$url = 'http://localhost:8080/user';
//$resp = getList($url);

if (array_key_exists('removeBtn', $_POST)) {
    
    $index=array_search($_POST['itemID'],$_SESSION['cartItems']);
   
    unset($_SESSION['cartItems'][$index]);
    echo '<script>';
    echo 'window.location = "/php_phone_store_FrontEnd/cart"';
    echo '</script>';
    
}