<?php 
//$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");

//if(isset($form_data['smsmessage']) && $form_data['smsmessage']!=''):
$params = array(
    'message' => 'Test Message To send from callfire version 2',
    'phoneNumber' => $Phone,
	//'campaignId' => '434343'
   // 'from' => '55555555'
);
//echo json_encode($params);
//these are API user name and pasword obtained from callfire
$user = 'xxxxx';
$password = 'xxxx';

$url = 'https://api.callfire.com/v2/texts';
$authentication = 'Authorization: Basic '.($user.':'.$password);
$authentication = 'Authorization: Basic '.base64_encode($user.':'.$password);

    $http = curl_init($url);
    curl_setopt($http, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($http, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($http, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($http, CURLOPT_URL, $url);
  // curl_setopt($http, CURLOPT_USERNAME, ("$user:$password"));
    curl_setopt($http, CURLOPT_POST, true);
    curl_setopt($http, CURLOPT_POSTFIELDS,json_encode( array($params)));
    curl_setopt($http, CURLOPT_HTTPHEADER, array(
    'Content-Type:application/json',$authentication));
    $eat = curl_exec($http);
//	endif;
//	$txt = json_encode($_POST);
//fwrite($myfile, $txt);
//fwrite($myfile, $eat);
//fclose($myfile);