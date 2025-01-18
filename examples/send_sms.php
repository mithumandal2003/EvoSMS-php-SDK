<?php

require __DIR__ . '/../vendor/autoload.php';

use Mithumandal\EvosmsPhpSdk\EvoSMS;

$apiToken = '13|C49e72hkIq6EPfVCgkkv8y3PTIHX3Gr3XMoVT2px86f4c188';
$recipient = '31612345678';
$senderId = 'YourName';
$message = 'This is a test message';

$sms = new EvoSMS($apiToken);
$response = $sms->sendSMS($recipient, $senderId, $message);

echo $response;
