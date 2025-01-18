<?php

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Mithumandal\EvosmsPhpSdk\EvoSMS;

class EvoSMSTest extends TestCase {
    public function testSendSMS() {
        $apiToken = '13|C49e72hkIq6EPfVCgkkv8y3PTIHX3Gr3XMoVT2px86f4c188';
        $sms = new EvoSMS($apiToken);
        $response = $sms->sendSMS('31612345678', 'YourName', 'This is a test message');
        
        // Assert that the response is as expected (this is a simple example)
        $this->assertNotEmpty($response);
    }
}
