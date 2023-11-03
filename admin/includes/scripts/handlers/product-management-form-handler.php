<?php
//  global variable
require_once("./includes/scripts/api/APIs.php");
// fuctions
function testfun()
{
    echo $_POST['search-bar'];
}
function deleteItem(){
    $url= 'http://localhost:8090/product/'.''.$_POST['id'];
    deleteAPI($url);
}
// check which button is clicked 
if (array_key_exists('button1', $_POST)) {
    testfun();
}
if (array_key_exists('button3', $_POST)) {
    $url= 'http://localhost:8090/product';
    $data = $_POST;
    unset($data['button3']);
    $rs = getList($url);
    if($rs==null){
        $data["productID"]=1;
    }
    else $data["productID"] = end($rs)->productID + 1;


    //  var_dump(json_encode($data));
    postAPI($data,$url);
}
if (array_key_exists('delete', $_POST)) {
    deleteItem();
}

?>