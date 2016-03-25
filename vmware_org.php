<?php
header("Content-type:text/xml");
$user = "test1";
$org = "fallfish";
$password = "123.com";
$userInfo = "$user@$org:$password";
$Authorization_encode = base64_encode($userInfo);
$headerArr = array();
$headerArr[]="Accept: application/*+xml;version=5.5";
$headerArr[]="Authorization: Basic $Authorization_encode";
$url = "https://192.168.80.32/api/sessions";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER,$headerArr);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$response = curl_exec($ch);
if(!$response){
    die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
}else{
    echo html_entity_decode($response);
}
curl_close($ch);