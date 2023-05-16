<?php
require_once("admin\includes\scripts\api\APIs.php");
//$url = 'http://localhost:8080/user';
//$resp = getList($url);

if (array_key_exists('removeBtn', $_POST)) {
    $index = array_search($_POST['itemID'], $_SESSION['cartItems']);
    unset($_SESSION['cartItems'][$index]);
    echo '<script>';
    echo 'window.location = "/php_phone_store_FrontEnd/cart"';
    echo '</script>';
}
if (array_key_exists('increaseBtn', $_POST)) {
    $index = array_search($_POST['itemID'], $_SESSION['cartItems']);
    $_SESSION['cartItems'][$index]->quantity += 1;
    echo '<script>';
    echo 'window.location = "/php_phone_store_FrontEnd/cart"';
    echo '</script>';
}
if (array_key_exists('decreaseBtn', $_POST)) {
    $index = array_search($_POST['itemID'], $_SESSION['cartItems']);
    if ($_SESSION['cartItems'][$index]->quantity > 1) {
        $_SESSION['cartItems'][$index]->quantity += -1;
        echo '<script>';
        echo 'window.location = "/php_phone_store_FrontEnd/cart"';
        echo '</script>';
    } else
        echo 'quantity must greater than 1';
}
if (array_key_exists('checkoutBtn', $_POST)) {
    $url = 'http://localhost:8080/bill';
    $resp = getList($url);
    $data['billID'] = sizeof($resp) + 1;
    $data['userID'] = 1;
    $data['total'] = $total;
    $data['status'] = false;
    $data['date'] = date("y/m/d");
    postAPI($data, $url);
    $_SESSION['cartItems'] = array();
    echo '<script>';
    echo 'window.location = "/php_phone_store_FrontEnd/cart"';
    echo '</script>';
}