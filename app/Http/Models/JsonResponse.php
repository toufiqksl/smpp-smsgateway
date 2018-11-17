<?php

namespace App\Http\Models;


class JsonResponse {

    private $status;

    private $statusCode;

    private $message;

    private $serviceName;

    private $data;
    private $uniq_id;
    private $api_token;

    /**
     *
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     *
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     *
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     *
     * @return mixed
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }
     public function getData()
    {
        return $this->data;
    }
    public function getUniqId()
    {
        return $this->uniq_id;
    }
    public function getApiToken()
    {
        return $this->api_token;
    }

    /**
     *
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     *
     * @param mixed $statusCode
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
    }

    /**
     *
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     *
     * @param mixed $serviceName
     */
    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;
    }
    public function setData($data)
    {
        $this->data = $data;
    } 
    public function setUniqId($uniq_id)
    {
        $this->uniq_id = $uniq_id;
    }
    public function setApiToken($api_token)
    {
        $this->api_token = $api_token;
    }
}