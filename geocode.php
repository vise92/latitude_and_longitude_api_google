<?php

$indirizzo = 'Via Roma 27';
$cap = '38122';

$url = 'https://maps.googleapis.com/maps/api/geocode/json?address='.str_replace(' ','%20',$indirizzo).'+'.$cap.'&key=google_api_key';

$ch=curl_init($url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
$result=curl_exec($ch);
curl_close($ch);
$geocoding = json_decode($result, true); // json data from API
 
 if($geocoding['status'] == 'OK') {
    	
    	//request geocode data success

 }

















