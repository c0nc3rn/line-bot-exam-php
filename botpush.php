<?php



require "vendor/autoload.php";

$access_token = 'ezm/a6WFSXtYwNy3NkTuSmRSpJLh+yg88rivu4U3JfPOFPy6tn35kGBxfxGclGemEEOBtjCnUAmBYRkbfoh7gXvYrgZHN7xkmzr0XZQoqPcCR3kQ1opGmTJ8IqDmIkQUI/T2FcDhop+MeqVrEBNSRAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '7dfcb79e1187ca2bf9ccd27696f085a2';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







