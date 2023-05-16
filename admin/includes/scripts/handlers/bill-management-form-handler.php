<?php
        require_once("./includes/scripts/api/APIs.php");
        function viewItem(){
            
            echo  $_POST['id'];
        }
        
        if (array_key_exists('aproveBtn', $_POST)) {
            $url='http://localhost:8080/bill/'.$_POST['id'];
            $data['status']=true;
            putAPI($data,$url);
        }
        
        if (array_key_exists('view', $_POST)) {
            viewItem();
        }
        