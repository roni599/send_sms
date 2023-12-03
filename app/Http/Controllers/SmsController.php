<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use Twilio\Rest\Client;

class SmsController extends Controller
{
    public function sms_page()
    {
        return view('sms_page');
    }

    public function send_sms(Request $request)
    {
        $receiver_number = $request->number;
        $message = 'Sakibur Rahman Saikat Valo hoye jaw mia';
        try {
            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_TOKEN");
            $twilio_number = getenv("TWILIO_FROM");
  
            $client = new Client($account_sid, $auth_token);
            $client->messages->create($receiver_number,[
                'from' => $twilio_number, 
                'body' => $message
            ]);
            return redirect()->back(); 
        }catch (Exception $e) {
            //
        }
    }
}
