<?php
session_start();
// create cart
class cartItem{
  public $productID;
  public $productName;
  public $price;
  public $quantity;
}
class user{
  public $userID;
  public $userName;
  public $password;
  public $name;
  public $email;
  public $accessLevel;
}



$url_requested = $_SERVER['REQUEST_URI'];
$url_len = strlen($url_requested);

$actual_path = substr($url_requested, strripos($url_requested, '/'));
if ($actual_path == "/") {
  $page_title = "Home";
  require("./public_html/pages/home.php");

}
if ($actual_path == "/login") {
  $page_title = "Admin";

  require("./public_html/pages/login.php");
}
if ($actual_path == "/signup") {
  $page_title = "Admin";

  require("./public_html/pages/signup.php");
}
if ($actual_path == "/product") {
  $page_title = "product";

  require("./public_html/pages/product.php");
}
if ($actual_path == "/cart") {
  $page_title = "product";

  require("./public_html/pages/cart.php");
}

if(str_contains($actual_path,"/detail-product")){
  $page_title = "product detail";

  require("./public_html/pages/product-detail.php");
}
if(str_contains($actual_path,"/category")){
  $page_title = "category";

  require("./public_html/pages/category.php");
}

if ($actual_path == "/profile") {
  $page_title = "product";
  
  require("./public_html/pages/profile.php");

}
if(str_contains($actual_path,"/order")){
  $page_title = "category";

  require("./public_html/pages/order.php");
}
if(str_contains($actual_path,"/edit-profile")){
  $page_title = "category";

  require("./public_html/pages/edit-profile.php");
}
if(str_contains($actual_path,"/detail-order")){
  $page_title = "category";

  require("./public_html/pages/detail-order.php");
}