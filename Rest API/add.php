<?php
curl_add();
function curl_add(){
$authtoken = "**********";
$url = "https://creator.zoho.com/api/aorborctechnologiescpt/json/quote-rowena/form/Contact_Form/record/add";
$post_fields = array();
$post_fields['authtoken'] = "*********";
$post_fields['scope'] = "creatorapi";
$post_fields['Email'] = "jenifer@****.com";
$post_fields['Name.first_name'] = "*****";
$post_fields['Name.last_name'] = "******";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$post_fields);
$response = curl_exec($ch);
curl_close($ch);
echo $response;
}
?>