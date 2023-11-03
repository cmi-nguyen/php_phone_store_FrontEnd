<?php
require_once("./includes/scripts/api/APIs.php");
function updateItem()
{
    $url = 'http://localhost:8090/product/' . $_GET['id'];
    $data['productID'] = $_GET['id'];
    $data['productName'] = $_POST['productName'];
    $data['price'] = $_POST['price'];
    $data['brandID'] = $_POST['brandID'];
    $data['stock'] = $_POST['stock'];
    $data['imgURL'] = $_POST['imgURL'];
    $data['description'] = $_POST['description'];
    putAPI($data, $url);
}
function deleteItem()
{
    $url = 'http://localhost:8090/product/' . $_GET['id'];
    deleteAPI($url);
}
function redirectAction(){
    // Redirect script using js 
    echo '<script>';
    echo 'window.location = "/php_phone_store_FrontEnd/admin/product"';
    echo '</script>';
}

if (array_key_exists('saveEdit', $_POST)) {
    updateItem();
    redirectAction();
    
}
if (array_key_exists('backBtn', $_POST)) {
    redirectAction();
 
}
if (array_key_exists('deleteBtn', $_POST)) {
    deleteItem();
    redirectAction();
 
}