<?php
	
	//Initialise Curl
	$curl = curl_init();
	//Set URL to load
	curl_setopt($curl,CURLOPT_URL,"http://api.geonames.org/srtm1JSON?lat=50.01&lng=10.2&username=demo");
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($curl,CURLOPT_HEADER, false); 


	//Execute Curl query
	$result = curl_exec($curl);
	curl_close($curl);
	header('Content-Type: application/json');
	$decoded = json_decode($result,true);
	$encoded = json_encode($decoded);

	echo $encoded;

?>
