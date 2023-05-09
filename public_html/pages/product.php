<?php 
 $items = array();
 if(isset($_SESSION['cartItems'])){
   
 } else  $_SESSION['cartItems']=$items;
 require("public_html\componement\layout\main-header.php");
 require_once("public_html\componement\categories\all-item-categories-group.php");
 require("public_html\componement\layout\main-footer.php");
 require_once("public_html\scripts\product.php");