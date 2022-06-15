<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class NotificationController extends Controller
{
    public function SendSMS(): Response
    {
        $basic  = new \Vonage\Client\Credentials\Basic("b2c70b0a", "ffieqlLFJOySfO4j");
        $client = new \Vonage\Client($basic);

        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS("27732293080", 'test', 'HELLO USER')
        );

        $message = $response->current();

        if ($message->getStatus() == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }
        return $this->jsonSuccess();
    }
}
