<?php
        require_once("./includes/scripts/api/APIs.php");
     
        
        if (array_key_exists('aproveBtn', $_POST)) {
            $url='http://localhost:8080/bill/'.$_POST['id'];
            $data['status']=true;
            putAPI($data,$url);
        }
        
       
        