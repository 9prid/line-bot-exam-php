<?php



require "vendor/autoload.php";

$access_token = '9WdpqMHc7ofrVc0itoVvGOUkL9M2yxPWrTnAZa1I9OicjRfcUsxeLPlStwvKXCD6lodj0ocWn3yVSzTcqcdHg3xiCS+g5Naw/Sw4ZHaY+qsoJ//bZiwqIFrbr41GNmb+ZCrhZaV1CdOoxDIDV7VbAwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '5d211df624439f0a36fcd7c59ea9855d';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







