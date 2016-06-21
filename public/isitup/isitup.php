<?php

$user_agent = "IsitupForSlack/1.0 (https://github.com/mccreath/istiupforslack; mccreath@gmail.com)";

$command = $_POST['command'];

$domain = $_POST['text'];

$token = $_POST['token'];



if($token != 'cM1BsroEoUHNDmmU1YekvE1o'){ 
    $msg = "The token for the slash command doesn't match. Check your script.";
    die($msg);
    echo $msg;
}

// Sends a domain, and gets back JSON
$url_to_check = "https://isitup.org/".$domain.".json";

// Initializes cURL and send it the URL we want to check
$ch = curl_init($url_to_check);

// Send cURL THE USER AGENT
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);

// TELLS CURL WHAT WE WANT back
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// STORE THE RESPONSE
$ch_response = curl_exec($ch);

// CLOSE CONNECTION
curl_close($ch);

// TAKES JSON RESPONSE, DECODES IT INTO AN ARRAY, SETS TO A VARIABLE
$response_array = json_decode($ch_response, TRUE);

if($ch_response === FALSE){

  # isitup.org could not be reached 
  $reply = "Ironically, isitup could not be reached.";

} else {

    if ($response_array['status_code'] == 1){

    	$reply = ":thumbsup: I am happy to report that *<http://".$response_array["domain"]."|".$response_array["domain"].">* is *up*!"

	}else if ($response_array['status_code'] == 2){

		$reply = ":disappointed: I am sorry to report that *<http://".$response_array["domain"]."|".$response_array["domain"].">* is *down*.";

	}else if($response_array['status_code'] == 3){

		$reply  = ":interrobang: *".$domain."* does not appear to be a valid domain. ";
        $reply .= "Please enter both the domain name AND the suffix (ex: *amazon.com* or *whitehouse.gov*).";

	}

}

echo $reply;
?>