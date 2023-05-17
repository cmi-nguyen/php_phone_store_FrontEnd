<?php

if (array_key_exists('logoutBtn', $_POST)) {
    session_destroy();
    echo '<script>';
    echo 'window.location = "/php_phone_store_FrontEnd/"';
    echo '</script>';
}
if (array_key_exists('loginBtn', $_POST)) {
    echo '<script>';
    echo 'window.location = "/php_phone_store_FrontEnd/login"';
    echo '</script>';
}
if (array_key_exists('cartBtn', $_POST)) {
    if (isset($_SESSION['user'])) {
        echo '<script>';
        echo 'window.location = "/php_phone_store_FrontEnd/cart"';
        echo '</script>';
    } else
        require_once("public_html\componement\alerts\alert-cart.php");


}
if (array_key_exists('addToCartBtn', $_POST)) {
    if (isset($_SESSION['user'])) {
        $i = sizeof($_SESSION['cartItems']);
        $newItem = new cartItem();
        $url = 'http://localhost:8080/product/' . $_POST['id'];
        $product = getSingleItem($url);
        /*
        foreach ($_SESSION['cartItems'] as $cartItem) {
            if ($cartItem->productID == $_POST['id']) {
                $cartItem->quantity += 1;
            } else {
                // add new item to cart
                $newItem->productID = $_POST['id'];
                $newItem->productName = $product->productName;
                $newItem->price = $product->price;
                $newItem->quantity = 1;
                $_SESSION['cartItems'][$i] = $newItem;
            }
        }*/
        if ($i == 0) {
            // add new item to cart
            $newItem->productID = $product->productID;
            $newItem->productName = $product->productName;
            $newItem->price = $product->price;
            $newItem->quantity = 1;
            $_SESSION['cartItems'][$i] = $newItem;
        } else {
            // check if item exist 
            $exist = false;
            foreach ($_SESSION['cartItems'] as $cartItem) {
                if ($cartItem->productID == $_POST['id']) {
                    $cartItem->quantity += 1;
                    $exist = true;
                }
            }
            if ($exist == false) {
                $newItem->productID = $product->productID;
                $newItem->productName = $product->productName;
                $newItem->price = $product->price;
                $newItem->quantity = 1;
                $_SESSION['cartItems'][$i] = $newItem;
            }
        }
        
    } else
        require_once("public_html\componement\alerts\alert-cart.php");
    
}