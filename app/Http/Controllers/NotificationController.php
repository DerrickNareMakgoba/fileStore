<?php

namespace App\Http\Controllers;

use App\Services\NotificationService;
use Illuminate\Http\Response;

class NotificationController extends Controller
{
    public function SendSMS(NotificationService $service): Response
    {
        $service->sendSMS();
        return $this->jsonSuccess();
    }
}
