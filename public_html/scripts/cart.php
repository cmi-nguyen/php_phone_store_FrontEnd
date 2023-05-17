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
    if (sizeOf($_SESSION['cartItems']) > 0) {
        // create bill
        $url = 'http://localhost:8080/bill';
        $resp = getList($url);
        $data['billID'] = sizeof($resp);
        $data['userID'] = $_SESSION['user']->userID;
        $data['total'] = $total;
        $data['status'] = false;
        $data['date'] = date("y/m/d");
        postAPI($data, $url);
        // add bill detail

        foreach ($_SESSION['cartItems'] as $cartItem) {
            $url2 = 'http://localhost:8080/billdetail';
            $detailResp = getList($url2);
            $data2['billDetailID'] = sizeof($detailResp);
            $data2['billID'] = $data['billID'];
            $data2['productID'] = $cartItem->productID;
            $data2['quantity'] = $cartItem->quantity;

            postAPI($data2, $url2);
        }

        // reset cart
        $_SESSION['cartItems'] = array();

        echo '<script>';
        echo 'window.location = "/php_phone_store_FrontEnd/cart"';
        echo '</script>';
    } else
        echo "There is no item in cart";

}