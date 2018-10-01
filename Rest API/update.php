<?php	//Declare the URL
curl_edit();
function curl_edit(){
	$url = "https://creator.zoho.com/api/xml/write";
	//Add POST parameters
	$post_fields = array();
	$post_fields['authtoken'] = "*********";
	$post_fields['scope'] = "creatorapi";
	$post_fields['Email_Address'] = "rowena@****.com";
	$post_fields['criteria'] = "(Country== India)";
	$ch = curl_init($url);
	//Set CURL options
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch,CURLOPT_POST, 1);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$post_fields);
	$response = curl_exec($ch);
	curl_close($ch);
	echo $response;
}
?>