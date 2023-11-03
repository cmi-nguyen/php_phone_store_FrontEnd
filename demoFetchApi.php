<?php
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 0,
    CURLOPT_URL => 'http://localhost:8090/user',
    CURLOPT_USERAGENT => 'test cURL Request',
    CURLOPT_SSL_VERIFYPEER => false
));

$resp = curl_exec($curl);

//Kết quả trả tìm kiếm trả về dạng JSON
$weather = json_decode($resp);

var_dump($weather); // dump kết quả

curl_close($curl);