<?php

 function send_email_to($subject, $tomail, $message){
  $ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"http://10.11.200.97/stbwebservice/SendEmail");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "Subject=$subject&Recipient=$tomail&Message=$message&isHtml=True");

// In real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//          http_build_query(array(
//          	'Subject'=> $subject,
//          	'Recipient'=> $tomail,
//          	'Message' => $message,
//          	'isHtml' =>True

//      )));

// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);

curl_close ($ch);
// Further processing ...
if ($server_output == "OK") {
	// echo "string";
} else { 
		$server_output= json_decode($server_output);
	// echo "string";
		// echo $server_output['responseCode'] ;
 }
}
?>