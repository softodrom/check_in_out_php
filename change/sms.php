<?php

//Send an SMS using Gatewayapi.com
$url = "https://gatewayapi.com/rest/mtsms";
$api_token = "D-AnIxkLTMylwrnOqkugiVqGCLylpyy2L9gwoLMpZf9OcTQAaXG9TA4WTYiKmjrc";
//Set SMS recipients and content
$phone = $_POST['phone'];
$id = $_POST['id'];
$link = "http://qr.d-d-s.dk/" . $id;
$recipients = [45 . $phone];
$json = [
    'sender' => 'DDS',
    'message' => "Tak for din registrering hos DDS.\nLink til afmelding: http://qr.d-d-s.dk/?id=" . $id,
    'recipients' => [],
];
foreach ($recipients as $msisdn) {
    $json['recipients'][] = ['msisdn' => $msisdn];
}
//Make and execute the http request
//Using the built-in 'curl' library
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
curl_setopt($ch, CURLOPT_USERPWD, $api_token . ":");
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($json));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
print($result);
$json = json_decode($result);
print_r($json->ids);