<?php
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => 'http://localhost:8090/user',
    CURLOPT_USERAGENT => 'test cURL Request',
    CURLOPT_SSL_VERIFYPEER => false
));

$resp = curl_exec($curl);
//$result = json_decode(curl_exec($curl));
//Kết quả trả tìm kiếm trả về dạng JSON
$results = json_decode($resp);
var_dump($results);
echo '<br>';
echo $results[0]->userID .' '.$results[0]->userName .' '.$results[0]->password ;
echo '<br>';
foreach($results as $result){
    print_r($result->userID);
}
//var_dump($weather); // dump kết quả

curl_close($curl);
