<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://103.162.31.19:8021/api/leo/{dmduongdung}/create',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "maduongdung":"TEST111",
    "tenduongdung":"tên đương dùng",
    "tinhtrang":1,
    
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Beares $token',
  ),
));

$response = curl_exec($curl);

curl_close($curl);
//$kq = json_decode($response);
//$token = $kq->payload_data->access_token;
echo $response;