<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail1;

class MailController1 extends Controller
{
    //
    public function sendMail( Request $request) {
        $to = "saumyapratap234@gmail.com";
        $msg = "This is a test email";
        $subject = "Test Email";

        Mail::to( $to )->send( new TestEmail1( $msg, $subject ) );

        return "Email sent successfully";
    }

}
