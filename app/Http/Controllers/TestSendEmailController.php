<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestSendEmailController extends Controller
{
    public function index() {
        $subject = "Mail received from laravel";
        $body = 'This is test mail body';

        Mail::to('user@gmail.com')->send(new TestMail($subject, $body));

        echo 'Successfully sent email';
    }
}
