<?php

class destinyINI{
	
	function startDestiny($gtag){
		$apiKey = "9e9bf223fd69487d9a22ec54d88e4ec5";
		$bungieURL = "https://www.bungie.net/platform/Destiny";

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $bungieURL . "/1/Stats/GetMembershipIdByDisplayName/". $gtag ."/");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-API-Key: ' . $apiKey));

		$json = json_decode(curl_exec($ch));
		curl_close($ch);

		$memID = $json -> Response; //need to get this in order to query account info

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $bungieURL . "/1/Account/". $memID ."/Summary/");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-API-Key: ' . $apiKey));

		$json = json_decode(curl_exec($ch));
		
		return $json;
	}
	
}

?>