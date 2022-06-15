<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Hash;

class NotificationService
{
    public function sendSMS()
    {

        $basic  = new \Vonage\Client\Credentials\Basic(Env::get('VONAGE_KEY'), Env::get('VONAGE_SECRET'));
        $client = new \Vonage\Client($basic);

        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS("27732293080", 'test', 'HELLO USER')
        );

        $message = $response->current();
        return $message;
    }
}
