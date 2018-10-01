<?php 
curl_delete();
function curl_delete(){
	//Declare the URL
	$url = "https://creator.zoho.com/api/aorborctechnologiescpt/json/quote-rowena/form/Contact_Form/record/delete/";

	//Add POST parameters
	$post_fields = array();
	$post_fields['authtoken'] = "********";
	$post_fields['scope'] = "creatorapi";
	$post_fields['criteria'] = "(Mobile == 	+919999999999 )";
	$ch = curl_init($url);
	//Set CURL options
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch,CURLOPT_POST,true);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$post_fields);
	$response = curl_exec($ch);
	curl_close($ch);
	echo $response;
}
?>