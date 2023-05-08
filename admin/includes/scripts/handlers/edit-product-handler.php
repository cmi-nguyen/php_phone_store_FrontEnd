<?php
require_once("./includes/scripts/api/APIs.php");
function updateItem()
{
    $url = 'http://localhost:8080/product/' . $_GET['id'];
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
    $url = 'http://localhost:8080/product/' . $_GET['id'];
    deleteAPI($url);
}

if (array_key_exists('saveEdit', $_POST)) {
    updateItem();
}
if (array_key_exists('delete', $_POST)) {
    deleteItem();
}