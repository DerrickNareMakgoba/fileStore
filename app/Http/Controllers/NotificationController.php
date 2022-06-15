<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class NotificationController extends Controller
{
    public function SendSMS(): Response
    {
        return $this->jsonSuccess();
    }
}
