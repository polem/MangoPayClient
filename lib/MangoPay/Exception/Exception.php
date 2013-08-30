<?php

namespace MangoPay\Exception;

/**
 * Class Exception 
 * @author 
 */
class Exception extends \Exception
{
    protected $response;

    public function __construct($response)
    {
        $this->response = $response;
    }

    public function getResponse() {
        return $response;
    }
}

