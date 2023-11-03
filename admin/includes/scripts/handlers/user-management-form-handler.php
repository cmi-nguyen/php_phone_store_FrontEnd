<?php
        require_once("./includes/scripts/api/APIs.php");
        function search()
        {
            echo $_POST['search-bar'];
        }
        function viewItem(){
            
            echo  $_POST['rowID'];
        }
        function deleteItem(){
            $url= 'http://localhost:8080/user/'.''.$_POST['rowID'];
            deleteAPI($url);
        }
        function editItem(){
            
        }

        if (array_key_exists('button1', $_POST)) {
            search();
        }
        if (array_key_exists('button3', $_POST)) {
            // add user 
           // var_dump($_POST);
            
            $url= 'http://localhost:8090/user';
            $data = $_POST;
            unset($data['button3']);
            $rs = getList($url);
            if($rs==null){
                $data["userID"] =1;
            }
            else $data["userID"] = count($rs) + 1;
            $data["accessLevel"] = false;
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