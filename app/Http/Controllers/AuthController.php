<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\services\AuthService;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    /**
     * @param RegisterRequest $request
     * @param AuthService $service
     * @return Response
     */
    public function register(RegisterRequest $request,AuthService $service): Response
    {
        try {
            return $this->json($service->register($request->validated())->toArray());
        }catch(\Exception $e){
            return $this->jsonServerError($e->getMessage());
        }
    }
}
