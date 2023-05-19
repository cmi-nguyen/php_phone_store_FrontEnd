<?php
// get product API
function getList($url){
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => true, // curl option 
        CURLOPT_URL => $url,
        CURLOPT_USERAGENT => 'get cURL Request',
        CURLOPT_SSL_VERIFYPEER => false
    ));
    
    $resp = curl_exec($curl);
    //$result = json_decode(curl_exec($curl));
    //Kết quả trả tìm kiếm trả về dạng JSON
    $results = json_decode($resp);
    
    
    
    curl_close($curl);
    
    return $results;
    
}
function getSingleItem($url){
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => true, // curl option 
        CURLOPT_URL => $url,
        CURLOPT_USERAGENT => 'get cURL Request',
        CURLOPT_SSL_VERIFYPEER => false
    ));
    
    $resp = curl_exec($curl);
    //$result = json_decode(curl_exec($curl));
    //Kết quả trả tìm kiếm trả về dạng JSON
    $results = json_decode($resp);
    
    
    
    curl_close($curl);
    
    return $results;
    
}
// post product API
function postAPI($data,$url){
    $curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => $url,
    CURLOPT_USERAGENT => 'API POST',
    CURLOPT_POST => true,
    
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_SSL_VERIFYPEER => false, //Bỏ kiểm SSL
    CURLOPT_HTTPHEADER=> array('Content-Type: application/json')
));
$resp = curl_exec($curl);

if(curl_exec($curl)==false){
    echo "Error: ".curl_error($curl);
}

curl_close($curl);
}
// update product api
function putAPI($data,$url){
    $curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => $url,
    CURLOPT_USERAGENT => 'API PUT',
    CURLOPT_CUSTOMREQUEST=> 'PUT',
    
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_SSL_VERIFYPEER => false, //Bỏ kiểm SSL
    CURLOPT_HTTPHEADER=> array('Content-Type: application/json')
));
$resp = curl_exec($curl);
if(curl_exec($curl)==false){
    echo "Error: ".curl_error($curl);
}


curl_close($curl);
}

// delete Product API
function deleteAPI($url){
    $curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => $url,
    CURLOPT_USERAGENT => 'API Delete',
    CURLOPT_CUSTOMREQUEST => 'DELETE',
    CURLOPT_SSL_VERIFYPEER => false, //Bỏ kiểm SSL
   
));
$resp = curl_exec($curl);

if(curl_exec($curl)==false){
    echo "Error: ".curl_error($curl);
}

curl_close($curl);
}
