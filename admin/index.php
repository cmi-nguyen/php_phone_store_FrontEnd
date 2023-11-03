<?php
class product{
    public $productID;
    public $productName;
    public $price; 
    public $qtySold;

}

$url_requested = $_SERVER['REQUEST_URI'];
$url_len = strlen($url_requested);

$actual_path = substr($url_requested, strripos($url_requested, '/'));
session_start();
$test = json_encode($_SESSION['user']);
$test2 = json_decode($test);


if (isset($_SESSION)) {
    if ($test2->accessLevel) {
        if ($actual_path == "/") {
            $page_title = "Home";
            require("./templates/admin-home.php");

        }
        if ($actual_path == "/user") {
            $page_title = "user";
            require("./templates/admin-user-management.php");

        }
        if (str_contains($actual_path, "/product")) {
            $page_title = "product";
            require("./templates/admin-product-management.php");

        }
        if ($actual_path == "/order") {
            $page_title = "order";
            require("./templates/admin-bill-management.php");

        }
        if ($actual_path == "/brand") {
            $page_title = "brand";
            require("./templates/admin-brand-management.php");

        }
        if ($actual_path == "/inventory") {
            $page_title = "inventory";
            require("./templates/admin-inventory-management.php");

        }
        if (str_contains($actual_path, "/detail-product")) {
            $page_title = "deetail-product";
            require("./templates/admin-detail-product.php");

        }
        if (str_contains($actual_path, "/edit-product")) {
            $page_title = "edit-product";
            require("./templates/admin-edit-product.php");

        }
        if (str_contains($actual_path, "/search-product")) {
            $page_title = "search-product";
            require("./templates/admin-search-product.php");

        }
        if (str_contains($actual_path, "/detail-bill")) {
            $page_title = "search-product";
            require("./templates/admin-billdetail-management.php");

        }
    } else {
        echo '<script>';
        echo 'window.location = "/php_phone_store_FrontEnd/login"';
        echo '</script>';
    }
}