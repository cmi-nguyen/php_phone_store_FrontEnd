<?php 

 require("public_html\componement\layout\main-header.php");
 if(isset($_SESSION['user'])){
    require("public_html\componement\categories\userProfile.php");
 } else echo "Must login first";

 require("public_html\componement\layout\main-footer.php");
