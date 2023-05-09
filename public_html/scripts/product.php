<?php require_once("admin\includes\scripts\api\APIs.php");
$url = 'http://localhost:8080/product';
$resp = getList($url);
var_dump($_SESSION['cartItems']);
if (array_key_exists('addToCartBtn', $_POST)) {
    $i = sizeof($_SESSION['cartItems']);
    $_SESSION['cartItems'][$i]->productID=$_POST['id'];
    $_SESSION['cartItems'][$i]->quantity=0;
}