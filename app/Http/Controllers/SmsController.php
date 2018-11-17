<?php

namespace App\Http\Controllers;
use App\Http\Models\JsonResponse;
use App\Http\Models\Gateway;
use Illuminate\Support\Facades\Mail;
use GuzzleHttp\Client;

class SmsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function smsOtp($data){
        $client = new Client();
        if(($data['destination']!=NULL) && (is_array($data['destination']))){
            for ($i=0; $i <sizeof($data['destination']) ; $i++) {
                if ($data['destination'][$i]!=NULL) {
                    $phone = $data['destination'][$i];
                    $message =$data['message'];
                    $gateway= Gateway::select('url')->first();
                    if (isset($gateway->url)) {
                        $url = $gateway->url;
                        $otpResponse = $client->request('POST',$url.$phone."&message=".$message."&mms=0&unicode=0&media=[Multimedi_file_url]");
                        $return=1;
                    }else{
                         $return=0;
                    }
                    
                }else{    
                     $return=0;
                }
            }
        }else{
            $return = 0;
        }
        return $return;
    }
}
