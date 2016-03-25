curl -i -k -H "Accept:application/*+xml;version=5.5" -H "x-vcloud-authorization:JvTwUC6jYh9k4XIwLE6jeyWLxo7N2/mOZsXwiv0q4Bc=" -X DELETE https://utm.fallage.com/api/sessions
<?php
echo json_encode($_SERVER);exit;
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
curl_setopt($ch, 10002,$url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER,$headerArr);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_HEADER, 1);

$response = curl_exec($ch);
$header_size = curl_getinfo($ch,CURLINFO_HEADER_SIZE);
$xml = substr($response,$header_size);
preg_match('/x-vcloud-authorization: ([\s\S]+)\nSet-Cookie/', $response,$match);
$authorization = $match[1];
if(!$response){
    die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
}else{
    echo $xml;
}
curl_close($ch);
exit;
//////////////////////////////////////// org
$url = "https://192.168.80.32/api/org";
$ch = curl_init();
$headerArr = array();
$headerArr[]="Accept: application/*+xml;version=5.5";
$headerArr[]="x-vcloud-authorization: $authorization";
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"GET");
curl_setopt($ch, CURLOPT_HTTPHEADER,$headerArr);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_HEADER, 1);
$response = curl_exec($ch);
if(!$response){
    die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
}else{
    echo $response;
}
curl_close($ch);

