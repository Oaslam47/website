<?php
	
	//Initialise Curl
	$curl = curl_init();
	//Set URL to load
	curl_setopt($curl,CURLOPT_URL,"http://api.geonames.org/srtm1JSON?lat=50.01&lng=10.2&username=demo");
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($curl,CURLOPT_HEADER, false); 

	//Execute Curl query
	$result = curl_exec($curl);
	var_dump(json_decode($result,true));
	curl_close($curl);
?>
