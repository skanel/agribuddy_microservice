<?php

namespace App\Http\Controllers;


use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Services\BookService;
use Illuminate\Http\Response;
use App\Services\AuthorService;

use App\Services\CreditService;
class FunderController extends Controller
{
    use ApiResponser;

    /**
     * The service to consume the books microservice
     * @var BookService
     */
    public $bookService;

    /**
     * The service to consume the authors microservice
     * @var AuthorService
     */
    public $creditService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CreditService $creditService)
    {

        $this->creditService= $creditService;
    }


    public function index()
    {

        //return $this->successResponse(["data" =>"Hello"]);

        return $this->successResponse($this->creditService->obtainCredits());
    }


}
