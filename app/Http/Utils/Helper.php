<?php

namespace App\Http\Utils;
use App\Http\Models\JsonResponse;
use App\Http\Models\SmsInformationLog;
use App\Http\Models\Admin;
use Validator;


class Helper
{
  public function generateJsonResponse($status, $statusCode, $message,$data){
        
        $jsonResponse = new JsonResponse();
        
        $jsonResponse->setStatus($status);
        $jsonResponse->setStatusCode($statusCode);
        $jsonResponse->setMessage($message);
        // $jsonResponse->setUniqId($unique_id);
        $jsonResponse->setData($data);
        // $jsonResponse->setApiToken($api_token);
        return $jsonResponse;
    }


    public function information_log($data_log,$message,$status,$ip){
      
            $log = new SmsInformationLog();
            $log->ip_address=$ip;
            $log->message=$data_log['message'];
            if (isset($data_log['source'],$data_log['destination'])){
                $source= $data_log['source'];
                if (is_array($data_log['destination'])) {
                    $destination =implode(",", $data_log['destination']);
                }else{
                    $destination= $data_log['destination'];
                }
                
            }else {
                $source=0;
                $destination=0;
            }
            $log->source=$source;
            $log->destination=$destination;
            $log->gateway_message=$message;
            $log->status=$status;
            $log->save();
        
        
    }
   public function dataValidation($data){
        
        $validator = Validator::make($data,[
            'message'=>'required',
            
             'destination.*' => 'required|min:11' 
        ]);
        // $validator->each('destination', 'required|min:11');
        if($validator->fails()){
          return 0;
        }else {
            return 1;
        }
    }
    public function dataValidation_2($data){
        $admin_id        = $data['id'];
        $admin     = Admin::where('id',$admin_id)->first();
        $validator=Validator::make($data,[
            'first_name' => 'required',
            'email'      => 'Required|email|unique:admins,email,'.$admin->id,
            'phone_number'=> 'required|min:11|max:11|unique:admins,phone_number,'.$admin->id,
            'password'   => 'required'
        ]);
        if($validator->fails()){
          return 0;
        }else {
            return 1;
        }
    }
}