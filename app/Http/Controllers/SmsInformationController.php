<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SmsController;

use App\Http\Models\SmsInformation;
use App\Http\Models\JsonResponse;
use App\Http\Utils\MessageProperty;
use App\Http\Utils\Helper;


class SmsInformationController extends Controller
{
    public function collect(Request $request){
       
        $jsonResponse     = new JsonResponse();
        $helper           = new Helper();
        $MessageProperty  = new MessageProperty();

        $postjson         = $request->json()->all();        
        $postParam        = $request->all();
        $ip               = $request->ip();

        $postbody         = (array_merge($postjson,$postParam));
        $data             = $postbody;

        $validation=$helper->dataValidation($data);

        if ($validation==0) {
           
            $jsonResponse= $helper->generateJsonResponse($MessageProperty->STATUS_ERROR,$MessageProperty->STATUS_CODE_400,$MessageProperty->add_error_message, "");
            
        }
       else{
            $message =array(
                        'message' =>$data['message'],
                        'destination' =>$data['destination']
                    );
            $sms= new SmsController;
            $success =$sms->smsOtp($message);
            if($success==1){
               
                $log  = $helper->information_log($data,$MessageProperty->add_success_message,$MessageProperty->success_log,$ip);
                $jsonResponse = $helper->generateJsonResponse($MessageProperty->STATUS_SUCCESS,$MessageProperty->STATUS_CODE_200,$MessageProperty->add_success_message,"");
            }else{
                
                $log  = $helper->information_log($data,$MessageProperty->add_error_message,$MessageProperty->error_log,$ip);
                $jsonResponse= $helper->generateJsonResponse($MessageProperty->STATUS_ERROR,$MessageProperty->STATUS_CODE_400,$MessageProperty->add_error_message, "");
            }
        }

       return response()->json([
            'status'    => $jsonResponse->getStatus(),
            'code'      => $jsonResponse->getStatusCode(),
            'message'   => $jsonResponse->getMessage(),

            // 'data'      => $jsonResponse->getData()
        ],$jsonResponse->getStatusCode());
    }
}
