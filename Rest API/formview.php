<?php 
$authtoken = "********";
curl_formsandviews();
function curl_formsandviews(){
	$url = "https://creator.zoho.com/api/json/quote-rowena/formsandviews/authtoken=********&scope=creatorapi&zc_ownername=aorborctechnologiescpt&raw=true";
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$response = curl_exec($ch);
	curl_close($ch);
	$creator_records = json_decode($response);
	echo ($response);
}
?>