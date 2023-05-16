<?php require_once("admin\includes\scripts\api\APIs.php");


if (array_key_exists('addToCartBtn', $_POST)) {
    
    $i = sizeof($_SESSION['cartItems']);
    echo $i;
    $newItem = new cartItem();
    $url = 'http://localhost:8080/product';
    $products = getList($url);
    foreach ($products as $product) {
        # code...
        if($product->productID==$_POST['id']){
            $newItem->productID=$_POST['id'];
            $newItem->productName=$product->productName;
            $newItem->price=$product->price;
            $newItem->quantity=1; 
        }
    }
    
    $_SESSION['cartItems'][$i]=$newItem;
    var_dump($_SESSION['cartItems']);
    
}