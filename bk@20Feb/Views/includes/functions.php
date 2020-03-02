<?php 
session_start();
include('config.php');

function callApi($body){

//echo $body;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $GLOBALS['apiHost']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: raw","Authorization: OAuth 2.0 token here"));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
$result = curl_exec($ch);
//print_r($result);
$data = json_decode($result, TRUE);
//echo '<pre>';
if($data['returnCode'] == 'false'){
  return $data; 
}else{
  return $data;
} 
}