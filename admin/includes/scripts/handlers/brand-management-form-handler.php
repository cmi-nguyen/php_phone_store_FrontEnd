<?php
        require_once("./includes/scripts/api/APIs.php");
        function search()
        {
            echo $_POST['search-bar'];
        }
        function viewItem(){
            
            echo  $_POST['id'];
        }
        function deleteItem(){
            $url= 'http://localhost:8080/brand/'.''.$_POST['id'];
            deleteAPI($url);
        }
        function editItem(){
            
        }

        if (array_key_exists('button1', $_POST)) {
            search();
        }
        if (array_key_exists('button3', $_POST)) {
            $url= 'http://localhost:8080/brand';
            $data = $_POST;
            unset($data['button3']);
            $rs = getList($url);
            if($rs==null){
                $data["brandID"] =1;
            }
            $data["brandID"] = count($rs) + 1;
            
            postAPI($data,$url); 
        }
        if (array_key_exists('view', $_POST)) {
            viewItem();
        }
        if (array_key_exists('edit', $_POST)) {
            editItem();
        }
        if (array_key_exists('delete', $_POST)) {
           deleteItem();
        }
        ?>