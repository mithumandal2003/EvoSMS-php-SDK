<?php

namespace Mithumandal\EvosmsPhpSdk;

class EvoSMS {
    private $apiToken;
    private $apiUrl = 'https://evosms.in/api/http/sms/send';

    public function __construct($apiToken) {
        $this->apiToken = $apiToken;
    }

    public function sendSMS($recipient, $senderId, $message, $type = 'plain') {
        $data = [
            'api_token' => $this->apiToken,
            'recipient' => $recipient,
            'sender_id' => $senderId,
            'type' => $type,
            'message' => $message,
        ];

        $curl = curl_init($this->apiUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Accept: application/json'
        ));
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

        $response = curl_exec($curl);
        curl_close($curl);

        return $response;
    }
}
