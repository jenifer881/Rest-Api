
<?php
$authtoken = "********";
curl_view();
function curl_view(){
	$url = "https://creator.zoho.com/api/json/quote-rowena/view/Account_Form_Report/authtoken=********&scope=creatorapi&zc_ownername=aorborctechnologiescpt&raw=true";
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$response = curl_exec($ch);
	curl_close($ch);
	$creator_records = json_decode($response);
	echo ($response);
}
?>
