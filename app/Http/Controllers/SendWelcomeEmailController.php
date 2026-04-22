<?php

namespace App\Http\Controllers;

use App\Jobs\SendWelcomeEmail;

class SendWelcomeEmailController extends Controller
{
    public function send()
    {
        SendWelcomeEmail::dispatch()->delay(60);
    }
}

