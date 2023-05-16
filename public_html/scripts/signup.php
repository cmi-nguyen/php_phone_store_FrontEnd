<?php require_once("admin\includes\scripts\api\APIs.php");
require_once("./public_html/scripts/validateInput.php");
$url = 'http://localhost:8080/user';
$resp = getList($url);

if (array_key_exists('signupBtn', $_POST)) {

    $validate = new validateInput();
    $validate->input=$_POST['username'];
    
    if($validate->checkSpecialChar()){
        $validate->input=$_POST['password'];
        if($validate->validatePasswordLen()){
            $data['userID']=sizeof($resp)+1;
            $data['userName']=$_POST['username'];
            $data['name']=$_POST['name'];
            $data['email']=$_POST['email'];
            $data['password']=$_POST['password'];
            $data['address']=$_POST['address'];
            $data['phone']=$_POST['phone'];
            $data['accessLevel']=false;
            postAPI($data,$url);
        }
    }

}