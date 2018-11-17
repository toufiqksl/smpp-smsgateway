<?php
namespace App\Http\Utils;
use App\Http\Models\JsonResponse;

class MessageProperty {

    public $STATUS_SUCCESS = 'success';
    public $STATUS_ERROR = 'error';
    public $STATUS_CODE_200 = '200';
    public $STATUS_CODE_400 = '400';

    public $add_success_message ='Message send Successfully';
    public $account_verified ='Account verified!';
    public $add_error_message ='Message not send, please provide valid data';
    
    public $success_log ='success';
    public $error_log ='failed';
   
    
}

