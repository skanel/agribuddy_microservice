<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class CreditService
{
    use ConsumesExternalService;

    /**
     * The base uri to consume the books service
     * @var string
     */
    public $baseUri;

    /**
     * The secret to consume the authors service
     * @var string
     */
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.credits.base_uri');
        $this->secret = config('services.credits.secret');
    }

    /**
     * Obtain the full list of book from the book service
     * @return string
     */
    public function obtainCredits()
    {
        //return $this->successResponse(["data" =>"Hello"]);


        return $this->performRequest('GET', '/credits');
    }


}
