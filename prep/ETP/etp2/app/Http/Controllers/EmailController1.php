<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;

class EmailController1 extends Controller
{
    //
    public function sendMail( ) {

        $toEmail = "saumyapratap234+mailgun@gmail.com";
        $subject = "Test Mail";
        $message = "This is a test mail";

        $req = Mail::to( $toEmail )->send( new TestEmail( $message, $subject  ) );

        dd( $req );

    }
}
