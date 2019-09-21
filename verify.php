<?php
$access_token = '9WdpqMHc7ofrVc0itoVvGOUkL9M2yxPWrTnAZa1I9OicjRfcUsxeLPlStwvKXCD6lodj0ocWn3yVSzTcqcdHg3xiCS+g5Naw/Sw4ZHaY+qsoJ//bZiwqIFrbr41GNmb+ZCrhZaV1CdOoxDIDV7VbAwdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
